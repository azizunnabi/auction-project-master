<?php
  include('connect.php');



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('index.php','_self')</script>";
}
else{
	?>
            
<div class="col-lg-8">
		<div class="panel panel-primary">


   
		<div class="panel-heading"><h4>Latest pending Products</h4></div>
		<div class="panel-body">
		<table class="table table-striped">

		<thead>
			<tr>
			   <th>S.NO</th>
			   <th>Name</th>
			
			    <th>Email</th>
			    
			    
			    <th>Image</th>

			    <th>End Date</th>
			
		
		
			</tr>
		</thead>
			 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM bid_product where status='pending' limit 4");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 $name=$row2['name'];
                 $email=$row2['email'];
                  $image=$row2['product_image'];
                  $status=$row2['status'];
                  $end_date=$row2['end_date'];
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>
		
                  <?php
   
    echo "<tbody>

           <tr>
		     <td>$id</td>
		     <td>$name</td>

		   
		     <td>$email</td>

		   <td><img src='../images/$image' width='70px' height='30px'></img></td>
		     

		     <td>$end_date</td>


		   
	
		   
		   
		   
		</tr>
	
		
		</tbody>";
		}
		
		?>
		</table>
        </div>
        </div>
        </div>
        <?php } ?>
        