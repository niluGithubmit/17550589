<?php namespace App\Models;

use CodeIgniter\Model;

class ServiceStationModel extends Model
{
	protected $table      = 'service_stations';
	protected $primaryKey = 'station_id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = [
		'station_id', 'station_name', 'address', 'phone_number', 'email', 'password_hash', 'active', 'profile_image', 'subscription_id', 'bank_slip', 'activation', 'exp_date', 'created_at', 'updated_at'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

//$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|trim|is_unique[student_registration.email]|is_unique[staffs.email]');

	protected $dynamicRules = [
		'registration' => [
			'station_name' 		=> 'required|min_length[2]',
			'address' 			=> 'required|min_length[2]',
			'email' 			=> 'required|valid_email|is_unique[service_stations.email,id,{station_id}]|is_unique[vehicle_owners.email]',
			'password2'			=> 'required|min_length[5]',
			'password_confirm2'	=> 'matches[password2]'
		],
		'updateAccount' => [
			'id'	=> 'required|is_natural',
			'name'	=> 'required|alpha_space|min_length[2]'
		],
		'updateProfile' => [
			'id'	=> 'required|is_natural',
			'name'	=> 'required|alpha_space|min_length[2]',
			'firstname'	=> 'required|alpha_space|min_length[2]',
			'lastname'	=> 'required|alpha_space|min_length[2]',
			'email'	=> 'required|valid_email|is_unique[users.email,id,{id}]',
			'active'	=> 'required|integer',
		],
		'changeEmail' => [
			'id'			=> 'required|is_natural',
			'new_email'		=> 'required|valid_email|is_unique[users.email]',
			'activate_hash'	=> 'required'
		],
		'enableuser' => [
			'id'	=> 'required|is_natural',
			'active'	=> 'required|integer'
		]
	];
	protected $validationMessages = [];
	protected $skipValidation = false;

	protected $beforeInsert = ['hashPassword'];
	protected $beforeUpdate = ['hashPassword'];



    public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}


	protected function hashPassword(array $data)
	{
		if (! isset($data['data']['password2'])) return $data;

		$data['data']['password_hash'] = password_hash($data['data']['password2'], PASSWORD_DEFAULT);
		unset($data['data']['password2']);
		unset($data['data']['password_confirm2']);

		return $data;	
	}

	public function get_service_stations($cat_id){
			$db = \Config\Database::connect();


    	$query = $db->query("SELECT
    		service_stations.activation,
    		service_stations.exp_date,
    		service_stations.station_id,
    		service_stations.station_name,
  service_stations.station_id,
  service_stations.address,
  service_stations.phone_number,
  service_stations.email,
  service_stations.profile_image
FROM service_stations
JOIN station_category
  ON service_stations.station_id = station_category.station_id
JOIN service_categories
  ON station_category.cat_id = service_categories.id AND station_category.cat_id ='".$cat_id."'");

 		
		$result= $query->getResultArray();
		if (!$result) {
     // list is empty.
			return "";
		}else{
			return $result;
		}
	}


	public function complete_service_report($station_id, $date){
			$db = \Config\Database::connect();

    	$query = $db->query("SELECT
    		complete_services.*
			FROM complete_services
			JOIN appointments
  		ON complete_services.appointment_id = appointments.id AND complete_services.request_date ='".$date."' AND appointments.station_id='".$station_id."' AND appointments.status=3");

 		
		$result= $query->getResultArray();
		if (!$result) {
     // list is empty.
			return "";
		}else{
			return $result;
		}
	}

	public function getAppointments($station_id, $appointment_date){

	$db = \Config\Database::connect();

		$query = $db->query("SELECT
  appointments.id,
  appointments.request_date,
  appointments.time_slot,
  appointments.status,
  vehicle_owners.owner_name,
  vehicle_owners.email,
  vehicle_owners.contact,
  vehicle_owners.address,
  vehicle_owners.profile_image,
  vehicle.id as v_id,
  vehicle.vehicle_number,
  vehicle.vehicle_type,
  vehicle.province,
  vehicle.fuel_type,
  vehicle.capacity,
  vehicle.vehicle_model,
  vehicle.average_km,
  vehicle.vehicle_brand,
  service_categories.cat_name,
  service_stations.station_name,
  complete_services.price,
  complete_services.ad_price,
  complete_services.total
FROM appointments
JOIN vehicle_owners
  ON appointments.owner_id = vehicle_owners.id
JOIN service_stations
  ON appointments.station_id = service_stations.station_id
JOIN vehicle
  ON vehicle.id = appointments.vehicle_id
JOIN complete_services
  ON complete_services.appointment_id = appointments.id
JOIN service_categories
  ON service_categories.id = appointments.cat_id AND appointments.request_date ='".$appointment_date."' AND appointments.station_id='".$station_id."' ORDER BY appointments.request_date DESC");

		$result= $query->getResultArray();
		
			return $result;
	
	}

	

	

}
