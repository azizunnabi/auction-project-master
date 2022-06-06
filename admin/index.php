<!DOCTYPE html>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<!--<?php include 'core/init.php'; ?>-->
</head>
<body class="body">
<div class="container">
  <div class="row">
    <div class="col-md-3 col-md-offset-4">
      <div class="panel panel-default panel-login">
      <div class="panel-heading text-center">
       <img src="../images/student.png" alt="sorry not found" width="120" height="100">
       </div><!--panel heading close-->
       <div class="panel-body">
         <form action="" method="post">
           <div class="form-group">
             <div class="input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
               <input type="email" name="email" class="form-control" placeholder="Enter Email....">
             </div><!--input group close-->
           </div><!--form group close-->
           <div class="form-group">
             <div class="input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
               <input type="password" name="password" class="form-control" placeholder="Enter Password....">
             </div><!--input group close-->
           </div><!--form group close-->
           <input type="submit" name="login" value="Login" class="btn btn-success btn-login">
           &nbsp;&nbsp;&nbsp;<a href="user_registere.php" class="account">Create an account!</a>
         </form><!--form close-->
       </div><!--panel-body close-->
      </div><!--panel close-->
    </div><!--col md close-->
  </div><!--row close-->
  <!--container close-->

  
  <?php
include('connect.php');

     

  if(isset($_POST['login'])){
      $email=$_POST['email'];
      $password=$_POST['password'];


     $query=mysqli_query($con,"select * from admin  where admin_email='$email' and password='$password'");
     while($row1=mysqli_fetch_array($query)){

      $email=$row1['admin_email'];
      $_SESSION['admin_email']= $email;
     }
     
  $coun=mysqli_num_rows($query);
  if($coun>0){

      $_SESSION['admin_email']= $email;
  	echo '<script>alert("You have successfully loged in !")</script>';

  	echo "<script>window.open('orignaladmin.php', '_self')</script>";
  	exit();
  }
     	 
     else{

      $_SESSION['admin_email']= $email;
  	echo '<script>alert("Account Does not exist, Please try with correct eamil and address")</script>';

     } 
  }
 

  ?>
    
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>