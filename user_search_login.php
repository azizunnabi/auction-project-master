<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<!--<?php include 'core/init.php'; ?>-->
</head>
<body class="body">
<?php include 'parts/nav.php';?><!--nav area-->
<div class="" style="width:1005;height:50px;"></div>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default ">
      <div class="panel-heading text-center " >
       <img src="images/student.png" alt="sorry not found" width="120" height="100">
       </div><!--panel heading close-->
       <div class="panel-body">

        <?php  $product_name=$_GET['product_name']; ?>
         <form action="" method="post">
           <div class="form-group">
             <div class="input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
               <input type="email" name="email" class="form-control input-lg" placeholder="Enter Email....">
             </div><!--input group close-->
           </div><!--form group close-->
           <div class="form-group">
             <div class="input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
               <input type="password" name="password" class="form-control input-lg " placeholder="Enter Password....">
             </div><!--input group close-->
           </div><!--form group close-->
           <input type="submit" name="login" value="Login" class="btn btn-success btn-login  input-lg">
           &nbsp;&nbsp;&nbsp;<a href="user/user_registere.php" class="btn  btn-login  input-lg" >create an account</a>
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


              $query=mysqli_query($con,"select * from user_signup  where email='$email' and password='$password'");
              while($row=mysqli_fetch_array($query))
              {
                 $password=$row['password'];
                $_SESSION['password']=$password;
              }

                  $conut=mysqli_num_rows($query);
                 if($conut>=1){
                   
               
                 $_SESSION['password']=$password;
               echo"<script>window.open('user_search_complete.php','_self')</script>";

                 }
               
              else{

                echo'<center><p style="color:red;">Account Does not Exist , Please Try another.</p></center>';

              }
              }
            ?>
              
              

      
    
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>