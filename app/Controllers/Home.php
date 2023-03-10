<?php

namespace App\Controllers;
use Config\Services;
use App\Models\HomeModel;
use App\Models\ServiceStationModel;
use App\Models\ServiceCatModel;
use App\Models\Station_categoryModel;
use App\Models\subscription_feeModel;
use App\Models\subscription_paymentsModel;
use App\Models\time_slotModel;
use App\Models\availabilityModel;
use App\Models\appointmentsModel;
use App\Libraries\Pdf;
use Dompdf\Dompdf;
use App\Models\complete_serviceModel;
use App\Models\vehicle_ownersModel;
class Home extends BaseController
{
    protected $session;

    /**
     * Authentication settings.
     */
    protected $config;


    //--------------------------------------------------------------------

    public function __construct()
    {
        // start session
        $this->session = Services::session();
    }

    public function index()
    {
        return view('index', [
              
               
                'page_name' => 'dashboard', 
                
            ]);
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        if (! $this->session->isLoggedIn) {
            return view('login');
        }

        $ServiceStationModel = new ServiceStationModel();
        $vehicle_ownersModel = new vehicle_ownersModel();
        $ServiceCatModel = new ServiceCatModel();
        $complete_serviceModel = new complete_serviceModel();

        $count_stations = $ServiceStationModel->countAll(); 
        $count_owners = $vehicle_ownersModel->countAll(); 
        $count_services = $ServiceCatModel->countAll(); 
        $count_complete_service = $complete_serviceModel->countAll(); 

        return view('dashboard', [
                'userData' => $this->session->userData, 
               
                'page_name' => 'dashboard', 
                'count_stations' => $count_stations, 
                'count_owners' => $count_owners, 
                'count_services' => $count_services, 
                'count_complete_service' => $count_complete_service, 
                
            ]);
    }

    public function users()
    {
        if (! $this->session->isLoggedIn) {
            return view('login');
        }
        return view('user');
    }

    public function services()
    {
        if (! $this->session->isLoggedIn) {
            return view('login');
        }
        return view('services/services');
    }

    public function search()
    {
        $homeModel = new HomeModel();
        $search_ids = $this->request->getGet('searched_ids');
        $result = $homeModel->get_stations1($search_ids);
        $data['result'] = $result;
        return view('search', $data);
    }

    public function getStations() {
        $homeModel = new HomeModel();
        $result = $homeModel->get_stations();
        echo json_encode($result);
    }

    public function contacts(){
        return view('contacts', [
                //'userData' => $this->session->userData, 
               
                'page_name' => 'contacts', 
                
                
            ]);
    }
    
}
