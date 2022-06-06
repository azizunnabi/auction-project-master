<?php
  include('connect.php');




if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('index.php','_self')</script>";
}
else{
	?>
<div class="col-lg-4">
		<div class="panel panel-primary" > 
		<div class="panel-heading">
		<div class="col-md-7">
			<?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM admin ");
              
            
             while($row2=mysqli_fetch_array($query2)){
                $name=$row2['name'];
                $role=$row2['role'];
                $email=$row2['admin_email'];
                $contact=$row2['contact'];
                $country=$row2['country'];
               $job=$row2['job'];
                 $image2=$row2['image'];
               

           
             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
   

    

    ?>
    <?php

     
           
    ?>

          
			
         <?php echo ' <div class="page-header"><h4>'.$name.'</h4></div>
		</div>
		<div class="col-md8">
			
     
           <img src="admin_images/'.$image2.'" class="img-circle" style="padding-top:15px;" width="41%" >
		</div>

		


		<div class="panel-body">
		<table class="table table-condensed">
		
		<tbody>
		   <tr>
		     
		     <th>Role</th>
		   
		     <td>'.$role.'</td>
		   
		</tr>

		<tr>
		     
		     <th>Email</th>
		   
		     <td>'.$email.'</td>
		   
		</tr>
		<tr>
		     
		     <th>Contact</th>
		   
		     <td>'.$contact.'</td>
		   
		</tr>
		<tr>
		     
		     <th>Country</th>
		   
		     <td>'.$country.'</td>
		   
		</tr>
		<div style="width:20px; height:13px"></div>

		</tbody>
		</table>
        </div>
			
		</div>
		
        </div>
        </div>';
    }
        ?>

        <?php } ?>