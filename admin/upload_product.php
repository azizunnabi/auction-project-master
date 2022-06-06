<?php
  include('connect.php');
session_start();



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('index.php','_self')</script>";
}
else{
  ?>

<!DOCTYPE html>

<html>
<head>
<!--devided index page in parts-->

<?php require_once 'parts/jsfiles.php'; ?><!--header area-->

<?php require_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php
include('admin_left_area.php');?>


<!-- the form container starts here-->

<div class="container"><!--banner container-->
   <div class="row upload-img">
       <div class="col-md-12">
       <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4 style="color:green">Upload Your Product for bedding</h4>
        </div><!--panel heading close-->
        <div class="panel-body">
<form method="post" action="" id="form" enctype="multipart/form-data">
      <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
<?php
if(isset($_POST['continue'])){
  echo $_GET['file'];
}
?>
   <?php 
   
  

  
    include('connect.php');


    
  

    

      $query2=mysqli_query($con," SELECT * FROM admin ");
              
            
             while($row2=mysqli_fetch_array($query2)){
                $image2=$row2['image'];

             

     echo "<img src='images/location_images/$image' class='img-responsive' ></img>";
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
      <input type="number" id="inputPasswordConfirm" name="contact_number" class="form-control custom input-lg" placeholder="Enter Your Contact Number" data-match="#password" data-match-error="Password not match try again....!" required>
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

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="file" id="inputPasswordConfirm" name="product_image" class="form-control custom input-lg"  data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
        <textarea id="inputPasswordConfirm" name="product_descreption" pattern="[A-Za-z]{}"class="form-control custom input-lg" placeholder="product_descreption"></textarea>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>






    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="text" id="inputPasswordConfirm" name="city"  pattern="[a-zA-Z0-9]+" class="form-control custom input-lg" placeholder="Enter your City" data-match="#password" data-match-error="Password not match try again....!" required>
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
      

      $contact_number=$_POST['contact_number'];
      $product_name=$_POST['product_name'];
     $product_image = $_FILES['product_image']['name'];
         $c_image_tmp = $_FILES['product_image']['tmp_name'];
      $product_descreption=$_POST['product_descreption'];

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


     $query=mysqli_query($con,"insert into bid_product(id,name,email,contact_number,product_name,product_image,product_descreption,city,start_date,end_date,bedding_rate,status)
     values('','$name','$email','$contact_number','$product_name','$product_image','$product_descreption','$city','$start_date','$end_date','$bid_rate','$status')");

    move_uploaded_file($c_image_tmp,"bid_product_images/$product_image");
     if($query){

      
      echo '<script>window.open("bid_final.php?name='.$name.'","_self")</script>';
      
     }
     else{

      echo '<script>alert("data is not inserted successfull")</script>';


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



<!-- this is to display all signd users-->
               
            



</body>
</html>

