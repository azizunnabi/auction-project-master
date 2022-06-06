<?php 
if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
{
 
header('location:user_login.php');

}
else
{

 header('location:user_dashboard.php');
}

 ?>


<!DOCTYPE html>
<html>
<head>
<?php require_once 'parts/header.php'; ?><!--header area-->
<?php require_once 'core/init.php';?>
<?php require_once 'core/func/function.php'; ?>
</head>
<body id="dashboard-body">
<nav class="navbar navbar-dafault navbar-dashboard">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Bids</a></li>
        <li><a href="#">Services</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        
      </ul>
      </div><!--collapse close-->
      </div><!--container fluid close-->
      </nav><!--nav close-->
<div class="row">
 <div class="col-md-2 list-dash">
   <div class="list-group list-group-c">
     <?php get_image(); ?>
     <a href="#" class="list-group-item"><span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;Change Password</a>
     <a href="#" class="list-group-item"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Change Picture</a>
   </div><!--list group close-->
 </div><!--md 2 close--> 
 <div class="col-md-10">
   <div class="page-header">
     
   </div>
 </div>
</div><!--row close-->

    
<?php require_once 'parts/jsfiles.php'; ?>
</body>
</html>