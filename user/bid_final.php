
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


    <?php
        
       $ex1=$_GET['name'];

    // echo '<h4 style="color:green">Dear &nbsp&nbsp<span style="color:blue">'.$ex1.'</span></h4>';
      
       // echo '  <h4 style="color:green">Dear &nbsp&nbsp'.$ex1.' </h4>';
          ?>

     
        </div><!--panel heading close-->

    <?php 
    session_start();
        include('connect.php');
      $ex1=$_GET['name'];

    
  

    

      $query2=mysqli_query($con," SELECT * FROM bid_product  WHERE name='$ex1'");
              
            
             while($row2=mysqli_fetch_array($query2)){
                 $image2=$row2['product_image'];

             
      echo '<p style="padding:50px" class="text-center navbar-text alert-success ">Dear &nbsp&nbsp<span style="color:blue; font-size:17px;">'.$ex1.'</span> !&nbsp&nbsp Your 
        Product    Has   Been   Uploaded   Successfully  To   Data    Base,  Admin   Will   Check   Your   Product Later,  If all the data you enterd are correct ,  Your  Product
      Will  Be  Uploaded   To  Our   Home  Page,  Other  Wise  Your  Product  Will  Be  Rejected. <br><br>
      Thanks!.
      </p>';
      
      

    
      
      ?>
        <div class="panel-body">
<form method="post" action="" id="form" enctype="multipart/form-data">
      <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">

     <?php
     echo "<img src='images/$image2' class='img-responsive' ></img>"; 
    ?>
    <?php } ?>

  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
    
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
  
  <div class="btn-group" role="group">
  
   <a href="../index.php"><button type="button" class="btn btn-default" style="color:green; font-weight: bolder; hover:none">Continue Shopping</button></a>
   &nbsp;
  </div>
 
</div>


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

