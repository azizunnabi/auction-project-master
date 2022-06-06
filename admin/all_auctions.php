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
<?php include('admin_left_area.php'); ?>

                      <!-- pending products start here-->
                    
            
<div class="col-lg-12">
		<div class="panel panel-primary">

<?php

      $_SESSION['admin_email']= $email;
?>
   
		<div class="panel-heading"><h4>All Auctions</h4></div>
		<div class="panel-body">
		<table class="table table-striped">

		<thead>
			<tr>
			   <th>S.NO</th>

			   <th>First Name</th>
			   <th>Last Name</th>
			     <th>Product Name</th>
			   <th>Bid Rate</th>
			
			    <th>Email</th>
			    
			    
			    <th>Contact Number</th>
			     <th>Country</th>
			    
			     <th>Delete</th>

			  
			
		
		
			</tr>
		</thead>
			 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM bid_started_products ");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 
                 $serial=$row2['cus_id'];
                  $p_name=$row2['product_name'];
                  $first_name=$row2['first_name'];

                  $last_name=$row2['last_name'];
                  $bid_rate=$row2['bid_rate'];

                  $email=$row2['email'];

                  $contact=$row2['contact'];

                  $country=$row2['country'];

                  
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>
		
                  <?php
   
    echo "<tbody>

           <tr>
		     <td>$serial</td>
		    
		     <td>$first_name</td>
		     <td>$last_name</td>
		       <th>$p_name</th>
		     <td style='background:pink;'>$bid_rate</td>

		   
		     <td>$email</td>

		   <td>$contact</td>
		   <td>$country</td>
		 

		    
		     
		     
	
		     
		<td><a href='all_auctions.php?reje=$email' class='btn btn-danger'>Delete</a></td>
	

		


		   
	
		   
		   
		   
		</tr>
	
		
		</tbody>";


	}

		
if(isset($_GET['reje'])){
			
			  $em= $_GET['reje'];
			 $del=mysqli_query($con,"delete from bid_started_products where email='$em'");
			 echo '<script>alert("Your product is deleted successfully")</script>';


		}



		
		
		
		?>
		</table>
        </div>
        </div>
        </div>
        
</body>
</html>
<?php } ?>