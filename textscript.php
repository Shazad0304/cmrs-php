<?php
require_once("connection.php");
session_start();
if(!$_SESSION['loginsw']){
   header("location:index.html");
   die;
}
$email = $_SESSION["email_2"];
print '<style>';
print '.container1 { border:2px solid #ccc; width:200px; height: 80px; overflow-y: scroll; }';
print 'input[type=checkbox] {
  width: 20px
  height: 20px;
  margin-right: 4px;
  cursor: pointer;
  font-size: 15px;
}


input[type=checkbox]:after {
    content: " ";
    background-color: #9FFF9D;
    display: inline-block;
    visibility: visible;
}

input[type=checkbox]:checked:after {
    content: "\2714";
}';
print '</style>';
/*$sql = "SELECT *
FROM voice_message,message_identified

WHERE id_message_identified NOT IN
    (SELECT id_message
     FROM message_descriptive)";*/

$stmt = $db->query("SELECT * FROM text_message_identified,text_message,volunteer_sign_up_2 where id = id_text AND volunteer_sign_up_2.email_2 = '$email' AND text_message_identified.language = volunteer_sign_up_2.language AND id NOT IN
    (SELECT id_text_message
     FROM text_descriptive)");

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
                            print 	'<a href="profilesw.php"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i> Profile</a>';
                        print 	'</li>';
                        print 	'<li class="divider"></li>';
                        print 	'<li>';
                            print 	'<a href="logout.php"><span class="glyphicon glyphicon-off"></span><i class="fa fa-fw fa-power-off"></i> Log Out</a>';
                        print 	'</li>';
	print 	'</li>';
      print 	'</ul>';

      
    print 	'</div>';
  print 	'</div>';
print 	'</nav>';


print 	'<div class="container">';
  print 	'<br><br><br><table class="table table-striped" border="0" cellpadding="10" cellspacing="1" width="500" align="center">';
    print 	'<thead>';
print '&nbsp;'; print '<th>ID&nbspText</th>';  print '&nbsp;';
print '&nbsp;'; print '<th>Text Message </th>'; print '&nbsp;';
print '&nbsp;'; print '<th> Language</th>';print '&nbsp;';
print '&nbsp;'; print '<th>Department</th>';print '&nbsp;';
print '&nbsp;'; print '<th>Desc&nbspby&nbsplanguage identifier&nbsp</th>';print '&nbsp;'; 
print '&nbsp;'; print '<th>Your Description</th>'; print '&nbsp;';
 
print '</tr>';
    print '</thead>';
    print '<tbody>';
	




try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
	print '<form  method="POST" action = "textconfirmation.php">';
	print '<tr>';
print '<td>'; 	echo $row['id_text'] ;     print '</td>';
print '<td>'; 	
print '<textarea rows="3" cols="30">';
echo $row['message'] ;  

print '</textarea>';     print '</td>';

print '<td>'; echo $row['language']; 

print '&nbsp;';   

print '<td>';
print '<div class="container1">';  print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Education"><label>Education</label>';  
  print '<input type="checkbox" name="check_list[]" value="Crime"><label>Crime</label>';
print '<br>';  print '<input type="checkbox" name="check_list[]" value="Police"><label>Police</label>';
print '<br>';  print '<input type="checkbox" name="check_list[]" value="Health"><label>Health</label>';
print '<br>';  print '<input type="checkbox" name="check_list[]" value="CyberCrime"><label>Cyber Crime </label>'; 
print '<br>';  print '<input type="checkbox" name="check_list[]" value="water_and_severage"><label>Water and Sevrage</label>';print '</div>'; print '</td>';
print '<td>'; 	
print '<textarea readonly rows="3" cols="30">';
echo $row['text_disc'] ;

print '</textarea>';     print '</td>';
print '<td>';
//print '<INPUT TYPE = "TextAREA" VALUE ="" NAME = "username1">';
print '<textarea rows="3" cols="30" NAME = "username1"></textarea>';
print '</td>';
echo '<td>';
$id1 = $row['id_text'] ;
$description_message = $row['text_disc'] ;
$email = $_SESSION["email_2"];
//$name = $_SESSION["name"];

				echo  '<center>';
				echo ' <INPUT TYPE=HIDDEN NAME= id_message value='.$id1.'>';
				echo ' <INPUT TYPE=HIDDEN NAME= desc value='.$description_message.'>';
				echo ' <INPUT TYPE=HIDDEN NAME= email_id value='.$email.'>';
				//echo ' <INPUT TYPE=HIDDEN NAME= name value='.$name.'>';
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
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}

?>