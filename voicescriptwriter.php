<?php
require_once("connection.php");
session_start();
if(!$_SESSION['loginsw']){
   header("location:index.html");
   die;
}
$email = $_SESSION["email_2"];
print '<style>';
print '.container1 { border:2px solid #ccc; width:250px; height: 80px; overflow-y: scroll; }';
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

$stmt = $db->query("SELECT * FROM message_identified,voice_message,volunteer_sign_up_2 where id_voice_message = id_message_identified AND volunteer_sign_up_2.email_2 = '$email' AND  volunteer_sign_up_2.language = message_identified.language_message AND id_voice_message NOT IN
    (SELECT id_message
     FROM message_descriptive)");

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
  print 	'<br><br><br><br><table class="table table-striped" border="0" cellpadding="10" cellspacing="1" width="500" align="center">';
    print 	'<thead>';
      print '<tr>'; 
print '&nbsp;'; print '<th>ID&nbspVoice</th>';  print '&nbsp;';
print '&nbsp;'; print '<th>Voice Message </th>'; print '&nbsp;';
print '&nbsp;'; print '<th>Department </th>';print '&nbsp;';
print '&nbsp;'; print '<th>Language</th>';print '&nbsp;';
print '&nbsp;'; print '<th>&nbspDescription&nbspby&nbsplanguage identifier&nbsp</th>';print '&nbsp;'; 
print '&nbsp;'; print '<th>Your Description</th>'; print '&nbsp;';
 
print '</tr>';
    print '</thead>';
    print '<tbody>';
	



try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
	print '<form  method="POST" action = "confirmation.php">';
	print '<tr>';
print '<td>'; 	echo $row['id_message_identified'] ;     print '</td>';
print '<td>'; echo "<audio preload=none controls=yes  src=\"{$row['voice']}\"></audio>"; 
print '&nbsp;';   

print '<td>';
print '<div class="container1">';  print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Education"><label>Education</label>';  
  print '<input type="checkbox" name="check_list[]" value="crime"><label>Crime</label>';
print '<br>';  print '<input type="checkbox" name="check_list[]" value="police"><label>Police</label>';
print '<br>';  print '<input type="checkbox" name="check_list[]" value="health"><label>Health</label>';
print '<br>';  print '<input type="checkbox" name="check_list[]" value="cybercrime"><label>Cyber Crime </label>'; 
print '<br>';  print '<input type="checkbox" name="check_list[]" value="water_and_sevrage"><label>Water and Sevrage</label>';print '</div>'; print '</td>';



print '<td>'; 	echo $row['language_message'] ;     print '</td>';
print '<td>';
  print '<textarea readonly rows="3" cols="25">';
//echo $row['text_desc'] ;

echo $row['description_message'] ;       
  print '</textarea>';     print '</td>';

print '<td>';
print '<textarea rows="3" cols="25" NAME = "username1"></textarea>';
print '</td>';
echo '<td>';
$id1 = $row['id_message_identified'] ;
$description_message = $row['description_message'] ;


				echo  '<center>';
				
				echo ' <INPUT TYPE=HIDDEN NAME= id_message value='.$id1.'>';
				echo ' <INPUT TYPE=HIDDEN NAME= desc value='.$description_message.'>';
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