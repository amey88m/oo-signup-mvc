<?php 
namespace model;
use model\Model;
use controller\UserRegistration;
use classes\DB;
use model\File_handler;
use classes\Session;

/**
 * User registration form input validate 
 * and according save into the table
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

			
			

					if( isset($_POST['btnreg']) ):

							# connection with DB
							$db = new DB;
							$conn = $db->connection();

							
							$email   = $_POST["email"];
							$pass    = $_POST['pass'];
							$genders = $_POST['gender'];
							$reg_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*(@((example+\.)+[a-z]{1,3})|@((gmail+\.)+[a-z]{2,6}))$/";

							
							if(is_array($genders)):
								foreach($genders as $gen):
								endforeach;
							endif;
						
						if(!isset($email) || empty($email)):
							self::$outputError = 0;
							$_err_obj->loadError('Errors');
							$_err_obj->loadError('_errorhtml');
						else:
							if(!preg_match($reg_email, $email)):
								self::$outputError = 1;
								$_err_obj->loadError('Errors');
								$_err_obj->loadError('_errorhtml');
							else:
								if(!isset($pass) || empty($pass)):
									self::$outputError = 2;
									$_err_obj->loadError('Errors');
									$_err_obj->loadError('_errorhtml');
									return $this->auth_response = 'false';
								else:
									File_handler::setfilename('resume');
									File_handler::setfilename('avatar');
									$resume = File_handler::$_file_new_name;
									$avatar = File_handler::$_avatar_new_name;

									if(File_handler::$test != 0):
										# check for gender value;
										if( !isset($gen) | empty($gen) ):
											self::$outputError = 8;
											$_err_obj->loadError('Errors'); 
											$_err_obj->loadError('_errorhtml');
											return $this->auth_response = false;
											exit();
										else:
											# check the checkbox checked of terms & conditions
											if(!isset($_POST['terms'])):
												self::$outputError = 9;
												$_err_obj->loadError('Errors'); 
												$_err_obj->loadError('_errorhtml');
												return $this->auth_response = false;
												exit();
											else:
												$query 	  = $db->rowscount("SELECT * FROM signup WHERE email='$email'");
												$rowcount = mysqli_num_rows($query);
												# check for user exits
												if($rowcount > 0):
													self::$outputError=10;
													$_err_obj->loadError('Errors'); 
													$_err_obj->loadError('_errorhtml');
													return $this->auth_response = false;
													exit();
												else:
	# user register successfully													
	$result = $db->rowscount("INSERT INTO signup(email,password,gender,resume,profile_pic) values('$email','$pass','$gen','$resume','$avatar')");
													self::$outputError=11;
													$_err_obj->loadError('Errors'); 
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
						endif;	
					endif;
			
		}

}






?>