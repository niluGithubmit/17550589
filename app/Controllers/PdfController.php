<?php 
namespace App\Controllers;
use CodeIgniter\Controller;


class PdfController extends Controller
{
    public function index() 
	{
        return view('pdf_view');
    }
    public function bank_slip(){
        $dompdf = new \Dompdf\Dompdf(['isRemoteEnabled' => true]); 
        //include("pdf_view.php");


        $dompdf->loadHtml(view('bank_slip'));
        //$dompdf->set_base_path(base_url()."/bootstrap.css");
        
        $dompdf->setPaper('A4', 'potrate');
        $dompdf->render();
        $dompdf->stream('bank_slip',array('Attachment'=>0));
    }



} 