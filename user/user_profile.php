<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php include 'parts/nav.php';?><!--nav area-->	
</body>
</html>

<?php 
include("connect.php");

if(isset($_SESSION['email']) && isset($_SESSION['name']))
{
	echo'<script>alert("yes session is set")</script>';
	echo $_SESSION['email'];
	/*
echo "
<div class='row'>
<div class='col-md-6 col-md-offset-3 text-center'><h2>Congratulation</h2><hr></div>
</div>
<div class='row'>
<div class='col-md-4 col-md-offset-4 text-center'>
<div class='alert alert-success'><h5>Wellcome ".$_SESSION['name'] ." you have successfully registered!</h5></div>
<a href='../index.php' class='btn btn-success' role='button'>Next</a>
</div>
</div>
";
*/

?>
 <br> 

      
      
<div class="container">

<div class="panel panel-default" >
  <!-- Default panel contents -->

  <div class="panel-heading"><h4 style="color:green">Your Profile Information</h4></div>

  <div class="panel-body">
    <p>
    	<!--
    	just paste image here
    	-->	
    	<div class="row">
    
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">

     <?php
   $sel=$_SESSION['email'];



       $query=mysqli_query($con," SELECT * FROM user_signup  WHERE email='$sel'");
              
            
             while($row=mysqli_fetch_array($query)){
           
	  $id=$row['id'];
	 $name=$row['full_name'];
	 $email=$row['email'];
	 $pass=$row['password'];
	 $mobile=$row['mobile'];
	   $image=$row['user_image'];

	  
	 

     
     
     echo "<img src='images/$image' class='img-responsive' ></img>";

    echo '</a>';
    

?>
    
  </div>
  

<!--  image zone finish here -->
    </p>
 

  <!-- Table -->




  <table class="table table-striped table-hover " >
  <hr>
   	 <thead align="center">
		<tr>

		<th> Id</th>
		<th> Name</th>
		<th> Email</th>

		<th> Delete Your Account</th>
		<th> Mobile no</th>
		<th>Delete Your Account</th>
		
		</tr>
		</thead>
		
<hr>
<?php
















		echo "<tr >
		<td> $id</td>

		<td>$name</td>

		<td>$email</td>

	

		<td>$mobile</td>

		

		<td><a href='edit_password.php?image=  $image' class='btn btn-default' >Change Password</a></td>
		<td><a href='delete.php?image=  $image' class='btn btn-danger'>Delete</a></td>
		
		</tr>";

		 } }?>
  </table>


</div>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
  
  <div class="btn-group" role="group">
   <a href="../index.php"><button type="button" class="btn btn-default" style="color:green; font-weight: bolder; hover:none">Continue Shopping</button></a>
   &nbsp;
  </div>
 
</div>

</div>

</div>

  </div>
  