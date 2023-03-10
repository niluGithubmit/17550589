<?php
namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/search', 'Home::search');
$routes->get('/getall', 'Home::getStations');
$routes->get('/admin', 'Home::login');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/services/(:num)', 'Home::services');

$routes->get('/station_login', 'StationController::index');

//Services station

$routes->get('/users', 'UsersController::users');
$routes->post('users/delete/(:num)', 'UsersController::delete');
$routes->post('station/delete/(:num)', 'UsersController::delete_station');
$routes->post('owner/delete/(:num)', 'UsersController::delete_owner');






$routes->get('/services_station', 'StationController::service_station');
$routes->get('/station_profile/(:num)', 'StationController::station_profile');
$routes->get('/change_progile_image', 'StationController::station_profile_image');
$routes->post('upload_st_image', 'StationController::upload_st_image');

$routes->get('/subscription_payment/(:num)', 'StationController::subscription_payment');





//$routes->get('/login', 'LoginController::login');
$routes->post('dashboard', 'LoginController::attemptLogin');

$routes->get('logout', 'LoginController::logout');

$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
$routes->get('users/enable/(:num)', 'UsersController::enable');
$routes->get('users/disable/(:num)', 'UsersController::disable');

$routes->get('/users-edit/(:num)', 'UsersController::edit');
$routes->post('users/update-user', 'UsersController::update');

$routes->get('register', 'RegistrationController::register', ['as' => 'register']);
$routes->post('register', 'RegistrationController::attemptRegister');
$routes->get('users/delete/(:num)', 'UsersController::delete');

// Profile
    $routes->get('profile', 'AccountController::profile', ['as' => 'profile']); // new 
    $routes->post('update-profile', 'AccountController::updateProfile'); // new
    $routes->post('account', 'AccountController::updateAccount');
    $routes->post('change-email', 'AccountController::changeEmail'); // not used
    $routes->get('confirm-email', 'AccountController::confirmNewEmail'); // not used
    $routes->post('change-password', 'AccountController::changePassword'); // new
    $routes->post('delete-account', 'AccountController::deleteAccount'); 

    $routes->get('sms', 'RegistrationController::sms'); 




//services cat
    $routes->get('service_cat', 'ServiceController::index');
    $routes->post('add-category', 'ServiceController::add_category');
    $routes->post('check_cat_name', 'ServiceController::check_cat_name');
    $routes->post('update-category', 'ServiceController::update_category');
    $routes->post('cat_delete', 'ServiceController::delete_cat');
    $routes->get('services', 'ServiceController::services');


    


//service station
    
    $routes->get('service_station', 'StationController::index');
    $routes->get('servise-station-registration', 'StationController::register');
    $routes->post('station_register', 'StationController::attemptRegister');
    $routes->post('station_update', 'StationController::attemptUpdate');

    $routes->post('servise-station-login', 'StationController::attemptLogin');

    $routes->get('station_dashboard', 'StationController::dashboard');
    $routes->get('station_logout', 'StationController::logout');
    $routes->get('subscription-plan', 'StationController::subscription_plan');
    $routes->get('service_station_details/(:num)', 'StationController::service_station_details');
    $routes->get('availability', 'StationController::availability');
    $routes->post('time_slot', 'StationController::time_slot');
    $routes->post('get_time_slot', 'StationController::get_time_slot');

    $routes->get('services_station_appointment', 'StationController::appointments');


    $routes->get('ap_accept/(:num)', 'StationController::ap_accept');
    $routes->get('ap_cancel/(:num)', 'StationController::ap_cancel');
    $routes->get('ap_susp/(:num)', 'StationController::ap_susp');
    $routes->post('complete_service', 'StationController::complete_service_report');
    $routes->get('complete_service/(:num)', 'StationController::complete_service');
    $routes->post('all_appointment', 'StationController::all_appointment_report');

    

    $routes->get('print_invoice/(:num)', 'StationController::print_invoice');
    $routes->post('complete_service_add', 'StationController::complete_service_add');

    $routes->get('services_station_service_history', 'StationController::services_station_service_history');

    $routes->get('reports', 'StationController::service_station_reports');

    $routes->get('complete_report/(:any)/(:num)', 'StationController::complete_report');

    $routes->get('contacts', 'Home::contacts');


    
//reports    

    

    



//spare-parts
    
    $routes->get('service_spare_part', 'SparePartsController::index');
    $routes->post('add-part', 'SparePartsController::add_spare_part');
    $routes->post('check_spare_id', 'SparePartsController::check_spare_id');
    $routes->get('part-edit/(:num)', 'SparePartsController::edit_spare_part');

    $routes->post('update-part', 'SparePartsController::update_spare_part');
    $routes->get('spare_part', 'SparePartsController::spare_part');

    

// add or remove category by servise station owners

    $routes->get('add_st_cat/(:num)/(:num)', 'StationController::add_st_cat');  
    $routes->get('delete_st_cat/(:num)/(:num)', 'StationController::remove_st_cat'); 

    $routes->post('update_price', 'StationController::update_price'); 

    

    //5 

//service station admin 
    $routes->get('admin/service_station', 'admin\StationController::index');
    $routes->get('admin/vehicle_owner', 'admin\StationController::vehicle_owner');
    $routes->get('station/enable/(:num)', 'admin\StationController::enable');
    $routes->get('station/disable/(:num)', 'admin\StationController::disable');
    $routes->get('station-edit/(:num)', 'admin\StationController::edit');
    
    $routes->post('station/station-update', 'admin\StationController::update');

    $routes->get('owner/enable/(:num)', 'CustomerController::enable');
    $routes->get('owner/disable/(:num)', 'CustomerController::disable');


    
//customer vehicle owner

    $routes->get('customer_login', 'CustomerController::index');
    $routes->get('customer-registration', 'CustomerController::register');
    $routes->post('customer_register', 'CustomerController::attemptRegister');
    $routes->post('customer-login', 'CustomerController::attemptLogin');
    $routes->post('customer_update', 'CustomerController::attemptUpdate');
    $routes->get('/change_customer_progile_image', 'CustomerController::customer_profile_image');
    $routes->post('upload_customer_image', 'CustomerController::upload_customer_image');
    $routes->get('customer_appointments/(:num)', 'CustomerController::appointments');
    $routes->post('customer_appointment', 'CustomerController::appointments_submit');
    $routes->post('check_available_appointment', 'CustomerController::check_available_appointment');
    $routes->get('edit_vehicle/(:num)', 'CustomerController::edit_vehicle');

   

    $routes->get('customer_appointments', 'CustomerController::customer_appointments');

    $routes->get('service_history', 'CustomerController::service_history');

    

    $routes->post('customer_rate', 'CustomerController::customer_rate');

    $routes->get('print_invoice', 'CustomerController::print_invoice');

    $routes->get('get_service_stations/(:num)', 'CustomerController::get_service_stations');

    


    
    

    $routes->get('customer_dashboard', 'CustomerController::dashboard');
    $routes->get('customer_logout', 'CustomerController::logout');
    $routes->get('add-vehicle', 'CustomerController::add_vehicle');

    $routes->post('add-new-vehicle', 'CustomerController::add_new_vehicle');
    $routes->post('update-vehicle', 'CustomerController::update_vehicle');
    
    $routes->get('vehicles-information', 'CustomerController::vehicles_information');


    $routes->get('/customer_station', 'CustomerController::service_station');
    $routes->get('/customer_profile', 'CustomerController::customer_profile');

//service categories
    
    $routes->get('service_categories', 'StationController::service_categories'); 

//subcription plan
    
    $routes->post('subcription_payments', 'StationController::add_subcription');

    
    $routes->match(['get', 'post'], 'bank_slip/(:any)', 'PdfController::bank_slip');

    $routes->get('/html_pdf', 'PdfController::index');
    

    


});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
