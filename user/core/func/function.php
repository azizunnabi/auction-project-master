<?php 
require_once 'core/init.php';
function get_image()
{
    
    GLOBAL $con;
    $user_email = $_SESSION['email'];
    // $image_name = $_SESSION['image_name'];
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

        <a class='list-group-item'>
        <img src='images/user.png' class='image'
        </a>
        <a href='#' class='list-group-item'><span class='glyphicon glyphicon-user'></span>&nbsp;&nbsp;$user_name</a>

";
        }
        else
        {
                    echo "<a class='list-group-item'>
        <img src='ajax/user_profile_pic/$user_image' class='image'
        </a>
        <a href='#' class='list-group-item'><span class='glyphicon glyphicon-user'></span>&nbsp;&nbsp;$user_name</a>
        
        "
        ;
        }






    }
}
else
{
//   $username = $_SESSION['name'];
// echo "

//         <a class='list-group-item'>
//         <img src='images/user.png' class='image'
//         </a>
//         <a href='#' class='list-group-item'><span class='glyphicon glyphicon-user'></span>&nbsp;&nbsp;$username</a>

// ";

}





}


 ?>