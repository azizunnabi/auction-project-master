
<?php
  include('connect.php');
session_start();



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('index.php','_self')</script>";
}
else{
	?>
	<head></head>

<?php require_once 'parts/jsfiles.php'; ?><!--header area-->

<?php require_once 'parts/header.php'; ?><!--header area-->
</head>
<body>

	   <div style="width:35px;height:35px;"></div>
	<div class="col-lg-3">
	<ul class="navbar navbar-default nav" style="height:650px">
	<ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="orignaladmin.php">Admin Area</a></li>
  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Dashboard</a></li>

  <li role="presentation"><a href="edit_profile.php"><i class="glyphicon glyphicon-tasks"></i>&nbsp;&nbsp;Edit Profile</a></li>

  <li role="presentation"><a href="bid_product1.php" ><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Upload Product</a></li>

  <li role="presentation"><a href="new_post.php" ><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Insert Post</a></li>

           
  <li role="presentation"><a href="approve.php"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Pending Products</a></li>


  
  <li role="presentation"><a href="approved_products.php"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Approved Products</a></li>

  <li role="presentation"><a href="signed_users.php"><i class="glyphicon glyphicon-comment"></i>&nbsp;&nbsp;Signed In Users</a></li>
  
  <li role="presentation"><a href="searched_products.php" ><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Searched Products</a></li>

           
  <li role="presentation"><a href="all_auctions.php"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;All Auctions</a></li>
  

  
  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-comment"></i>&nbsp;&nbsp;Comments</a></li>
  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-tasks"></i>&nbsp;&nbsp;Profile</a></li>
  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
	</ul>
	

	</div>
	<?php } ?>
	
		
         
		


             
            
		
		
		
		