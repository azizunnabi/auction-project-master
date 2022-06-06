<?php
if(isset($_SESSION['admin_email'])){
$_SESSION['admin_email'];
}
?>
<nav class="navbar navbar-default change" role="navigation"><!--start nav-->
<div class="container-fluid"><!--start container-->
	<!---main navigation-->
	<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#shakilkhan" aria-expended="false">
		<span class="sr-only">toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a href="../index.php" class="navbar-brand">ADMIN AREA</a>
    </div>
	<div class="collapse navbar-collapse" id="shakilkhan">
	
<ul class="nav navbar-nav navbar-right">
<?php
if(isset($_SESSION['admin_email'])){

	echo '<li><a href="logout.php">LogOut</a></li>';
}
else{
	
	echo '<li><a href="index.php">LogIn</a></li>';

}
?>

	</ul>
	
</div><!--close container-->	
</div>

</nav><!--close nav-->



                     <!-- admin left area started here-->
                     <?php
                     include('admin_left_area.php');

                     ?>

		               <div class="clearfix"></div>
                    <!--admin left area finished here->


                    <!-- second block/ latest uploaded products start here-->
           
                         <?php 
                            include('latest_uploaded_products.php');

                          ?>
		
                     <!--   Second block/latest uploaded products  ends here-->



          

                     <!-- third half/profile start here-->
                     <?php
                     include('admin_frofile.php');
                     ?>
           
                      <!-- third half/profile ends here-->




                     


		

		            





		             

		

		

	
	