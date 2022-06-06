<?php
if(isset($_SESSION['email'])){
	 $_SESSION['email'];
	};?>
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
	<a href="../index.php" class="navbar-brand">AUCTION</a>
    </div>
	<div class="collapse navbar-collapse" id="shakilkhan">
	<ul class="nav navbar-nav "><!--start ul-->
	<li class="active"><a href="../index.php" class="nav"><span class="glyphicon glyphicon-home"></span></a></li>
	<li><a href="#">Products</a></li>
	<li><a href="#">Bidding</a></li>
	<li><a href="#">Auction</a></li>
	<li><a href="#">Contact</a></li>
	<li><a href="#" style="float:right;">Blog</a></li>

	


	
</ul><!--close ul-->
<ul class="nav navbar-nav navbar-right "><!--start ul-->

<?php
if(isset($_SESSION['email'])){

	echo '<li><a href="logout.php">LogOut</a></li>';
}
else{
	
	echo '<li><a href="user_login.php">LogIn</a></li>';

}
?>

</div>






               





                
              
     

</div><!--close container-->	


             
			





                
              
          
           
</nav><!--close nav-->