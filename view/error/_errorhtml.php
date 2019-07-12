<?php
use model\UserRegistrationModel;
?>

<div class='container'>
	<div class='row'>
		<div class='col-md-12'>
			<div class='alert alert-fixed alert-warning alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				</button>
				  	<span class='msg'>
				  		<?php 
				  			
				  			switch(UserRegistrationModel::$outputError):
				  				
				  				case 0:
				  				print Errors::$_err_msg['alert'][0]; // email empty
				  				break;

				  				case 1:
				  				print Errors::$_err_msg['alert'][1]; // email invalid
				  				break;

				  				case 2:
				  				print Errors::$_err_msg['alert'][2]; // password
				  				break;

				  				case 3:
				  				print Errors::$_err_msg['alert'][3]; // upload resume
				  				break;

				  				case 4:
				  				print Errors::$_err_msg['alert'][4]; // file .ext 
				  				break;

				  				case 5:
				  				print Errors::$_err_msg['alert'][5]; // file size
				  				break;

				  				case 6:
				  				print Errors::$_err_msg['alert'][6]; // upload error
				  				break;

				  				case 7:
				  				print Errors::$_err_msg['alert'][7];
				  				break;

				  				case 8:
				  				print Errors::$_err_msg['alert'][8]; // gender check
				  				break;
								  
								case 9:
								print Errors::$_err_msg['alert'][9]; // terms & condition
								break;

								case 10:
								print Errors::$_err_msg['alert'][10]; // user already exits
								break;

								case 11:
								print Errors::$_err_msg['alert'][11]; // user registered successfully
								break;

				  			endswitch;
				  		?>
				  	</span>
			</div>
		</div>
	</div>
</div>