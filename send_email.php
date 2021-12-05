<?php

    include("class.phpmailer.php");
	include("smtp.php"); 

    $mail = new PHPMailer(true);
    $mail->IsSMTP();
	$mail->SMTPDebug=2;
   
    $mail->SMTPAuth   = true;

    $mail->SMTPSecure = "ssl";
    $mail->Host       = "smtp.gmail.com";
    $mail->Port       = 465;
    $mail->Username   = "chandanisumit54@gmail.com";
    $mail->Password   = "sumit1271993";
	 $mail->SMTPKeepAlive = true;
      $mail->Mailer = "smtp";

    $mail->SetFrom       = "chandanisumit54@gmail.com";
    //$mail->FromName   = "Job Seeker";
    $mail->Subject    = "this is my message";
    //$mail->MsgHTML($_GET['msg']);
	$mail->Body = "it is sumit here";


$mail->AddAddress("chandanisumit54@gmail.com");
    $mail->IsHTML(false);

    if(!$mail->Send())
    {
      echo "Mailer Error: " . $mail->ErrorInfo;

    }else{

        echo "Message sent!";
    }
?>