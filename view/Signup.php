<?php include_once "inc/header.inc.php"?>

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

			 <form method="POST" name="formreg" autocomplete="off" enctype="multipart/form-data" >

					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
						<?php
						$email = (isset($_POST['email']))? $_POST['email']:"";
						?>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php print $email; ?>">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					    <span style='color:#f02'> <?php   ?></span>
					  </div>
					  <div class="form-group">
					    <label>Password</label>
						<?php
						$pass = (isset($_POST['pass']))? $_POST['pass']:"";
						?>
					    <input type="password" class="form-control" placeholder="Password" name="pass" value=<?php print $pass; ?>>
					    <span style='color:#f02'> <?php    ?></span>
					  </div>
					  <div class="form-group">
					  	<label>Upload your Resume</label>
						  <?php
						  $resume = (isset($_FILES['resume']['name']))? $_FILES['resume']['name']:"";
						  ?>
    					<input type="file" class="form-control-file" name="resume" value="<?php print $resume; ?>">
    					<span style='color:#f02'> <?php    ?></span>
					  </div>
					  <div class="form-group">
					  	<label>Upload your profile pic</label>
						  <?php
						  $avatar = (isset($_FILES['avatar']['name']))? $_FILES['avatar']['name']:"";
						  ?>
    					<input type="file" class="form-control-file" name="avatar" value="<?php print $avatar; ?>">
    					<span style='color:#f02'> <?php    ?></span>
					  </div>
					  <div class="form-group">
					  	<select name="gender[]" class="form-control">
							<option value='0'>select gender:</option>
							<option >F</option>
							<option >M</option>
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

<?php include_once "inc/footer.inc.php" ?>
</body>

</html>
