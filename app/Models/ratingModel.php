<?php namespace App\Models;
use CodeIgniter\Model;

class ratingModel extends Model
{
	protected $table      = 'rating';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'id', 'station_id', 'user_id', 'rating_type'
	];



	

}
