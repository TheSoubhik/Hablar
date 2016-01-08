<!DOCTYPE html>
<html>
<head>
	<title>Register as an Existing User</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.standalone.css">
  <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.en-GB.min.js"></script>
  <style type="text/css">
		.control-label {
		text-align: left !important;
	}
	</style>
</head>
<body style="background: url('images/strange_bullseyes.png');">
<?php require_once('header.php'); ?>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6 text-center" style="background-color: white;">
<form class="form-horizontal text-center">
  <fieldset>
    <legend><br>Register<br></legend>
     <div class="form-group">
  <div class="col-lg-2"></div>
      <label for="inputfamilyid" class="col-lg-3 control-label">Family Id</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputusername" placeholder="Family Id">
      </div>
      <div class="col-lg-2"></div>
    </div>
    <hr>
    <div class="form-group">
	<div class="col-lg-2"></div>
      <label for="inputusername" class="col-lg-3 control-label">Username</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputusername" placeholder="Username">
      </div>
      <div class="col-lg-2"></div>
    </div>
     <div class="form-group">
     <div class="col-lg-2"></div>
      <label for="inputpwd" class="col-lg-3 control-label">Password</label>
      <div class="col-lg-5">
        <input type="password" class="form-control" id="inputpwd" placeholder="Password">
      </div>
      <div class="col-lg-2"></div>
    </div>
     <div class="form-group">
     <div class="col-lg-2"></div>
      <label for="inputcpwd" class="col-lg-3 control-label">Confirm Password</label>
      <div class="col-lg-5">
        <input type="password" class="form-control" id="inputcpwd" placeholder="Confirm Password">
      </div>
      <div class="col-lg-2"></div>
    </div>
    <hr>
    <div class="form-group">
    <div class="col-lg-2"></div>
      <label for="inputname" class="col-lg-3 control-label">Name</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputName" placeholder="Name">
        </div>
        <div class="col-lg-2"></div>
    </div>
     <div class="form-group">
     <div class="col-lg-2"></div>
      <label for="inputEmail" class="col-lg-3 control-label">Email</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputemail" placeholder="Email id">
      </div>
      <div class="col-lg-2"></div>
    </div>
      <div class="form-group">
      <div class="col-lg-2"></div>
      <label class="col-lg-3 control-label">Gender</label>
      <div class="radio">
      <div class="col-lg-2">
                  <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked="">
            Male
          </label>
          </div>
          <div class="col-lg-3">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="female">
            Female
          </label>
              </div>
              </div>
      <div class="col-lg-2"></div>
    </div>
     <div class="form-group">
    <div class="col-lg-2"></div>
    <label for="inputdob" class="col-lg-3 control-label">Date of Birth</label>
    <div class="col-lg-5">
      <div class="input-group date" data-provide="datepicker">
        <input type="text" class="form-control" placeholder="mm/dd/yyyy">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
        </div>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
     <div class="form-group">
    <div class="col-lg-2"></div>
      <label for="inputphone" class="col-lg-3 control-label">Phone No.</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputphone" placeholder="Phone no.">
        </div>
        <div class="col-lg-2"></div>
    </div>
         <br>
    <button class="btn btn-primary">Submit</button>
    <br>
    <br>
  </fieldset>
</form>
</div>
<div class="col-md-3">
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(e){
      $('.datepicker').datepicker({format: 'dd/mm/yyyy'});
  });
</script>
</body>
</html>