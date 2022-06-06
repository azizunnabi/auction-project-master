
<?php
  include('connect.php');
session_start();



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('index.php','_self')</script>";
}
else{
	?>
	   <div style="width:35px;height:35px;"></div>
	<div class="col-lg-3">
	<ul class="navbar navbar-default nav" style="height:650px">
	<ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="orignaladmin.php">Admin Area</a></li>
  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Dashboard</a></li>

  <li role="presentation"><a href="profile.php"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Profile</a></li>

  <li role="presentation"><a href="edit_profile.php"><i class="glyphicon glyphicon-tasks"></i>&nbsp;&nbsp;Edit Profile</a></li>

  <li role="presentation"><a href="admin_upload_products.php" ><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Upload Product</a></li>

  <li role="presentation"><a href="searched_products.php" ><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Searched Products</a></li>

           
  <li role="presentation"><a href="all_auctions.php"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;All Auctions</a></li>
  
  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-comment"></i>&nbsp;&nbsp;Comments</a></li>
  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-tasks"></i>&nbsp;&nbsp;Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
	</ul>
	

	</div>
	<div class="col-lg-9">
		<div class="col-md-3">
		<div class="panel panel-success">
		<div class="panel-heading">
		<div class="row">
		<div class="col-xs-3"><i><li class="glyphicon glyphicon-signal"style="font-size:4.5em"><i></div>
		<div class="col-xs-9 text-right">

		 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM user_signup ");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 
                 $full_name=$row2['full_name'];
                  $email=$row2['email'];
                  $image=$row2['user_image'];
                  $mobile=$row2['mobile'];

                  
              
               

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";
                  
                  }?>
		
                 
			<div style="font-size:2.5em"> <?php echo   $id; ?></div>

			<div style="">Users</div>
		</div>
		</div>
		</div>
		<a href="signed_users.php">
		<div class="panel-footer">

		<div class="pull-left">Signed In Users</div> 
		<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
		<div class="clearfix"></div>
		</a>
		</div>
			
		</div>


	</div>
	<div class="col-md-3">
		<div class="panel panel-success">
		<div class="panel-heading">
		<div class="row">
		<div class="col-xs-3"><i><li class="glyphicon glyphicon-question-sign"style="font-size:4.5em"><i></div>
		<div class="col-xs-9 text-right">


		 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM bid_product where status='pending' limit 8");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 $name=$row2['name'];
             }
                 ?>
			<div style="font-size:2.5em"><?php echo $id; ?></div>
			<div style="">Pening Products</div>
		</div>
		</div>
		</div>
		<a href="approve.php">
		<div class="panel-footer">

		<div class="pull-left">Pending Products</div> 
		<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
		<div class="clearfix"></div>
		</a>
		</div>
			
		</div>

	</div>

	<div class="col-md-3">
		<div class="panel panel-success">
		<div class="panel-heading">
		<div class="row">
		<div class="col-xs-3"><i><li class="glyphicon glyphicon-thumbs-up"style="font-size:4.5em"><i></div>
		<div class="col-xs-9 text-right">
		 <?php
			include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM bid_product where status='approved' limit 8");
              
            $id=0;
             while($row2=mysqli_fetch_array($query2)){
                 $id+=1;

                 $name=$row2['name'];
             
             }
             ?>
			<div style="font-size:2.5em"><?php echo  $id; ?></div>
			<div style="">Approve Products</div>
		</div>
		</div>
		</div>
		<a href="approved_products.php">
		<div class="panel-footer">

		<div class="pull-left">approved Products</div> 
		<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
		<div class="clearfix"></div>
		</a>

		</div>
			
		</div>

	</div>
	<div class="col-md-3">
		<div class="panel panel-success">
		<div class="panel-heading">
		<div class="row">
		<div class="col-xs-3"><i><li class="glyphicon glyphicon-list"style="font-size:4.5em"><i></div>
		<div class="col-xs-9 text-right">
			<div style="font-size:2.5em">20</div>
			<div style="">Posts</div>
		</div>
		</div>
		</div>
		<a href="#">
		<div class="panel-footer">

		<div class="pull-left">View categories</div> 
		<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
		<div class="clearfix"></div>
		</a>
		
		</div>
			
		</div>
		
		<!-- -->

		
		</div>
		<?php } ?>