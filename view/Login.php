<?php include_once "inc/header.inc.php"?>

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
								<input type="email" name="email" class="form-control" value="<?php (isset($_POST['email']))? print $_POST['email']:'' ?>" />
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



<?php include_once "inc/footer.inc.php" ?>
</body>
</html>