<?php

require_once('connection.php');
session_start();
if(!$_SESSION['loginli']){
   header("location:index.html");
   die;
}


?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tablerow">
<td>
</td>
</tr>
</body></html>
<?php 


if($_SESSION["email_1"]) {

$email_id = $_SESSION["email_1"]; 
}


echo 'Volunteeer Helper'; 
print '<br>';

$stmt = $db->query("SELECT *
FROM text_message

WHERE id NOT IN
    (SELECT id_text 
     FROM text_message_identified)");


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
print      '<a class="navbar-brand" href="C:\xampp\htdocs\cmrs\welcome.php">CMRS</a>';
 print   '</div>';
print    '<div>';

print '<ul class="nav navbar-nav navbar-right">';
        
print      '<li>';
print        '<a href="profileli.php"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i> Profile</a>';
 print                       '</li>';
      print                  '<li class="divider"></li>';
           print             '<li>';
      print                      '<a href="logout.php"><span class="glyphicon glyphicon-off"></span><i class="fa fa-fw fa-power-off"></i> Log Out</a>';
           print             '</li>';
print	'</li>';
print      '</ul>';
 
print    '</div>';
print  '</div>';
print '</nav>';

print '<h2>'; print 'Text Language Identifier :'; print'</h2>';
print '<div class="container">';
print '<br><br><br><br>';             
print  '<table class="table table-striped">';
print    '<thead>';
print      '<tr>';

        
print '<th>ID of Message</th>'; 
print '<th>Text </th>'; 
print '<th>Date</td>'; 
print '<th>Area</th>'; 
print '<th>Language</th>'; 
print '<th>Description</th>';
print '<th>   Submit</th>';

print	   '</tr>';
print    '</thead>';
print    '<tbody>';


					   
      
          

$variable = 0;

try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{



    
    /*print '<tr>';
	
	print '<td>'; 
	<input name = "2">
	echo $row['id_voice_message'];     print '</td>';
	$new = $row['id_voice_message'];
	print '<div name = '<?php echo $new; ?>' > 
	
print '<td>'; 	
*/
print '<form  method="POST" action = "textlanguage.php">';

$new = $row['Id'];
print '<div type = row  id = '.$new.' >';
print '<tr>';
print '<td>'; 	echo $row['Id'] ;     print '</td>';
//echo $row['voice'];

  print '<td>';
  print '<textarea readonly rows="3" cols="40">';
//echo $row['text_desc'] ;

 echo $row['message'];      
  print '</textarea>';     print '</td>';
print '<td>'; 	echo $row['dates'] ;     print '</td>';
print '<td>'; 	echo $row['area'];      print '</td>';
  print '<td>';

print '<select type = "LISTBOX"  name= "option">';
print '<option value="Sindhi">Sindhi</option>' ;
print  '<option value="Urdu">Urdu</option>' ;
print  '<option value="Punjabi">Punjabi</option>' ;
print  '<option value="Balochi">Balochi</option>' ;
print  '<option value="Pishto">Pishto</option>' ;
print  '<option value="Gujrati">Gujrati</option>' ;
print '</select>';    print '</td>';
print '<td>';

print '<textarea VALUE ="" CLASS="form-control" NAME = "username"></textarea>';
//print '<INPUT TYPE = "Text" VALUE ="" CLASS="form-control" NAME = "username">';
print '</td>';
$email_id = $_SESSION["email_1"]; 
                echo '<td>';
				echo  '<center>';
				
                echo ' <INPUT TYPE=HIDDEN NAME= IDD value='.$new.'>';
			echo ' <INPUT TYPE=HIDDEN NAME= email_id value='.$email_id.'>';
                echo '   <input type= "submit" class="btn btn-info" value="submit" >';
					   echo '</center>'; 
					   echo '</td>';
	
	
//print ' <input name="submit" type="submit" value="submit"> ';  print '</td>';
 
print '</tr>';

print '</form>';
print '</div>';
	    
}
print '</table>'; 
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



