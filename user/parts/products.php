
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
	  $start_form=($page-1) *  $per_page;
	 //pagination ends


 
     //$query=mysqli_query($con,"select * from bid_product where status='approved' ORDER BY id DESC  LIMIT $start_form,$per_page ");
     $query=mysqli_query($con,"select * from bid_product where status='approved' order by id LIMIT  $start_form,$per_page");
     while($row=mysqli_fetch_array( $query)){

     	
     	  $id=$row['id'];
     	  $name=$row['product_name'];
     	  $image=$row['product_image'];


     	  $bedtime=@strtotime($row['end_date']);

	      $starttime=time();


           if($bedtime> $starttime){
	 $difff=$bedtime- $starttime;
                 }
                 else{

    
	$difff= $starttime-$bidtime;

                 
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

	if($orignal_diff>0 and $orignal_diff<100 and $orignal_diff>0){
	echo '<button type="button" class="btn btn-bid hvr-buzz"  class="hvr-rectangle-out">Bid Now</button><hr>';
	
	echo '<i class="fa fa-clock-o change-clock" >&nbsp;</i><i>'. $orignal_diff.' days left'.'</i>';
}
else{

	echo '<button type="button" class="btn btn-bid  disabled hvr-buzz"style="background:maroon"  class="hvr-rectangle-out"><span style="color:white" >Sold</span></button><hr>';

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