<?php  
namespace classes;


/**
 * DB connection
 */
class DB
{
	// df variables
	private $host 	 	="localhost";
	private $username 	= "root";
	private $password 	= "1234567890";
	private $dbname  	= "mvc";
	public $con;

		public function __construct()
		{
			$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
			return $this->con;
		}

		public function connection()
		{
			if(!$this->con):
				mysqli_die();
			else:
				return "success";
			endif;
		}

		public function sql($query)
		{
			$result = mysqli_query($this->con, $query);
			$rowset = Array();
			while($row = mysqli_fetch_assoc($result)):
					$rowset[] = $row;
			endwhile;
			if(!empty($rowset)):
				return $rowset;
			endif;
		}


		public function rowscount($query)
		{
			$result = mysqli_query($this->con, $query);
			return $result;
		}



}


?>