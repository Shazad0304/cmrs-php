<?php
require_once("connection.php");
session_start();
print '<style>';
print '.container1 { height: 186px; margin-top: -21px; padding: 6px; }';
print 'input[type=checkbox] {
  width: 20px
  height: 20px;
  margin-right: 4px;
  cursor: pointer;
  font-size: 15px;
}


input[type=checkbox]:after {
    content: " ";
    background-color: #9FFF9D;
    display: inline-block;
    visibility: visible;
}

.btnStyle {
  background-color: #f0f1f1;
  border: 1px solid #bbabab;
  border-radius: 25px;
  padding: 6px;
}

input[type=checkbox]:checked:after {
    content: "\2714";
}';
print '</style>';
/*
session_start();
/*if(!$_SESSION['loginSW']){
   header("location:index.html");
   die;
}
$dep = $_POST['department'];

$department  = $dep;
$which = explode(",", $department);
*/
//foreach($which as $selected)
//{
	//echo "the department is $selected";
/*
print '<br><br>';
$sql1 = "SELECT validity from voice_message where validity = 'valid'";
if($result = mysqli_query($link,$sql)) {
	while ($row = mysqli_fetch_array ($result)) 
{ 


$res[$i] = $row['DM'];
$i++;
$res[$i] = $row['Manager'];
$i++;
$res[$i] = $row['Chairman'];
$i++;
$res[$i] = $row['Secretary'];
$i++;
$res[$i] = $row['Minister'];
$i++;

print '<br>';

}
}


/*$sql = "SELECT *
FROM voice_message,message_identified

WHERE id_message_identified NOT IN
    (SELECT id_message
     FROM message_descriptive)";*/
//$email = $_SESSION["name"];
$stmt = $db->query("SELECT * FROM text_descriptive ,text_message where  id_text_message  = id AND text_message.validity='valid' and text_descriptive.isEmailSent != '1'");

print '<!DOCTYPE html>';
print '<html lang="en">';
print '<head>';
print '  <title>Bootstrap Example</title>';
print '  <meta charset="utf-8">';
print '  <meta name="viewport" content="width=device-width, initial-scale=1">';
print '  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">';
print '  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';
print '  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';
print '</head>';
print '<body>';

print '<nav class="navbar navbar-inverse navbar-fixed-top">';
 print ' <div class="container-fluid">';
  print '  <div class="navbar-header">';
    print '  <a class="navbar-brand" href="admin.php">Home</a>';
	print '  <a class="navbar-brand" href="logout.php">Logout</a>';
	 //print '       <a class="navbar-brand" pull-right >........  Welcome !!! '.$email.'  </a>';
   
	

 print ' </div>';
print '</nav>';

print 	'<div class="container">';
  print 	'<br><br><br><br><table class="table table-striped">';
    print 	'<thead>';
      print '<tr>'; 
print '&nbsp;'; print '<th>ID of Message</th>'; print '&nbsp;';
// print '&ndsp;' ; print '<th>Email Sent</th>'; print '&ndsp';
print '&nbsp;'; print '<th> Department </th>'; print '&nbsp;';
print '&nbsp;'; print '<th> Complainee Contact Info </th>';print '&nbsp;';
print '&nbsp;'; print '<th> Department email </th>';print '&nbsp;';
echo "\t";
//print '&nbsp;'; print '<th> Department Email </th>';
//print '&nbsp;'; print '<th>Description by volunteer 1</th>'; 
//print '&nbsp;'; print '<th>Description by volunteer 2 </th>'; 
 
print '</tr>';
    print '</thead>';
    print '<tbody>';
	



try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
	print '&nbsp;'; print '<form  method="POST" action = "my1.php">';
	print '&nbsp;'; print '<tr>';
	
	print '&nbsp;'; print '<td>'; 	echo $row['id_text_message'] ;     print '</td>';
//print '<td>'; echo "<audio controls=yes  src=\"{$row['voice']}\"></audio>"; 
print '&nbsp;';   
 
/*print '<td>'; print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Education"><label>Education</label>';  
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Crime"><label>Crime</label>';
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Police"><label>Police</label>';
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Health"><label>Health</label><br>';
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Cyber Crime"><label>Cyber Crime </label><br>'; 
print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="Water and Sevrage"><label>Water and Sevrage</label><br/>'; print '</td>';

*/
 $count = 0;
 $res = array();
// $id1 = $row['id_text_message'] ;
//  $stmt1 = $db->query("SELECT * FROM email_send_text where id_message = '$id1'");
// try {
// 	while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) 
// 	{
// 		$count = $row1['count'];
// 	}
// 	}
// catch(PDOException $ex) {
//     echo "An Error occured!"; //user friendly message
//     //some_logging_function($ex->getMessage());
// }

//print '&nbsp;'; print '<td>'; 	echo $count  ;     print '</td>';

print '&nbsp;'; print '<td>'; 	echo $row['department_name'] ;     print '</td>';
print '&nbsp;'; print '<td>'; 	echo $row['cell_num'] ;     print '</td>';
$id1 = $row['id_text_message'] ;
$description_message = $row['descp'] ;
	$dep = $row['department_name'];
	

$department  = $dep;

$which = explode(",", $department);
	foreach($which as $selected)
{
	
//print '&nbsp;'; print	'<th>'; echo  $selected ; print  '</th>';

$stmt1 = $db->query("SELECT * from $selected");
	try {
		
	while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) 
	{
	
print '&nbsp;'; print '<td>';  print '&nbsp;';
$i=0;

$res[$i] = $row['DM'];
$i++;
$res[$i] = $row['Manager'];
$i++;
$res[$i] = $row['chairman'];
$i++;
$res[$i] = $row['secretary'];
$i++;
$res[$i] = $row['Minister'];
$i = 0;


}
	}
	catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    //some_logging_function($ex->getMessage());
}
		
print '&nbsp;'; print '<div class="container1">';


//print '&nbsp;';  print '----'.$selected.'---'; print '&nbsp;'; print '<br>';
 //print '&nbsp;'; 
foreach($res as $sel)
{
	
	 print '&nbsp;';  print '<input type="checkbox" name="check_list[]" value="'.$sel.'">&nbsp;&nbsp;<label>' . $sel . '</label>'; print '&nbsp;';
     print '&nbsp;<br>';	
}
//$i=0;
print '&nbsp;'; print '</td>';

 print '&nbsp;'; print '<td>';
print '</div>';







}
				
				echo ' <INPUT TYPE=HIDDEN NAME= id_message value='.$id1.'>';
				//echo ' <INPUT TYPE=HIDDEN NAME= desc value='.$description_message.'>';
				
               print '&nbsp;'; echo '<input class="btnStyle" type= "submit" value="Send Email" >';
			   
				 
				print '&nbsp;';	   echo '</td>';
					   print '&nbsp;'; print '</tr>';


	print '&nbsp;'; print '</form>';


    
}

}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    echo "An Error final!";
    //some_logging_function($ex->getMessage());
}
print '</tbody>';
print  '</table>';
print '</div>';

print    '<script src="js/jquery.js"></script>';
print        '<script src="js/bootstrap.min.js"></script>';



print '</body>';

print '</html>'; 




?>