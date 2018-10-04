

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
				  				print Errorhandling::$_err_msg['alert'][0];
				  				break;

				  				case 1:
				  				print Errorhandling::$_err_msg['alert'][1];
				  				break;

				  				case 2:
				  				print Errorhandling::$_err_msg['alert'][2];
				  				break;

				  				case 3:
				  				print Errorhandling::$_err_msg['alert'][3];
				  				break;

				  				case 4:
				  				print Errorhandling::$_err_msg['alert'][4];
				  				break;

				  				case 5:
				  				print Errorhandling::$_err_msg['alert'][5];
				  				break;

				  				case 6:
				  				print Errorhandling::$_err_msg['alert'][6];
				  				break;

				  				case 7:
				  				print Errorhandling::$_err_msg['alert'][7];
				  				break;

				  				case 8:
				  				print Errorhandling::$_err_msg['alert'][8];
				  				break;
				  				
				  			endswitch;
				  		?>
				  	</span>
			</div>
		</div>
	</div>
</div>