<?php 



class Errorhandling {


	public static $_self_msg;


	# static array handing error #
	##############################

	# signup error handler
	public static $_err_msg = Array('alert'=>Array(
								'Empty field email | password.',
								'you can\'t upload file {$ext} type in {$arg_fname}.',
								'{$arg_fname} is too large please reduce file size.',
								'Error occured in {$arg_fname} you uploaded.',
								'select your gender.',
								'check the checkbox accept the terms & condition.',
								'You are already registered with us you can <a href="login">login</a> here and continue.',
								'You are successfully register with us. Thank you for registration with us.',
								'please upload your {$arg_name}'
									));


	# log error handler
	public static $_err_log_msg = Array('alert'=>Array(
				'email is not valide',
				'password is not valid',
				'It\'s Looks you are not registered yet, please first <a href="index.php"> register</a> here',
				'well done! you are successfully login we are redirecting to you.'	

	));

		

		public static function seterr($msg)
		{
			
			self::$_self_msg = $msg;
			

		}


		public static function geterr()
		{

			return self::$_self_msg;
			
		}


}



 ?>




