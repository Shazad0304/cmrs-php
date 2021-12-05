<?php
require_once("connection.php");
echo "<br>";
echo "Email Send Successfully!!!!!!!";
print '<script>';
echo "if (confirm('Email Sent Successfully!!! Want to send more complains ? press OK ') == true) {
     window.location.href='text_complain.php' ;
    } else {
       window.location.href='admin.php' ;
    }";
	
	print '</script>';
	
	?>