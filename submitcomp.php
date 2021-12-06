<?php 
require_once("connection.php");
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$descp = $_POST['descp'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$area = $_POST['area'];
$date = date('d-m-y h:i:s');

if (empty($_POST["email"])  OR empty($_POST["name"]) OR empty($_POST["descp"]) OR empty($_POST["area"]) OR empty($_POST["contact"]) ) {
      
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

      $last = "All fields are required. Please fill";
     // $valid = false;
	  	  $message = "you didn't write description";
print '<script type=text/javascript>';
print "alert('$last')";

print '</script>';
   
   }
   else {
	   
//     $result = $db->prepare( "SELECT email_id
// 			 FROM admin
// 			 WHERE email_id = ? " );
// $result->bindValue( 1, $email );
// $result->execute();
// $result1 = $db->prepare( "SELECT contact
// 			 FROM admin
// 			 WHERE contact = ? " );
// $result1->bindValue( 1, $contact );
// $result1->execute();
// if( $result->rowCount() > 0 OR $result1->rowCount() > 0 ) { # If rows are found for query
//      $last = "Email or contact number is already registered";
// 	 print '<script type=text/javascript>';
// print "alert('$last')";

// print '</script>';
// }
// else {
     $result = $db->exec("INSERT INTO text_message(message,dates,area,cell_num,validity,email) VALUES ('$descp', '$date' , '$area'  ,'$contact', '0'  , '$email'  )");
	 //$last = "Thanks !!!! You Registered Successfully. You account will be activated after 1 hour";
	//echo "windows.prompt(Welcome)";
//echo "<a href=\"javascript: if (confirm('Registered Successfully!! Your account will be activated after 1 hour')) { window.location.href='index.html' ;} else { void('') }; \">\n";
// print '<script>';
// echo "if (confirm('Registered Successfully') == true) {
//      window.location.href='admin.php' ;
//     } else {
//        window.location.href='addadmin.php' ;
//     }";
	
// 	print '</script>';
//echo x;
  /*  echo "New record created successfully";
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.html';
header("Location: http://$host$uri/$extra");
 */     
   

   //}

}
}

echo "<!DOCTYPE html>\n"; 
echo "<html lang=\"en\">\n"; 
echo "<head>\n"; 
echo "\n"; 
echo "    <meta charset=\"utf-8\">\n"; 
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"; 
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n"; 
echo "    <meta name=\"description\" content=\"\">\n"; 
echo "    <meta name=\"author\" content=\"\">\n"; 
echo "\n"; 
echo "    <title>Common Man Reporting System</title>\n"; 
echo " \n"; 
echo "	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n"; 
echo "  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">\n"; 
echo "  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\">\n"; 
echo "  <LINK REL=StyleSheet HREF=\"bootstrap.min\" TYPE=\"text/css\" MEDIA=all>\n"; 
echo "  \n"; 
echo "  \n"; 
echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>\n"; 
echo "  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>\n"; 
echo "\n"; 
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n"; 
echo "\n"; 
echo "    <link href=\"css/sb-admin.css\" rel=\"stylesheet\">\n"; 
echo "\n"; 
echo "    <link href=\"css/plugins/morris.css\" rel=\"stylesheet\">\n"; 
echo "\n"; 
echo "    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "	\n"; 
echo "    <LINK REL=StyleSheet HREF=\"styles.css\" TYPE=\"text/css\" MEDIA=all>\n"; 
echo "  \n"; 
echo "	<LINK REL=StyleSheet HREF=\"bootstrap-theme\" TYPE=\"text/css\" MEDIA=all>\n"; 
echo "</head>\n"; 
echo "<body>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "<br><br><br><br>\n"; 
echo "<div class=\"container\">\n"; 
echo "  <h2>Add Complain</h2>\n"; 
echo "  <form role=\"form\"  method=\"post\">\n"; 
echo "    <div class=\"form-group\">\n"; 
echo "      <label for=\"Name\">Name:</label>\n"; 
echo "      <input type=\"Name\" class=\"form-control\" name=\"name\" placeholder=\"Enter Name\">\n"; 
echo "	  \n"; 
echo "    </div>\n"; 
echo "	<div class=\"form-group\">\n"; 
echo "      <label for=\"email\">Email:</label>\n"; 
echo "      <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Enter email\">\n"; 
echo "    </div>\n"; 
echo "    <div class=\"form-group\">\n"; 
echo "      <label for=\"pwd\">Contact:</label>\n"; 
echo "      <input type=\"contact\" class=\"form-control\" name=\"contact\" placeholder=\"Enter contact\">\n"; 
echo "    </div>\n";
echo "    <div class=\"form-group\">\n"; 
echo "      <label for=\"pwd\">Area:</label>\n"; 
echo "      <input type=\"text\" class=\"form-control\" name=\"area\" placeholder=\"Enter area\">\n"; 
echo "    </div>\n"; 
echo "    <div class=\"form-group\">\n"; 
echo "      <label for=\"pwd\">Complain:</label>\n"; 
echo "      <textarea type=\"text\" class=\"form-control\" name=\"descp\" placeholder=\"Enter complain here\"></textarea>\n"; 
echo "    </div>\n"; 
echo "	\n"; 
echo "    \n"; 
echo "				\n"; 
echo "    \n"; 
echo "	<br><br>\n"; 
echo "    <button type=\"submit\" name=\"submit\"class=\"btn btn-info\">Submit</button>\n"; 
echo "  </form>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "</body>\n"; 
echo "</html>\n";




?>