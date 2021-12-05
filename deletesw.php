<?php
require_once("connection.php");
session_start();
$department = "";

if(!$_SESSION['loginadmin']){
   header("location:index.html");
   die;
}

$stmt = $db->query("SELECT * FROM volunteer_sign_up_2 ");
$table = "volunteer_sign_up_2";

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
              print '              <a href="admin.php"><span></span><i ></i> Home</a>';
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
print '&nbsp;'; print '<th> Name </th>'; 
print '&nbsp;'; print '<th> Email </th>';  
print '&nbsp;'; print '<th> Delete </th>'; 
 

 
print '</tr>';
    print '</thead>';
    print '<tbody>';
	



try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{

	print '<form  id=\"msform\" method="POST" action = "del_li.php">';
	print '<tr>';
print '<td>'; 	echo $row['NAME'] ;     print '</td>';
print '<td>'; print '&nbsp;'; echo   $row['email_2']; print '&nbsp;'; print '</td>';
print '&nbsp;';     

$email =  $row['email_2'];
echo ' <INPUT TYPE=HIDDEN NAME= table value='.$table.'>';
echo ' <INPUT TYPE=HIDDEN NAME= email value='.$email.'>';		
               print ' <td>';
			   print '<button type="submit" class="btn btn-info">Delete</button>';
	print'</td>';
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