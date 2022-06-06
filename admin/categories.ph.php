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


   
		<div class="panel-heading"><h4>Signed In Users</h4></div>
		<div class="panel-body">
		<table class="table table-striped">

		<thead>
			<tr>
			   <th>S.NO</th>
			   <th>User Name</th>
			
			    <th>Product Name</th>
			    
			    
			    <th>Product Categories</th>
			     <th>Mobile No</th>
			     <th>Delete</th>

			  
			
		
		
			</tr>
		</thead>
			 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM bid_productts ");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 
                 $product_name=$row2['product_name'];
                  $product_categories=$row2['product_categories'];
                  $user_name=$row2['user_name'];
                  

                  
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>
		
                  <?php
   
    echo "<tbody>

           <tr>
		     <td>$id</td>
		     <td>$user_name</td>

		   
		     <td>$product_categories</td>

		   <td>$product_name</td>

		    
		     
		     
	
		     
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
<?php } ?>