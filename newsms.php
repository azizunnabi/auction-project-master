<?php





$uname="azizse971@gmail.com";
$pword="azizazra";

$mob='03429859057';

//configuration variables

$info="1";
$test="0";



$from="aziz";
 $selectednums="$mob";
$message="hi this is aziz a web developer";
$message=urlencode($message);


$data="uname=".$uname."pword=".$pword."message=".$message."from=".$from."selectednums=".$selectednums."info=".$info."test=".$test;


$ch=curl_init('http://www.txtlocal.com/sendsmspost.php');
curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result=curl_exec($ch);
curl_close($ch);


 



?>
