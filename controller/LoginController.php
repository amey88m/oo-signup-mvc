<?php 

class LoginController extends Controller
{
	
		


	
		public function log()
		{
			
			self::loadModel('LogModel');
			
			$log = new LogModel;
			$log->login();
			
				
			(!$log->log_response)? self::loadView('login') : self::loadView('welcome');

		}




}



 ?>