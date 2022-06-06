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
       <div class="panel panel-default panel-success text-center">
        <div class="panel-heading">
          <h4 >Product Status</h4>
        </div><!--panel heading close-->
        <div class="panel-body">

   <?php 
   
  
    include('connect.php');

      $ex1=$_SESSION['email'];
      echo '<p style="color:green">Your product has been Uploaded Successfully .  &nbsp;&nbsp; Do You Want To Upload Another Product.</p>';

     


    
   
   

    

    ?>
    <?php
include('connect.php');
$ex1=$_SESSION['email'];
 echo '
     <form action="" method="post">

  <center><table align="center" width="600">
    
       
         
         <tr align="center" style="color:red">
          <td >
            <input type="submit" name="yes" value="Yes !" id="skip" name="yes" class="btn btn-default btn-danger" style="width:100px" />

            <input type="submit" name="no" value="No ! "  id="skip" name="yes" class="btn btn-default" value="No !" style="width:100px"/>
            </td>
         </tr>






  </table></center>

</form>   ';


?>
<?php
 

if(isset($_POST['yes'])){
  $ex1=$_SESSION['email'];

 


     
include("connect.php");
    



    echo '<script>window.open("bid_product1.php","_self")</script>';


    
  }
  else{
    echo '';
  }






if(isset($_POST['no'])){

           
    

    

    echo '<script>window.open("orignaladmin.php","_self")</script>';
    
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