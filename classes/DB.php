<?php  

/**
 * DB connection
 */
class DB
{
	// df variables
	private $host 	 	="localhost";
	private $username 	= "root";
	private $password 	= "";
	private $dbname  	= "mvc";
	public $con;

		public function connection()
		{
			$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
			
			if(!$this->con):
				print mysqli_error();
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