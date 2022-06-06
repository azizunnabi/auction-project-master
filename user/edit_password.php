
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
          <h4 style="color:green">Chage Your Password</h4>
        </div><!--panel heading close-->
        <div class="panel-body">
<form method="post" action="" id="form" enctype="multipart/form-data">
      <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">

   <?php 
   $ex1=$_SESSION['email'];

     $image=$_GET['image'];
  
    include('connect.php');


       $query2=mysqli_query($con," SELECT * FROM user_signup  WHERE email='$ex1'");
              
            
             while($row2=mysqli_fetch_array($query2)){
               $image2=$row2['user_image'];

             

     echo "<img src='images/$image2' class='img-responsive' ></img>";
   }

    

    ?>
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
 
  <form action="#" method="post" style="background-color:red">
<center> <div class="form-group" style="width:30%"><!--start form group-->
        <div class="input-group">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="Password" id="" name="p1" data-minlength="5" class="form-control custom  input-lg" placeholder="Enter Existing Password..." required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>
    
    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="Password" id="inputPasswordConfirm" name="p2" class="form-control custom input-lg" placeholder="Retype Password..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>


    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="Password" id="inputPasswordConfirm" name="new" class="form-control custom input-lg" placeholder="Enter New Password..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>


  
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

<div class="help-block with-errors"></div>
    </div><!--close form group-->
    <div class="form-group"><!--start form group-->
    <input type="submit" class="btn   btn btn-default" name="register" value="Change" id="registere" style="width:100px">
    
  
    </div><!--close form group-->
    </form>

    <?php
    include('connect.php');
    if(Isset($_POST['register'])){


     $ex=$_SESSION['email'];


          $p1=$_POST['p1'];
         $p2=$_POST['p2'];
         $new=$_POST['new'];
         $newlen=strlen($new);
         if($newlen<6){

          echo '<p style="color:red">New Password is weak , Plese enter atleast 6 litters</p>';

          exit();
         }

       $query=mysqli_query($con," SELECT * FROM user_signup  WHERE email='$ex'");
              
            
             while($row=mysqli_fetch_array($query)){
               $p=$row['password'];


             
        if($p1==$p2){
          
        }
        else{

          echo '<p style="color:red">Password does Not match</p>';
          exit();
        }
        if($p1 and $p2== $p){
        

       $query1=mysqli_query($con," update user_signup set password='$new' WHERE email='$ex'");
       if($query1){

        echo '<script>alert("Password is Changed Successfully")</script>';

        echo '<script>window.open("user_profile.php","_self")</script>';
       }


          
        }
        else{

          echo '<p style="color:red">Your Password Does not exist, please try another</p>';
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