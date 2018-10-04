<?php 
/**
 * User registration form input validate 
 * and according save into the table;
 */
class UserRegistrationModel extends Model
{	



	public $auth_response = 0;


	public $arg = Array();


	public static $outputError;
	

	


			public function checkUserInputs()
			{


				# to load error pg create UserRegistration's obj
				$_err_obj = new UserRegistration;

				
				# connection with DB
				$db = new DB;
				$conn = $db->connection();
				
				



						if( isset($_POST['btnreg']) ):
			 				
								$email  = $_POST['email'];
								$pass   = $_POST['pass'];
								$gender = $_POST['gender'];

						
								if(is_array($gender)):
									foreach($gender as $gen):
									endforeach;
								endif;
								
							if( empty($email) | empty($pass)):
									self::$outputError = 0;
									$_err_obj->loadError('Error'); 
									$_err_obj->loadError('_errorhtml');
									return $this->auth_response= 'false';
								exit();
							else:
								File_handler::setfilename('avatar');
								File_handler::setfilename('resume');							

								$resume = File_handler::$_file_new_name;
								$avatar = File_handler::$_avatar_new_name;

								if(File_handler::$test !== 0):

									# check for gender value
									if( empty($gender) ):
										self::$outputError = 4;
										$_err_obj->loadError('Error'); 
										$_err_obj->loadError('_errorhtml');
										return $this->auth_response = false;
										exit();
									else:

										# check the checkbox of terms & conditions
										if(!isset($_POST['terms'])):
											self::$outputError = 5;
											$_err_obj->loadError('Error'); 
											$_err_obj->loadError('_errorhtml');
											return $this->auth_response = false;
											exit();
										else:
											$query 	  = $db->rowscount("SELECT * FROM signup WHERE email='$email'");
											$rowcount = mysqli_num_rows($query);
											// print $rowcount;
										
											# check for user exits
											if($rowcount > 0):
												self::$outputError=6;
												$_err_obj->loadError('Error'); 
												$_err_obj->loadError('_errorhtml');
												return $this->auth_response = false;
												exit();
											else:
$result = $db->rowscount("INSERT INTO signup(email,password,gender,resume,profile_pic) values('$email','$pass','$gen','$resume','$avatar')");
												self::$outputError=7;
												$_err_obj->loadError('Error'); 
												$_err_obj->loadError('_errorhtml');

												#################
												# session start #
												#################
												$uid = uniqid('', true);
												$_err_obj->loadClass('Session');
												$_sess_obj = new Session;
												$_sess_obj->getsession('sessemail',$_POST['email'],1);
												$_sess_obj->getsession('sesspass',$_POST['pass'],0);
												$_sess_obj->getsession('stime',time(),0);
												$_sess_obj->getsession('uid',$uid,0);

												return $this->auth_response = 1;
												exit();
											endif;	
										endif;
									endif;
								endif;

							endif;
						endif;
				
			}

}






?>