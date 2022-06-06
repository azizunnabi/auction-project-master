<?php 
 require_once '../core/init.php'; 
	if(isset($_FILES['file']['name']))
	{
		$file_name = $_FILES['file']['name'];
		$file_temp = $_FILES['file']['tmp_name'];
		$store = 'user_profile_pic/';
		$email = $_SESSION['email'];
		$allow_exten = array('jpg','JPEG','png','PNG','jpeg');
		$file_exten = end(explode('.', $file_name));
		if(!in_array($file_exten,$allow_exten))
		{
        echo 'invalid exten';
		}
		else
		{
		move_uploaded_file($file_temp,$store.$file_name);
		$query_image = $con->prepare("UPDATE `user_signup` SET `user_image` = ? WHERE `email` = ?");
		$run = $query_image->execute(array($file_name,$email));
        if($run == TRUE)
        {
        	$_SESSION['image_name'] = $file_name;
        	echo '1';
        }
        else
        {
        	echo '0';
        }
		}


	
}







 ?>
