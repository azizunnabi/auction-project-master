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
		</div>
		
		<!-- -->
