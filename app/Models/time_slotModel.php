<?php namespace App\Models;

use CodeIgniter\Model;

class time_slotModel extends Model
{
	protected $table      = 'time_slot';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id', 'time_slot'
	];


}
