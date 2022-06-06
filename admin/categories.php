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


   
		<div class="panel-heading"><h4>All Categories</h4></div>
		<div class="panel-body">
		<table class="table table-striped">

		<thead>
			<tr>
			   <th>S.NO</th>
			   <th>User Name</th>
			
			    <th>Product Name</th>
			    
			    
			    <th style="background:wheat;">Product Categories</th>
			     <th>Update </th>
			     <th>Delete</th>

			  
			
		
		
			</tr>
		</thead>
			 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM bid_product ");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 $or_id=$row2['id'];
                 $name=$row2['name'];
                  $product_name=$row2['product_name'];
                  $Categories=$row2['product_category'];
                  

                  
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>
		
                  <?php
   
    echo "<tbody>

           <tr>
		     <td>$id</td>
		     <td>$name</td>

		   
		     <td>$product_name</td>
		     <td style='background:wheat;'>$Categories</td>

		   

		    
		     
		     
	
		<td><a href='update_category.php?reje=$or_id' class='btn btn-success'>Update</a></td>
		     
		<td><a href='delete_category.php?reje=$or_id' class='btn btn-danger'>Delete</a></td>
	

		


		   
	
		   
		   
		   
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