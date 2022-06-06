<?php 
require_once 'core/init.php';
function get_image()
{
    
    GLOBAL $con;
    $user_email = $_SESSION['email'];
    $full_name = $_SESSION['name'];
    $query_image = $con->prepare("SELECT * FROM `user_signup` WHERE `email` = ? && `full_name` = ?");
    $query_image->execute(array($user_email,$full_name));
    $query_count = $query_image->rowCount();
    if($query_count == 1)
    {
     while($r = $query_image->fetch(PDO::FETCH_OBJ))
     {
        $user_image = $r->user_image;
        $user_name = ucwords($r->full_name);
        if($user_image == '')
        {


           echo "
  <div class='dropdown'>
       <a href='user/user_dashboard.php' class='dropdown-toggle img-link' data-toggle='dropdown'>
       <img src='user/images/user.png' class='img'>
       <span class='caret'></span></a>
       <ul class='dropdown-menu'>
       <li><a href='user/user_dashboard.php'>$user_name</a></li>
       <li><a href='user/user_dashboard.php'>dashborard</a></li>
       <li><a href='user/logout.php'>logout</a></li>
       </ul>
        </div>

     ";




        }
        else
        {
                  echo "
        <div class='dropdown'>
       <a href='user/user_dashboard.php' class='dropdown-toggle img-link' data-toggle='dropdown'>
       <img src='user/ajax/user_profile_pic/$user_image' class='img'>
       <span class='caret'></span></a>
       <ul class='dropdown-menu'>
       <li><a href='user/user_dashboard.php'>$user_name</a></li>
       <li><a href='user/user_dashboard.php'>Dashborard</a></li>
       <li><a href='user/logout.php'>Logout</a></li>
       </ul>
        </div>


        ";
        }







     }
    }
    else
    {
      // $username = $_SESSION['name'];
  //    echo "
  // <div class='dropdown'>
  //      <a href='user/user_dashboard.php' class='dropdown-toggle img-link' data-toggle='dropdown'>
  //      <img src='user/images/user.png' class='img'>
  //      <span class='caret'></span></a>
  //      <ul class='dropdown-menu'>
  //      <li><a href='user/user_dashboard.php'>$username</a></li>
  //      <li><a href='user/user_dashboard.php'>dashborard</a></li>
  //      <li><a href='user/logout.php'>logout</a></li>
  //      </ul>
  //       </div>

  //    ";
    }


}


 ?>