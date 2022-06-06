<!DOCTYPE html>
<?php
session_start();
?>
<html>
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
       </div><!--panel-body close-->
      </div><!--panel close-->
    </div><!--col md close-->
  </div><!--row close-->
  <!--container close-->
  
   <?php
			
			if(isset($_POST['login']){
            include('connect.php');

      $_SESSION['email']= $email;
				 $email=$_POST['email'];
				 $Password=$_POST['password'];
			


       $query2=mysqli_query($con," SELECT * FROM admin where email='$email' and password='$password'");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 echo '<p style="color:red;">$name='.$row2['name'].'</p>';
               
                  
                 echo '<p style="color:red;">$email='.$row2['email'].'</p>';
              }

  ?>
    
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>