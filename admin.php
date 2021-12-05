<?php

require_once("connection.php");
session_start();
if(!$_SESSION['loginadmin']){
   header("location:index.html");
   die;
}

echo "\n"; 
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
echo "    <!-- Bootstrap Core CSS -->\n"; 
echo "    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">\n"; 
echo "\n"; 
echo "    <!-- Custom CSS -->\n"; 
echo "    <link href=\"/css/sb-admin.css\" rel=\"stylesheet\">\n"; 
echo "\n"; 
echo "    <!-- Morris Charts CSS -->\n"; 
echo "    <link href=\"/css/plugins/morris.css\" rel=\"stylesheet\">\n"; 
echo "\n"; 
echo "    <!-- Custom Fonts -->\n"; 
echo "    <link href=\"/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "\n"; 
echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->\n"; 
echo "    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->\n"; 
echo "    <!--[if lt IE 9]>\n"; 
echo "        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>\n"; 
echo "        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>\n"; 
echo "    <![endif]-->\n"; 
echo "	\n"; 
echo "    <LINK REL=StyleSheet HREF=\"styles.css\" TYPE=\"text/css\" MEDIA=all>\n"; 
echo "  \n"; 
echo "	<LINK REL=StyleSheet HREF=\"bootstrap-theme\" TYPE=\"text/css\" MEDIA=all>\n"; 
echo "  \n"; 
echo "   <style>\n"; 
echo "   \n"; 
echo "   .carousel-inner > .item > img,\n"; 
echo "   .carousel-inner > .item > a > img \n"; 
echo "   {\n"; 
echo "      width: 40%;\n"; 
echo "      margin: auto;\n"; 
echo "   }\n"; 
echo "  \n"; 
echo "  </style>\n"; 
echo "  </head>\n"; 
echo "<body>\n"; 
echo "\n"; 
echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">\n"; 
echo "  <div class=\"container-fluid\">\n"; 
echo "    <div class=\"navbar-header\">\n"; 
echo "      <a class=\"navbar-brand\" href=\"#\">CMRS</a>\n"; 
echo "    </div>\n"; 
echo "    <div>\n"; 
echo "	\n"; 
echo "      <ul class=\"nav navbar-nav\">\n"; 
echo "	  \n"; 
echo "	  \n"; 
echo "        \n"; 
echo "		<li class=\"dropdown\">\n"; 
echo "                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">ADD<b class=\"caret\"></b></a>\n"; 
echo "				<ul class=\"dropdown-menu\">\n"; 
echo "					    <li><a href=\"addadmin.php\"><i class=\"fa fa-fw fa-user\"></i> Admin</a></li>\n"; 
echo "                    <li><a href=\"addlanguageidentifier.php\"><i class=\"fa fa-fw fa-user\"></i> Language Identifier</a></li>\n"; 
echo "					<li><a href=\"addscriptwriter.php\"><i class=\"fa fa-fw fa-user\"></i> Script Writer</a></li>\n"; 
echo "					<li><a href=\"addverifier.php\"><i class=\"fa fa-fw fa-user\"></i> Verifier</a></li>\n"; 
echo "		\n"; 
echo "				</ul>\n"; 
echo "			</li>	\n"; 
echo "			\n"; 
echo "			<li class=\"dropdown\">\n"; 
echo "                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Approve Request<b class=\"caret\"></b></a>\n"; 
echo "				<ul class=\"dropdown-menu\">\n"; 
echo "					   \n"; 
echo "                    <li><a href=\"approve_li.php\"><i class=\"fa fa-fw fa-user\"></i> Language Identifier</a></li>\n"; 
echo "					<li><a href=\"approve_sw.php\"><i class=\"fa fa-fw fa-user\"></i> Script Writer</a></li>\n"; 
echo "					<li><a href=\"approve_v.php\"><i class=\"fa fa-fw fa-user\"></i> Verifier</a></li>\n"; 
echo "					</ul>\n"; 
echo "			</li>	\n"; 
echo "	\n"; 
echo "		<!-- <li><a href=\"C:\xampp\htdocs\cmrs\adminforwardFilter.php\">Complaints</a> \n"; 
echo "		</li> \n"; 
echo "\n"; 
echo "		<li><a href=\"C:\xampp\htdocs\cmrs\adminforwardVerify.php\">Filtered</a>\n"; 
echo "		</li>\n"; 
echo "        \n"; 
echo "		<li><a href=\"C:\xampp\htdocs\cmrs\adminComplainAuthority.php\">Verified</a>\n"; 
echo "		</li>\n"; 
echo "        -->\n"; 
echo "		<li class=\"dropdown\">\n"; 
echo "                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Complain Authority<b class=\"caret\"></b></a>\n"; 
echo "				<ul class=\"dropdown-menu\">\n"; 
echo "					   \n"; 
echo "                    <li><a href=\"voice_complain.php\"><i class=\"fa fa-fw fa-user\"></i> Voice Complain </a></li>\n"; 
echo "					<li><a href=\"text_complain.php\"><i class=\"fa fa-fw fa-user\"></i> Text Complain</a></li>\n"; 
echo "					\n"; 
echo "					</ul>\n"; 
echo "			</li>	\n"; 
echo "		\n"; 
echo "		\n"; 
echo "		\n"; 
echo "		\n"; 
echo "		<li><a href=\"adminresponseuser.php\">Response User </a></li>\n"; 
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
echo "		<li class=\"dropdown\">\n"; 
echo "                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Delete<b class=\"caret\"></b></a>\n"; 
echo "				<ul class=\"dropdown-menu\">\n"; 
echo "                    <li><a href=\"deleteli.php\"><i class=\"fa fa-fw fa-user\"></i> Language Identifier</a></li>\n"; 
echo "					<li><a href=\"deletesw.php\"><i class=\"fa fa-fw fa-user\"></i> Script Writer</a></li>\n"; 
echo "					<li><a href=\"deletev.php\"><i class=\"fa fa-fw fa-user\"></i> Verifier</a></li>\n"; 
echo "				</ul>\n"; 
echo "			</li>	\n"; 
echo "		<li class=\"dropdown  pull-right\">\n"; 
echo "                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" selected =\"selected\"><i class=\"fa fa-user\"></i> Admin <b class=\"caret\"></b></button>\n"; 
echo "                    <ul class=\"dropdown-menu\">\n"; 
echo "                        \n"; 
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
echo "	<br><br><br><br>\n"; 
echo "  <div class=\"container\">\n"; 
echo "  <br>\n"; 
echo "  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">\n"; 
echo "    <!-- Indicators -->\n"; 
echo "    <ol class=\"carousel-indicators\">\n"; 
echo "      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>\n"; 
echo "      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>\n"; 
echo "      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>\n"; 
echo "      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>\n"; 
echo "    </ol>\n"; 
echo "\n"; 
echo "    <!-- Wrapper for slides -->\n"; 
echo "    <div class=\"carousel-inner\" role=\"listbox\">\n"; 
echo "\n"; 
echo "      <div class=\"item active\">\n"; 
echo "        <img src=\"chain6.jpg\" alt=\"Chania\" width=\"460\" height=\"345\">\n"; 
echo "        </div>\n"; 
echo "\n"; 
echo "      <div class=\"item\">\n"; 
echo "        <img src=\"chain1.jpg\" alt=\"Chania\" width=\"460\" height=\"345\">\n"; 
echo "        </div>\n"; 
echo "    \n"; 
echo "      <div class=\"item\">\n"; 
echo "        <img src=\"chain2.jpg\" alt=\"Flower\" width=\"460\" height=\"345\">\n"; 
echo "        </div>\n"; 
echo "\n"; 
echo "      <div class=\"item\">\n"; 
echo "        <img src=\"chain3.jpg\" alt=\"Flower\" width=\"460\" height=\"345\">\n"; 
echo "      </div>\n"; 
echo "  \n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "    <!-- Left and right controls -->\n"; 
echo "    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">\n"; 
echo "      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>\n"; 
echo "      <span class=\"sr-only\">Previous</span>\n"; 
echo "    </a>\n"; 
echo "    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">\n"; 
echo "      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>\n"; 
echo "      <span class=\"sr-only\">Next</span>\n"; 
echo "    </a>\n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "\n"; 
echo "  \n"; 
echo "  \n"; 
echo "<br>\n"; 
echo "<br>\n"; 
echo "<br>\n"; 
echo "<br>\n"; 
echo "<div id=\"middle\">\n"; 
echo "  <h1 >\n"; 
echo "\n"; 
echo "Common Man Reporting System\n"; 
echo "\n"; 
echo "</h1></div>\n"; 
echo "\n"; 
echo "<div>\n"; 
echo "<p id=\"mid1\">\n"; 
echo "The world is full of problems and with the modern era these problems have become more complex. Moreover the modern days have come along with the emergence of Information Technology, therefore the world has come up with its advanced use to solve these problems. But the developing countries has far behind in pursuance and of Technology and facing the immense burden on human resource for the solutions which has a lot of faults, and inadequately used, hence the problems like low literacy, biasness  in education, local governments, health etc. are being faced. With this there is a huge gap between masses and the concern authorities, due to this it has devastating effects on solutions of day to day problems. \n"; 
echo "</p>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "	<div class=\"clearfix visible-lg\"></div>\n"; 
echo "\n"; 
echo "</body>\n"; 
echo "</html>\n";
?>


