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

      $_SESSION['email']= $email;
?>
   
		<div class="panel-heading"><h4>Searched Keywords</h4></div>
		<div class="panel-body">
		<table class="table table-striped">

		<thead>
			<tr>
			   <th>S.NO</th>
			   <th>Name</th>
			
			    <th>Email</th>
			    
			    
			    <th>search_keyword</th>
			     <th>Mobile No</th>
			     <th>Status</th>
			     <th>Delete</th>

			  
			
		
		
			</tr>
		</thead>
			 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM searched_products ");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 
                 $serial=$row2['id'];
                  $name=$row2['name'];
                  $email=$row2['email'];

                  $mobile=$row2['mobile_number'];
                  $search_keyword=$row2['search_keyword'];

                  $status=$row2['status'];

                  
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>
		
                  <?php
   
    echo "<tbody>

           <tr>
		     <td>$serial</td>
		     <td>$name</td>

		   
		     <td>$email</td>

		   <td style='background:wheat;'>$search_keyword</td>
		   <td>$mobile</td>
		   <td>$status<td>

		    
		     
		     
	
		     
		<td><a href='reject_searched_products.php?reje=$email' class='btn btn-danger'>Delete</a></td>
	

		


		   
	
		   
		   
		   
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
<?php } ?>