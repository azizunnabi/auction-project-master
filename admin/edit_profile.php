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
<?php include_once 'parts/header.php'; ?><!--header area-->
<?php include 'core/init.php'; ?>
<?php include_once 'core/func/function.php'; ?>
</head>
<body>
<?php include 'admin_left_area.php';?><!--nav area-->

<div class="container"><!--banner container-->
   <div class="row upload-img">
       <div class="col-md-10">
       <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4 style="color:green">Edit Your Profile</h4>
        </div><!--panel heading close-->
        <div class="panel-body">
<form method="post" action="" id="form" enctype="multipart/form-data">
      <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">

   <?php 
   
  
    include('connect.php');

        $ex2=$_SESSION['admin_email'];

    
  

    

      $query2=mysqli_query($con," SELECT * FROM admin  ");
              
            
             while($row2=mysqli_fetch_array($query2)){
                  $image1=$row2['image'];
                   $name=$row2['name'];
                   $role=$row2['role'];
                   $email=$row2['admin_email'];
                   $contact=$row2['contact'];
                    $country=$row2['country'];
                   $job=$row2['job'];
                 

             


     

          echo '<img src="admin_images/'.$image1.'" class="img-circle"   >';
   
   

    
      

    ?>



           

     
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
  <?php
  echo '
 
  <form action="#" method="post" style="background-color:red">
<center> <div class="form-group" style="width:30%"><!--start form group-->
        <div class="input-group">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="name"  name="name"  pattern="[a-zA-Z0-9 ]+" data-minlength="5" class="form-control custom  input-lg" value="'.$name.'" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>



    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="text"  name="role"  class="form-control custom input-lg" value="'.$role.'" data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

    
    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="email"  name="email" class="form-control custom input-lg" value="'.$email.'" data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="password"  name="password"  class="form-control custom input-lg" value="'.$password.'" data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>


   




    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="number" name="contact_number" class="form-control custom input-lg" value="'.$contact.'" data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>



    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="text"  name="country"  class="form-control custom input-lg" value="'.$country.'" data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="text"  name="job"  class="form-control custom input-lg" value="'.$job.'" data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>


 



    



    

   

<center>
  <button type="button"  style="width:220px; height:48px;border:0px;">
      <input type="file"  name="image" class="form-control custom input-lg"   required value></button>
  <button type="button" class="btn btn-default btn-lg"  style=" height:48px;border:0px;" >
          <img src="admin_images/'.$image1.'" class="img-circle"  height="41px;" ></button>
          </center>





<div class="help-block with-errors"></div>
    </div><!--close form group-->
    <div class="form-group"><!--start form group-->
    <input type="submit" class="btn   btn-register btn btn-success btn-login" name="register" value="Upload Your Product" id="registere">

    </div><!--close form group-->


    </form>';
  }
    ?>

    <?php
    include('connect.php');
    if(Isset($_POST['register'])){


      $ex=$_SESSION['admin_email'];
      $name=$_POST['name'];
      $email=$_POST['email'];

      $role=$_POST['role'];
      
      $password=$_POST['password'];

      $contact_number=$_POST['contact_number'];
      $country=$_POST['country'];

      $job=$_POST['job'];
     $product_image = $_FILES['image']['name'];
         $c_image_tmp = $_FILES['image']['tmp_name'];
      


  


     $query=mysqli_query($con,"update admin set name='$name',email='$email',role='$role',password='$password',contact='$contact_number',
      country='$country',job='$job',image='$product_image'");
     

    move_uploaded_file($c_image_tmp,"admin_images/$product_image");
     if($query){
   echo '<script>alert("your Profile has been updated successfully")</script>';
      
      echo '<script>window.open("orignaladmin.php?name='.$name.'","_self")</script>';
      
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
<?php } ?>