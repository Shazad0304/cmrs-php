<?php
require_once("connection.php");
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'chandanisumit54@gmail.com';
$password = 'sumit1271993';
print '<style>';
print 'div.toggler				{ border:1px solid #ccc;  10px 12px #eee no-repeat; cursor:pointer; padding:10px 32px; }';
print 'div.toggler .subject	{ font-weight:bold; }';
print 'div.read					{ color:#666; }';
print 'div.toggler .from, div.toggler .date { font-style:italic; font-size:11px; }';
print 'div.body					{ padding:10px 20px; }';
print '</style>';


$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

 
$emails = imap_search($inbox,'ALL');

if($emails) {

	$output = '';
	
	rsort($emails);
	
	// for every email... 
	foreach($emails as $email_number) {
		
		// get information specific to this email 
		$overview = imap_fetch_overview($inbox,$email_number,0);
		//$message = imap_fetchbody($inbox,$email_number,2);
		
		// output the email header information 
		$output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
		$output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
		$sub = $overview[0]->subject.'</br>';
		$output.= '<span class="from">'.$overview[0]->from.'</span>';
		$output.= '<span class="date">on '.$overview[0]->date.'</span>';
		$output.= '</div>';
	$sql = "select * from voice_message";
		if($result = mysqli_query($link,$sql)) {
			while ($row = mysqli_fetch_array ($result)) 
{
$message = $row['id_voice_message'];
if($sub='Hello Sir.The message id is '.$message.'')
		{
			echo "yes this is ";
			echo $output;
		}
}
         
		}}
		}
		
	
	



// close the connection 
imap_close($inbox);
?>