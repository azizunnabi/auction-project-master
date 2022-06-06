<?php session_start(); ?><!DOCTYPE html>
<html>
<head>
<?php include_once 'parts/header.php'; ?><!--header area-->
<!--<?php include 'core/init.php'; ?>-->
</head>
<body class="body">
<?php include 'parts/nav.php';?><!--nav area-->
<div class="" style="width:100%;height:50px;"></div>


                  
  <!-- this is for alert-->
    <div class="container  text-center " style="width:60%;">
    <div class="row">
    
    <div class="alert alert-success " role="alert">
  <strong>Congrates!</strong> You have successfully loged in , please put your search key word and click insert now button.
  
  </div>
  </div>
    </div>
    <div class="container">
    <hr class="text-center">
    </div>
  <!-- alert finish here-->
         <div class="container text-center " style="width:50%;">
         <div class="row">
        
       
      
          <?php  $pass=$_SESSION['password']; ?>
             
           
          
           <form role="form-inline" method="post" action=""><!--strat form-->
           <div class="input-group"><!--start input group-->
           <input type="text"  name="search_product" class="form-control change-search input-lg" placeholder="Search Products......">
           
           <div class="input-group-btn"><!--start input group btn-->
           <input type="submit" name="submit" class="btn btn-success change-to input-lg" value="Insert Now">
           </div><!-- close input group btn-->
          
           </div><!-- close input group -->
           </form><!--close form-->
           </div>
           </div>
           <?php
           include('connect.php');
 
          if(isset($_POST['submit'])){

          
             $search_keyword=$_POST['search_product'];


            $quer=mysqli_query($con,"select * from bid_started_products where product_name='$search_keyword'");
              $coun=mysqli_num_rows($quer);
              if($coun){
                echo '<center><p style="color:red;padding-top:30px;">Warning !  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This product  is already available on out site,  please go to<a href="index.php"> home </a>page and by it</center></p>';
              }
              else{
          
        
         
            
               $pass=$_SESSION['password'];
             $query=mysqli_query($con,"select * from user_signup where password='$pass'");
             while($row1=mysqli_fetch_array( $query)){
                 $name=$row1['full_name'];
                $email=$row1['email'];
                 $mobile_number=$row1['mobile'];

                $password=$row1['password'];
                $status="pending";

                if($query){

                  $query1=mysqli_query($con, "INSERT INTO `auction_fyp`.`searched_products` (`id`, `name`, `email`, `password`, `mobile_number`, `search_keyword`, `status`) VALUES (NULL, '$name', '$email', '$password', '$mobile_number', '$search_keyword', '$status');");
                  if($query1){
                    echo ' <center><p style="color:green;padding-top:20px;">
    
                            You search keyword is inserted successfully, we will notify you if your product is uploaded. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:blue;">Good By</span>.
                           <br>
                           
                           <div class="container"><a href="index.php" class="btn btn-default btn-block ">Go To Home Page</a></container></p>
                          
  
                           
                            </center>';
                  }
                  else{
                     echo ' <center><p style="color:red;">
    
                           ! Sorry, Your data is not inserted
                           </p>
                           </center>
  
                           ';
                  }

                }
                else{
                
                }
             
             }
           }
           }
           




        

            ?>
           


         
         
            
              
              

      
    
<?php include_once 'parts/jsfiles.php'; ?>
</body>
</html>