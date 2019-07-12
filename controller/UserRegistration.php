<?php 
namespace controller;
use model\UserRegistrationModel;

/**
 * 
 */
class UserRegistration extends Controller
{
	

		private $res;

			public function AuthorizedUser()
			{
				#
				# check the response from checkUserInputs() function returns auth_response = 1 | 0
				# & according to it redirect user page
				#
				$auth = new UserRegistrationModel;
				$auth->auth_response = $this->res;
				
				($this->res)? $this->loadView('welcome') : $this->loadView('Signup');

			}


}



?>