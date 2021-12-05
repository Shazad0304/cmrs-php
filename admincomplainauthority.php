<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Common Man Reporting System</title>
 
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <LINK REL=StyleSheet HREF="bootstrap.min" TYPE="text/css" MEDIA=all>
  
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="css/plugins/morris.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css" MEDIA=all>
  
	<LINK REL=StyleSheet HREF="bootstrap-theme" TYPE="text/css" MEDIA=all>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="C:\xampp\htdocs\cmrs\welcome.php">CMRS</a>
    </div>
    <div>
	
      <ul class="nav navbar-nav">
	  
	  
        
		<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADD<b class="caret"></b></a>
				<ul class="dropdown-menu">
					    <li><a href="addAdmin.php"><i class="fa fa-fw fa-user"></i> Admin</a></li>
                    <li><a href="addLanguageIdentifier.php"><i class="fa fa-fw fa-user"></i> Language Identifier</a></li>
					<li><a href="addScriptwriter.php"><i class="fa fa-fw fa-user"></i> Script Writer</a></li>
					<li><a href="addVerifier.php"><i class="fa fa-fw fa-user"></i> Verifier</a></li>
					<li><a href="addAuthority.php"><i class="fa fa-fw fa-user"></i> Authority</a></li>
				</ul>
			</li>	
	
		<!-- <li><a href="C:\xampp\htdocs\cmrs\adminforwardFilter.php">Complaints</a> 
		</li> 

		<li><a href="C:\xampp\htdocs\cmrs\adminforwardVerify.php">Filtered</a>
		</li>
        
		<li><a href="C:\xampp\htdocs\cmrs\adminComplainAuthority.php">Verified</a>
		</li>
        -->
		
		<li><a href="adminComplainAuthority.php">Complain Authority</a></li>
		
		
		<li><a href="#">Response User </a></li>
		
		<!--
		<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>

		-->
		<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delete<b class="caret"></b></a>
				<ul class="dropdown-menu">
                    <li><a href="DeleteLI.php" selected="selected"><i class="fa fa-fw fa-user"></i> Language Identifier</a></li>
					<li><a href="DeleteSW.php"><i class="fa fa-fw fa-user"></i> Script Writer</a></li>
					<li><a href="DeleteV.php"><i class="fa fa-fw fa-user"></i> Verifier</a></li>
					<li><a href="DeleteA.php"><i class="fa fa-fw fa-user"></i> Authority</a></li>
				</ul>
			</li>	
		<li class="dropdown  pull-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user"></i> admin <b class="caret"></b></button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </div>
			
		</ul>
		
    </div>
</nav>



<div class="container">
 <br><br><br><br>             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Complaint</th>
		 <th>Area</th>		
		<th>Department</th>
		<th>Authority Name</th>
        <th>Send</th>
	   </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ksdjaldjaldjaldjald</td>
        <td>--</td>
		<td>kesc</td>
		<td>
		<input type="text" list="name" />
	
	<datalist id="name">
	<option value="--Select One--">
	<option value="Ali">
	<option value="Ahmed">
	</datalist></td>
		<td><button type="submit" class="btn btn-info">Forward</button>
	</td>
      </tr>
      <tr>
        <td>2</td>
        <td>ksdjaldjaldjaldjald</td>
        <td>--</td>
		<td>kesc</td>
		<td>
		<input type="text" list="name" />
	
	<datalist id="kesc">
	<option value="--Select One--">
	<option value="Rehman">
	<option value="Adeel">
	</datalist></td>
		<td><button type="submit" class="btn btn-info">Forward</button>
	</td>
      </tr>
            </tbody>
  </table>
</div>

</body>
</html>
