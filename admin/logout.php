<?php 
session_start();
$_SESSION['admin_email'];
session_destroy($_SESSION['admin_email']);
echo "<script>window.open('index.php','_self')</script>";



 ?>