<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" >
<title><?php print $title="oo" ?></title>

<link rel="stylesheet" href="<?php print 'sass/style.css' ?> ">
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php  print "<a href='login' class='btn btn-info br-0 float-right'>login</a>"?>
		</div>
	</div>
</div>




<div class="container">
	
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card p-2">
			  <h4 class="text-center text-uppercase">signup oo form !</h4>
			  <div class="card-body">
			    <h5 class="card-title">Please fill all the below details: </h5>

			 <form method="POST" name="formreg" autocomplete="" enctype="multipart/form-data" >

					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					    <span style='color:#f02'> <?php   ?></span>
					  </div>
					  <div class="form-group">
					    <label>Password</label>
					    <input type="password" class="form-control" placeholder="Password" name="pass">
					    <span style='color:#f02'> <?php    ?></span>
					  </div>
					  <div class="form-group">
					  	<label>Upload your Resume</label>
    					<input type="file" class="form-control-file" name="resume">
    					<span style='color:#f02'> <?php    ?></span>
					  </div>
					  <div class="form-group">
					  	<label>Upload your profile pic</label>
    					<input type="file" class="form-control-file" name="avatar">
    					<span style='color:#f02'> <?php    ?></span>
					  </div>
					  <div class="form-group">
						<select name="gender[]" class="form-control">
							<option>F</option>
							<option>M</option>
						</select>
						<span style='color:#f02'> <?php    ?></span>
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terms">
					    <label class="form-check-label" for="exampleCheck1">I accept the terms & condition given in the policy.
					    </label>
					    <span style='color:#f02'> <?php    ?></span>
					  </div>
					  <button type="submit" name="btnreg" class="btn btn-primary">Submit</button>
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
