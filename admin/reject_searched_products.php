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
   
       <div class="col-md-12">
       <div class="panel panel-default panel-success text-center">
        <div class="panel-heading">
          <h4 style="color:green">Do You Really Want to Delete This Searched Products </h4>
        </div><!--panel heading close-->
        <div class="panel-body">


      
  <?php
  
      $_SESSION['admin_email']= $email;
include("connect.php");
  //$sel=$_SESSION['email'];


  $rej=$_GET['reje'];
        $query=mysqli_query($con,"select * from searched_products where email='$rej'");
     while($row=mysqli_fetch_array( $query)){

      
        $row['product_name'];
        $image=$row['user_image'];
  
   

     
     
     
    echo '<hr>';
  }

?>
  
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


  $querry=mysqli_query($con, "DELETE FROM `user_signup`  WHERE email='$rej'");
  if($querry){
    echo '<script>alert("The Searched Product Is Deleted Successfully.")</script>';
        session_destroy();

    echo '<script>window.open("searched_products.php","_self")</script>';


    
  }
  else{
    echo '<p style="color:red">Some Thing Went Wrong , Searched Product does not delted</p>';
  }



}


if(isset($_POST['no'])){

           
    $rej=$_GET['reje'];

    echo '<script>alert("Wellcome Back, You Do Not Want To Delete This Searched Product! ")</script>';

    echo '<script>window.open("searched_products.php","_self")</script>';
    
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
   