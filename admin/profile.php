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
<!--devided index page in parts-->

<?php require_once 'parts/jsfiles.php'; ?><!--header area-->

<?php require_once 'parts/header.php'; ?><!--header area-->
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>
<body>
<?php require_once 'nav.php';?><!--nav area-->

<?php require_once 'left.php';?><!--nav area-->


<div class="col-lg-8">

<div class="container-fluid">
   <div class="panel panel-primary">
   <div class="panel-heading">
   <div class="col-md-3">
   <img src="admin_images/aya.jpg" width="100%" class="img-thumnail img-responsive">
   </div>
   <div class="col-md-7">
   <h3>Aziz Un Nabi</h3>
   <p><i class="glyphicon glyphicon-heart"></i>&nbsp;&nbsp;web developer</p>

   <p class="shoow"> <i class="glyphicon glyphicon-road"></i>&nbsp;&nbsp;ABC Road, ABC City, ABC street</p>

   <p  ><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;aziz123@gmail.com</p>

   <p><i class="glyphicon glyphicon-phone"></i>&nbsp;&nbsp;7865544444</p>

   <p><i class="glyphicon glyphicon-heart"></i>&nbsp;&nbsp;Pakistan</p>


   </div>
   <div class="clearfix"></div>
   </div>
   </div>
    

   

</div>
</div>


<div class="col-lg-8">
<div class="col-md-6">
 <div class="panel panel-default">
 <div class="panel-heading">
 <div class="table table-condenced">
 <table class="table tabel-condenced">
 <tbody>
 	<tr>
 	  <th width="100%">Gender</th>
 	  <td>Male</td>
 	</tr>
 	<tr>
 	  <th width="100%">M.Status</th>
 	  <td>Unmarried</td>
 	</tr>
 	<tr>
 	  <th width="100%">Website</th>
 	  <td>www.Onlineauction.com</td>
 	</tr>
 	<tr>
 	  <th width="100%">Gender</th>
 	  <td>Male</td>
 	</tr>
 </tbody>
 </table>
 </div>
 </div>
 </div>
</div>


<div class="col-md-6">
 <div class="panel panel-default">
 <div class="panel-heading">
 <div class="table table-condenced">
 <table class="table tabel-condenced">
 <tbody>
 	<tr>
 	  <th width="10%">1</th>
 	  <td><a href=" ">First  Posts</a></td>
 	</tr>
 	<tr>
 	  <th width="10%">2</th>
 	  <td><a href=" ">Second Post</a></td>
 	</tr>
 	<tr>
 	  <th width="10%">3</th>
 	  <td><a href=" ">Third Post</a></td>
 	</tr>
 	<tr>
 	  <th width="10%">4</th>
 	  <td><a href=" ">Fourth Post</a></td>
 	</tr>
 </tbody>
 </table>
 </div>
 </div>
 </div>
</div>
</div>
<div class="col-lg-8">

<div class="container-fluid">
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4>about me</h4>
 <p> I aziz un nabi is a software engineering student . i love programming . I want to join latest IT forums to learn new trends  in IT industry </p>
 </div>
 </div>
 </div>
</div>
</div>



<div class="col-md-6 ">
<div class="col-md-3 pull-left" style="background:red;">hi</div>

<div class="col-md-3 pull-right"style="background:red;">helllo</div>
</div>




<!-- this is to display all signd users-->
               
            
 

                  
              
               

             

     
           

		    
		     
		     
	

		


		   
	
		   
		   
	
		

        
</body>
</html>
<!-- all signed users finish here-->



<?php } ?>

