<?php 
use classes\Route;
use model\UserRegistrationModel;
use controller\UserRegistration;
use controller\LoginController;
use controller\WelcomeController;


// include "controller/UserRegistration.php";

Route::set_route('index.php', function(){
	$usermodel = new UserRegistrationModel;
	$usermodel->checkUserInputs();
	$cont = new UserRegistration;
	$cont->AuthorizedUser();
});


Route::set_route('login',function(){
	LoginController::log();
});


// Route::set_route('about',function(){
// 	AboutController::PageviewController();
// });


Route::set_route('welcome',function(){
	WelcomeController::welcome();
});


?>