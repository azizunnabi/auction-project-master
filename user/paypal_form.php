<?php
  include('connect.php');
session_start();



if(!isset($_SESSION['email'])){

echo "<script>window.open('user_login.php','_self')</script>";
}
else{
  ?>
<!DOCTYPE html>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<?php include 'core/init.php'; ?>
<?php include_once 'core/func/function.php'; ?>
</head>
<body>
<?php include 'parts/nav.php';?><!--nav area-->

<div class="container"><!--banner container-->
   <div class="row upload-img">
       <div class="col-md-12">
       <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4 style="color:green">Upload Your Product for bedding</h4>
        </div><!--panel heading close-->
        <div class="panel-body">

   <?php 
   session_start();
  
    include('connect.php');

     $ex1=$_SESSION['email'];

    
  

    

      $query2=mysqli_query($con," SELECT * FROM user_signup  WHERE email='$ex1'");
              
            
             while($row2=mysqli_fetch_array($query2)){
                 $name=$row2['full_name'];

             

     //echo "<img src='images/$image2' class='img-responsive' ></img>";

     echo '<p>Dear <span style="color:blue;">'.$name.' </span>please follow the following instructions to upload your product.</p>';
     echo '<p>We receive 5$ per product upload accoroding to  our policy, If you want to upload your product for bedding, please pay us 5$. To pay us click the pay now button bellow';
   }
   echo '<hr>';
   
// this is paypal form area
   echo'
   <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="aziz171@gmail.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Subscreption fee">

  <input type="hidden" name="amount" value="5">
  <input type="hidden" name="currency_code" value="USD">

  
  <input type="hidden" name="return" value="http://auction-project-master/paypal_success.php"/>

  <input type="hidden" name="cancel_return" value="http://auction-project-master/cancel.php"/> 

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
  alt="PayPal - The safer, easier way to pay online">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>';
 //paypal form area finish here
    

    ?>
  
    

   
      
  <!-- click here for direct uploading-->
            <a href="bid_product1.php" class="btn btn-default">Direct upload</a>
  <!--  direct uploading close here-->
      


<?php } ?>

    <!--<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" id="file" name="file"></span>
    <input type="button" id="image" name="submit" class="btn btn-default" value="Next">
    <input type="button" id="skip" class="btn btn-default" value="Skip">-->

  </div>
</div>
</form>
<div class="upload-error"></div>
</div><!--panel body close-->
</div><!--panel default close-->
       </div><!--col md 4 close-->
   </div><!--row close-->

    </div><!---container close-->
 
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>