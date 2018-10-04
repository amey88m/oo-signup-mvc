<?php 
/**
 *Base controller
 */
class Controller
{	

	// load View
	public function loadView($cname)
	{
		require_once "./view/" . $cname . ".php";
	}
	
	// load model
	public function loadModel($model)
	{
		require_once "./model/" . $model . ".php";

	}


	// load Errors
	public function loadError($err)
	{
		require_once "./view/error/" . $err . ".php";
	}


	// load classess
	public function loadClass($clname)
	{
		require_once "classes/" . $clname . ".php";
	}

}

?>