<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


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
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('arsalan.derani@gmail.com', 'Mailer');
    $mail->addAddress($email, $email);     //Add a recipient



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Complaint ID ".$id."";
    $mail->Body    = "".$desc."";
    //$mail->AltBody = "The message description is  ".$desc."";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

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