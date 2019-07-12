<?php 
namespace model;
use model\Model;
use controller\UserRegistration;

/**
 * File Default protocols
 */
class File_Def_Proto extends Model
{
	// this $test variable checks the value of setdefaultfileproto() on each time it's return
	// if it return true condition is satisfy otherwise false;
	public static $test = 'false'; 
	public static $outputErrorForFiles;
	private static $_files_ext = Array('pdf','docx');
	private static $_imgs_ext = Array('jpeg', 'jpg', 'png');
	public static $_avatar_new_name;
	public static $_file_new_name;


			public static function setdefaultfileproto($arg_fname,$arg_name,$arg_tmp,$arg_filesize,$arg_type,$arg_err)
			{
					
					# to load error pg create UserRegistration's obj
					$_err_obj = new UserRegistration;


					if($arg_fname == 'resume'):

						if(empty($arg_name)):
							UserRegistrationModel::$outputError = 3; // upload your resume
							$_err_obj->loadError('Errors'); 
							$_err_obj->loadError('_errorhtml');
							return self::$test = false;
							exit();
						else:
							# get file ext
							$_file_ext = explode('.', $arg_name);
						
							$ext = strtolower($_file_ext[1]);

								# check the file extension 
								if(!in_array($ext, self::$_files_ext)):
									print "you can't upload file {$ext} type in $arg_fname.";
									UserRegistrationModel::$outputError = 4;
									$_err_obj->loadError('Errors'); 
									$_err_obj->loadError('_errorhtml');
									return self::$test = false;
									exit();
								else:
									# check for file size 1000 bytes = 1kb, 90000 bytes= 90.00kb
									if($arg_filesize > 90000):
										UserRegistrationModel::$outputError = 5;
										$_err_obj->loadError('Errors'); 
										$_err_obj->loadError('_errorhtml');
										return self::$test = false;
										exit();
									else:
										# check for file error
										if($arg_err !== 0):
											UserRegistrationModel::$outputError = 6;
											$_err_obj->loadError('Errors'); 
											$_err_obj->loadError('_errorhtml');
											return self::$test = false;
											exit();
										else:
											$id = uniqid('', true);
											self::$_file_new_name = $id . "." . $ext;
											move_uploaded_file($arg_tmp, 'uploaded_resume/' . self::$_file_new_name);
											return self::$test = true;
										endif;
									endif;
								endif;
						endif;
					elseif($arg_fname == 'avatar'):

						if(empty($arg_name)):
							UserRegistrationModel::$outputError = 7;
							$_err_obj->loadError('Errors'); 
							$_err_obj->loadError('_errorhtml');
							return self::$test = false;
							exit();
						else:
							# get the file ext
							$_file_ext = explode('.', $arg_name);
							$ext = strtolower($_file_ext[1]);

							# check the file extension
							if(!in_array($ext, self::$_imgs_ext)):
								UserRegistrationModel::$outputError = 4;
								$_err_obj->loadError('Errors'); 
								$_err_obj->loadError('_errorhtml');
								return self::$test = false;
								exit();
							else:
								# check for file size 1000 bytes = 1kb, 20000 bytes= 20.00kb
								if($arg_filesize > 20000):
									UserRegistrationModel::$outputError = 5;
									$_err_obj->loadError('Errors'); 
									$_err_obj->loadError('_errorhtml');
									return self::$test = false;
									exit();
								else:
									# check for file upload error
									if($arg_err !== 0):
										UserRegistrationModel::$outputError = 6;
										$_err_obj->loadError('Errors'); 
										$_err_obj->loadError('_errorhtml');
										return self::$test = false;
										exit();
									else:
										$id = uniqid("", true);
										self::$_avatar_new_name = $id . "." .$ext;
										move_uploaded_file($arg_tmp, "uploaded_pics/" . self::$_avatar_new_name);
										return self::$test = true;
									endif;
								endif;
							endif;
						endif;
						
					endif;
						


			}	



}



 ?>