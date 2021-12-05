<?php
require_once("connection.php");
session_start();
//$department = "";

if(!$_SESSION['loginadmin']){
   header("location:index.html");
   die;
}
$name = $_POST['name'];
$email = $_POST['email'];
	//$language = $_POST['language'];
	 $area = $_POST['area'];
//	$valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.
    $password = $_POST['password'];
	$cnic = $_POST['cnic'];

   

  //if valid then redirect

   
	   $result = $db->exec("INSERT INTO verifier_login(name,email,password,cnic,area) VALUES ( '$name' , '$email' , '$password' ,'$cnic','$area')");

   echo "New record created successfully";
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'approve_v.php';
header("Location: http://$host$uri/$extra");



?>