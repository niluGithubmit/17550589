<?php namespace App\Models;

use CodeIgniter\Model;

class subscription_paymentsModel extends Model{
	protected $table      = 'subscription_payments';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id', 'station_id', 'subscription_id', 'bank_slip', 'payment_date', 'status', 'created_at'
	];



}
