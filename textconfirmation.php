<?php
session_start();
require_once("connection.php");
$str = "";
$cell_num = "";
$area = "";
$count = 0;
$email_2 = "";
$user_id = $_POST['id_message'];
$desc1 = $_POST['desc'];
$desc2 = $_POST['username1'];

if (empty($_POST['check_list']) OR empty($_POST['username1'])) {
      
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'textscript.php';
header("Location: http://$host$uri/$extra");
      $last = "Description is required. Please write there";
      $valid = false;
	  	  $message = "you didn't write description";
print '<script type=text/javascript>';
print "alert('$last')";
print '</script>';
   
   }
   else {
	   $result1 = $db->prepare( "SELECT id_text_message
			 FROM text_descriptive
			 WHERE id_text_message = ?" );
$result1->bindValue( 1, $user_id );
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
foreach($_POST['check_list'] as $selected){

$count ++;
$str .= /*$count." : ".*/$selected.",";
}
$str = substr($str, 0, -1);
if($_SESSION["email_2"]) {

$email_2 = $_SESSION["email_2"]; 


}



$stmt = $db->query("select * from voice_message where  id_voice_message = '$user_id' ");
try 
{
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
		$cell_num = $row['cell_num'] ;
$area = $row['area'] ;

	}
}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}


$result = $db->exec("INSERT INTO text_descriptive() VALUES ( '$user_id' , '$str' , '$desc2' ,'$email_2','$area','$cell_num','0')");
header("Location:textscript.php");
   }  
   }
?>