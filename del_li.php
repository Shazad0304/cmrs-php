<?php
require_once("connection.php");
session_start();
//$department = "";

if(!$_SESSION['loginadmin']){
   header("location:index.html");
   die;
}
$table= 0;
$table = $_POST['table'];
$email = $_POST['email'];
//	$area = $_POST['area'];
//	$valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.
 //   $password = $_POST['password'];
//	$cnic = $_POST['cnic'];

   

  //if valid then redirect
if($table == "volunteer_sign_up_1")
{
	   $result = $db->exec("DELETE FROM volunteer_sign_up_1 where email_1 = '$email'");
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'deleteli.php';
header("Location: http://$host$uri/$extra");
}
else if($table == "volunteer_sign_up_2")
{
	   $result = $db->exec("DELETE FROM volunteer_sign_up_2 where email_2 = '$email'");
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'deletesw.php';
header("Location: http://$host$uri/$extra");
}
else if($table == "verifier_login")
{
	   $result = $db->exec("DELETE FROM verifier_login where email = '$email'");
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'deletev.php';
header("Location: http://$host$uri/$extra");
}
else{
	echo "no record selected!!!";
	
	
}
?>