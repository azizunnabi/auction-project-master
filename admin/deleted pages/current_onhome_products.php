<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="col-lg-12">
		<div class="panel panel-primary">


   
		<div class="panel-heading " ><h4>Signed Users</h4></div>
		<div class="panel-body">
		<table class="table table-striped">

		<thead>
			<tr>
			   <th>S.NO</th>
			   <th>Name</th>
			
			    <th>Email</th>
			    
			    
			    <th>Image</th>

			    <th>Price</th>

			    <th>End Date</th>
			  
			   
			
		
		
			</tr>
		</thead>
			 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM bid_product where status='approved' limit 8");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 $name=$row2['name'];
                 $email=$row2['email'];
                  $image=$row2['product_image'];
                  $status=$row2['status'];
                  $end_date=$row2['end_date'];

                  $bid_rate=$row2['bedding_rate'];
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>
		
                  <?php
   
    echo "<tbody>

           <tr>
		     <td>$id</td>
		     <td>$name</td>

		   
		     <td>$email</td>

		   <td><img src='../images/$image' width='70px' height='30px'></img></td>

		    <td>$bid_rate</td>
		     

		     <td>$end_date</td>
		     
		     		     
	

		


		   
	
		   
		   
		   
		</tr>
	
		
		</tbody>";
	}

		if(isset($_GET['approve'])){
			 $em=$_GET['approve'];


       $query2=mysqli_query($con," update bid_product set status='Approved' where email='$em'");
       if($query2){
       	echo '<script>alert("you are approved successfully")</script>';
       }

		if(isset($_GET['reje'])){
			// echo $rej=$_GET['reje'];
			 include('reject.php');


		}



		}
		
		
		?>
		</table>
        </div>
        </div>
        </div>
        
</body>
</html>