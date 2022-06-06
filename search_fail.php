
<!DOCTYPE html>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<?php include 'core/init.php'; ?>
<?php include_once 'core/func/function.php'; ?>


<!--devided index page in parts-->
<?php require_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php require_once 'parts/nav.php';?><!--nav area-->
</head>
<body>

<div class="" style="width:100%;height:40px;"></div>
<div class="container tex-center"><!--banner container-->
   <div class="row ">
       <div class="col-lg-8" 
       <div class="panel panel-default text-center" style="border:0px;">
        
        <div class="panel-body">

 
             


        


           </div>



<div class="upload-error"></div>
</div><!--panel body close-->
</div><!--panel default close-->
      
   </div><!--row close-->

    </div><!---container close-->

    <div class="container text-center ">

    <div class="row"  style="background:#F0FFFF;padding-top:20px;">
    <?php   $product_name=$_GET['product_name'];?>
    <p><span style="color:green">Dear User   ! </span></p> &nbsp;&nbsp;&nbsp;&nbsp;
    <p>Your Product &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:blue;text-decoration:underline;"> <?php   echo $product_name;?></span>&nbsp;&nbsp;&nbsp;&nbsp;is not available,</p>
    <p> If You want to leave your search key word with us, We will store your key world,  if any of our user uploaded this product we will notify you through mobile message </p>
    
   
    </div>
    </div>


     <div class="container text-center" >
     <hr >
     </div>

    <div class="container text-center ">
    <div class="row text-center" >
    <div class="col-lg-12 text-center">
    <div class="col-lg-4">
    <div class="text-left"><a href="search_store.php?product_name='<?php echo $product_name; ?>"  class="btn btn-default btn-lg"> Leave Your Search Key Word
   </a></div></div>
   <div class="col-lg-4">
    <div class="text-center"><a href="index.php" button2" class="btn btn-default btn-lg" >Search Again
    </a></div></div>
    <div class="col-lg-4">
    <div class="text-right"><a href="index.php" button2" class="btn btn-default btn-lg" >Dont Want To Leave My Search
    </a></div></div>
    </div>
    </div>
    </div>



 
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>