<?php
   //assigning pdo instance arguments to variables
   $dsn      = 'mysql:host=127.0.0.1;dbname=auction_fyp';
   $username = 'root';
   $password = 'mysql';
   //if connection is successfull try block will executed
   
   try
   {
   //passing data from pdo instance
   $con = new PDO($dsn,$username,$password);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   return $con;
   }
   //if error occure
   catch(PDOException $e){
   echo 'Sorry connection problem'.$e->getMessage();
   die();
   }

?>