<?php 
/**
 * 
 */
class UserRegistration extends Controller
{
	



			public function AuthorizedUser()
			{
				#
				# check the response from checkUserInputs() function returns auth_response = 1 | 0
				# & according to it redirect user 
				#
				$auth = new UserRegistrationModel;
				
				($auth->auth_response)? $this->loadView('login') : $this->loadView('Signup');

			}


}



?>