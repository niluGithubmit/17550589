<?php 
namespace App\Libraries;

use Dompdf\Dompdf;

class Pdf extends Dompdf {
	
	public function __construct() {
		parent::__construct();
	}
	
}