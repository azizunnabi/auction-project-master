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
<div class="page-header"><h1>New Post</h1></div>
<div class="container-fluid">
    <form class="form-horizontal">
    <div class="form-group">
	<label for="image">Upload an Image </label>
	<input type="file" id="image" class="btn btn-primary">

    </div>
    <div class="form-group">
	<label for="image">Title </label>
	<input type="text" id="title" class="form-control">
	
    </div>
    <div class="form-group">
	<label for="category">Category </label>
	<select id="category" class="form-control" name="category">
		<option value="admin">Admin</option>
		<option value="user">User</option>
	</select>
	
   </div>
   <div class="form-group">
	<label for="descreption">Descreption </label>
	<textarea id="descreption" class="form-control"></textarea>
	
   </div>
   <div class="form-group">
	<label for="status">Status </label>
	<select id="status" class="form-control" name="status">
		<option value="public">Public</option>
		<option value="draft">Draft</option>
	</select>
	
  </div>
  <div class="form-group">
	
	<button class="btn btn-block btn-danger">Submit</button>
	
  </div>
  </form>
</div>
<div class="clearfix"></div>









<!-- this is to display all signd users-->
               
            
 

                  
              
               

             

     
           

		    
		     
		     
	

		


		   
	
		   
		   
	
		

        
</body>
</html>
<!-- all signed users finish here-->

<?php } ?>

