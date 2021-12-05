<?php
require_once("connection.php");
session_start();
$department = "";

if(!$_SESSION['loginv']){
   header("location:index.html");
   die;
}
$email = $_SESSION["email"];
$stmt = $db->query("SELECT * FROM message_descriptive,voice_message,verifier_login where id_message=id_voice_message AND voice_message.area = verifier_login.area AND verifier_login.email = '$email' AND voice_message.validity='0' ");

print '<!DOCTYPE html>';
print '<html lang="en">';
print '<head>';
print '  <title>Bootstrap Example</title>';
print '  <meta charset="utf-8">';
print '  <meta name="viewport" content="width=device-width, initial-scale=1">';
print '  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">';
print '  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';
print '  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';
print '</head>';
print '<body>';

print '<nav class="navbar navbar-inverse navbar-fixed-top">';
 print ' <div class="container-fluid">';
  print '  <div class="navbar-header">';
    print '  <a class="navbar-brand" href="C:\xampp\htdocs\cmrs\welcome.php">CMRS</a>';
   print ' </div>';
    print '<div>';

print ' <ul class="nav navbar-nav navbar-right">';
        
       print ' 	<li>';
              print '              <a href="profilev.php"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i> Profile</a>';
                     print '   </li>';
                      print '  <li class="divider"></li>';
                       print ' <li>';
                       print '     <a href="logout.php"><span class="glyphicon glyphicon-off"></span><i class="fa fa-fw fa-power-off"></i> Log Out</a>';
                      print '  </li>';
	print '</li>';
     print ' </ul>';

      
 print '   </div>';
 print ' </div>';
print '</nav>';

print 	'<div class="container">';
  print 	'<br><br><br><br><table class="table table-striped">';
    print 	'<thead>';
      print '<tr>'; 
print '&nbsp;'; print '<th> ID of Message </th>'; 
print '&nbsp;'; print '<th> Complaint </th>'; 
print '&nbsp;'; print '<th> Phone Number </th>';
echo "\t";
print '&nbsp;'; print '<th> Area </th>';
print '&nbsp;'; print '<th> Department </th>'; 
print '&nbsp;'; print '<th> Verify </th>';
print '&nbsp;'; print '<th> Submit </th>'; 

 
print '</tr>';
    print '</thead>';
    print '<tbody>';
	



try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
	print '<form  method="POST" action = "yes.php">';
	print '<tr>';
print '<td>'; 	echo $row['id_message'] ;     print '</td>';
print '<td>';
  print '<textarea readonly rows="3" cols="40">';
//echo $row['text_desc'] ;
echo   $row['desc']; 
     
  print '</textarea>';     print '</td>';

print '&nbsp;';   
 
print '<td >'; echo $row['cell_num'];    print '</td>'; 
print '<td>'; echo   $row['Area'];
print '<td>'; echo $row['department_name'];    print '</td>';   
print '&nbsp;';  

$id = $row['id_message'];
$department =  $row['department_name'];
$c = $department; 
echo ' <INPUT TYPE=HIDDEN NAME= department value='.$c.'>';
echo ' <INPUT TYPE=HIDDEN NAME= id_message value='.$id.'>';

print '<td>';
             

		   print '<input type="radio" name="option[]" value = "valid" >Valid';
		
		
		   print '<input type="radio" name="option[]" value = "invalid">Invalid';
	
		print '</td>';
		print '<td>';
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