<?php

if(isset($_SESSION['email'])){
	$email=$_SESSION['email'];
}else{

}
?>
?><nav class="navbar navbar-default change navbar-fixed-top" role="navigation">
<div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#shakilkhan" aria-expanded="false">
		<span class="sr-only">toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>




 <a href="index.php" class="navbar-brand">AUCTION</a>
    </div>
    <div class="collapse navbar-collapse" id="shakilkhan">
	<!---main navigation-->
            
	<ul class="nav navbar-nav target">
	<li class="active"><a href="index.php" class="nav"><span class="glyphicon glyphicon-home"></span></a></li>
	<li><a href="#">Products</a></li>
	<li><a href="user/user_dashboard.php">Dashboard</a></li>
	<li><a href="#">Auction</a></li>
	<li><a href="#">Contact</a></li>
	<li><a href="#">Blog</a></li>
<?php

      


	echo '<li><a href="user/bid_product.php?email= $email">Bid Product</a></li>
	';
	?>

</ul>
<!--right navigation-->
<ul class="nav navbar-nav navbar-right">
<?php 





if(isset($_SESSION['email']) && isset($_SESSION['name']))
{
	
	get_image();

}
else
{
	if(isset($_SESSION['email'])){
		
	echo "<li><a href='user/logout.php'>Logout</a></li>";;
	}else{

	echo "<li><a href='./user/user_registere.php'>SingUp</a></li>
	<li><a href='user/user_login.php'>Login</a></li>";
	}
	}
?>
</ul>

</div><!--container fluid close-->
</nav><!--nav close-->