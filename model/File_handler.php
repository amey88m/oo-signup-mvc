<?php 
namespace model;
use model\File_Def_Proto;


class File_handler extends File_Def_Proto
{
	
	private static $fname;
	private static $name;
	private static $tmp_name;
	private static $size;
	private static $type;
	private static $error;



		
		public static function setfilename($fname)
		{
			self::$fname 		= $fname;
			self::$name 		= $_FILES[$fname]['name'];
			self::$tmp_name 	= $_FILES[$fname]['tmp_name'];
			self::$size 		= $_FILES[$fname]['size'];
			self::$type			= $_FILES[$fname]['type'];
			self::$error 		= $_FILES[$fname]['error'];

			parent::setdefaultfileproto(self::$fname,self::$name,self::$tmp_name,self::$size,self::$type,self::$error);

		}




}







 ?>