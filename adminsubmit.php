<?php
require_once("connection.php");
/*
session_start();
/*if(!$_SESSION['loginSW']){
   header("location:index.html");
   die;
}
$dep = $_POST['department'];

$department  = $dep;
$which = explode(",", $department);
*/
//foreach($which as $selected)
//{
	//echo "the department is $selected";
/*
print '<br><br>';
$sql1 = "SELECT validity from voice_message where validity = 'valid'";
if($result = mysqli_query($link,$sql)) {
	while ($row = mysqli_fetch_array ($result)) 
{ 


$res[$i] = $row['DM'];
$i++;
$res[$i] = $row['Manager'];
$i++;
$res[$i] = $row['Chairman'];
$i++;
$res[$i] = $row['Secretary'];
$i++;
$res[$i] = $row['Minister'];
$i++;

print '<br>';

}
}


/*$sql = "SELECT *
FROM voice_message,message_identified

WHERE id_message_identified NOT IN
    (SELECT id_message
     FROM message_descriptive)";*/
$sql = "SELECT * FROM message_descriptive ,voice_message where  id_message  = id_voice_message AND voice_message.validity='valid'" ;
if($result = mysqli_query($link,$sql)) {
print 	'<!DOCTYPE html>';
print 	'<html lang="en">';
print 	'<head>';
  
print 	'    <meta charset="utf-8">';
print 	'    <meta http-equiv="X-UA-Compatible" content="IE=edge">';
    print 	'<meta name="viewport" content="width=device-width, initial-scale=1">';
    print 	'<meta name="description" content="">';
    print 	'<meta name="author" content="">';

    print 	'<title>Common Man Reporting System</title>';
 
	print 	'<meta name="viewport" content="width=device-width, initial-scale=1">';
  print 	'<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">';
  print 	'<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">';
  print 	'<LINK REL=StyleSheet HREF="bootstrap.min" TYPE="text/css" MEDIA=all>';
  
  
 print 	'<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';
  print 	'<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';

   
    print 	'<link href="css/bootstrap.min.css" rel="stylesheet">';

  
   print 	' <link href="css/sb-admin.css" rel="stylesheet">';

  
    print 	'<link href="css/plugins/morris.css" rel="stylesheet">';

   
    print 	'<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';

  
        print 	'<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
        print 	'<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>';
  
	
    print 	'<LINK REL=StyleSheet HREF="styles.css" TYPE="text/css" MEDIA=all>';
  
	print 	'<LINK REL=StyleSheet HREF="bootstrap-theme" TYPE="text/css" MEDIA=all>';
  
print 	'<body>';



print 	'<nav class="navbar navbar-inverse navbar-fixed-top">';
 print 	' <div class="container-fluid">';
    print 	'<div class="navbar-header">';
      print 	'<a class="navbar-brand" href="C:\xampp\htdocs\cmrs\welcome.php">CMRS</a>';
    print 	'</div>';
    print 	'<div>';

print 	' <ul class="nav navbar-nav navbar-right">';
        
        	print 	'<li>';
                            print 	'<a href="#"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i> Profile</a>';
                        print 	'</li>';
                        print 	'<li class="divider"></li>';
                        print 	'<li>';
                            print 	'<a href="logoutSW.php"><span class="glyphicon glyphicon-off"></span><i class="fa fa-fw fa-power-off"></i> Log Out</a>';
                        print 	'</li>';
	print 	'</li>';
      print 	'</ul>';

      
    print 	'</div>';
  print 	'</div>';
print 	'</nav>';


print 	'<div class="container">';
  print 	'<br><br><br><br><table class="table table-striped">';
    print 	'<thead>';
      print '<tr>'; 
print '&nbsp;'; print '<th>ID of Message</th>'; 
print '&nbsp;'; print '<th> Department </th>'; 
print '&nbsp;'; print '<th> Contact Info </th>';
echo "\t";
//print '&nbsp;'; print '<th> Department Email </th>';
//print '&nbsp;'; print '<th>Description by volunteer 1</th>'; 
//print '&nbsp;'; print '<th>Description by volunteer 2 </th>'; 
 
print '</tr>';
    print '</thead>';
    print '<tbody>';
	


while ($row = mysqli_fetch_array ($result)) 
{

	print '<form  method="POST" action = "new.php">';
	print '<tr>';
print '<td>'; 	echo $row['id_message'] ;     print '</td>';
//print '<td>'; echo "<audio controls=yes  src=\"{$row['voice']}\"></audio>"; 
print '&nbsp;';   
 
/*print '<td>'; print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Education"><label>Education</label>';  
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Crime"><label>Crime</label>';
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Police"><label>Police</label>';
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Health"><label>Health</label><br>';
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Cyber Crime"><label>Cyber Crime </label><br>'; 
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Water and Sevrage"><label>Water and Sevrage</label><br/>'; print '</td>';

*/

print '<td>'; 	echo $row['department_name'] ;     print '</td>';
print '<td>'; 	echo $row['cell_num'] ;     print '</td>';
print '<td>';
/*
print '<INPUT TYPE = "Text" VALUE ="" NAME = "username1">';
print '</td>';
echo '<td>';
$id1 = $row['id_message_identified'] ;
$description_message = $row['description_message'] ;
*/

				echo  '<center>';
				//echo ' <INPUT TYPE=HIDDEN NAME= id_message value='.$id1.'>';
				//echo ' <INPUT TYPE=HIDDEN NAME= desc value='.$description_message.'>';
                echo '<input type= "submit" value="submit" >';
					   echo '</center>'; 
					   echo '</td>';
					   
print '</tr>';

	print '</form>';

	    
} 
 
print '</tbody>';
print  '</table>';
print '</div>';

print    '<script src="js/jquery.js"></script>';
print        '<script src="js/bootstrap.min.js"></script>';



print '</body>';
print '</html>'; 

}
else
{

$mysqli->close();  }


?>