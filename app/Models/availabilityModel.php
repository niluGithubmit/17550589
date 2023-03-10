<?php namespace App\Models;

use CodeIgniter\Model;

class availabilityModel extends Model
{
	protected $table      = 'availability';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id', 'station_id', 'day', 'time_slot'
	];




	public function getId($station_id,$day,$slot){
		$db = \Config\Database::connect();

		$d= strval($day);
		$t =strval($slot) ;

    	$query = $db->query("select id from availability where station_id='".$station_id."' and day='".$d."' and time_slot = '".$t."' ");
    	//$query = $db->query("select id from availability where station_id=15 and day='Monday' and time_slot = '07:00' ");
    	
		$result= $query->getResult();

		if (!$result) {
     // list is empty.
			return "";
		}else{
			return $result[0]->id;
		}
	
	}


	public function getTimeSlot($station_id,$day){
		$db = \Config\Database::connect();

		$d= strval($day);
		
    	$query = $db->query("select time_slot from availability where station_id='".$station_id."' and day='".$d."'");
    	
		$result= $query->getResult();

		if (!$result) {
     // list is empty.
			return "";
		}else{
			return $result;
		}
		
	}

	
	

   


	

	

	

}
