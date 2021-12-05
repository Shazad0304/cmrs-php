<?php
require_once("connection.php");
session_start();
$dep = "";
$i = 0;


$id=$_POST['id_message'];
$email=$_POST['email'];
if(empty($_POST['option']))
   {
	     
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'textverify.php';
header("Location: http://$host$uri/$extra");
      $last = "Description is required. Please write there";
      $valid = false;
	  	  $message = "you didn't write description";
print '<script type=text/javascript>';
print "alert('$last')";
print '</script>';
   }
   else {
	   $result1 = $db->prepare( "SELECT id
			 FROM text_message
			 WHERE id = ? AND validity<>'0'" );
$result1->bindValue( 1, $id );
$result1->execute();
    
if( $result1->rowCount() > 0 ) { # If rows are found for query
     $last = "This record is already inserted!";
	 print '<script type=text/javascript>';
print "alert('$last')";
	//header("Location:ScriptWriter.php");
	


print '</script>';
}
  else
  {
foreach($_POST['option'] as $selected){
$var = $selected;
echo $var;

} 

if($var=="valid")
{

$stmt = $db->prepare("UPDATE text_message SET validity = 'valid', email = '$email' where id = $id");
$stmt->execute();
header('Location:textverify.php ');
}
else if($var=="invalid")

{
	
$stmt = $db->prepare("UPDATE text_message SET validity = 'invalid', email = '$email' where id = $id");
$stmt->execute();

	header('Location:textverify.php ');
	
}
	
else {
	echo "validaty not selected!!!!";
}
  }


   }
?>