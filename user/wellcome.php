<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php include 'parts/nav.php';?><!--nav area-->	
</body>
</html>

<?php 
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['name']))
{
echo "
<div class='row'>
<div class='col-md-6 col-md-offset-3 text-center'><h2>Congratulation</h2><hr></div>
</div>
<div class='row'>
<div class='col-md-4 col-md-offset-4 text-center'>
<div class='alert alert-success'><h5>Wellcome ".$_SESSION['name'] ." you have successfully registered!</h5></div>
<a href='../index.php' class='btn btn-success' role='button'>Next</a>
</div>
</div>
";


echo '<script>window.open("user_profile.php","_self")</script>';
}
else
{
	header('location:login.php');
}




 ?>