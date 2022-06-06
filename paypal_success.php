<?php require_once 'core/init.php'; ?>
<?php require_once 'core/func/function.php'; ?>
<!DOCTYPE html>



    
    
     <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/validation.js"></script>
<html>
<head>
<!--devided index page in parts-->
<?php require_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php require_once 'parts/nav.php';?><!--nav area-->

<hr>


<!-- form container start heree</-->
<div class="clearfix"></div>
<div class="text-center"><h3>Pay pal information </div>

<continer>


<?php
include('connect.php');
echo $transaction_id=$_REQUEST['txt'];
echo $amount=$_REQUEST['amt'];
echo $currency=$_REQUEST['cc'];


$insert_payment=mysqli_query($con,"insert into paypal_payments(transaction_no,amount,currency)values('$transaction_id','$amount','$currency')");

if($insert_payment){
	echo '<script>alert("Your subscreption fee has been successfully subscribed , Now You Can Upload Your Product, Please upload your product now.")</script>';
	echo '<script>window.open("user/bid_product1.php","_self")</script>';
}
?>
</continer>

  




  
 


    <?php


     include('connect.php');

       

  if(isset($_POST['submit'])){

  //echo '<script>window.open("bid_sucess.php","_self")</script>';


//this is to select bid hihest bid rate
 $product_name=$_GET['id'];
    
   $q=mysqli_query($con,"SELECT MAX(bid_rate) AS bid_rate FROM bid_started_products where product_name='$product_name'");


   while($ad=mysqli_fetch_array( $q)){
   	 $highest_price=$ad['bid_rate'];
   }
//highest bid rate finish here
           
         
         $first_name=$_POST['first_name'];

           $last_name=$_POST['last_name'];


           $bid_rate=$_POST['bid_rate'];

          $email=$_POST['email'];


       
         // $table_image=$_FILES['table_image'];
         $password=$_POST['password'];

          $country=$_POST['country'];

          $contact=$_POST['contact'];


          if($highest_price>=$bid_rate  ){
          
          	
            
         echo  '<p style="color:red">This bid already exist, please increase your bid atleast then</p>'.$highest_price;

          }
          else if($highest_price!=$bid_rate){
         


    $query=mysqli_query($con, "INSERT INTO `auction_fyp`.`bid_started_products` ( `first_name`, `last_name`,`bid_rate`, `email`, `password`, `country`, `contact`, `product_name`) 
      VALUES (' $first_name', ' $last_name', '$bid_rate', '$email', '$password', '$country', '$contact','$product_name')");
    if($query){
        echo '<script>alert("data is inserted successfully")</script>';
    }
}

    else{

        echo '<script>alert("some thing went wrong and the data is not inserted")</script>';
    }
  }
  

  ?>
</div>


 </div>
  </div>  
</div>

</container>

<div class="clearfix"></div>
<!-- form container closed here-->
<hr>
<div class="container padding-top"><!--products are container-->




<!--footer area start-->
<?php require_once 'parts/footer.php';?>
<!--close footer-->


<div class="clear"></div>
<!--bottom footer start-->
<!--bottom footer clsoe-->


<?php require_once 'parts/javascript_files.php';?>
</body>
</html>