<?php namespace App\Models;

use CodeIgniter\Model;

class Station_categoryModel extends Model
{
	protected $table      = 'station_category';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id', 'station_id' ,'cat_id','price'
	];

 	public function get_station_cat_Id($cat_id,$station_id){
		$db = \Config\Database::connect();

 		$query = $db->query("select id from station_category where cat_id='".$cat_id."' and station_id='".$station_id."'");
		$result= $query->getResult();
		return $result[0]->id;
      
    }
	

}
