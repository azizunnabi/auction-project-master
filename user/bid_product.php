<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
include('connect.php');


     
     ?>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<!--<?php include 'core/init.php'; ?>-->
</head>
<body class="body">
<?php include 'parts/nav.php';?><!--nav area-->
<div class="container">
  <div class="row">
    <div class="col-md-3 col-md-offset-4">
      <div class="panel panel-default panel-login">
      <div class="panel-heading text-center">
       <img src="images/student.png" alt="sorry not found" width="120" height="100">
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
         <?php
         include('connect.php');
         if(isset($_POST['login'])){
          echo '<p style="color:red">hey you want to bid</p>';

          echo $email=$_POST['email'];
          echo $password=$_POST['password'];

       $query=mysqli_query($con," SELECT * FROM user_signup  WHERE email='$email' and password='$password'");
              
             $count=mysqli_num_rows($query);
             if($count>0){
              echo '<p style="green">hey your account exist</p>';
               while($row=mysqli_fetch_array($query)){
               $name=$row['full_name'];
               $em=$row['email'];
               $_SESSION['email']= $em;
               $pas=$row['password'];


             // echo '<script>window.open("bid_product1.php","_self")</script>';
              echo '<script>window.open("paypal_form.php","_self")</script>';
         }
             }
             else{

              echo '<p style="white">hey your account does not exist</p>';
             }
            }
         ?>
       </div><!--panel-body close-->
      </div><!--panel close-->
    </div><!--col md close-->
  </div><!--row close-->
  <!--container close-->
    
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>