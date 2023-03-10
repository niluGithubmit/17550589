<?php namespace App\Models;

use CodeIgniter\Model;

class subscription_feeModel extends Model
{
	protected $table      = 'subscription_fee';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id', 'subscription_name', 'fee', 'duration', 'fee_description', 'status'
	];



}
