<?php namespace App\Models;

use CodeIgniter\Model;

class vehicle_ownersModel extends Model
{
	protected $table      = 'vehicle_owners';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = [
		'id', 'owner_name', 'address', 'contact', 'email','password', 'nic','status','profile_image', 'created_at', 'updated_at'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	protected $dynamicRules = [
		'registration' => [
			
			'owner_name' 		=> 'required|min_length[2]',
			'address' 			=> 'required|min_length[2]',
			'nic' 			=> 'required|min_length[9]',
			'email' 			=> 'required|valid_email|is_unique[vehicle_owners.email,id,{id}]|is_unique[service_stations.email,id,{station_id}]',
			'password'			=> 'required|min_length[5]',
			'password_confirm'	=> 'matches[password]'
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
		if (! isset($data['data']['password'])) return $data;

		$data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
		unset($data['data']['password']);
		unset($data['data']['password_confirm']);

		return $data;
	}


	public function get_status(){
		$this->db->select('status');
    $this->db->where('email','amal@gmail.com'); 
    $query = $this->db->get()->result();

    return $query;
    //echo $query ;
	}

	
}
