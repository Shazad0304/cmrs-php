<?php

$link = mysqli_connect('localhost','root','','sk'); 
if (!$link) { 
    die('Could not connect to MySQL: ' . mysqli_error($link)); 
} 
	echo "the data has been entered ";
	$s = $_POST['IDD'];
	if($s==null){
		echo "it is null";
	}
	$select = $_POST['option'];
	$desc = $_POST['username'];
	$email_id_vol = $_POST['email_id'];
	////	echo  $_POST[$new];
	echo "the message id ". $s." lies in ".$select." and its description is ".$desc;
	
	$sql = "SELECT * FROM voice_message where id_voice_message= $s";
	$sql1 = "INSERT INTO message_identified(id_message_identified, language_message,description_message,email_identifier) VALUES ( '$s' , '$select' , '$desc' ,'$email_id_vol')";
	if ($link->query($sql1) === TRUE) {
		print '<br>';
		
    echo "New record created successfully";
	header('Location:hey.php ');
	
} else {
    echo "Error: " . $sql1 . "<br>" . $link->error;
}
/*$sql2 = "Delete FROM voice_message where id_voice_message= $s";
if (mysqli_query($link, $sql2)) {
    echo "Record deleted successfully";
	header('Location: http://localhost/hey.php ');
}  else {
    echo "Error: " . $sql2 . "<br>" . $link->error;
}
*/
$link->close();

	
	








?>