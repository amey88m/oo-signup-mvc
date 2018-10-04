<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" >
<title><?php print $title="oo" ?></title>

<link rel="stylesheet" href="<?php print 'sass/style.css' ?> ">
</head>
<body>

<!-- alert  -->
<div class='container'>
	<div class='row'>
		<div class='col-md-12'>
			<div class='alert alert-fixed alert-warning alert-dismissible fade d-none' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				</button>
				  	<span class="msg"></span>
			</div>
		</div>
	</div>
</div>
<!-- /alert -->

<div class="container mt-4">
	
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card p-2">
			  <h4 class="text-center text-uppercase">login</h4>
			  <div class="card-body">
			    <h5 class="card-title my-4"></h5>

					<form method="POST" name="formlog" autocomplete="" >

							<div class="form-group">
								<h6 class="text-danger">Enter email address:</h6>
								<input type="email" name="email" class="form-control" />
								<h6 class="text-danger my-4">Enter password:</h6>
								<input type="password" name="password" class="form-control" />
							</div>
							<button type="submit" name="btnlogin" class="btn btn-danger">Login</button>
							
					</form>

			  </div>
			</div>
		</div>
	</div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>