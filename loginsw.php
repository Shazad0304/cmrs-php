
<?php
require_once('connection.php');
session_start();
if(isset($_SESSION["email_2"])) {
     header("Location: profilesw.php"); // redirects them to homepage
     exit; // for good measure
}
$message="";
if(count($_POST)>0) {
$email = $_POST["email"] ;
$pass = $_POST["password"];
$stmt = $db->query("SELECT * FROM VOLUNTEER_SIGN_UP_2 WHERE email_2= '$email' and password_2 = '$pass'");
try {
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{

$_SESSION["email_2"] = $row['email_2'];
$_SESSION["name_2"] = $row['name_2'];
}

}
catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}


if(isset($_SESSION["email_2"])) {
	$_SESSION['loginsw'] = true;
header("Location:profilesw.php");
}
else
{
	
	//echo "Wrong Password!!!!!!!";
print '<script>';
echo 'alert("Wrong Password")';
	
	print '</script>';
//header("Location:loginadmin.php");
}

}



print '<!DOCTYPE html>';
print '<html lang="en">';
print '    <head>';
print '		<meta charset="UTF-8" />';
       print ' <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> ';
	print '	<meta name="viewport" content="width=device-width, initial-scale=1.0"> ';
       print ' <title>Script Writer Login</title>';
      print '  <meta name="description" content="Custom Login Form Styling with CSS3" />';
       print ' <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />';
     print '   <meta name="author" content="Codrops" />';
      print '  <link rel="shortcut icon" href="../favicon.ico"> ';
      print '  <link rel="stylesheet" type="text/css" href="css4/style.css" />';
     print '   <script src="js4/modernizr.custom.63321.js"></script>';
        //<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		print '<style>
			body {
				background: #e1c192 url(images4//wood_pattern.jpg);
			}
		</style>';
   print ' </head>';
   print ' <body>';
       print ' <div class="container">';
		
		//	<!-- Codrops top bar -->
         print '   <div class="codrops-top">';
     
           print '     <span class=" centre">';
                 print '   <a >';
              print '          <strong> Comman Man Reporting System Portal</strong>';
              print '      </a>';
            print '    </span>';
         print '   </div>';
		 //<!--/ Codrops top bar -->
			
		print '	<header>
			
				<h1>Script Writer <strong>Login Form</strong></h1>
				

			<div class="support-note">
		
		<span class="note-ie">Sorry, only modern browsers.</span>
		
			</header>';
		print '</div>
				
			
	<section class="main">
			<form class="form-2" method = "POST">
<h1><span class="log-in">Log in</span> or <span class="sign-up">sign up</span></h1>
					<p class="float">
					<label for="email" ><i class="icon-user"></i>Username</label>
					<input type="text" name="email" placeholder="Username or email">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" name="password" placeholder="Password" class="showpassword">
		</p>
					<p class="clearfix"> 
						<a href="registersw.php" class="log-twitter">New ?<strong> Register </strong></a>    
					<input type="submit" name="submit" value="Log in">
					</p>
				</form>​​
		</section>
			
     </div>';
		//<!-- jQuery if needed -->
        print '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>';
		print ' <script type="text/javascript">
		$(function(){
			    $(".showpassword").each(function(index,input) {
			        var $input = $(input);
			        $("<p class=opt/>").append(
			            $("<input type=checkbox class=showpasswordcheckbox id=showPassword />").click(function() {
			                var change = $(this).is(":checked") ? "text" : "password";
			                var rep = $("<input placeholder=Password type=" + change + " />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr(class, $input.attr(class))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
			             })
			        ).append($("<label for=showPassword/>").text("Show password")).insertAfter($input.parent());
			    });

			   
			});
	</script>';
print '    </body>';
print '</html>';
?>