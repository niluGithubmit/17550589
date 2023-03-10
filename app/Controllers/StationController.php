<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use Config\Services;
use App\Models\ServiceStationModel;
use App\Models\ServiceCatModel;
use App\Models\Station_categoryModel;
use App\Models\subscription_feeModel;
use App\Models\subscription_paymentsModel;
use App\Models\time_slotModel;
use App\Models\availabilityModel;
use App\Models\appointmentsModel;
use App\Libraries\Pdf;
use Dompdf\Dompdf;
use App\Models\complete_serviceModel;


use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;


class StationController extends Controller
{
	/**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;

	/**
	 * Authentication settings.
	 */
	protected $config;


    //--------------------------------------------------------------------

	public function __construct()
	{
		// start session
		$this->session = Services::session();
	}

    //--------------------------------------------------------------------

	/**
	 * Displays login form or redirects if user is already logged in.
	 */
	public function index()
	{
		
			return view('service_station/login', [
				'userData' => $this->session->userData, 
				'page_name' => 'service_station_login', 
				
			]);

		
	}

	public function availability()
	{
		if (!$this->session->isLoggedIn) {
			return view('login.php');
		}

		$time_slotModel = new time_slotModel();

		// getall users
		$time_slot = $time_slotModel->findAll(); 
		$availabilityModel = new availabilityModel();

		
			return view('service_station/availability', [
				'service_stationData' => $this->session->service_stationData, 
				'$availabilit' => $availabilityModel,
				'page_name' => 'availability', 
				'time_slot' => $time_slot
				
			]);

		
	}

	public function time_slot(){

		$station_id= $this->request->getPost('station_id');
		$day= $this->request->getPost('day');
		$slot= $this->request->getPost('slot');

		$availabilityModel = new availabilityModel();

		$availability_id = $availabilityModel->getId($station_id,$day,$slot);


		if (empty($availability_id)) {
        		$data = [
            'station_id'          	=> $station_id,
            'day'          	=> $day,
            'time_slot'          	=> $slot,
        ];


        if (! $availabilityModel->save($data)) {
        	echo json_encode("db errors");
        }else{

        	
        	echo json_encode("Added");
        }
        	}else{
        		$availabilityModel->delete($availability_id);

        		echo json_encode("Removed");
        	}


        
	}

	public function get_time_slot(){

		$station_id= $this->request->getPost('station_id');
		$day= $this->request->getPost('day');

		$availabilityModel = new availabilityModel();

		$availability_time_slot = $availabilityModel->getTimeSlot($station_id,$day);

		echo json_encode($availability_time_slot);
	}

	public function appointments(){
		if (!$this->session->isLoggedIn){
			return view('login.php');
		}

		$appointmentsModel= new appointmentsModel();

		$sessionData=$this->session->service_stationData;

		$station_id=$sessionData['station_id'];

		$data= $appointmentsModel->getMyAppointments($station_id);


		return view('service_station/appointments', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $data, 
				'page_name' => 'appointments', 
				
			]);
	}

	public function services_station_service_history(){
		if (!$this->session->isLoggedIn) {
			return view('login.php');
		}

		$appointmentsModel= new appointmentsModel();

		$sessionData=$this->session->service_stationData;

		$station_id=$sessionData['station_id'];

		$data= $appointmentsModel->getMyAppointments($station_id);


		return view('service_station/service_history', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $data, 
				'page_name' => 'appointments', 
				
			]);
	}


	

	public function ap_accept(){

		$id = $this->request->uri->getSegment(2);
		$appointmentsModel = new appointmentsModel(); 
		
		$data = [
			'id'  	=> $id,
			'status'  	=> 2,
		];

		if (! $appointmentsModel->save($data)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }
        return redirect()->back()->withInput()->with('success', "appointment Accepted..!");
	}


	public function ap_cancel(){

		$id = $this->request->uri->getSegment(2);
		$appointmentsModel = new appointmentsModel(); 

		$data = [
			'id'  	=> $id,
			'status'  	=> 1,
		];

		if (! $appointmentsModel->save($data)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }
        return redirect()->back()->withInput()->with('success', "appointment Canceled..!");
	}

	public function ap_susp(){

		$id = $this->request->uri->getSegment(2);
		$appointmentsModel = new appointmentsModel(); 

		$data = [
			'id'  	=> $id,
			'status'  	=> 4,
		];

		if (! $appointmentsModel->save($data)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }
        return redirect()->back()->withInput()->with('success', "appointment Suspended..!");
	}


	public function complete_service(){

		$id = $this->request->uri->getSegment(2);
		$appointmentsModel= new appointmentsModel();
		$data= $appointmentsModel->getCompleteAppointment($id);

		return view('service_station/complete_service', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $data, 
				'page_name' => 'complete_service', 
				
			]);
	}

	public function complete_service_add(){

		$complete_serviceModel=new complete_serviceModel();
		$appointmentsModel= new appointmentsModel();

		$id=$this->request->getPost('id');

		$data = [
'appointment_id' => $this->request->getPost('id'),
'request_date' => date("Y-m-d"),
'time_slot' => $this->request->getPost('time_slot'),
'status' => $this->request->getPost('status'),
'owner_name' => $this->request->getPost('owner_name'),
'email' => $this->request->getPost('email'),
'contact' => $this->request->getPost('contact'),
'address' => $this->request->getPost('address'),
'profile_image' => $this->request->getPost('profile_image'),
'v_id' => $this->request->getPost('v_id'),
'vehicle_number' => $this->request->getPost('vehicle_number'),
'vehicle_type' => $this->request->getPost('vehicle_type'),
'province' => $this->request->getPost('province'),
'fuel_type' => $this->request->getPost('fuel_type'),
'capacity' => $this->request->getPost('capacity'),
'vehicle_model' => $this->request->getPost('vehicle_model'),
'average_km' => $this->request->getPost('average_km'),
'vehicle_brand' => $this->request->getPost('vehicle_brand'),
'cat_name' => $this->request->getPost('cat_name'),
'price' => $this->request->getPost('price'),
'ad_price' => $this->request->getPost('ad_price'),
'total' => $this->request->getPost('total'),

        ];

        $status =[
        	'status'=> 3,
        ];

        $result=$appointmentsModel->where('id', $id)->set($status)->update();

         if (! $complete_serviceModel->save($data)) {
			return redirect()->back()->withInput()->with('errors', $complete_serviceModel->errors());
         }
         return redirect()->to('/services_station_appointment')->with('success', "add complete data successful");
	}



	public function print_invoice(){
		
		$dompdf = new \Dompdf\Dompdf(['isRemoteEnabled' => true]); 

        $data['csid']="2";
        $dompdf->loadHtml(view('service_station/invoice'));

        $dompdf->setPaper('A4', 'potraite');
        $dompdf->render();
        $dompdf->stream('bank_slip',array('Attachment'=>0));
	}


	

	public function station_profile()
	{
		if (!$this->session->isLoggedIn) {
			return view('login.php');
		}

		$ServiceStationModel = new ServiceStationModel();

		//$ServiceStation = $ServiceStationModel->findAll(); 

		//return view('login');

		$sessionData=$this->session->service_stationData;

		$data = $ServiceStationModel->where('station_id', $sessionData['station_id'])->first();

		$id = $this->request->uri->getSegment(3);

		

		return view('service_station/station_profile', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $data, 
				'page_name' => 'station_profile', 
				
			]);
	}

	public function station_profile_image()
	{
		if (!$this->session->isLoggedIn) {
			return view('login.php');
		}

		$ServiceStationModel = new ServiceStationModel();

		$sessionData=$this->session->service_stationData;

		$data = $ServiceStationModel->where('station_id', $sessionData['station_id'])->first();

		return view('service_station/station_profile_image', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $data, 
				'page_name' => 'station_profile_image', 
				
			]);
	}

	public function upload_st_image(){
		if(isset($_POST["image"]))
{
	$data = $_POST["image"];
	$id = $_POST["id"];

	$image_array_1 = explode(";", $data);

	$image_array_2 = explode(",", $image_array_1[1]);

	$data = base64_decode($image_array_2[1]);

	$imageName = 'images/station_profile/' . time() . '.png';

	//$imageName = base_url('/images/station_profile/' . time() . '.png');

	file_put_contents($imageName, $data);

	$service_station_model = new ServiceStationModel();



	$data = [
            'profile_image'  => $imageName,  
        ];

		$result=$service_station_model->where('station_id', $id)->set($data)->update();

   
        if(!$result)
        {    
            echo "error";   
        }
        else
        {   
            echo $imageName;   
        }

}
	}


	

	public function service_station()
	{
		$service_station = new ServiceStationModel();
		// getall users
		$all_service_station = $service_station->findAll(); 
		
		return view('service_station', [
			
				'page_name' => 'service_station',
				'service_station' => $all_service_station
				
			]);
	}

	

	public function register()
	{
		

	

		return view('service_station/register', [
				'userData' => $this->session->userData, 
				'page_name' => 'spare_part', 
				
			]);
	}


	public function dashboard(){

		if (!$this->session->service_stationData) {
			return view('service_station/login.php');
		}
		return view('service_station/dashboard.php', [
				'service_stationData' => $this->session->service_stationData, 
				'page_name' => 'station_dashboard', 
			]);
	}

	public function attemptRegister()
	{
		helper('text');

		
		$stations = new ServiceStationModel();
		$getRule = $stations->getRule('registration');
		///$stations->setValidationRules($getRule);
		
		
        $station = [
            'station_name'      => $this->request->getPost('station_name'),
            'address'          	=> $this->request->getPost('address'),
            'phone_number'      => $this->request->getPost('phone_number'),
            'email'         	=> $this->request->getPost('email'),
            'password_hash'     => password_hash($this->request->getPost('password2'), PASSWORD_DEFAULT),
            //'password_confirm2'	=> $this->request->getPost('password_confirm2'),
            'active'  =>0
        ];

        if (! $stations->save($station)) {
			return redirect()->back()->withInput()->with('errors', $stations->errors());
        }
       return redirect()->to('/customer_login')->with('success', "SERVICE STATION REGISTERED SUCCESSFULLY");
	}

	public function attemptUpdate()
	{
		helper('text');

		
		$stations = new ServiceStationModel();
		//$getRule = $stations->getRule('registration');
		//$stations->setValidationRules($getRule);
		
		
        $station = [
        	'station_id'          	=> $this->request->getPost('station_id'),
            'station_name'          	=> $this->request->getPost('station_name'),
            'address'          	=> $this->request->getPost('address'),
            'phone_number'          	=> $this->request->getPost('phone_number'),
            'email'         	=> $this->request->getPost('email'),
        ];

        if (! $stations->save($station)) {
			return redirect()->back()->withInput()->with('errors', $stations->errors());
        }

	

	





       return redirect()->back()->with('success', "update successfuly..!");
	}



	public function attemptLogin()
	{
		// validate request
		$rules = [
			'email'		=> 'required|valid_email',
			'password' 	=> 'required|min_length[5]',
		];

		if (! $this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		// check credentials
		$stations = new ServiceStationModel();
		
		$station = $stations->where('email', $this->request->getPost('email'))->first();
		
		if ( is_null($station) || ! password_verify($this->request->getPost('password'), $station['password_hash']) ) 
		{
			return redirect()->back()->withInput()->with('error', lang('Auth.wrongCredentials'));
		}

		// check activation
		if (!$station['active']) {
			return redirect()->back()->withInput()->with('error', lang('Auth.notActivated'));
		}

		// login OK, save user data to session
		$this->session->set('isLoggedIn', true);
		$this->session->set('service_stationData', [
            'station_id' 			=> $station["station_id"],
            'station_name' 			=> $station["station_name"],
            'address' 	=> $station["address"],
            'phone_number' 		=> $station["phone_number"],
            'profile_image' => $station["profile_image"],
            'email' 		=> $station["email"],
            'created_at' 	=> $station["created_at"]
        ]);

        
		
		
        
        return view('service_station/dashboard', [
				'service_stationData' => $this->session->service_stationData, 
				'station' => $station,
				'page_name' => 'service_station_dashboard', 
			]);
	}


	public function subscription_plan(){
		if (!$this->session->service_stationData) {
			return view('service_station/login.php');
		}
        $subscription_fee = new subscription_feeModel();

		// getall users
		$subscription_plan = $subscription_fee->findAll(); 

		return view('service_station/subscription_plan.php', [
				'service_stationData' => $this->session->service_stationData, 
				'subscription_plan' => $subscription_plan,
				'page_name' => 'subscription_plan', 
			]);
	}


	public function subscription_payment(){
		if (!$this->session->service_stationData) {
			return view('service_station/login.php');
		}

		$subscription_id = $this->request->uri->getSegment(2);

		$subscription_fee = new subscription_feeModel();

		$subscription_plan = $subscription_fee->where('id', $subscription_id)->first(); 

		return view('service_station/subscription_payment.php', [
				'service_stationData' => $this->session->service_stationData, 
				'subscription_plan' => $subscription_plan,
				'page_name' => 'subscription_payment', 
			]);
	}

	
	public function service_categories(){
		if (!$this->session->service_stationData) {
			return view('service_station/login.php');
		}

		$categories = new ServiceCatModel();
		$station_category = new Station_categoryModel();
		$allcategory = $categories->findAll(); 


		return view('service_station/service_categories.php', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $allcategory, 
				'page_name' => 'service_categories', 
			]);
	}

	public function add_st_cat(){
		$cat_id = $this->request->uri->getSegment(2);
		$station_id = $this->request->uri->getSegment(3);

		helper('text');

		$station_categories = new Station_categoryModel();

		
		
        $station_category = [
            'cat_id'          	=> $cat_id,
            'station_id'=> $station_id,
            
           
        ];



       

        if (! $station_categories->save($station_category)) 
        {
			return redirect()->back()->withInput()->with('errors', $parts->errors());
        }

	
       		return redirect()->back()->with('success', "add category successful..!");
	}

	
	public function remove_st_cat(){
		$cat_id = $this->request->uri->getSegment(2);
		$station_id = $this->request->uri->getSegment(3);

		helper('text');

		$station_categories = new Station_categoryModel();

		$id=$station_categories->get_station_cat_Id($cat_id,$station_id);

		$station_categories->delete($id);

        return redirect()->back()->with('success', "category removed..");
	}


	public function add_subcription(){

		$subscription_payments = new subscription_paymentsModel();
		$ServiceStationModel = new ServiceStationModel();
		$file=$this->request->getFile('slip');
		$newName = $file->getRandomName();
		
		//`id`, `station_id`, `subscription_id`, `bank_slip`, `payment_date`, `status`, `created_at`
        $data = [
        	'station_id'          => $this->request->getPost('station_id'),
            'subscription_id'     => $this->request->getPost('subscription_id'),
            'status'          	  => 0,
            'payment_date'        => $this->request->getPost('payment_date'),
            'bank_slip'           =>  $newName,
        ];

        // `station_id`, `station_name`, `address`, `phone_number`, `email`, `password_hash`, `active`, `profile_image`, `subscription_id`, `bank_slip`, `activation`, `exp_date`, `created_at`, `updated_at`
        $payment_date=$this->request->getPost('payment_date');
        $duration=$this->request->getPost('duration');

        $myDate = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( $payment_date ) ) . "+".$duration." month" ) );

        $data2 = [
        	'station_id'          	=> $this->request->getPost('station_id'),
            'subscription_id'       => $this->request->getPost('subscription_id'),
            'status'          	    => 0,
            'exp_date'          	=> $myDate,
            'bank_slip'         	=>  $newName,
            'activation' => 1,
        ];

          if($file->isValid()){
	       $file->move('./uploads',$newName);
            }

        if (! $subscription_payments->save($data)  || ! $ServiceStationModel->save($data2)) {
        	//$ServiceStationModel->save($data2)
			return redirect()->back()->withInput()->with('errors', $subscription_payments->errors());
        }
        return redirect()->to('/station_dashboard')->with('success', "subscription successfully done..!");
	}

	

	public function update_price(){

		$cat_id = $this->request->getPost('cat_id');
		$station_id = $this->request->getPost('station_id');
		$price =$this->request->getPost('price');


		$station_categoryModel = new Station_categoryModel();

		$id=$station_categoryModel->get_station_cat_Id($cat_id,$station_id);

		$data = [
        	'id'          	=> $id,
            'price'          	=> $price,
        ];

         if (! $station_categoryModel->save($data)  ) {
        	
			return redirect()->back()->withInput()->with('errors', $station_categoryModel->errors());
        }





        return redirect()->back()->with('success', "Prce Added!");
	}


	public function service_station_details(){

		$station_id = $this->request->uri->getSegment(2);
		$ServiceStationModel = new ServiceStationModel();
		$categories = new ServiceCatModel();

		$allcategory = $categories->findAll(); 

		$data = $ServiceStationModel->where('station_id', $station_id)->first();

		return view('service_station/service_station_details', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $data,
				'allcategory'  => $allcategory,
				'page_name' => 'service_station_details', 
			]);
	}


	public function logout()
	{
		$this->session->remove(['isLoggedIn', 'service_stationData']);

        return view('customer/login.php',[
        	'page_name' => 'logout', 
        ]);
	}

	
	public function service_station_reports(){

		return view('service_station/reports', [
				'service_stationData' => $this->session->service_stationData, 
				//'data' => $data,
				//'allcategory'  => $allcategory,
				'page_name' => 'reports', 
			]);


	}

	public function complete_report(){


		
		$ServiceStationModel = new ServiceStationModel();
		$date = $this->request->uri->getSegment(2);
		$station_id = $this->request->uri->getSegment(3);

		$data = $ServiceStationModel->complete_service_report($station_id, $date);


		// $dompdf = new \Dompdf\Dompdf(['isRemoteEnabled' => true]); 

       
  //       $dompdf->loadHtml(view('service_station/complete_service_report',
  //       	['data'=>$data,
  //       ]));

       
        
  //       $dompdf->setPaper('A4', 'potrate');
  //       $dompdf->render();
  //       $dompdf->stream('bank_slip',array('Attachment'=>0));
        if(empty($data)){
        	 return redirect()->back()->with('warning', "No data found..!");
        }

       
		

		return view('service_station/complete_service_report', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $data,
				'page_name' => 'complete_service_report', 
			]);


	}

	public function complete_service_report(){
		$station_id = $this->request->getPost('station_id');
		$complete_report_date = $this->request->getPost('complete_report_date');
		$ServiceStationModel = new ServiceStationModel();

		$data = $ServiceStationModel->complete_service_report($station_id, $complete_report_date);

		if(empty($data)){
        	 return redirect()->back()->with('warning', "No data found..!");
        }

        $data2= compact('data');
        $dompdf = new \Dompdf\Dompdf(['isRemoteEnabled' => true]); 
        $dompdf->loadHtml(view('service_station/complete_service_report',
        	['data'=>$data2,
        	'page_name' =>"complete_service_report",
        ]));

       
        
        $dompdf->setPaper('A4', 'potrate');
        $dompdf->render();
        $dompdf->stream('complete_service_report',array('Attachment'=>0));

	}



	
	public function all_appointment_report(){
		$station_id = $this->request->getPost('station_id');
		$appointment_date = $this->request->getPost('appointment_date');
		$ServiceStationModel = new ServiceStationModel();

		$data = $ServiceStationModel->getAppointments($station_id, $appointment_date);

		if(empty($data)){
        	 return redirect()->back()->with('warning', "No data found..!");
        }

        $data2= compact('data');
        $dompdf = new \Dompdf\Dompdf(['isRemoteEnabled' => true]); 
        $dompdf->loadHtml(view('service_station/appointment_report',
        	['data'=>$data2,
        	'page_name' =>"all_appointment_report",
        ]));

       
        
        $dompdf->setPaper('A4', 'potrate');
        $dompdf->render();
        $dompdf->stream('apointment_report',array('Attachment'=>0));

	}

	

	


	

	

    //--------------------------------------------------------------------

	
}
