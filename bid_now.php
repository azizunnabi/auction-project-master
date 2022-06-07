<?php require_once 'core/init.php'; ?>
<?php require_once 'core/func/function.php'; ?>
<!DOCTYPE html>



    
    
<link rel="stylesheet" type="text/css" href="css/customize.css">
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
<container>
<div class="col-lg-9" style="background:wheat;">
  <div class="panel panel-default" style="background:yellow;">
   
   <div class="col-lg-6 col-lg-offset-3 " style="background:white" >
<div class="page-header btn-primary" style="padding:30px;"><h3>Please Register to Bid on Auctions</h3></div>
<div class="container-fluid">
  <!-- vertical form
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
  <label for="name"> First Name</label>
  <input type="text" id="name" name="table_descreption" class="form-control">
  
    </div>



     <div class="form-group">
  <label for="name">Last Name </label>
  <input type="text" id="name" name="table_image" class="form-control ">
  
    </div>








 <div class="form-group">
  <label for="email">Email Address </label>
  <input type="number" id="email" name="no_of_guests" class="form-control">
  
    </div>

    <div class="form-group">
  <label for="email">Password </label>
  <input type="number" id="email" name="Table_price" class="form-control">
  
    </div>
    

    <div class="form-group" >
       
  <label for="country">Choose Your Country </label>
           <select class="form-control btn-danger" style="font-size:15px;" id="country" name="table_type" required>
            <option><bolder>Country</bolder></option>
            <option>Pakistan</option>
            <option>India</option>
            <option>China</option>

            <option>Afghanistan</option>

           </select>
           
           </div>




    

   
    <div class="form-group" style="background:lightgrey;">
  
   <div class="text-center">
     	<input type="checkbox">I have read and agree to Online Auction Site <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a>.
     	 I also agree that I am at least 18 years of age.</p>
     </div>
  
    </div>
    
   
      
     
   
   

  
  

  <div class="form-group">
               <input type="submit" name="submit"  value="I am Ready To Start Wining." class="btn btn-block btn-danger"></td></center>
                    
  
  
  </div>
  </form>
  <!--  vertical form ends here-->







   <form method="post" name="firm">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 form-control-label">First Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="first_name" id="inputEmail3" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 form-control-label">Last Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="last_name"  id="inputEmail3" required >
    </div>
  </div>


   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 form-control-label">Bid Rate</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="bid_rate" name="bid_rate" id="inputPassword3" required >
    </div>
  </div>

    <div class="bid_low "></div>

 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 form-control-label">Email Address</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" name="email"id="inputEmail3" required >
    </div>
  </div>




   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 form-control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="password" id="inputPassword3" required >
    </div>
  </div>

   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 form-control-label">Contact Number</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="contact" id="inputPassword3" required >
    </div>
  </div>




  <div class="form-group" >
       
  <label for="country">Choose Your Country </label>
           <select class="form-control btn-danger" name="country" style="font-size:15px;" id="country" name="table_type" required>
            <option><bolder>Pakistan</bolder></option>
            
            <option>India</option>
            <option>China</option>

            <option>Afghanistan</option>

           </select>
           
           </div>


    <div class="form-group" style="background:lightgrey;">
  
   <div class="text-center">
      <input type="checkbox" name="conformation" id="agree" value="agree">I have read and agree to Online Auction Site <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a>.
       I also agree that I am at least 18 years of age.</p>
     </div>
  
    </div>

    <div class="unconform" style="color:red;"></div>
    <div class="id" style="height:10px;"></div>


 
    <div class="form-group">
               <input type="submit" name="submit"  id="submit" value="I am Ready To Start Wining." class="btn btn-block btn-danger"></td></center>
                    
  
  
  </div>
</form>






    <?php

 

     include('connect.php');

  $product_name=$_GET['id'];
 //this code is to get owner or uploader customer nae

       $q8=mysqli_query($con, "select * FROM bid_product where email='$product_name'");


   while($adc=mysqli_fetch_array( $q8)){
    echo $adc['name'];
   }
   //uploader customer name finish here

  if(isset($_POST['submit'])){

  //echo '<script>window.open("bid_sucess.php","_self")</script>';


//this is to select bid hihest bid rate





    
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
        echo '<script>alert("You have bidded successfully")</script>';



        echo '<script>window.open("product_details.php?id='.$product_name.'","_self")</script>';
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