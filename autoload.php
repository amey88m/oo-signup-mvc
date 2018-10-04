<?php 

function __autoload($classname)
{
	if(file_exists("classes/" . $classname . ".php")):
		require_once "classes/" . $classname . ".php";
	elseif(file_exists("controller/" . $classname . ".php")):
		require_once "controller/" . $classname . ".php";
	elseif(file_exists("model/" . $classname . ".php")):
		require_once "model/" . $classname . ".php";
	endif;
}


?>