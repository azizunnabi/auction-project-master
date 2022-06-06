
    
    <link href="css/custom.css" rel="stylesheet">
 
<div class="row"><!--first products row-->


<?php
include('connect.php');

   //this is for pagination
	 $per_page=8;
	 if(isset($_GET['page'])){
	 	$page=$_GET['page'];
	 }
	 else{
	 	$Page=1;
	 }


	 if(isset($_GET['page'])){
	  $start_form=($page-1) *  $per_page;
	}

	
	 //pagination ends
            if(isset($_GET['p_name'])){


            $product_nam=$_GET['p_name'];
       }

     $query=mysqli_query($con,"select * from bid_product where status='approved'  order by rand() LIMIT 0,8");
     if(!isset($_GET['p_name'])){

     //$query=mysqli_query($con,"select * from bid_product where status='approved'  order by rand() LIMIT 0,8");
     }
     else{
     $query=mysqli_query($con,"select * from bid_product where  product_category='$product_nam' ");
 }

      $counn=mysqli_num_rows($query);
     if($counn==0){
     	echo '<center><p style="color:red;font-weight:bolder;">sorry ! This Category is not available, It will be available soon.</p></ceter>';
     }
     
      
     
     while($row=mysqli_fetch_array( $query)){


     	
     	   $id=$row['id'];
     	  $name=$row['product_name'];

     	  $email=$row['email'];
     	  $image=$row['product_image'];


     	  $bedtime=@strtotime($row['end_date']);

	      $starttime=time();


           if($bedtime> $starttime){
	 $difff=$bedtime- $starttime;
                 }
                 else{

    
	$difff= $starttime-$bedtime;

                 
              }

       $orignal_diff= floor($difff/(60*60*24));


    
	echo '<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="thumb-icon">
	<span class="new-badge">'.$name.'</span>
	<div class="text-center">
	<div class="thumbnail thum-size">
	<img src="images/'.$image.'" alt="not found">
	<div class="caption">';
	?>
	<?php

	if($orignal_diff>0 and $orignal_diff<100){


//this is additional code for max product price adding
  

$query1=mysqli_query($con," 
SELECT MAX(bid_rate) AS bid_rate FROM bid_started_products where product_name='$name'  ");
  $count1=mysqli_num_rows($query1);



while($q=mysqli_fetch_array($query1)){
	$b_rate=$q['bid_rate'];
	if($b_rate>0){
                 

              echo'  <div class="text-center" style="color:green;">';
	             echo'Highest Bid Rate:'.$q['bid_rate'];  
	}    

	            
	             else{
               
              echo'  <div class="text-center" style="color:green;">';
	             echo'No Bid Exist';
	             }}
	?>

	
	  
	

	<br>
	</div>
	 
<?php



     //aditional code for maximum products finish here -->


//this is additional code for minimum product price adding
  

$query2=mysqli_query($con," 
SELECT MIN(bid_rate) AS bid_rate FROM bid_started_products where product_name='$name'  ");
  

while($q=mysqli_fetch_array($query2)){
	$b_rate=$q['bid_rate'];

	if($b_rate>0){
                 echo ' <div class="text-center" style="color:red;">';
	
	              echo'Lowest Bid Rate:'.$q['bid_rate'];  
	             } 
	             
	             else{
                   echo ' <div class="text-center" style="color:red;">';
	
	               echo'No Bid Exist'; 
	             }}
	?>
	  


	<br>
	</div>
	 
<?php



     //aditional code for minimum products finish here -->




     

	//echo '<a href="bid_now.php?id='.$name.'"><button type="button" class="btn btn-bid hvr-buzz"  class="hvr-rectangle-out">Bid Now</button></a><hr>';

	echo '<a href="product_details.php?id='.$name.'"><button type="button" class="btn btn-bid hvr-buzz"  class="hvr-rectangle-out">Bid Now</button></a><hr>';
}
else{

	echo '<button type="button" class="btn btn-bid  disabled hvr-buzz"style="background:maroon"  class="hvr-rectangle-out"><span style="color:white" >Sold</span></button><hr>';

}
	?>
	<?php
	if($difff>0 and $orignal_diff<100){
	echo '<i class="fa fa-clock-o change-clock" >&nbsp;</i><i>'. $orignal_diff.' days left'.'</i>';
                }

          else{

	echo '<i class="fa fa-clock-o change-clock" style="color:red">&nbsp;</i><i style="color:red"> Time Finish</i>';
          }
?>
	</div>	
	</div>
	</div>
	</div>
    </div>
   <?php  }    ?>


    
	<!--<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="thumb-icon">
	<span class="new-badge">Iphone6</span>
	<div class="text-center">
		<div class="thumbnail thum-size">
	<img src="images/iphone6.jpg" alt="not found">
	<div class="caption">
	<button type="button" class="btn btn-bid hvr-buzz">Bid Now</button><hr>
	<i class="fa fa-clock-o change-clock">&nbsp;</i><i>5 days left</i>	
	</div>	
	</div>
	</div>
	</div>
	</div>

		<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="thumb-icon">
	<span class="new-badge">Motor</span>
	<div class="text-center">
		<div class="thumbnail thum-size">
	<img src="images/BMW car.jpg" alt="not found">
	<div class="caption">
	<button type="button" class="btn btn-bid hvr-buzz">Bid Now</button><hr>
	<i class="fa fa-clock-o change-clock">&nbsp;</i><i>5 days left</i>	
	</div>	
	</div>
	</div>
	</div>
	</div>



		<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="thumb-icon">
	<span class="new-badge">Motor</span>
	<div class="text-center">
		<div class="thumbnail thum-size">
	<img src="images/BMW car.jpg" alt="not found">
	<div class="caption">
	<button type="button" class="btn btn-bid hvr-buzz">Bid Now</button><hr>
	<i class="fa fa-clock-o change-clock">&nbsp;</i><i>5 days left</i>	
	</div>	
	</div>
	</div>
	</div>
	</div>


	

	<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="thumb-icon">
	<span class="new-badge">Motor</span>
	<div class="text-center">
		<div class="thumbnail thum-size">
	<img src="images/BMW car.jpg" alt="not found">
	<div class="caption">
	<button type="button" class="btn btn-bid hvr-buzz">Bid Now</button><hr>
	<i class="fa fa-clock-o change-clock">&nbsp;</i><i>6 days left</i>	
	</div>	
	</div>
	</div>
	</div>
	</div>


		<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="thumb-icon">
	<span class="new-badge">Motor</span>
	<div class="text-center">
		<div class="thumbnail thum-size">
	<img src="images/BMW car.jpg" alt="not found">
	<div class="caption">
	<button type="button" class="btn btn-bid hvr-buzz">Bid Now</button><hr>
	<i class="fa fa-clock-o change-clock">&nbsp;</i><i>15 days left</i>	
	</div>	
	</div>
	</div>
	</div>
	</div>

		<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="thumb-icon">
	<span class="new-badge">Motor</span>
	<div class="text-center">
		<div class="thumbnail thum-size">
	<img src="images/BMW car.jpg" alt="not found">
	<div class="caption">
	<button type="button" class="btn btn-bid hvr-buzz">Bid Now</button><hr>
	<i class="fa fa-clock-o change-clock">&nbsp;</i><i>20 days left</i>	
	</div>	
	</div>
	</div>
	</div>
	</div>

		<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="thumb-icon">
	<span class="new-badge">Motor</span>
	<div class="text-center">
		<div class="thumbnail thum-size">
	<img src="images/BMW car.jpg" alt="not found">
	<div class="caption">
	<button type="button" class="btn btn-bid hvr-buzz">Bid Now</button><hr>
	<i class="fa fa-clock-o change-clock">&nbsp;</i><i>12 days left</i>	
	</div>	
	</div>
	</div>
	</div>
	</div>
	-->


	
</div><!--colse second products row-->