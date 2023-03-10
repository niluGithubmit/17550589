<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;
use Config\Services;
use App\Models\LogsModel;
use App\Models\spare_partsModel;


class SparePartsController extends Controller
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
		if (!$this->session->service_stationData) {
			return view('service_station/login.php');
		}

		$parts = new spare_partsModel();
		$service_stationData=$this->session->service_stationData;
		$station_id  = $service_stationData['station_id'];
		$my_parts = $parts->getMyParts($station_id);

		//$allparts = $parts->findAll(); 

		//return view('login');

		return view('spare_part/index', [
				'service_stationData' => $this->session->service_stationData, 
				'page_name' => 'spare_part', 
				'data' => $my_parts, 
			]);
	}

	public function add_spare_part()
	{
		//helper('text');

		$parts = new spare_partsModel();

		$img=$this->request->getFile('img');
		$newName = $img->getRandomName();

		$selected_weight_liters = $this->request->getPost('selected_weight_liters');
		if($selected_weight_liters=="weight"){
			$weight=$this->request->getPost('weight_liters');
			$liters=0;
		}else{
			$weight=0;
			$liters=$this->request->getPost('weight_liters');
		}
		
        $part = [
            'station_id'          	=> $this->request->getPost('station_id'),
            'spare_id'          	=> $this->request->getPost('spare_id'),
            'spare_name'          	=> $this->request->getPost('spare_name'),
            'brand'          	    => $this->request->getPost('brand'),
            'capacity'          	=> $this->request->getPost('capacity'),
            'weight'                => $weight,
            'liters'     	        => $liters,
            'description'		    => $this->request->getPost('description'),
            'quantityInStock'		=> $this->request->getPost('quantityInStock'),
            'price'				=> $this->request->getPost('price'),
            'date'				=> $this->request->getPost('update_date'),
            'image'             => $newName
           
        ];

			if($img->isValid()){
	       		$img->move('./uploads/spare_part',$newName);
            }


        if (! $parts->save($part)) 
        {
			return redirect()->back()->withInput()->with('errors', $parts->errors());
        }
       		return redirect()->back()->with('success', "Spare part added");
	}


	public function check_spare_id(){

		$spare_id = $this->request->getPost('spare_id');


    $searchPart = new spare_partsModel();

    $data['part_code']=$searchPart->get_part($spare_id);
 
	echo json_encode($data);
		 
	}

	public function edit_spare_part(){
		$parts = new spare_partsModel();
		$part_id = $this->request->uri->getSegment(2);

		$edit_part = $parts->where('id', $part_id)->first(); 
		

		return view('spare_part/edit_spare_part', [
				'service_stationData' => $this->session->service_stationData, 
				'page_name' => 'edit_spare_part', 
				'data' => $edit_part, 
			]);
	}

	public function update_spare_part(){

		helper('text');
		$parts = new spare_partsModel();

		$selected_weight_liters = $this->request->getPost('selected_weight_liters');
		if($selected_weight_liters=="weight"){
			$weight=$this->request->getPost('weight_liters');
			$liters=0;
		}else{
			$weight=0;
			$liters=$this->request->getPost('weight_liters');
		}

		$id=$this->request->getPost('sp_id');

		if($img=$this->request->getFile('img')!=""){

			$img=$this->request->getFile('img');
			$newName = $img->getRandomName();

			$part = [
	            'station_id'          	=> $this->request->getPost('station_id'),
	            'spare_id'          	=> $this->request->getPost('spare_id'),
	            'spare_name'          	=> $this->request->getPost('spare_name'),
	            'brand'          	=> $this->request->getPost('brand'),
	            'capacity'          	=> $this->request->getPost('capacity'),
	            'weight'       => $weight,
	            'liters'     	=> $liters,
	            'description'				=> $this->request->getPost('description'),
	            'quantityInStock'				=> $this->request->getPost('quantityInStock'),
	            'price'				=> $this->request->getPost('price'),
	            'image'  => $newName,
	           
	        ];

	        if($img->isValid()){
		       		$img->move('./uploads/spare_part',$newName);
	            }

    	}else{
	    	$part = [
	            'station_id'          	=> $this->request->getPost('station_id'),
	            'spare_id'          	=> $this->request->getPost('spare_id'),
	            'spare_name'          	=> $this->request->getPost('spare_name'),
	            'brand'          	=> $this->request->getPost('brand'),
	            'capacity'          	=> $this->request->getPost('capacity'),
	            'weight'       => $weight,
	            'liters'     	=> $liters,
	            'description'				=> $this->request->getPost('description'),
	            'quantityInStock'				=> $this->request->getPost('quantityInStock'),
	            'price'				=> $this->request->getPost('price'),
	        ];
            
    	}

        $result=$parts->where('id', $id)->set($part)->update();

        if (!$result) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }
        return redirect()->back()->with('success', "successfully updated");
	}


	public function spare_part(){
		$parts = new spare_partsModel();

		$data = $parts->getSparePart(); 

		return view('spare_part', [
				'service_stationData' => $this->session->service_stationData, 
				'page_name' => 'spare_part', 
				'data' => $data, 
			]);
	}

    //--------------------------------------------------------------------

	
}
