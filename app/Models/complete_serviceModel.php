<?php namespace App\Models;

use CodeIgniter\Model;

class complete_serviceModel extends Model
{
	protected $table      = 'complete_services';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id', 'appointment_id', 'request_date', 'time_slot', 'status', 'owner_name', 'email', 'contact', 'address', 'profile_image', 'v_id', 'vehicle_number', 'vehicle_type', 'province', 'fuel_type', 'capacity', 'vehicle_model', 'average_km', 'vehicle_brand', 'cat_name','price', 'ad_price', 'total', 'created_at', 'updated_at'
	];





	
	}

	
	

   


	

	

	


