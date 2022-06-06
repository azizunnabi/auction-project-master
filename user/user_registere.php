<!DOCTYPE html>
<script>alert("hi");</script>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<!--<?php include 'core/init.php'; ?>-->
</head>
<body class="body">
<div class="shakilkhan">
<?php include 'parts/nav.php';?><!--nav area-->

<div class="container"><!--banner container-->
   <div class="row">
       <div class="col-md-7 col-md-offset-2">
                <div class="page-header page-change">
         <h3>Create User Account</h3>
      </div>
           <form action="">
               <div class="form-group col-md-7">
                  <div class="input-group">
                  <span class="input-group-addon user"><span class="glyphicon glyphicon-user"></span></span>
                   <input type="text" id="full" class="form-control input-lg" placeholder="Enter Full Name...">
                   </div>
               </div>
               <div class="name-error col-md-5"></div>
               <div class="form-group col-md-7">
                  <div class="input-group">
                  <span class="input-group-addon email"><span>@</span></span>
                   <input type="email" id="email" class="form-control input-lg" placeholder="Enter Email....">
                   </div>
               </div>
               <div class="email-error col-md-5"></div>
               <div class="form-group col-md-7">
               <div class="input-group">
               <span class="input-group-addon password"><span class="glyphicon glyphicon-lock"></span></span>
               <input type="password" id="password" class="form-control input-lg" placeholder="Enter Password...">
                   </div>
               </div>
               <div class="password-error col-md-5"></div>
               <div class="form-group col-md-7">
                  <div class="input-group">
                  <span class="input-group-addon re_password"><span class="glyphicon glyphicon-lock"></span></span>
                   <input type="password" id="re-password" class="form-control input-lg" placeholder="Re-type Password....">
                   </div>
               </div>
               <div class="re-password-error col-md-5"></div>
               <div class="form-group col-md-7">
                  <div class="input-group">
                  <span class="input-group-addon mobile"><span class="glyphicon glyphicon-phone"></span></span>
                   <input type="text" id="mobile" class="form-control input-lg" placeholder="Enter Mobile.....">
                   </div>
               </div>
               <div class="mobile-error col-md-5"></div>
               <div class="form-group col-md-7">
                   <input type="button" id="submit" value="SignUp" class="btn btn-default input-lg"><a href="user_login.php" class="account">&nbsp;&nbsp;&nbsp;&nbsp;Already have an account!</a><br><br>
                   <div class="all-fields"></div>
               </div>
               <div class="form-error col-md-5"></div>
           </form>
       </div><!--col md close-->

   </div><!-- row close-->
   <br><br>
   <div class="row">
       <div class="col-md-6 col-md-offset-2">
           &nbsp;&nbsp;<a href="#" class="link">Home</a>&nbsp;&nbsp;
           <a href="#" class="link">Poclicy</a>&nbsp;&nbsp;
           <a href="#" class="link">About Us</a>&nbsp;&nbsp;
           <a href="#" class="link">Contact Us</a>&nbsp;&nbsp;
       </div>
   </div>
    </div><!---container close-->
    </div><!--shakilkhan close-->
    
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>