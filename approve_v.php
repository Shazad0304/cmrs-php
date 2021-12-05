<?php
require_once("connection.php");
session_start();
$department = "";

if(!$_SESSION['loginadmin']){
   header("location:index.html");
   die;
}

$stmt = $db->query("SELECT * FROM request_v where email NOT IN (select email from verifier_login)");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
//	$area = $_POST['area'];
//	$valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.
    $password = $_POST['password'];
	$cnic = $_POST['cnic'];

   

  //if valid then redirect

   
	   $result = $db->exec("INSERT INTO verifier_login(name,email,password) VALUES ( '$name' , '$email' , '$password' )");

    echo "New record created successfully";
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'approve_v.php';
header("Location: http://$host$uri/$extra");
      
  

   

}

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
print '&nbsp;'; print '<th> CNIC </th>';
//echo "\t";
 
print '&nbsp;'; print '<th> Area </th>';
//print '&nbsp;'; print '<th> Language </th>';
print '&nbsp;'; print '<th> Approve </th>'; 

 
print '</tr>';
    print '</thead>';
    print '<tbody>';
	



try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
	print '<form  id=\"msform\" method="POST" action = "confirmv.php">';
	print '<tr>';
print '<td>'; 	echo $row['name'] ;     print '</td>';
print '<td>'; print '&nbsp;'; echo   $row['email']; print '&nbsp;';
print '&nbsp;';   
 
print '<td>'; echo $row['cnic'];    print '</td>'; 
print '<td>'; echo $row['area'];    print '</td>'; 
//print '<td>'; echo $row['language'];    print '</td>';   
print '&nbsp;';  

$name = $row['name'];
$email =  $row['email'];
$cnic =  $row['cnic'];
//$language =  $row['language'];
$password = $row['password'];
$area = $row['area'];

echo ' <INPUT TYPE=HIDDEN NAME= name value='.$name.'>';
echo ' <INPUT TYPE=HIDDEN NAME= email value='.$email.'>';
echo ' <INPUT TYPE=HIDDEN NAME= cnic value='.$cnic.'>';
//echo ' <INPUT TYPE=HIDDEN NAME= language value='.$language.'>';
echo ' <INPUT TYPE=HIDDEN NAME= area value='.$area.'>';
echo ' <INPUT TYPE=HIDDEN NAME= password value='.$password.'>';

		print '<td>';
                echo '<input type= "submit" value="Approve" >';
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