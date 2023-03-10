<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use Config\Services;
use App\Models\ServiceStationModel;
use App\Models\vehicle_ownersModel;
use App\Models\ServiceCatModel;
use App\Models\vehicleModel;
use App\Models\appointmentsModel;
use App\Models\ratingModel;
use App\Models\UserModel;
use App\Models\LogsModel;
use App\Models\complete_serviceModel;



use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;


class CustomerController extends Controller
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
		//$db = \Config\Database::connect();
	}

    //--------------------------------------------------------------------

	/**
	 * Displays login form or redirects if user is already logged in.
	 */
	public function index()
	{
		return view('customer/login', [
				'userData' => $this->session->userData, 
				'page_name' => 'service_station_login', 
			
		]);
	}


	public function appointments()
	{
		if (!$this->session->isLoggedIn) {
			return view('customer/login', [
				'userData' => $this->session->userData, 
				'page_name' => 'service_station_login', 
			
			]);
		}
 		$ServiceStationModel = new ServiceStationModel();

 		$services= new ServiceCatModel();

 		$sessionData=$this->session->ownerData;

		$service_station = $ServiceStationModel->findAll(); 

		$vehicles = new vehicleModel();

		$owner_data=$this->session->ownerData;

		$owner_id  = $owner_data['id'];

		$station_id=$this->request->uri->getSegment(2);

		$my_vehicles = $vehicles->getMyVehicles($owner_id);

		$station_services = $services->getStationServices($station_id);

		$station = $ServiceStationModel->where('station_id', $station_id)->first();



		return view('customer/appointments', [
				'ownerData' => $this->session->ownerData, 
				'service_station' => $service_station, 
				'vehicles' => $my_vehicles,
				'station' => $station,
				'owner_id' => $owner_id,
				'station_services' => $station_services,
				'page_name' => 'appointments', 
				
	

			]);
	}


	public function appointments_submit(){

		$appointmentsModel = new appointmentsModel(); 

		$data = [
            'station_id'          	=> $this->request->getPost('station_id'),
            'cat_id'          	    => $this->request->getPost('service'),
            'vehicle_id'         	=> $this->request->getPost('vehicle'),
            'request_date'     		=> $this->request->getPost('request_date'),
            'time_slot'          	=> $this->request->getPost('time_slot'),
            'owner_id'          	=> $this->request->getPost('owner_id'),
     
        ];

        if (! $appointmentsModel->save($data)) {
			return redirect()->back()->withInput()->with('errors', $appointmentsModel->errors());
        }
       return redirect()->back()->with('success', "appointments submission successfull..!");
	}
	


	public function check_available_appointment(){


		$date= $this->request->getPost('ap_date');
		$time= $this->request->getPost('selected_time_slot');

		$appointmentsModel = new appointmentsModel(); 


		$appointmentsId = $appointmentsModel->getId($date,$time);


		if(empty($appointmentsId)){
			echo json_encode("available");

		}else{
			echo json_encode("Already Booked");
		}


	}

	public function customer_appointments(){
		$appointmentsModel = new appointmentsModel();
		$sessionData=$this->session->ownerData;
		$customerAppointment = $appointmentsModel->getCustomerAppointment($sessionData['id']); 

		return view('customer/my_appointments', [
				'ownerData' => $this->session->ownerData, 
				'data' => $customerAppointment, 
				'page_name' => 'customerAppointment', 
				
			]);
	}

	
	public function service_history(){
		$appointmentsModel = new appointmentsModel();
		$sessionData=$this->session->ownerData;
		$customerAppointment = $appointmentsModel->getCustomerAppointment($sessionData['id']); 

		return view('customer/service_history', [
				'ownerData' => $this->session->ownerData, 
				'data' => $customerAppointment, 
				'page_name' => 'service_history', 
				
			]);
	}

	public function customer_rate(){
		$ratingModel= new ratingModel();

		$data = [
            
            'station_id'          	=> $this->request->getPost('station_id'),
            'user_id'          	=> $this->request->getPost('user_id'),
            'rating_type'         	=> $this->request->getPost('rate_type'),
            
           
     
        ];

        $ap_id= $this->request->getPost('ap_id');

        $rate =[
        	'rate' => $this->request->getPost('rate_type'),
        ];

        $appointmentsModel = new appointmentsModel();

        $result=$appointmentsModel->where('id', $ap_id)->set($rate)->update();

         if (! $ratingModel->save($data)) {
			echo 0;
        }

		echo 1;

	}

	public function print_invoice(){
		
		$dompdf = new \Dompdf\Dompdf(['isRemoteEnabled' => true]); 
        $dompdf->loadHtml(view('service_station/invoice'));

        $dompdf->setPaper('A4', 'potraite');
        $dompdf->render();
        $dompdf->stream('bank_slip',array('Attachment'=>0));
	}

	

	public function customer_profile()
	{
		if (!$this->session->isLoggedIn) {
			return view('customer/login', [
				'userData' => $this->session->userData, 
				'page_name' => 'service_station_login', 
				
	

			]);
		}

		$vehicle_ownersModel = new vehicle_ownersModel();

		$sessionData=$this->session->ownerData;

		$data = $vehicle_ownersModel->where('id', $sessionData['id'])->first();

		

		

		return view('customer/customer_profile', [
				'ownerData' => $this->session->ownerData, 
				'data' => $data, 
				'page_name' => 'customer_profile', 
				
			]);
	}

	

	public function register()
	{
		return view('customer/register', [
				'userData' => $this->session->userData, 
				'page_name' => 'customer_registration', 
				
			]);
	}

	public function attemptRegister()
	{
		helper('text');
		$owners = new vehicle_ownersModel();
		$getRule = $owners->getRule('registration');
		$owners->setValidationRules($getRule);
		
		
        $owner = [
            
            'owner_name'        => $this->request->getPost('owner_name'),
            'address'          	=> $this->request->getPost('address'),
            'email'         	=> $this->request->getPost('email'),
            'contact'     		=> $this->request->getPost('contact'),
            'password'         	=> $this->request->getPost('password'),
            'password_confirm'	=> $this->request->getPost('password_confirm'),
            'nic'          	    => $this->request->getPost('nic'),
     
        ];

        if (! $owners->save($owner)) {
			return redirect()->back()->withInput()->with('errors', $owners->errors());
        }
			return redirect()->to('/customer_login')->with('success', "Registration successfull");
	}
	
	public function attemptUpdate()
	{
		helper('text');

		
		
		$owners = new vehicle_ownersModel();
		
        $owner = [
        	'id'          	=> $this->request->getPost('id'),
            'owner_name'          	=> $this->request->getPost('owner_name'),
            'owner_name'          	=> $this->request->getPost('owner_name'),
            'address'          	=> $this->request->getPost('address'),
            'email'         	=> $this->request->getPost('email'),
            'contact'     		=> $this->request->getPost('contact'),
            'nic'          	=> $this->request->getPost('nic'),
     
        ];

        if (! $owners->save($owner)) {
			return redirect()->back()->withInput()->with('errors', $owners->errors());
        }

	

	





       return redirect()->to('/customer_login')->with('success', "Update successfully..!");
	}

	public function customer_profile_image(){
		if (!$this->session->isLoggedIn) {
			return view('customer/login', [
				'userData' => $this->session->userData, 
				'page_name' => 'service_station_login', 
				
	

			]);
		}

		$owners = new vehicle_ownersModel();

		$ownerData=$this->session->ownerData;

		$data = $owners->where('id', $ownerData['id'])->first();

		return view('customer/customer_profile_image', [
				'service_stationData' => $this->session->service_stationData, 
				'data' => $data, 
				'page_name' => 'station_profile_image', 
				
			]);
	}

	public function upload_customer_image(){
		if(isset($_POST["image"]))
{
	$data = $_POST["image"];
	$id = $_POST["id"];

	$image_array_1 = explode(";", $data);

	$image_array_2 = explode(",", $image_array_1[1]);

	$data = base64_decode($image_array_2[1]);

	$imageName = 'images/vehicle_owner_profile/' . time() . '.png';

	//$imageName = base_url('/images/station_profile/' . time() . '.png');

	file_put_contents($imageName, $data);

	$owners = new vehicle_ownersModel();



	$data = [
            'profile_image'  => $imageName,  
        ];

		$result=$owners->where('id', $id)->set($data)->update();

   
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

	
	public function add_new_vehicle()
	{
		helper('text');

		$vehicles = new vehicleModel();
		$getRule = $vehicles->getRule('registration');
		$vehicles->setValidationRules($getRule);

		$letters=$this->request->getPost('letters');
		$num=$this->request->getPost('num');

		$vehicle_number=$letters.$num;

		$capacity=$this->request->getPost('capacity');
		$cap_ext=$this->request->getPost('cap_ext');

		$capacity_with_ext=$capacity.$cap_ext;
		
        $vehicle = [
            
            'owner_id'          	=> $this->request->getPost('owner_id'),
            'vehicle_number'        => $this->request->getPost('v_number'),
            'vehicle_model'         => $this->request->getPost('vehicle_model'),
            'average_km'          	=> $this->request->getPost('average_km'),
            'vehicle_brand'         => $this->request->getPost('vehicle_brand'),
            'vehicle_type'          => $this->request->getPost('vehicle_type'), 
            'province'              => $this->request->getPost('province'), 
            'fuel_type'             => $this->request->getPost('fuel_type'),
            'capacity'              => $capacity_with_ext
        ];

        if (! $vehicles->save($vehicle)) {
			return redirect()->back()->withInput()->with('errors', $vehicles->errors());
        }
		return redirect()->to('/vehicles-information')->with('success', "Vehicle added successfully");
	}

	
	public function update_vehicle()
	{
		helper('text');

		$vehicles = new vehicleModel();
		$getRule = $vehicles->getRule('registration');
		$vehicles->setValidationRules($getRule);

		$letters=$this->request->getPost('letters');
		$num=$this->request->getPost('num');

		$vehicle_number=$letters.$num;

		$capacity=$this->request->getPost('capacity');
		$cap_ext=$this->request->getPost('cap_ext');

		$capacity_with_ext=$capacity.$cap_ext;
		
        $vehicle = [
         
        	'id'          	 => $this->request->getPost('v_id'),
            'owner_id'       => $this->request->getPost('owner_id'),
            'vehicle_number' => $this->request->getPost('v_number'),
            'vehicle_model'  => $this->request->getPost('vehicle_model'),
            'average_km'     => $this->request->getPost('average_km'),
            'vehicle_brand'  => $this->request->getPost('vehicle_brand'),
            'vehicle_type'   => $this->request->getPost('vehicle_type'), 
            'province'       => $this->request->getPost('province'), 
            'fuel_type'      => $this->request->getPost('fuel_type'),
            'capacity'       => $capacity_with_ext
     
        ];

        if (! $vehicles->save($vehicle)) {
			return redirect()->back()->withInput()->with('errors', $vehicles->errors());
        }
       return redirect()->to('/vehicles-information')->with('success', "Update vehicle successfully");
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

		$owners = new vehicle_ownersModel();
		
		$owner = $owners->where('email', $this->request->getPost('email'))->first();

		$users = new UserModel();
		
		$user = $users->where('email', $this->request->getPost('email'))->first();
		//$status = $owners->get_status($this->request->getPost('email'));
		if(!is_null($owner)){

			if ( is_null($owner) || ! password_verify($this->request->getPost('password'), $owner['password_hash']) ) 
		{
			return redirect()->back()->withInput()->with('error', lang('Auth.wrongCredentials'));
		 }
		
		// check activation
		if (!$owner['status']) {
			return redirect()->back()->withInput()->with('error', lang('Auth.notActivated'));
		}

		// login OK, save user data to session
		$this->session->set('isLoggedIn', true);
		$this->session->set('ownerData', [
            'id' 			=> $owner["id"],
            'owner_name' 	=> $owner["owner_name"],
            'address' 	    => $owner["address"],
            'contact' 		=> $owner["contact"],
            'email' 		=> $owner["email"],
            'profile_image' => $owner["profile_image"],
            'created_at' 	=> $owner["created_at"],
            'updated_at'    => $owner["updated_at"],
        ]);

        return view('customer/dashboard', [
				'ownerData' => $this->session->ownerData, 
				'owner'     => $owner,
				'page_name' => 'customer_dashboard', 
			]);

		}

		else if(!is_null($station)){
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
            'station_id' 		=> $station["station_id"],
            'station_name' 		=> $station["station_name"],
            'address' 	        => $station["address"],
            'phone_number' 		=> $station["phone_number"],
            'profile_image'     => $station["profile_image"],
            'email' 		    => $station["email"],
            'created_at' 	    => $station["created_at"]
        ]);
        
        return view('service_station/dashboard', [
				'service_stationData' => $this->session->service_stationData, 
				'station' => $station,
				'page_name' => 'service_station_dashboard', 
			]);


		}else if(!is_null($user)){

			if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password_hash']) ) 
		{
			return redirect()->to('/')->withInput()->with('error', lang('Auth.wrongCredentials'));
		}

		// check activation
		if (!$user['active']) {
			return redirect()->to('/')->withInput()->with('error', lang('Auth.notActivated'));
		}

		// login OK, save user data to session
		$this->session->set('isLoggedIn', true);
		$this->session->set('userData', [
            'id' 			=> $user["id"],
            'name' 			=> $user["name"],
            'firstname' 	=> $user["firstname"],
            'lastname' 		=> $user["lastname"],
            'email' 		=> $user["email"],
            'new_email' 	=> $user["new_email"],
            'user_role' 	=> $user["user_role"],
            'created_at' 	=> $user["created_at"]
        ]);

        // save login info to user login logs for tracking
        // get user agent
        $agent = $this->request->getUserAgent();
        // load logs model
		$logs = new LogsModel();
		// logs data
		$userlog = [
			'date'		=> date("Y-m-d"),
			'time'		=> date("H:i:s"),
			'reference'	=> $user["id"],
			'name'		=> $user["name"],
			'ip'		=> $this->request->getIPAddress(),
			'browser'	=> $agent->getBrowser(),
			'status'	=> 'Success' 
		];
		// logs to database
		$logs->save($userlog);

        //return redirect()->to('dashboard');
        
        $ServiceStationModel = new ServiceStationModel();
        $vehicle_ownersModel = new vehicle_ownersModel();
        $ServiceCatModel = new ServiceCatModel();
        $complete_serviceModel = new complete_serviceModel();

        $count_stations = $ServiceStationModel->countAll(); 
        $count_owners = $vehicle_ownersModel->countAll(); 
        $count_services = $ServiceCatModel->countAll(); 
        $count_complete_service = $complete_serviceModel->countAll(); 

        return view('dashboard', [
                'userData' => $this->session->userData, 
               
                'page_name' => 'dashboard', 
                'count_stations' => $count_stations, 
                'count_owners' => $count_owners, 
                'count_services' => $count_services, 
                'count_complete_service' => $count_complete_service, 
                
            ]);

		}
		
	}


	public function dashboard(){

		if (!$this->session->ownerData) {
			return view('customer/login.php');
		}
		return view('customer/dashboard.php', [
				'ownerData' => $this->session->ownerData, 
				'page_name' => 'customer_dashboard', 
			]);
	}

	public function add_vehicle(){
		if (!$this->session->ownerData) {
			return view('customer/login.php');
		}
		return view('customer/add-vehicle.php', [
				'ownerData' => $this->session->ownerData, 
				'page_name' => 'add-vehicle', 
			]);
	}

	public function edit_vehicle(){
		if (!$this->session->ownerData) {
			return view('customer/login.php');
		}

		$vehicleModel=new vehicleModel();
		$vid=$this->request->uri->getSegment(2);

		$vehicle = $vehicleModel->where('id', $vid)->first();
		return view('customer/edit-vehicle.php', [
				'ownerData' => $this->session->ownerData, 
				'page_name' => 'edit-vehicle', 
				'data' => $vehicle,
			]);
	}

	public function vehicles_information(){
		if (!$this->session->ownerData) {
			return view('customer/login.php');
		}

		$vehicles = new vehicleModel();
		$owner_data=$this->session->ownerData;
		$owner_id  = $owner_data['id'];

		$owners = $this->session->ownerData;
		$my_vehicles = $vehicles->getMyVehicles($owner_id);
		//$my_vehicles = $vehicles->findAll();


		return view('customer/vehicles_information.php', [
				'ownerData' => $this->session->ownerData, 
				'my_vehicles' => $my_vehicles,
				'page_name' => 'vehicles_information',
			]);
	}

	public function get_service_stations(){

		$cat_id=$this->request->uri->getSegment(2);

		$ServiceStationModel=new ServiceStationModel();

		$service_station = $ServiceStationModel->get_service_stations($cat_id);

		return view('service_station/stations_details', [
				'service_stationData' => $this->session->service_stationData, 
				'service_station' => $service_station,
				'page_name' => 'service_station_dashboard', 
			]);
		
	}




	


	public function logout()
	{
		$this->session->remove(['isLoggedIn', 'ownerData']);

        return view('customer/login.php',[
        	'page_name' => 'logout', 
        ]);
	}


	public function enable()
	{
		
		$id = $this->request->uri->getSegment(3);

		

		$vehicle_ownersModel = new vehicle_ownersModel();

		$data = [
			'id'  	=> $id,
			'status'  	=> 1,
		];

		if (! $vehicle_ownersModel->save($data)) {
			return redirect()->back()->withInput()->with('errors', $vehicle_ownersModel->errors());
        }

        return redirect()->back()->with('success', lang('Auth.enablestation'));
	}

	public function disable()
	{
		// get the station id
		$id = $this->request->uri->getSegment(3);


		$vehicle_ownersModel = new vehicle_ownersModel();

		$data = [
			'id'  	=> $id,
			'status'  	=> 0,
		];

		if (! $vehicle_ownersModel->save($data)) {
			return redirect()->back()->withInput()->with('errors', $vehicle_ownersModel->errors());
        }

        return redirect()->back()->with('deactive', lang('Auth.disablestation'));
	}

	

    //--------------------------------------------------------------------

	
}
