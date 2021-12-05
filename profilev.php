<?php
require_once("connection.php");
session_start();
if(!$_SESSION['loginv']){
   header("location:index.html");
   die;
}

if($_SESSION["email"]) {

 $email = $_SESSION["email"]; 
 $name = $_SESSION["name"];
 }
$voice_valid = 0;
$voice_total =0;
$voice_invalid = 0;
$text_valid = 0;
$text_total =0;
$text_invalid = 0;
$stmt2 = $db->query("SELECT * FROM voice_message where email= '$email'");
try {
	while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) 
	{
	
	$voice_total++;
	}
	
}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}
$stmt = $db->query("SELECT * FROM voice_message where email= '$email' and validity = 'valid'");
try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
	
	$voice_valid++;
	}
	
}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}
$stmt1 = $db->query("SELECT * FROM voice_message where email= '$email' and validity = 'invalid'");
try {
	while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) 
	{
	
	$voice_invalid++;
	}
	
}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}
$stmt3 = $db->query("SELECT * FROM text_message where email= '$email'");
try {
	while($row = $stmt3->fetch(PDO::FETCH_ASSOC)) 
	{
	
	$text_total++;
	}
	
}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}
$stmt4 = $db->query("SELECT * FROM text_message where email= '$email' and validity = 'valid'");
try {
	while($row = $stmt4->fetch(PDO::FETCH_ASSOC)) 
	{
	
	$text_valid++;
	}
	
}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}
$stmt5 = $db->query("SELECT * FROM text_message where email= '$email' and validity = 'invalid'");
try {
	while($row = $stmt5->fetch(PDO::FETCH_ASSOC)) 
	{
	
	$text_invalid++;
	}
	
}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}
print	'<!DOCTYPE html>';
print '<html lang="en">';
print '<head>';
 print '<title>Bootstrap Example</title>';
 print '<meta charset="utf-8">';
 print '<meta name="viewport" content="width=device-width, initial-scale=1">';
 print '<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">';
  print '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';
 print  '<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';
	
	
  
  
print  '</head>';
print '<body>';
print '<br><br>';




print '<nav class="navbar navbar-inverse navbar-fixed-top">';
print  '<div class="container-fluid">';
 print   '<div class="navbar-header">';
print      '<a class="navbar-brand" >CMRS</a>';
 print   '</div>';
print    '<div>';

print '<ul class="nav navbar-nav navbar-right">';
   print      '<li>';
print        '<a href="#"><span ></span><i ></i>Welcome.... '.$name.'</a>';
 print                       '</li>';
print      '<li>';
print        '<a href="verifier.php"><span ></span><i ></i> Voice Message Verify</a>';
 print                       '</li>';
      print                  '<li class="divider"></li>';
         
		 print '  <li class="divider"></li>';
           print             '<li>';
      print                      '<a href="textverify.php"><span ></span><i ></i><strong> Text Message Verify</strong></a>';
           print             '</li>';
		
		         print                  '<li class="divider"></li>';
				       print                  '<li class="divider"></li>';
		    print             '<li>';
      print                      '<a href="logout.php"><span class="glyphicon glyphicon-off"></span><i class="fa fa-fw fa-power-off"></i> Log Out</a>';
           print             '</li>';
print	'</li>';
print      '</ul>';

      
print    '</div>';
print  '</div>';
print '</nav>';
print '<meta name="viewport" content="width=1, initial-scale=1">';
print '<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">';
print '<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>';
//print '<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>';

//print '<div data-role="page" id="pageone">';
 print ' <div data-role="main" class="ui-content">';
//  print '  <a href="" class="ui-btn ui-icon-home ui-btn-icon-left"> Home </a>';
 print ' </div>';


print '<div class="container">';
print '<br><br><br><br>';             
print  '<table class="table table-striped">';

print    '<tbody>';
print '</table>'; 
print '</tbody>';
print  '</table>';
print '</div>';

print    '<script src="js/jquery.js"></script>';
print        '<script src="js/bootstrap.min.js"></script>';



print '</body>';
print '</html>'; 

print '<!DOCTYPE html>';
print '<html>';


print '<head>';

  print '<meta charset="UTF-8">';

 print ' <title>Twitter Widget - CodePen</title>';

 print ' <link rel="stylesheet" href="css3/reset.css">';

print '    <link rel="stylesheet" href="css3/style.css" media="screen" type="text/css" />';

print '</head>';

print '<body>';

$space = "";
print ' <div class="twitter-widget">
	  	<div class="header cf">
      <a  target="_blank" class="avatar"><img src="hand.jpg" ></a>
			<h2>'.$email.' '.$space.'  </h2>
			<p></p>
			</div>';
		print '	<div class="stats cf">
			<a href="#" class="stat">
			       Total Voice Verified
				<strong> '.$voice_total.'</strong>
				
			</a>
			<a href="#" class="stat">
			    Valid Problems
				<strong>'.$voice_valid.'</strong>
				
			</a>
			<a href="#" class="stat">
			Invalid Problems
				<strong>'.$voice_invalid.'</strong>
				
			</a>
			</div>
			<div class="stats cf" background_color=#ffff>
				<a href="#" class="stat">
			       Total Text Verified
				<strong> '.$text_total.'</strong>
				
			</a>
			<a href="#" class="stat">
			    Valid Problems
				<strong>'.$text_valid.'</strong>
				
			</a>
			<a href="#" class="stat">
			Invalid Problems
				<strong>'.$text_invalid.'</strong>
				
			</a>
		</div>
	
</div>';



print '  <script src=http://codepen.io/assets/libs/fullpage/none.js></script>';

print '  <script src="js3/index.js"></script>';

print '</body>';


print '</html>';
?>