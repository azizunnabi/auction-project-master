
  
    <link href="css/customize.css" rel="stylesheet">


 
<!--devided index page in parts-->
<?php require_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php require_once 'parts/nav.php';?><!--nav area-->


<div class="dsd" style="height:30px;width:100%;"></div>

<div class="container">
<div class="panel panel-default">
<div class="panel-heading"><h3>Product details</h3></div>
<div  class="panel-body" >
<div class="row"><!--first products row-->



<hr>



<?php
include('connect.php');
     if(isset($_GET['id'])){
     	

     	$p_name=$_GET['id'];
     }
     $query=mysqli_query($con,"select * from bid_product where product_name='$p_name' limit 0,1");
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

    
	$difff= $starttime-$bidtime;

                 
              }

       $orignal_diff= floor($difff/(60*60*24));


    
	echo '<div class="col-lg-5 col-md-12 col-sm-12 product_details">
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

while($q=mysqli_fetch_array($query1)){

	?>

    
	
	<div class="text-center" style="color:green;">
	<?php echo'Highest Bid Rate:'.$q['bid_rate']; ?>

	<br>
	</div>
	 
<?php

}




     //aditional code for maximum products finish here -->


//this is additional code for minimum product price adding
  

$query1=mysqli_query($con," 
SELECT MIN(bid_rate) AS bid_rate FROM bid_started_products where product_name='$name'  ");

while($q=mysqli_fetch_array($query1)){
	?>
	<div class="text-center" style="color:red;">
	
	<?php echo'Lowest Bid Rate:'.$q['bid_rate']; ?>

	<br>
	</div>
	 
<?php

}

     //aditional code for minimum products finish here -->




     

	//echo '<a href="bid_now.php?id='.$name.'"><button type="button" class="btn btn-bid hvr-buzz"  class="hvr-rectangle-out">Bid Now</button></a><hr>';

	echo '<a href="bid_now.php?id='.$p_name.'"><button type="button" class="btn btn-bid hvr-buzz"  class="hvr-rectangle-out">Bid Now</button></a><hr>';
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
<!-- product image and related div finish here-->

<!-- this is table right side area-->

<?php   include('connect.php'); ?>
<?php

      $_SESSION['email']= $email;
      ?>
   
		
		<div class="col-md-5">

			   
			



			<div class="panel-body" style="width:100%">
		<table class="table " style="border:none;">
		
		<tbody>
		   <tr>
			   
			    

			 <?php
			include('connect.php');


       $query2=mysqli_query($con," select DISTINCT product_name,name,product_descreption,start_date,end_date from bid_product where product_name='$p_name' ");
              
            
             while($row2=mysqli_fetch_array($query2)){
                 

                //$id=$row2['id'];
                 $product_name=$row2['product_name'];
                 $product_descreption=$row2['product_descreption'];
                 $customer_name=$row2['name'];
                 //$email=$row2['email'];
                 //$contact_number=$row2['contact_number'];
                 //$city=$row2['city'];
                 $start_date=$row2['start_date'];
                 $end_date=$row2['end_date'];
              

                  
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>


		

		


		
		     
		     <th>Product Name</th>
		   
		     <td><?php echo $product_name; ?></td>
		   
		</tr>

		<tr>
		     
		     <th>Owner Name</th>
		   
		     <td><?php echo $customer_name; ?></td>
		   
		</tr>
		<tr>
		     
		     <th>Product Descreption</th>
		   
		     <td><?php echo $product_descreption; ?></td>
		   
		</tr>
		<tr>
		     
		     <th>Start Date</th>
		   
		     <td><?php echo $start_date; ?></td>
		     </tr>
		     <tr>
		      <th>End Date</th>
		   
		     <td><?php echo $end_date; ?></td>
		   
		</tr>
           

		</tbody>

		</table>
		<div class="col-md-11"> <tr> 
            <th></th>
            <hr>
		<p style="font-weight:bold;color:green;">click on bid now button to start bidding</p>
		</tr></div>

        </div>
            




</div>


<?php 	} ?>
<!-- table right side area finish here-->





  
<!-- this is to display table-->
<div class="" style="height:50px;width:100%"></div>

<div class="col-lg-12 panel panel-default panel-success" >
		

		
                  
   
    


		    
		     
		     
	
		     
	

		


		   
	
		   
		   
		   
		

	
        </div>
        <!-- this is table last-->
        <row>
<div class="col-md-5 text-left" >
<h4 style="padding-top:5px">Current Bids</h4></div>


<div class="col-md-5 text-right"><h4><button class="btn btn-primary" type="button">

   <span class="badge" ><?php
$query4=mysqli_query($con," 
SELECT * FROM bid_started_products where product_name='$name'  ");

	echo $co=mysqli_num_rows($query4);
while($q=mysqli_fetch_array($query4)){
}

?></span>
</button></h4></div>

</div>
</row>
<div class="col-lg-11" style="background:#F0FFFF">

<hr>

<table class="table table-stripped table-hover panel-default">

		<thead>
			<tr>
			
			   <th></th>
			   
			     
		
			</tr>
		</thead>
			 <?php
			include('connect.php');


       $query2=mysqli_query($con," select bid_rate from bid_started_products where product_name='$name' ");
              

             $count1 =mysqli_num_rows($query2);
            if($count1<1){
            	echo '<p style="color:green;padding-left:17px;" >  No Bid,</p>
            	<p style="padding-left:17px;"> You are The First To Start Bidding. &nbsp;&nbsp;&nbsp;Please Click On Bid Now Button To Start Bidding</p>';
            }
            else{
             while($row2=mysqli_fetch_array($query2)){
                 
                  
                 echo '&nbsp; &nbsp; &nbsp;';
                 echo  $id=$row2['bid_rate'];

                 echo '&nbsp; &nbsp; &nbsp;';
                  echo '|';
            }
            }
             
                
              

                  
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  ?>
		
                  <?php
   
    

	

		




		
		
		
		?>
		</table>
      
<!-- table close here-->
        </div>
        

    
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
</body>
</div>
</div>