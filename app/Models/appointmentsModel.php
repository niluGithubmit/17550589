<?php 
namespace App\Models;

use CodeIgniter\Model;

class appointmentsModel extends Model
{
  protected $table      = 'appointments';
  protected $primaryKey = 'id';

  protected $returnType = 'array';
  protected $useSoftDeletes = false;

  // this happens first, model removes all other fields from input data
  protected $allowedFields = [
    'id', 'station_id','owner_id', 'cat_id', 'vehicle_id', 'request_date', 'time_slot','status','rate', 'created_at', 'update_at'
  ];

  public function getId($date,$time){
    $db = \Config\Database::connect();

    $d= strval($date);
    $t =strval($time) ;


      $query = $db->query("select id from appointments where request_date='".$d."' and time_slot='".$t."'");
      //$query = $db->query("select id from availability where station_id=15 and day='Monday' and time_slot = '07:00' ");
      
    $result= $query->getResult();

    if (!$result) {
     // list is empty.
      return "";
    }else{
      return $result[0]->id;
    }


    
  }

  public function getMyAppointments($station_id){
    $db = \Config\Database::connect();


      $query = $db->query("SELECT
  appointments.id,
  appointments.request_date,
  appointments.time_slot,
  appointments.status,
  appointments.rate,
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
  service_categories.cat_name
FROM appointments
JOIN vehicle_owners
  ON appointments.owner_id = vehicle_owners.id
JOIN vehicle
  ON vehicle.id = appointments.vehicle_id
JOIN service_categories
  ON service_categories.id = appointments.cat_id AND appointments.station_id ='".$station_id."' ORDER BY appointments.request_date DESC");

    
    $result= $query->getResultArray();
    if (!$result) {
     // list is empty.
      return "";
    }else{
      return $result;
    }
    //return $result;
  }

  

    public function getCustomerAppointment($owner_id){
    $db = \Config\Database::connect();


      $query = $db->query("SELECT
  appointments.id,
  appointments.request_date,
  appointments.time_slot,
  appointments.status,
  appointments.rate,
  service_stations.station_name,
  service_stations.email,
  service_stations.phone_number,
  service_stations.address,
  service_stations.profile_image,
  service_stations.station_id,
  vehicle.vehicle_number,
  vehicle.vehicle_type,
  vehicle.province,
  vehicle.fuel_type,
  vehicle.capacity,
  vehicle.vehicle_model,
  vehicle.average_km,
  vehicle.vehicle_brand,
  service_categories.cat_name
FROM appointments
JOIN service_stations
  ON appointments.station_id = service_stations.station_id
JOIN vehicle
  ON vehicle.id = appointments.vehicle_id
JOIN service_categories
  ON service_categories.id = appointments.cat_id AND appointments.owner_id ='".$owner_id."' ORDER BY appointments.request_date DESC");

    
    $result= $query->getResultArray();
    if (!$result) {
     // list is empty.
      return "";
    }else{
      return $result;
    }
    //return $result;
  }

  

  public function getCompleteAppointment($id){
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
  service_categories.cat_name
FROM appointments
JOIN vehicle_owners
  ON appointments.owner_id = vehicle_owners.id
JOIN vehicle
  ON vehicle.id = appointments.vehicle_id
JOIN service_categories
  ON service_categories.id = appointments.cat_id AND appointments.id ='".$id."' ORDER BY appointments.request_date DESC");

    
    $result= $query->getResultArray();
    if (!$result) {
     // list is empty.
      return "";
    }else{
      return $result[0];
    }
    //return $result;
  }



}
