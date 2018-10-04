<?php 
/**
 * 
 */
class Session 
{
	



	public $session_response = 0;


	# default session value to start session;
	public static $sessionstart = 1;


	#	set session key first and then good to go with getsession($k,$v);
	private static $_set_sess_arr = Array('uid','sessemail','sesspass','stime');



				
				private function sessionstart()
				{
						// session_save_path('');
						session_start();
						session_id();
						session_regenerate_id(true);
				
				}



				public function getsession($arr, $sess_val, $start)
				{	
					
					if( $start == self::$sessionstart ):
						self::sessionstart();
					endif;
						
					foreach(self::$_set_sess_arr as $k):
						if($arr == $k):
							return $_SESSION[$k] = $sess_val;
						endif;
					endforeach;

				}


				private function sess_uid()
				{
					# check for the uid is exits
					if(!$_SESSION['uid']):
						self::$session_response = 0;
					endif;
				}



}

 ?>