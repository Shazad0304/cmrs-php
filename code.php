<?php
require_once('connection.php');
$i = 0;
$var[] = 0;
$sql = "SELECT * FROM voice_message ";
if($result = mysqli_query($link,$sql)) {
while ($row = mysqli_fetch_array ($result)) 
{ 
$var[i] = $row['id_voice_message'];
$i++; 

}  

foreach($var[] as $selected){

$selected;
}
}
else
{

$mysqli->close();  }
?>






?>