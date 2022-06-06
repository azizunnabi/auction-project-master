
    
 

    <link href="css/custom.css" rel="stylesheet">
<div class="row"><!--first products row-->



<?php require_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php require_once 'parts/nav.php';?><!--nav area-->


<div class="" style="width:100%;height:70px;"></div>
<div class="container text-left">
<div class="row">
<h4>You searched for:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:blue;text-decoration:underline;"><?php echo $product_name=$_GET['product_name'];?></span></h4>

</div>
</div>
</div>
<div class="container">
<div class="row">
<hr>

<?php
//this is navbar start here





include('connect.php');
 
//navbar close here

     $product_name=$_GET['product_name'];
     $query=mysqli_query($con,"select * from bid_product  where product_name='$product_name'");
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


    
	echo '<div class="col-lg-4 col-md-12 col-sm-12">
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
 $count=mysqli_num_rows($query1);


if($count<=0){

}
else{
while($q=mysqli_fetch_array($query1)){
	?>

	
	<div class="text-center" style="color:green;">
	<?php echo'Highest Bid Rate:'.$q['bid_rate'];  
	}      ?>
	

	<br>
	</div>
	 
<?php

}

     //aditional code for maximum products finish here -->


//this is additional code for minimum product price adding
  

$query1=mysqli_query($con," 
SELECT MIN(bid_rate) AS bid_rate FROM bid_started_products where product_name='$name'  ");
 $count=mysqli_num_rows($query1);
if($count<=0){


}
else{
while($q=mysqli_fetch_array($query1)){
	?>
	<div class="text-center" style="color:red;">
	
	<?php echo'Lowest Bid Rate:'.$q['bid_rate'];  
	}   ?>


	<br>
	</div>
	 
<?php

}

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





	
</div><!--colse second products row-->
</div>
</div>
</body>