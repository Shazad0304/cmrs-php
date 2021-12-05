<?php
require_once("connection.php");
$email = "";
$password = "";
$name = "";
$cnic = "";
$language = "";
if ( isset( $_POST['submit'] ) ) 
{
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$cnic = $_POST['cnic'];
$language = $_POST['language'];
  if (empty($_POST["name"])) {
     $nameErr = "Name is required";
	 echo $nameErr;
   } else {
     $name =  ($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
	 echo $emailErr;
   } else {
     $email =  ($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
 

   if (empty($_POST["password"])) {
     $pass = "Password is required";
	 echo $pass ;
   } else {
     $password =  ($_POST["password"]);
   }
   
   if (empty($_POST["cnic"])) {
     $cnicErr = "CNIC is required";
	 echo $cnicErr;
   } else {
     $cnic =  ($_POST["cnic"]);
     
   }

   if (empty($_POST["language"])) {
     $languageErr = "language is required";
	 echo $languageErr;
   } else {
     $language =  ($_POST["language"]);
   }


	
	$sql1 = "INSERT INTO request_SW VALUES (  '$email' ,'$name' , '$password' , '$cnic' , '$language'  )";
	if ($link->query($sql1) === TRUE) {
		
    echo "New record created successfully";
	header('Location:index.html');
	
} else  {
	
echo '<script>'; print 'alert("This email address is already registered")'; print '</script>';

	
}
}	
$link->close();
	


?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Common Man Reporting System</title>
 
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <LINK REL=StyleSheet HREF="bootstrap.min" TYPE="text/css" MEDIA=all>
  
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="css/plugins/morris.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css" MEDIA=all>
  
	<LINK REL=StyleSheet HREF="bootstrap-theme" TYPE="text/css" MEDIA=all>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="C:\xampp\htdocs\cmrs\welcome.php">CMRS</a>
    </div>
    <div>
	
      <ul class="nav navbar-nav">
	  
	  
        
		
		<!--
		<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>

		-->
			
		<li class="dropdown  pull-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </div>
			
		</ul>
		
    </div>
</nav>


<br><br><br><br>
<div class="container">
  <h2>ADD</h2>
  <form role="form"  method="post">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="Name" class="form-control" name="name" placeholder="Enter Name">
	  
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
	<div class="form-group">
      <label for="id">CNIC:</label>
      <input type="id" class="form-control" name = "cnic" placeholder="Enter CNIC">
    </div>

				
    <div>
    <label>Language:<span class="red">*</span></label><br>
    <td><select name="language" id="signup_type" class="txtfld1" required="required" >
     <option value="select" selected="selected">--Select--</option><option value="english">English</option><option value="urdu">Urdu</option><option value="sindhi">Sindhi</option>	
    </select></td>
    
				
    
	<br><br>
    <button type="submit" name="submit"class="btn btn-info">Submit</button>
  </form>
</div>

</body>
</html>
