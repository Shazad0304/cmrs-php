<?php 
require_once("connection.php");
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
//$cnic = $_POST['cnic'];
//$language = $_POST['language'];

if (empty($_POST["email"])  OR empty($_POST["name"]) OR empty($_POST["password"]) ) {
      
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

      $last = "Description is required. Please write there";
     // $valid = false;
	  	  $message = "you didn't write description";
print '<script type=text/javascript>';
print "alert('$last')";

print '</script>';
   
   }
   else {
	   
    $result = $db->prepare( "SELECT email_1
			 FROM volunteer_sign_up_1
			 WHERE email_1 = ?" );
$result->bindValue( 1, $email );
$result->execute();
if( $result->rowCount() > 0 ) { # If rows are found for query
     $last = "Email is already registered";
	 print '<script type=text/javascript>';
print "alert('$last')";

print '</script>';
}
else {
     $result = $db->exec("INSERT INTO volunteer_sign_up_1() VALUES (  '$email'  , '$name' ,'$password'    )");
	 //$last = "Thanks !!!! You Registered Successfully. You account will be activated after 1 hour";
	//echo "windows.prompt(Welcome)";
//echo "<a href=\"javascript: if (confirm('Registered Successfully!! Your account will be activated after 1 hour')) { window.location.href='index.html' ;} else { void('') }; \">\n";
print '<script>';
echo "if (confirm('Registered Successfully') == true) {
     window.location.href='addlanguageidentifier.php' ;
    } else {
       window.location.href='addlanguageidentifier.php' ;
    }";
	
	print '</script>';
//echo x;
  /*  echo "New record created successfully";
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.html';
header("Location: http://$host$uri/$extra");
 */     
   

   }

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
echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">\n"; 
echo "  <div class=\"container-fluid\">\n"; 
echo "    <div class=\"navbar-header\">\n"; 
echo "      <a class=\"navbar-brand\" href=\"admin.php\">Home</a>\n"; 
echo "    </div>\n"; 
echo "    <div>\n"; 
echo "	\n"; 
echo "      <ul class=\"nav navbar-nav\">\n"; 
echo "	  \n"; 
echo "	  \n"; 
echo "        \n"; 
echo "		\n"; 
echo "		<!--\n"; 
echo "		<div class=\"dropdown\">\n"; 
echo "    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Dropdown Example\n"; 
echo "    <span class=\"caret\"></span></button>\n"; 
echo "    <ul class=\"dropdown-menu\">\n"; 
echo "      <li><a href=\"#\">HTML</a></li>\n"; 
echo "      <li><a href=\"#\">CSS</a></li>\n"; 
echo "      <li><a href=\"#\">JavaScript</a></li>\n"; 
echo "    </ul>\n"; 
echo "  </div>\n"; 
echo "\n"; 
echo "		-->\n"; 
echo "			\n"; 
echo "		<li class=\"dropdown  pull-right\">\n"; 
echo "                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Admin <b class=\"caret\"></b></button>\n"; 
echo "                    <ul class=\"dropdown-menu\">\n"; 
echo "                        <li>\n"; 
echo "                            <a href=\"admin.php\"><i class=\"fa fa-fw fa-user\"></i> Home</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li class=\"divider\"></li>\n"; 
echo "                        <li>\n"; 
echo "                            <a href=\"logout.php\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>\n"; 
echo "                        </li>\n"; 
echo "                    </ul>\n"; 
echo "                </li>\n"; 
echo "            </div>\n"; 
echo "			\n"; 
echo "		</ul>\n"; 
echo "		\n"; 
echo "    </div>\n"; 
echo "</nav>\n"; 
echo "\n"; 
echo "\n"; 
echo "<br><br><br><br>\n"; 
echo "<div class=\"container\">\n"; 
echo "  <h2>Add Language Identifier</h2>\n"; 
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
echo "      <label for=\"pwd\">Password:</label>\n"; 
echo "      <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Enter password\">\n"; 
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