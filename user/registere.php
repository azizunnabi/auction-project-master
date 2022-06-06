<!DOCTYPE html>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<!--<?php include 'core/init.php'; ?>-->
</head>
<body>

<?php include 'parts/nav.php';?><!--nav area-->
<div class="container"><!--banner container-->
<!--contact area-->
<div class="row">
<div class="col-md-4 col-md-offset-3" style="margin-top:10px;">
<h2>Create User Account</h2><hr>
	<form role="form" class="form-horizontal" data-toggle="validator" id="form">
		<div class="form-group"><!--start form group-->
		    <div class="input-group">
		    <span class="input-group-addon custom "><span class="glyphicon glyphicon-user change-signup"></span></span>
			<input type="text" data-minlength="5"  pattern="[a-zA-Z ]+" id="full" class="form-control custom input-lg" placeholder="Enter Full Name..." required>
            </div>
<div class="help-block with-errors"></div>
            </div><!--close form group-->
	  <div class="form-group"><!--start form group-->
		    <div class="input-group">
		    <span class="input-group-addon custom "><span class="change-signup">@</span></span>
			<input type="Email" data-error="Invalid Formate" pattern="[a-zA-Z]+(_\.)?[a-zA-Z0-9_]*@[a-zA-Z_\.]+\.[a-zA-Z]+$" id="email" class="form-control custom  input-lg" placeholder="Enter Email..." required>
		</div>
		<div class="help-block with-errors" id="email-error"></div>
		
		</div><!--close form group-->
		<div class="form-group"><!--start form group-->
		    <div class="input-group">
		    <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
			<input type="Password" id="password" data-minlength="5" class="form-control custom  input-lg" placeholder="Choose Password..." required>
		</div>
		<div class="help-block with-errors"></div>
		</div><!--close form group-->
		<div class="form-group"><!--start form group-->

		    <div class="input-group">
		    <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
			<input type="Password" id="inputPasswordConfirm" class="form-control custom input-lg" placeholder="Retype Password..." data-match="#password" data-match-error="Password not match try again....!" required>
		</div>
		<div class="help-block with-errors"></div>
		</div><!--close form group-->
		<div class="form-group"><!--start form group-->

		    <div class="input-group">
		    <span class="input-group-addon custom "><span class="glyphicon glyphicon-phone change-signup"></span></span>
			<input type="text" id="mobile" data-minlength="11" pattern="[0-9]+" class="form-control custom  input-lg" placeholder="Enter Mobile No..."required>
		
		</div>
		<div class="help-block with-errors"></div>
		</div><!--close form group-->
		<div class="form-group"><!--start form group-->
		<input type="submit" class="btn btn-regsiter" name="register" value="Register" id="registere">
		&nbsp;&nbsp;Already have an account <a href="">login</a>
	
		</div><!--close form group-->
	</form>
		</div><!--col 4 close-->
		<div class="col-md-2 text-center" style="margin-top:150px;"><!--col 2 start-->
			
    <!--upload user image start-->
    <div class="fileinput fileinput-new" data-provides="fileinput">
    <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
    <img src="http://placehold.it/150x150" alt="photo">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
    <div>
    <span class="btn btn-regsiter btn-file"><span class="fileinput-new">Choose Photo</span><span class="fileinput-exists">Change</span><input type="file" name="..." required></span>
    <a href="#" class="btn btn-regsiter fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
    </div>
    <!--upload user image close-->
    </div><!--col 2 close-->
</div><!--close row-->
<hr>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<a href="#">About us</a>&nbsp;&nbsp;
		<a href="#">Contact us</a>&nbsp;&nbsp;
		<a href="#">Terms & conditon</a>&nbsp;&nbsp;
		<a href="#">Privacy</a>&nbsp;&nbsp;
	</div>
</div><!--row close-->
</div><!--main container close-->
<br><br>
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>