<?php
$to      = 'k112184@nu.edu.pk';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: k122160@nu.edu.pk' . "\r\n" .
    'Reply-To: k122160@nu.edu.pk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>