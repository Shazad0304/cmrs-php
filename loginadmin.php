<?php
require_once('connection.php');
session_start();
if(isset($_SESSION["email_id"])) {
     header("Location: admin.php"); // redirects them to homepage
     exit; // for good measure
}
$message="";
if(count($_POST)>0) {

$email = $_POST["user"] ;
$pass = $_POST["password"];
$stmt = $db->query("SELECT * FROM admin WHERE email_id= '$email' and password = '$pass'");
//if(isset(session_id()) header("Location: admin.php");


try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{

$_SESSION["email_id"] = $row['email_id'];
$_SESSION["name"] = $row['name'];
}

}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}


if(isset($_SESSION["email_id"])) {
	$_SESSION['loginadmin'] = true;
header("Location:admin.php");
}
else
{
	
	//echo "Wrong Password!!!!!!!";
print '<script>';
echo 'alert("Wrong Password")';
	
	print '</script>';
//header("Location:loginadmin.php");
}
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Login </title>
    <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css2?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css2?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(help.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: #b3ecff;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 1px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: #b3ecff;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 150px;
	height: 35px;
	background:  #0d0d0d;
	border: 1px solid #ffff;
	cursor: pointer;
	border-radius: 2px;
	color: #ffffff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>

    <div class="body"></div>
	<p>Common Man Reporting System</p>
		<div class="grad"></div>
		<div class="header">
			<div>Admin<span>Panel</span></div>
		</div>
		<br>
		<form name="frmUser" method="post" action="">

		<div class="login">
				<input type="text" placeholder="username" name="user" color = "#b3ecff"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" class="btn btn-info" value = "submit">

		</div>
		
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    
    
  </body>
</html>