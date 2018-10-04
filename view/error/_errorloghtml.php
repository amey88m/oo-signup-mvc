

<div class='container'>
	<div class='row'>
		<div class='col-md-12'>
			<div class='alert alert-fixed alert-warning alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				</button>
				  	<span class='msg'>
				  		<?php 
				  			switch(LogModel::$outputError):
				  				
				  				case 0:
				  				print Errorhandling::$_err_log_msg['alert'][0];
				  				break;

				  				case 1:
				  				print Errorhandling::$_err_log_msg['alert'][1];
				  				break;

				  				case 2:
				  				print Errorhandling::$_err_log_msg['alert'][2];
				  				break;

				  			endswitch;
				  		?>
				  	</span>
			</div>
		</div>
	</div>
</div>