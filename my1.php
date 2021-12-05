<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once("connection.php");
$str = "";
$selected = "";
$which = "";
$id = $_POST['id_message'];
//$desc = $_POST['desc'];
foreach($_POST['check_list'] as $selected){
echo $selected;
print '<br>';
$str .= $selected.",";
}
$stmt = $db->query("SELECT * FROM text_descriptive where id_text_message = '$id'");
try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
		$desc = $row['descp'];
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
//require_once("PHPMailer_6.5.3/class.phpmailer.php");
require_once("PHPMailer-6.5.3/src/Exception.php");
require_once("PHPMailer-6.5.3/src/PHPMailer.php");
require_once("PHPMailer-6.5.3/src/SMTP.php");
$mail = new PHPMailer(true);
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2;
$mail->setFrom('arsalan.derani@gmail.com', 'Arsalan Derani'); 
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "tls"; // Used instead of TLS when only POP mail is selected
$mail->Port = 587; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "arsalan_derani@gmail.com"; // SMTP username
$mail->Password = "tpstps_321"; // SMTP password
$mail->AddAddress($email , "Sumit Kumar"); //replace myname and mypassword to yours
//$mail->AddReplyTo("shez.sting@gmail.com", "Sumit Kumar");
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("c:\\temp\\js-bak.sql"); // add attachments
//$mail->AddAttachment("c:/temp/11-10-00.zip");
$mail->IsHTML(false); // set email format toHTML
$mail->Subject = "Hello Sir.The message id is ".$id."";
$mail->Body = "The message description is  ".$desc."" ;
if($mail->Send()) {echo "Send mail successfully";}
else {echo "Send mail fail";} 
}
// $result1 = $db->prepare( "SELECT count
// 			 FROM email_send_text
// 			 WHERE id_message = '$id'" );
// $result1->bindValue( 1, $email );
// $result1->execute();
    
// if(  $result1->rowCount() > 0) {
// 	$stmt = $db->query("SELECT * FROM email_send_text where id_message = '$id'");
// try {
// 	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
// 	{
// 		$count = $row['count'];
// 		$count++;
// 	}
// 	$date = date("Y-m-d");
// 	$stmt = $db->prepare("UPDATE email_send SET count = '$count' , date = '$date' where id_message = '$id'");
// $stmt->execute();
// header("location:confirmt.php");
// 	}
// catch(PDOException $ex) {
//     echo "An Error occured!"; //user friendly message
//     some_logging_function($ex->getMessage());
// }
// }
	
// $date = date("Y-m-d");
// 	$result = $db->exec("INSERT INTO email_send VALUES ( '$id' , '$date' , '1')");
// header("location:confirmt.php");
?>