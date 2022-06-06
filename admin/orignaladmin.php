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
</head>
<body>
<?php require_once 'parts/nav.php';?><!--nav area-->



<!-- this is to display all signd users-->
               
            
<div class="col-lg-12">
		<div class="panel panel-primary">

<?php   include('connect.php'); ?>

   
		<div class="panel-heading"><h4>Signed In Users</h4></div>
		<div class="panel-body">
		<table class="table table-striped">

		<thead>
			<tr>
			   <th>S.NO</th>
			   <th>Name</th>
			
			    <th>Email</th>
			    
			    
			    <th>Image</th>
			     <th>Mobile No</th>
			     <th>Delete</th>

			  
			
		
		
			</tr>
		</thead>
			 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM user_signup limit 5");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 
                 $full_name=$row2['full_name'];
                  $email=$row2['email'];
                  $image=$row2['user_image'];
                  $mobile=$row2['mobile'];

                  
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>
		
                  <?php
   
    echo "<tbody>

           <tr>
		     <td>$id</td>
		     <td>$full_name</td>

		   
		     <td>$email</td>

		   <td><img src='../images/$image' width='70px' height='30px'></img></td>
		   <td>$mobile</td>

		    
		     
		     
	
		     
		<td><a href='reject_signed_user.php?reje=$email' class='btn btn-danger'>Delete</a></td>
	

		


		   
	
		   
		   
		   
		</tr>
	
		
		</tbody>";
	}

		

		if(isset($_GET['reje'])){
			// echo $rej=$_GET['reje'];
			 echo 'hi';


		}



		
		
		
		?>
		</table>
        </div>
        </div>
        </div>
        
</body>
</html>
<!-- all signed users finish here-->



</body>
</html>
<?php } ?>
