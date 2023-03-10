<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use App\Models\UserModel;
require '../vendor/autoload.php';
use Swagger\Client\ShoutoutClient;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class RegistrationController extends Controller
{
	/**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
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

    //--------------------------------------------------------------------

	/**
	 * Displays register form.
	 */
	public function register()
	{
		if (!$this->session->isLoggedIn) {
			return redirect()->to(base_url().'/');
		}

// 		$apiKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiI0MWRkYjE2MC0wNTk0LTExZWQtYWQ0ZC02N2U5ODliOTRhMjYiLCJzdWIiOiJTSE9VVE9VVF9BUElfVVNFUiIsImlhdCI6MTY1ODAzNjk4MywiZXhwIjoxOTczNjU2MTgzLCJzY29wZXMiOnsiYWN0aXZpdGllcyI6WyJyZWFkIiwid3JpdGUiXSwibWVzc2FnZXMiOlsicmVhZCIsIndyaXRlIl0sImNvbnRhY3RzIjpbInJlYWQiLCJ3cml0ZSJdfSwic29fdXNlcl9pZCI6IjcyNzQxIiwic29fdXNlcl9yb2xlIjoidXNlciIsInNvX3Byb2ZpbGUiOiJhbGwiLCJzb191c2VyX25hbWUiOiIiLCJzb19hcGlrZXkiOiJub25lIn0.-_1XrFtsjlqqaY_10vwjRFFpQIGo4kUQWULPWGVPl1g';

// $client = new ShoutoutClient($apiKey,true,false);



// $message = array(
//  'source' => 'ShoutDEMO',
//   'destinations' => ['+94716020556'],
//  'content' => array(
//   'sms' => 'Sent via ShoutOUT Gateway'
//  ),
//  'transports' => ['SMS']
// );

// try {
//  $result = $client->sendMessage($message);
//  //print_r($result);
// 	echo "errr";

// } catch (Exception $e) {
//  echo 'Exception when sending message: ', $e->getMessage(), PHP_EOL;
// }

		return view('users/register', [
			'userData' => $this->session->userData,
			'page_name' => "register",
			'userData' => $this->session->userData, 
		]);
	}

    //--------------------------------------------------------------------

	/**
	 * Attempt to register a new user.
	 */
	public function attemptRegister()
	{
		helper('text');

		// save new user, validation happens in the model
		$users = new UserModel();
		$getRule = $users->getRule('registration');
		$users->setValidationRules($getRule);

		
		
        $user = [
            

            'firstname'         => $this->request->getPost('firstname'),
            'lastname'          => $this->request->getPost('lastname'),
            'name'          	=> $this->request->getPost('name'),
            'email'         	=> $this->request->getPost('email'),
            'password'     		=> $this->request->getPost('password'),
            'password_confirm'	=> $this->request->getPost('password_confirm'),
            'user_role'			=> 0,
            'activate_hash' 	=> random_string('alnum', 32)
            
        ];

        if (! $users->save($user)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }

		// send activation email //
		// send email activation is commented no email support //
		
		// helper('auth'); 
        // send_activation_email($user['email'], $user['activate_hash']);

	





       return redirect()->to(base_url().'/register')->with('success', lang('Auth.registrationSuccess'));
	}

    //--------------------------------------------------------------------

	/**
	 * Activate account.
	 */
	public function activateAccount()
	{
		$users = new UserModel();

		// check token
		$user = $users->where('activate_hash', $this->request->getGet('token'))
			->where('active', 0)
			->first();

		// check user if exists
		if (is_null($user)) {
			return redirect()->to('login')->with('error', lang('Auth.activationNoUser'));
		}

		// update user account to active
		$updatedUser['id'] = $user['id'];
		$updatedUser['active'] = 1;
		$users->save($updatedUser);

		return redirect()->to('login')->with('success', lang('Auth.activationSuccess'));
	}

	

}
