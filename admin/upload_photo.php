<?php
  include('connect.php');
session_start();



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('index.php','_self')</script>";
}
else{
  ?>
<!DOCTYPE html>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<?php include 'core/init.php'; ?>
<?php include_once 'core/func/function.php'; ?>
</head>
<body>
<?php include 'admin_left_area.php';?><!--nav area-->

<div class="container"><!--banner container-->
   <div class="row upload-img">
       <div class="col-md-12">
       <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Upload Your Profile Picture</h4>
        </div><!--panel heading close-->
        <div class="panel-body">
<form method="post" action="" id="form" enctype="multipart/form-data">
      <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
    <img src="images/user.png" alt="...">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
    <input type="file" id="file" name="file"></span>
    <input type="button" id="image" name="submit" class="btn btn-default" value="Next">
    <input type="button" id="skip" class="btn btn-default" value="Skip">

   

  </div>
</div>
</form>
<div class="upload-error"></div>
</div><!--panel body close-->
</div><!--panel default close-->
       </div><!--col md 4 close-->
   </div><!--row close-->

    </div><!---container close-->
 
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>