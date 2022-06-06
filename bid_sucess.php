<?php require_once 'core/init.php'; ?>
<?php require_once 'core/func/function.php'; ?>
<!DOCTYPE html>
<html>

    <link href="css/custom.css" rel="stylesheet">
    
    <link href="css/custom.css" rel="stylesheet">

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
<div class="page-header btn-primary" style="padding:25px;"><h3>Hurry & Start Wining Auctions Today !</h3></div>
<div class="container-fluid">
    <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 form-control-label">Full Name</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 form-control-label">Card We Accept</label>
    <div class="col-sm-9">
    
      <img src="images/paypal3.jpg" class="img-responsive"></img>
    </div>
  </div>

 <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 form-control-label">Credit Card Number</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="inputPassword3" >
    </div>
  </div>




   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 form-control-label">Expiration Date</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" id="inputPassword3" >
    </div>
  </div>


   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 form-control-label">Card verification Number(CVV2)</label><a href="" >What's This?</a>
   
    <div class="col-sm-5">
      <input type="number" class="form-control" id="inputPassword3" >
    </div>
  </div>


   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 form-control-label">Billing zip Code</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" >
    </div>
  </div>


 
    <div class="form-group">
               <input type="submit" name="submit"  value="I am Ready To Start Wining." class="btn btn-block btn-danger"></td></center>
                    
  
  
  </div>
</form>






    <?php

     include('connection/connection.php');

  if(isset($_POST['submit'])){

  	echo '<script>window.open("bid_success.php","_self")</script>';
        /* $table_descreption=$_POST['table_descreption'];

          $table_image=$_FILES['table_image']['name'];

          $table_image_temp=$_FILES['table_image']['tmp_name'];


       
         // $table_image=$_FILES['table_image'];
         $table_type=$_POST['table_type'];
          $no_of_guests=$_POST['no_of_guests'];
         $table_price=$_POST['Table_price'];
         $table_size=$_POST['table_size'];
        $table_facilities=$_POST['table_facilities'];
         


    $query=mysqli_query($con, "INSERT INTO `hotel`.`a_table` ( `table_descreption`, `table_image`, `table_types`, `no_of_guests`, `table_price`, `table_size`, `table_facilities`)
     VALUES ( '$table_descreption', '$table_image', '$table_type', '$no_of_guests', '$table_price', '$table_size', '$table_facilities')");
    move_uploaded_file($table_image_temp, "admin_uploaded_images/admin_tables/ $table_image");
    if($query){
        echo '<script>alert("data is inserted successfully")</script>';
    }
    else{

        echo '<script>alert("some thing went wrong and the data is not inserted")</script>';
    }
  }  */
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