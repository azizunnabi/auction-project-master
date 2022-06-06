<?php
session_start();
  //echo '<script>alert("Your subscreption fee has been successfully subscribed , Now You Can Upload Your Product, Please upload your product now.")</script>';


if(!isset($_SESSION['email'])){
  echo '<script>window.open("bid_product.php","_self")</script>';
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
<form method="post" action="" id="form" enctype="multipart/form-data">
      <div class="fileinput fileinput-new " data-provides="fileinput">
  <div class="fileinput-new thumbnail btn-danger" style="width: 150px; height: 150px; background:maroon;">

   <?php 
   
  
    include('connect.php');

     $ex1=$_SESSION['email'];

    
  

    

      $query2=mysqli_query($con," SELECT * FROM user_signup  WHERE email='$ex1'");
              
            
             while($row2=mysqli_fetch_array($query2)){
                $image2=$row2['user_image'];

             

     echo "<img src='images/$image2' class='img-responsive bt' ></img>";
   }
   

    

    ?>
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
 
  <form action="#" method="post" style="background-color:red">
<center> <div class="form-group" style="width:30%"><!--start form group-->
        <div class="input-group">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="name" id="password" name="name"  pattern="[a-zA-Z0-9 ]+" data-minlength="5" class="form-control custom  input-lg" placeholder="Enter your Name..." required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>
    
    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="email" id="inputPasswordConfirm" name="email" class="form-control custom input-lg" placeholder="Enter Your Email..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>


   




    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="number" id="inputPasswordConfirm" name="contact_number" data-minlength="11"  data-minlength="11" class="form-control custom input-lg " placeholder="Enter Your Contact Number" data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="text" id="inputPasswordConfirm" name="product_name"  class="form-control custom input-lg" placeholder="Enter Product Name..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>




 <div class="form-group"><!--start form group-->

      <center><h4 style="color:green;"> Product Category</h4></center>
       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "  ><span class="glyphicon glyphicon-star change-signup"></span></span>
        <!--this is pattern for address field   pattern="[a-zA-Z0-9]+" -->
      
  
           <select class="form-control btn-danger input-lg" name="product_category" style="font-size:15px;" id="country" name="country" required>
            <option><bolder>Laptops</bolder></option>
            <option>Camras</option>
            <option>Tablets</option>
            <option>Mobiles</option>
            <option>Electronics</option>
            <option>Motor Cycle</option>
            <option>TV & Audios</option>
            <option>Buy Themes</option>
            <option>Accesseries</option>
            <option>Smart Phone</option>
            <option>Others</option>





           </select>
           
           
          
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>


    <br>



    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        
      <input type="file" id="inputPasswordConfirm" name="product_image" class="form-control custom input-lg btn-danger"  data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>
    <br>

    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
        <textarea id="inputPasswordConfirm" name="product_descreption" pattern="[A-Za-z]{}"class="form-control custom input-lg" placeholder="product_descreption"></textarea>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>


    


    <div class="form-group"><!--start form group-->

      <center><h4 style="color:green;"> Select Your Country</h4></center>
       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "  ><span class="glyphicon glyphicon-star change-signup"></span></span>
        <!--this is pattern for address field   pattern="[a-zA-Z0-9]+" -->
      
  
           <select class="form-control btn-danger input-lg" name="country" style="font-size:15px;" id="country" name="table_type" required>
            <option><bolder>Pakistan</bolder></option>
            
            <option>India</option>
            <option>China</option>

            <option>Afghanistan</option>

           </select>
           
           
          
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>



    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
        <!--this is pattern for address field   pattern="[a-zA-Z0-9]+" -->
      <input type="text" id="inputPasswordConfirm" name="city"   class="form-control custom input-lg" placeholder="Enter your City" data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>



      <center><h4 style="color:green;"> Enter start date</h4></center>
    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="date" id="inputPasswordConfirm" name="start_date" class="form-control custom input-lg" value="hello" placeholder="Enter Your biding complete date..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

    

      <center><h4 style="color:green;"> Enter End date</h4></center>
    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="date" id="inputPasswordConfirm" name="end_date" class="form-control custom input-lg" value="" placeholder="Enter Your biding complete date..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="number" id="inputPasswordConfirm" name="bid_rate" class="form-control custom input-lg" placeholder="Enter Bid Rate..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

    


  
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

<div class="help-block with-errors"></div>
    </div><!--close form group-->
    <div class="form-group"><!--start form group-->
    <input type="submit" class="btn   btn-register btn btn-success btn-login" name="register" value="Upload Your Product" id="registere">
    
  
    </div><!--close form group-->
    </form>

    <?php
    include('connect.php');
    if(Isset($_POST['register'])){


      $ex=$_SESSION['email'];
      $name=$_POST['name'];
     
      $email=$_POST['email'];
       //this is to check weather the current email exist or not


       $query=mysqli_query($con," SELECT * FROM bid_product  WHERE email='$email'");
              
              $count=mysqli_num_rows($query);
             if($count>0){
              echo '<script>alert("This Email Already Exist, Please Try another")</script>';
              echo '<p style="color:red">This Emai Already Exist, Please try Another</p>';
               while($row=mysqli_fetch_array($query)){
              echo $en=$_row['email'];
              
              }
              }
              else{
      //email validation finish here
      

      $contact_number=$_POST['contact_number'];
      $product_name=$_POST['product_name'];

      echo $product_category=$_POST['product_category'];
     $product_image = $_FILES['product_image']['name'];
         $c_image_tmp = $_FILES['product_image']['tmp_name'];
      $product_descreption=$_POST['product_descreption'];

      echo $country=$_POST['country'];


       $city=$_POST['city'];
       $start_date=$_POST['start_date'];

       $end_date=$_POST['end_date'];
       $status="pending";

      if($start_date=='' or $end_date=='' ){
  echo "<script>alert('Please Enter Start date & End date!')</script>";
  exit();
  }
      

      $bid_rate=$_POST['bid_rate'];
        if ((@strtotime($_POST['start_date'])) >= (@strtotime($_POST['end_date'] )))
{
    echo '<script>alert("Sorry !,  your end date  must be later  then start date")</script>';
       
    echo '<p align="center" style="color:red">Sorry !!    Your end date must be later then start date  !!</p>';
  
}
else{


     $query=mysqli_query($con,"INSERT INTO `auction_fyp`.`bid_product` (`id`, `name`, `email`, `contact_number`, `product_name`, `product_image`, `product_descreption`, `city`, `country`, `product_category`, `start_date`, `end_date`, `bedding_rate`, `status`) VALUES (NULL, '$name', '$email', '$contact_number', '$product_name', '$product_image', '$product_descreption', '$city', '$country', '$product_category', '$start_date', '$end_date', '$bedding_rate', '$status ');");

    move_uploaded_file($c_image_tmp,"bid_product_images/$product_image");
     if($query){
      
                     echo '<script>alert("The data is inserted successfully")</script>';

    //this is to select and update searched products table keyword-->
      $query4=mysqli_query($con," SELECT * FROM searched_products  where search_keyword='$product_name' ");
              
            
         while($row4=mysqli_fetch_array($query4)){

                  
                    $status=$row4['status'];

                    $mobile=$row4['mobile_number'];

           $query=mysqli_query($con,"update searched_products set status='uploaded' where search_keyword='$product_name'");
                   
                 }

    //searched keyword code finish here-->

             

    // this is to send sms to user that is your search product is uploaded

      $mobile=$row4['mobile_number'];




                   
   $uname="azizse971@gmail.com";
   $pword="azizazra";

    //configuration variables

   $info="1";
   $test="0";



   $from="aziz";
   $selectednums="$mobile";
  $message="hi this is aziz a web developer";
  $message=urlencode($message);


   $data="uname=".$uname."pword=".$pword."message=".$message."from=".$from."selectednums=".$selectednums."info=".$info."test=".$test;


   $ch=curl_init('http://www.txtlocal.com/sendsmspost.php');
   curl_setopt($ch, CURLOPT_POST, true);

   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

   $result=curl_exec($ch);
   curl_close($ch);
                          
    //  sms section close here
      
         echo '<script>window.open("bid_final.php?name='.$name.'","_self")</script>';
      
     }
     else{

      echo '<script>alert("data is not inserted successfull")</script>';









     }
   }
 
}
}
}
    ?>




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