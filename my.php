<?php
require_once("connection.php");
$str = "";
$selected = "";
$which = "";
$id = $_POST['id_message'];
//$desc = $_POST['desc'];
//echo $desc;
foreach($_POST['check_list'] as $selected){
echo $selected;
print '<br>';
$str .= $selected.",";
}
$stmt = $db->query("SELECT * FROM message_descriptive where id_message = '$id'");
try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
		$desc = $row['desc'];
	}}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}
echo $str;
$which = explode(",", $str);
	foreach($which as $email)
{
	 
error_reporting(E_ALL);
require_once("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2; 
$mail->From = "chandanisumit54@gmail.com";
$mail->FromName = "Sumit Kumar";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "chandanisumit54@gmail.com"; // SMTP username
$mail->Password = "sumit1271993"; // SMTP password
$mail->AddAddress($email , "Sumit Kumar"); //replace myname and mypassword to yours
$mail->AddReplyTo("chandanisumit54@gmail.com", "Sumit Kumar");
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("c:\\temp\\js-bak.sql"); // add attachments
//$mail->AddAttachment("c:/temp/11-10-00.zip");
$mail->IsHTML(true); // set email format toHTML
$mail->Subject = "Hello Sir.The message id is ".$id."";
$mail->Body = "The message description is  ".$desc." <br> " ;
if($mail->Send()) {echo "Send mail successfully";}
else {echo "Send mail fail";} 
}
$result1 = $db->prepare( "SELECT count
			 FROM email_send
			 WHERE id_message = '$id'" );
$result1->bindValue( 1, $email );
$result1->execute();
    
if(  $result1->rowCount() > 0) {
	$stmt = $db->query("SELECT * FROM email_send where id_message = '$id'");
try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
		$count = $row['count'];
		$count++;
	}
	$date = date("Y-m-d");
	$stmt = $db->prepare("UPDATE email_send SET count = '$count' , date_email = '$date' where id_message = '$id'");
$stmt->execute();
header("location:confirmvc.php");
	}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}
}
	
$date = date("Y-m-d");
	$result = $db->exec("INSERT INTO email_send VALUES ( '$id' , '$date' , '1')");
header("location:confirmvc.php");
?>
