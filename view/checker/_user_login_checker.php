<?php 

	// check is there any data waiting from login button 
	if(isset($_POST['btnlogin'])):
		
		
		#	escape strings to prevent sql injection
		$useremail 		= $_POST['email'];
		$userpassword 	= $_POST['password'];



		// strip_tags() remove remove html/php tags
		$useremail 		= strip_tags($useremail);
		$userPassword 	= strip_tags($userpassword);

		// sanatize & validate inputs
		$user_Email = filter_var($useremail, FILTER_VALIDATE_EMAIL);
		$userEmail  = filter_var($user_Email, FILTER_SANITIZE_EMAIL);


		# load controller to load views/models
		$log_cont = new LoginController;

			# check for empty string 
			if(empty($userEmail)):
				self::$outputError = 0;
				$log_cont->loadError('Error');
				$log_cont->loadError('_errorloghtml');
				return $this->log_response = 0;
				exit();
			else:
				if(empty($userPassword)):
					self::$outputError = 1;
					$log_cont->loadError('Error');
					$log_cont->loadError('_errorloghtml');
					return $this->log_response = 0;
					exit();
				else:
					
					$this->connection();
					$this->query 	= $this->rowscount("SELECT * FROM signup where email='$userEmail' AND password='$userPassword' ");
					$resultrows = mysqli_num_rows($this->query);

						#	check user is registered-user or/^ else redirect user to register-pg
						if( $resultrows === 0 ):
							self::$outputError = 2;
							$log_cont->loadError('Error');
							$log_cont->loadError('_errorloghtml');
							return $this->log_response = 0;
							exit();
						else:
							sleep(2);
							header("Location: welcome?log=1");
							return $this->log_response = true;
						endif;

				endif;
			endif;

			
		
		

		


	endif;

	

	

 ?>