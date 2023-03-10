<?php namespace App\Models;

use CodeIgniter\Model;

class spare_partsModel extends Model
{
	protected $table      = 'spare_parts';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id','station_id', 'spare_id', 'spare_name', 'brand', 'capacity','weight','liters', 'description', 'quantityInStock', 'updated_date','price' ,'image','date'
	];


	public function get_part($spare_id){
 		$db = \Config\Database::connect();

 		$query = $db->query("select id from spare_parts where spare_id='".$spare_id."'");
		$result= $query->getResult();
		return $result;
       
    }


    public function getMyParts($station_id){
		$db = \Config\Database::connect();

 		$query = $db->query("SELECT * FROM `spare_parts` WHERE station_id ='".$station_id."'");
		$result= $query->getResultArray();
		return $result;
	}


	public function getSparePart(){
		$db = \Config\Database::connect();

 		//$query = $db->query("SELECT * FROM `spare_parts` WHERE station_id ='".$station_id."'");
 		$query = $db->query("SELECT spare_parts.*,
 		 service_stations.station_name, 
 		 service_stations.activation, 
 		 service_stations.exp_date
		FROM spare_parts
		INNER JOIN service_stations ON spare_parts.station_id=service_stations.station_id;");

		$result= $query->getResultArray();
		return $result;
	}


}
