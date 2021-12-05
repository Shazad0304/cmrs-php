<?php
require_once("connection.php");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$area = $_POST['area'];
//	$valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.
    $password = $_POST['password'];
	$cnic = $_POST['cnic'];

if (empty($_POST["email"])  OR empty($_POST["name"]) OR empty($_POST["password"]) OR empty($_POST["area"]) OR empty($_POST["cnic"])) {
      
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$last = "Description is required. Please write there";
$valid = false;
	  	  $message = "you didn't write description";
print '<script type=text/javascript>';
print "alert('$last')";

print '</script>';
   
   }
   else 
   {$result1 = $db->prepare( "SELECT email
			 FROM request_v
			 WHERE email = ? OR cnic = '$cnic'" );
$result1->bindValue( 1, $email );
$result1->execute();
    $result = $db->prepare( "SELECT email
			 FROM verifier_login
			 WHERE email = ?" );
$result->bindValue( 1, $email );
$result->execute();
if( $result->rowCount() > 0 OR $result1->rowCount() > 0) { # If rows are found for query
     $last = "Email Or Cnic already registered";
	 print '<script type=text/javascript>';
print "alert('$last')";

print '</script>';
}
   else {
    
   

  //if valid then redirect

   
	   $result = $db->exec("INSERT INTO request_v(name,email,password,cnic,area) VALUES ( '$name' , '$email' , '$password' ,'$cnic','$area')");
print '<script>';
echo "if (confirm('Registered Successfully!! Your account will be activated after 1 hour') == true) {
     window.location.href='index.html' ;
    } else {
       window.location.href='index.html' ;
    }";
	
	print '</script>';
   

   }

}
}
echo "<!-- multistep form -->\n"; 
echo "\n"; 
echo "<html>\n"; 
echo "<style>\n"; 
echo "\n"; 
echo "/*custom font*/\n"; 
echo "@import url(http://fonts.googleapis.com/css?family=Montserrat);\n"; 
echo "\n"; 
echo "\n"; 
echo "* {margin: 0; padding: 0;}\n"; 
echo "\n"; 
echo "html {\n"; 
echo "	height: 100%;\n"; 
echo "	/Image only BG fallback*/\n"; 
echo "	background: url(http://thecodeplayer.com/uploads/media/gs.png);\n"; 
echo "	/*background = gradient + image pattern combo*/\n"; 
echo "	background: \n"; 
echo "		linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)), \n"; 
echo "		url(http://thecodeplayer.com/uploads/media/gs.png);\n"; 
echo "}\n"; 
echo "\n"; 
echo "body {\n"; 
echo "	font-family: montserrat, arial, verdana;\n"; 
echo "}\n"; 
echo "/*form styles*/\n"; 
echo "#msform {\n"; 
echo "	width: 400px;\n"; 
echo "	margin: 50px auto;\n"; 
echo "	text-align: center;\n"; 
echo "	position: relative;\n"; 
echo "}\n"; 
echo "#msform fieldset {\n"; 
echo "	background: white;\n"; 
echo "	border: 0 none;\n"; 
echo "	border-radius: 3px;\n"; 
echo "	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);\n"; 
echo "	padding: 20px 30px;\n"; 
echo "	\n"; 
echo "	box-sizing: border-box;\n"; 
echo "	width: 80%;\n"; 
echo "	margin: 0 10%;\n"; 
echo "	\n"; 
echo "	/*stacking fieldsets above each other*/\n"; 
echo "	position: absolute;\n"; 
echo "}\n"; 
echo "/*Hide all except first fieldset*/\n"; 
echo "#msform fieldset:not(:first-of-type) {\n"; 
echo "	display: none;\n"; 
echo "}\n"; 
echo "/*inputs*/\n"; 
echo "#msform input, #msform textarea {\n"; 
echo "	padding: 15px;\n"; 
echo "	border: 1px solid #ccc;\n"; 
echo "	border-radius: 3px;\n"; 
echo "	margin-bottom: 10px;\n"; 
echo "	width: 100%;\n"; 
echo "	box-sizing: border-box;\n"; 
echo "	font-family: montserrat;\n"; 
echo "	color: #2C3E50;\n"; 
echo "	font-size: 13px;\n"; 
echo "}\n"; 
echo "/*buttons*/\n"; 
echo "#msform .action-button {\n"; 
echo "	width: 100px;\n"; 
echo "	background: #27AE60;\n"; 
echo "	font-weight: bold;\n"; 
echo "	color: white;\n"; 
echo "	border: 0 none;\n"; 
echo "	border-radius: 1px;\n"; 
echo "	cursor: pointer;\n"; 
echo "	padding: 10px 5px;\n"; 
echo "	margin: 10px 5px;\n"; 
echo "}\n"; 
echo "#msform .action-button:hover, #msform .action-button:focus {\n"; 
echo "	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;\n"; 
echo "}\n"; 
echo "/*headings*/\n"; 
echo ".fs-title {\n"; 
echo "	font-size: 15px;\n"; 
echo "	text-transform: uppercase;\n"; 
echo "	color: #2C3E50;\n"; 
echo "	margin-bottom: 10px;\n"; 
echo "}\n"; 
echo ".fs-subtitle {\n"; 
echo "	font-weight: normal;\n"; 
echo "	font-size: 13px;\n"; 
echo "	color: #666;\n"; 
echo "	margin-bottom: 20px;\n"; 
echo "}\n"; 
echo "/*progressbar*/\n"; 
echo "#progressbar {\n"; 
echo "	margin-bottom: 30px;\n"; 
echo "	overflow: hidden;\n"; 
echo "	/*CSS counters to number the steps*/\n"; 
echo "	counter-reset: step;\n"; 
echo "}\n"; 
echo "#progressbar li {\n"; 
echo "	list-style-type: none;\n"; 
echo "	color: white;\n"; 
echo "	text-transform: uppercase;\n"; 
echo "	font-size: 9px;\n"; 
echo "	width: 33.33%;\n"; 
echo "	float: left;\n"; 
echo "	position: relative;\n"; 
echo "}\n"; 
echo "#progressbar li:before {\n"; 
echo "	content: counter(step);\n"; 
echo "	counter-increment: step;\n"; 
echo "	width: 20px;\n"; 
echo "	line-height: 20px;\n"; 
echo "	display: block;\n"; 
echo "	font-size: 10px;\n"; 
echo "	color: #333;\n"; 
echo "	background: white;\n"; 
echo "	border-radius: 3px;\n"; 
echo "	margin: 0 auto 5px auto;\n"; 
echo "}\n"; 
echo "/*progressbar connectors*/\n"; 
echo "#progressbar li:after {\n"; 
echo "	content: '';\n"; 
echo "	width: 100%;\n"; 
echo "	height: 2px;\n"; 
echo "	background: white;\n"; 
echo "	position: absolute;\n"; 
echo "	left: -50%;\n"; 
echo "	top: 9px;\n"; 
echo "	z-index: -1; /*put it behind the numbers*/\n"; 
echo "}\n"; 
echo "#progressbar li:first-child:after {\n"; 
echo "	/*connector not needed before the first step*/\n"; 
echo "	content: none; \n"; 
echo "}\n"; 
echo "/*marking active/completed steps green*/\n"; 
echo "/*The number of the step and the connector before it = green*/\n"; 
echo "#progressbar li.active:before,  #progressbar li.active:after{\n"; 
echo "	background: #27AE60;\n"; 
echo "	color: white;\n"; 
echo "}\n"; 
echo "</style>';\n"; 
echo "\n"; 
echo "\n"; 
echo "<form id=\"msform\" method=\"POST\">\n"; 
echo "	<!-- progressbar -->\n"; 
//echo "	<ul id=\"progressbar\">\n"; 
echo "		<li class=\"active\">Comman Man Reporting System Portal </li>\n"; 
	 
//echo "	</ul>\n"; 
echo "	<!-- fieldsets -->\n"; 
echo "	<fieldset>\n"; 
echo "		<h2 class=\"fs-title\">Create your account</h2>\n"; 
echo "		<h3 class=\"fs-subtitle\">Verifier Registeration Form</h3>\n"; 
echo "		<input type=\"name\" name=\"name\" placeholder=\"Name\" />\n"; 
echo "		<input type=\"text\" name=\"cnic\" placeholder=\"CNIC xxxxx-xxxxxxx-x\" />\n"; 
echo "		<input type=\"email\" name=\"email\" placeholder=\"Email\" />\n"; 
echo "		<input type=\"password\" name=\"password\" placeholder=\"Password\" />\n"; 
echo "		<input type=\"text\" name=\"area\" placeholder=\"Area\" />\n"; 


//echo "		<input type=\"password\" name=\"cpass\" placeholder=\"Confirm Password\" />\n"; 
echo "	<input type=\"submit\" name=\"submit\" class=\"submit action-button\" value=\"Submit\" />\n"; 
echo "	</fieldset>\n"; 
 
echo "</form>\n"; 
echo "\n"; 
echo "</html>\n";
?>