<?php
namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

    function _cosntruct() {
        $this->load->database();
    }
    protected $table      = 'service_stations';
    protected $primaryKey = 'station_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['station_id', 'latitude', 'longitude', 'phone_number', 'email'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

//location tracking
    public function get_stations() { # refactored 
        $db = \Config\Database::connect();

		$query = $db->query("select station_id, latitude, longitude from service_stations");
   
		$result= $query->getResult();
		return $result;
          
    }
//find nearby location stations
    public function get_stations1($ids) { # refactored 
        $db = \Config\Database::connect();
        $q = "select * from service_stations where station_id in ($ids)";

		$query = $db->query("select * from service_stations where station_id in ($ids)");
        
		$result= $query->getResult();
		return $result;
       
        
    }

}