<?php 
namespace App\Models;

use CodeIgniter\Model;

class vehicleModel extends Model
{
	protected $table      = 'vehicle';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = [
		'id', 'owner_id', 'vehicle_number', 'vehicle_type', 'province', 'fuel_type','capacity', 'vehicle_model', 'average_km', 'vehicle_brand', 'created_at', 'updated_at'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	protected $dynamicRules = [
		'registration' => [
			
		'vehicle_number' => 'required|is_unique[vehicle.vehicle_number,id,{id}]',
			
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

    public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}

	public function getMyVehicles($owner_id)
	{
		$db = \Config\Database::connect();

 		$query = $db->query("SELECT * FROM `vehicle` WHERE owner_id ='".$owner_id."'");
		$result= $query->getResultArray();
		return $result;
	}
	

}
