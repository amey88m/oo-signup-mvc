<?php 
/**
 * 
 */
class LogModel extends Model
{


	private $conn;


	private $query;


	public static $outputError;


	public $log_response  = 0;

	


		private function checkconn()
		{
			# connection
			$db = new DB;
			$this->conn = $db->connection();
			return $db;
		}


		public function login()
		{	
			$this->checkconn();
			require_once "./view/checker/_user_login_checker.php";

		}




}


 ?>