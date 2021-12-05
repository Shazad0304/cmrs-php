<?php

require_once("connection.php");
//require_once("languageIdentifier.php");
	$s = $_GET['IDD'];
	if($s==null)
	{
		echo "khali a bha";
	}
	$select = $_GET['option'];
	$desc = $_GET['username'];
	$email_id_vol = $_GET['email_id'];
	$valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.

   if (empty($_GET["username"])) {
      
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'languageidentifier.php';
header("Location: http://$host$uri/$extra");
      $last = "Description is required. Please write there";
      $valid = false;
	  	  $message = "you didn't write description";
print '<script type=text/javascript>';
print "alert('$last')";
print '</script>';
   
   }
   else {
    
   

  //if valid then redirect

   
	   $result = $db->exec("INSERT INTO message_identified(id_message_identified, language_message,description_message,email_identifier) VALUES ( '$s' , '$select' , '$desc' ,'$email_id_vol')");

    echo "New record created successfully";
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'languageidentifier.php';
header("Location: http://$host$uri/$extra");
      
   

   }
	
	
	

/*$sql2 = "Delete FROM voice_message where id_voice_message= $s";
if (mysqli_query($link, $sql2)) {
    echo "Record deleted successfully";
	header('Location: http://localhost/hey.php ');
}  else {
    echo "Error: " . $sql2 . "<br>" . $link->error;
}
*/


?>