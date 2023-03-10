<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;
use Config\Services;
use App\Models\LogsModel;
use App\Models\spare_partsModel;
use App\Models\ServiceCatModel;
use App\Models\ServiceStationModel;




class serviceController extends Controller
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
		if (!$this->session->isLoggedIn) {
			return view('login.php');
		}

		$service_cat = new ServiceCatModel();

		$categories = $service_cat->findAll(); 

		//return view('login');

		return view('services/service_category', [
				'userData' => $this->session->userData, 
				'data' => $categories, 
				'page_name' => 'service_category', 
				
			]);
	}

	
	

	
	public function service_station()
	{
		if (!$this->session->isLoggedIn) {
			return view('login.php');
		}

		$station = new ServiceStationModel();

		$stations = $station->findAll(); 

		//return view('login');

		return view('services/service_station', [
				'userData' => $this->session->userData, 
				'page_name' => 'service_station', 
				'data' => $stations, 
			]);
	}

	
	public function add_category()
	{
		helper('text');
		$categories = new ServiceCatModel();
        $category = [
            'cat_name'        => $this->request->getPost('cat_name'),
            'description'     => $this->request->getPost('cat_des'),   
           
        ];

        if (! $categories->save($category)) 
        {
			return redirect()->back()->withInput()->with('errors', $parts->errors());
        }
       		return redirect()->back()->with('success', "New Service Catogory added");
	}

	
	public function check_cat_name(){

	$cat_name = $this->request->getPost('cat_name');


    $searchPart = new ServiceCatModel();

    $data['category_name']=$searchPart->get_part($cat_name);
 
	echo json_encode($data);
		 
	}

	public function update_category()
	{
		

		

		$categories = new ServiceCatModel();

		$category = [
			'id'  	=> $this->request->getPost('cat_id'),
			'cat_name' 	=> $this->request->getPost('cat_name_update'),
			'description' 	=> $this->request->getPost('cat_des_update')

			
		];

		if (! $categories->save($category)) {
			return redirect()->to(base_url()."/service_cat")->withInput()->with('errors', $users->errors());
        }

        return redirect()->to(base_url()."/service_cat")->with('success', lang('Auth.updateSuccess'));
	}

	public function delete_cat()
	{
		// get the user id
		$id = $this->request->getPost('did');

		// load user model
		$categories = new ServiceCatModel();

		// delete user using the id
		$categories->delete($id);

        return redirect()->back()->with('success', lang('Auth.accountDeleted'));
	}

	public function services(){

		$ServiceCatModel = new ServiceCatModel();

		$services = $ServiceCatModel->findAll(); 

		//return view('login');

		return view('services/services', [
				'userData' => $this->session->userData, 
				'page_name' => 'services', 
				'data' => $services, 
			]);

	}

    //--------------------------------------------------------------------

	
}
