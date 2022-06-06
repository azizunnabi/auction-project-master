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


<div class="container"><!--banner container-->

<?php include('admin_left_area.php'); ?>
   <div class="row upload-img">
       <div class="col-md-12">
       <div class="panel panel-default panel-success text-center">
        <div class="panel-heading">
          <h4 style="color:green">Do You Really Want to Reject This Product From Bidding</h4>
        </div><!--panel heading close-->
        <div class="panel-body">

<form method="post" action="" id="form" enctype="multipart/form-data">
      <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
  <?php
  
include("connect.php");
  //$sel=$_SESSION['email'];


  $rej=$_GET['reje'];
        $query=mysqli_query($con,"select * from bid_product where email='$rej'");
     while($row=mysqli_fetch_array( $query)){

      
        $row['product_name'];
        $image=$row['product_image'];
  
   

     
     
     echo "<img src='../images/$image' class='img-responsive' ></img>";

    echo '</a>';
    echo '<hr>';
  }

?>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
     
     

  </div>
</div>
</form>
     <a href="#" id="skip" name="yes" class="" value="" style="width:100px"></a>
       &nbsp;
     <a href="#" id="skip" name="no" class="" value="" style="width:100px"></a>
  
<?php
include('connect.php');
 echo '
     <form action="" method="post">

  <center><table align="center" width="600">
    
       
         
         <tr align="center" style="color:red">
          <td >
            <input type="submit" name="yes" value="Yes !" id="skip" name="yes" class="btn btn-default btn-danger" value="Yes !" style="width:100px" />

            <input type="submit" name="no" value="No ! "  id="skip" name="yes" class="btn btn-default" value="No !" style="width:100px"/>
            </td>
         </tr>






  </table></center>

</form>   ';


?>
<?php
 

if(isset($_POST['yes'])){

 


     
include("connect.php");
     $rej=$_GET['reje'];


  $querry=mysqli_query($con, "DELETE FROM `bid_product`  WHERE email='$rej'");
  if($querry){
    echo '<script>alert("your Account Has Been Deleted Successfully, Good By.")</script>';
        

    echo '<script>window.open("approved_products.php","_self")</script>';


    
  }
  else{
    echo '<p style="color:red">Some Thing Went Wrong , and Your Account is Not Deleted</p>';
  }



}


if(isset($_POST['no'])){

           
    $rej=$_GET['reje'];

    echo '<script>alert("Wellcome Back, You Do Not Want To Delete Your Account! ")</script>';

    echo '<script>window.open("approve.php","_self")</script>';
    
}




?>
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
   