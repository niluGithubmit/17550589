<?php namespace App\Models;

use CodeIgniter\Model;

class ServiceCatModel extends Model
{
	protected $table      = 'service_categories';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id', 'cat_name' ,'description'
	];

	public function get_part($cat_name)
	{
 		$db = \Config\Database::connect();

 		$query = $db->query("select id from service_categories where cat_name='".$cat_name."'");
		$result= $query->getResult();
		return $result;
       
    }


    public function getStationServices($station_id){
      
    	$db = \Config\Database::connect();

    	$query = $db->query("SELECT service_categories.*, station_category.price
		FROM service_categories
		INNER JOIN station_category ON service_categories.id=station_category.cat_id AND station_category.station_id ='".$station_id."'");

		$result= $query->getResultArray();
		return $result;
    }

}
