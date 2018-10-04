<?php 
/**
 * 
 */
class WelcomeController extends Controller
{
	
		#	check for $session_response 1 or/ 0
		public function welcome()
		{
			parent::loadView('Welcome');
		}


}


 ?>