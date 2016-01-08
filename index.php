<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Hablar</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body style="background: url('images/wood_pattern1.jpg') repeat; ">
	<?php require_once('header.php'); ?>
	<br><br><br><br><br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-lg-4 col-md-4" style="opacity: 0.9;">
			<div class="well bs-component text-center">
				<form>
				<fieldset>
					<legend class="text-left">Login</legend>
					<div class="form-group">
					  <!-- <label for="username">Username</label> -->
					  <input type="text" class="form-control" id="username" placeholder="Username">
					</div>
					<div class="form-group">
					  <!-- <label for="password">Password</label> -->
					  <input type="password" class="form-control" id="password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-default">Login</button>
					<br><br>
					<div class="form-group">
						<a href="#">Forgot Password?</a>
					</div>
				  </fieldset>
				</form>
			</div>
		</div>
		<div class="col-md-2"></div>
		<div class="col-lg-4 col-md-4" style="opacity: 0.9;">
			<div class="well bs-component text-center">
				<fieldset>
					<legend class="text-left">Register</legend>
					<br>
					<div class="form-group">
						<a href="register.php"><button class="btn btn-primary">Register for a new family</button></a>
					</div>
					<br>- OR -<br><br>
					<div class="form-group">
						<a href="registerexisting.php"><button class="btn btn-info">Register in an existing family</button></a>
					</div>
					<br>
				</fieldset>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</body>
</html>