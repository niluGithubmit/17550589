<?php
namespace App\Controllers\admin;

use CodeIgniter\Controller;

use Config\Services;
use App\Models\ServiceStationModel;
use App\Models\subscription_feeModel;
use App\Models\vehicle_ownersModel;

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
	 * Displays login form or redirects if station is already logged in.
	 */
	public function vehicle_owner()
	{
		
		if (! $this->session->isLoggedIn) {
			return view('login.php');
		}

		$vehicle_ownersModel = new vehicle_ownersModel();

		// getall stations
		$vehicle_owners = $vehicle_ownersModel->findAll(); 

		return view('admin/vehicle_owner/index', [
				'userData' => $this->session->userData, 
				'data' => $vehicle_owners, 
				'page_name' => 'vehicle_owners', 
				
			]);
	}

	public function index()
	{
		
		if (! $this->session->isLoggedIn) {
			return view('login.php');
		}

		$stations = new ServiceStationModel();

		// getall stations
		$station = $stations->findAll(); 

		return view('admin/service_station/index', [
				'userData' => $this->session->userData, 
				'data' => $station, 
				'page_name' => 'Service Station', 
				
			]);
	}

	


	public function attemptRegister()
	{
		helper('text');

		
		$stations = new ServiceStationModel();
		$getRule = $stations->getRule('registration');
		$stations->setValidationRules($getRule);
		
		
        $station = [
            'station_name'          	=> $this->request->getPost('station_name'),
            'address'          	=> $this->request->getPost('address'),
            'phone_number'          	=> $this->request->getPost('phone_number'),
            'email'         	=> $this->request->getPost('email'),
            'password'     		=> $this->request->getPost('password'),
            'password_confirm'	=> $this->request->getPost('password_confirm'),
            'active'=>0
        ];

        if (! $stations->save($station)) {
			return redirect()->back()->withInput()->with('errors', $stations->errors());
        }

	

	





       return redirect()->back()->with('success', lang('Auth.registrationSuccess'));
	}



	

	public function subscription_plan(){
		if (!$this->session->service_stationData) {
			return view('service_station/login.php');
		}


		return view('service_station/subscription_plan.php', [
				'service_stationData' => $this->session->service_stationData, 
				
				'page_name' => 'subscription_plan', 
			]);
	}

	public function enable()
	{
		$id = $this->request->uri->getSegment(3);
		$stations = new ServiceStationModel();
		$station = [
			'station_id'  	=> $id,
			'active'  	=> 1,
		];

		if (! $stations->save($station)) {
			return redirect()->back()->withInput()->with('errors', $stations->errors());
        }
        return redirect()->back()->with('success', "Service station successfully enable");
	}

	public function disable()
	{
		// get the station id
		$id = $this->request->uri->getSegment(3);
		$stations = new ServiceStationModel();
		$station = [
			'station_id'  	=> $id,
			'active'  	=> 0,
		];

		if (! $stations->save($station)) {
			return redirect()->back()->withInput()->with('errors', $stations->errors());
        }
        return redirect()->back()->with('deactive', "Service station disabled");
	}

	public function edit()
	{
		// get the user id
		$id = $this->request->uri->getSegment(2);

		// load user model
		$stations = new ServiceStationModel();

		$subscription_feeModel = new subscription_feeModel();

		// get user data using the id
		$station = $stations->where('station_id', $id)->first();

		$subscription_fee = $subscription_feeModel->where('id', $station['subscription_id'])->first(); 

		// load the view with session data
		return view('admin/service_station/edit', [
				'userData' => $this->session->userData, 
				'station' => $station,
				'subscription_fee' => $subscription_fee,
				'page_name' => 'station_edit', 
			]);
	}

	public function update(){

		$stations = new ServiceStationModel();


		$station = [
			'station_id'  	=> $this->request->getPost('station_id'),
			'activation'  	=> $this->request->getPost('activation'),
			"exp_date"		=> $this->request->getPost('exp_date'),
		];

		if (! $stations->save($station)) {
			return redirect()->back()->withInput()->with('errors', $stations->errors());
        }

        return redirect()->back()->with('success', "successfuly updated");

	}

	


	

	

    //--------------------------------------------------------------------

	
}
