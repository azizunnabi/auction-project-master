<!--linking the core file which consist of connection and session files-->
<?php require_once '../core/init.php'; ?>
<?php
$email = $_POST['email'];
//if email variable is set
if(isset($email))
{
  exist_email($email);
}
//to pass query in sape mode protecting from XRSS atacks
function sape_query($string)
{
  $string_sape = trim(htmlspecialchars($string));
  return $string_sape;
}
//check if Email is already exsit
function exist_email($email)
{
  Global $con;
  $email = sape_query($email);
  $email_e = $con->prepare("SELECT email FROM user_signup WHERE email = ? ");
  $email_e->execute(array("$email"));
//count number of rows
  $email_s = $email_e->rowCount();
  if($email_s == 1)
  {
     echo 'email'; 
  }
    else
    {
        echo 'ok';
    }

}
//validatig mobile number
$mobile = $_POST['mobile'];
if(isset($mobile))
{
    mobile_exist($mobile);
}
function mobile_exist($mobile)
{
    Global $con;
    $mobile = sape_query($mobile);
    $mobile_m = $con->prepare("SELECT mobile FROM user_signup WHERE mobile = ?");
    $mobile_m->execute(array("$mobile"));
    $mobile_s = $mobile_m->rowCount();
    if($mobile_s == 1)
    {
        echo 'mobile exist';
    }
    else
    {
        echo 'mobile select';
    }
}
//  $name = $_POST['name1'];
//  $email = $_POST['email1'];
//  $password = $_POST['password1'];
//  $mobile = $_POST['mobile1'];
// if(isset($name) && isset($email) && isset($password) && isset($mobile))
// {
//     Global $con;
//     $query = $con->prepare("INSERT INTO user_signup(full_name,email,password,mobile) VALUES(?,?,?,?)");
//     $store = $query->execute(array("$name","$email","$password","$mobile"));
//     if($store)
//     {
//       echo 'succss';
//     }
//     else
//     {
//       echo 'error';
//     }
// }







$name = $_POST['name1'];
$email = $_POST['email1'];
$passowrd = $_POST['password1'];
$mobile = $_POST['mobile1'];


if(isset($name) && isset($email) && isset($password) && isset($mobile))
{
   complete_signup($name,$email,$password,$mobile);
}
function hashing_password($data)
{
   $data = password_hash($data,PASSWORD_DEFAULT);
   return $data;
}
function complete_signup($name,$email,$password,$mobile)
{
   Global $con;
   $name = sape_query($name);
   $email = sape_query($email);
   $password = sape_query($password);
   $password = hashing_password($password);
   $mobile = sape_query($mobile);
   $insert = $con->prepare("INSERT INTO user_signup(full_name,email,password,mobile) VALUES(?,?,?,?)");
   $store = $insert->execute(array($name,$email,$password,$mobile));
   if($store)
   {
     
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      echo 'successfully';

   }
   else
   {
       echo 'tryagin';
   }
    
}

?>