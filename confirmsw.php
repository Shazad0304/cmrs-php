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
	$language = $_POST['language'];
//	$valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.
    $password = $_POST['password'];
	$cnic = $_POST['cnic'];

   

  //if valid then redirect

   
	   $result = $db->exec("INSERT INTO volunteer_sign_up_2() VALUES ( '$email' , '$password' , '$name' , '$language' )");

    echo "New record created successfully";
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'approve_sw.php';
header("Location: http://$host$uri/$extra");



?>