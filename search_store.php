
<!DOCTYPE html>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<?php include 'core/init.php'; ?>
<?php include_once 'core/func/function.php'; ?>


<!--devided index page in parts-->
<?php require_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php require_once 'parts/nav.php';?><!--nav area-->
</head>
<body>

<div class="" style="width:100%;height:80px;"></div>
<div class="container tex-center"><!--banner container-->
   <div class="row ">
       <div class="col-lg-8">
      



<div class="upload-error"></div>
</div><!--panel body close-->
</div><!--panel default close-->
      
   </div><!--row close-->

    </div><!---container close-->

    <div class="container text-center ">
    <div class="row">

    
    
    <p> If You have already created your account please click on !&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">Already Have Account</span> ,&nbsp;&nbsp;&nbsp;&nbsp;If you are new user then click on ! <span style="color:blue;">&nbsp;&nbsp;&nbsp;&nbsp;New User</span> </p>
    
    
    </div>
    </div>




    <div class="container text-center ">
     <hr>
    <div class="row " style="padding-top:50px;">
    <div class="col-lg-12 text-center">
   
   
    <?php  $product_name=$_GET['product_name'];?>
   
    <div class="container">
    <div class="row text-center">
     
      <a href="user_search_login.php?product_name='
    <?php echo $product_name;?>' " class="btn btn-default btn-lg" >Already Have Account
    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="user/user_registere.php" button2" class="btn btn-default btn-lg" >New User
    </a>
    </div>
    </div>



     

 
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>