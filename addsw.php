<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css" MEDIA=all>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="C:\xampp\htdocs\cmrs\welcome.php">CMRS</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="C:\xampp\htdocs\cmrs\adminforwardFilter.php">Complaints</a>
		</li>
        
		<li><a href="C:\xampp\htdocs\cmrs\adminforwardVerify.php">Filtered</a>
		</li>
        
		<li><a href="C:\xampp\htdocs\cmrs\adminComplainAuthority.php">Verified</a>
		</li>
        
		<li><a href="C:\xampp\htdocs\cmrs\adminReponseUser.php">Authority Response</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div class="container">
  <h2>Sign Up </h2>
  <form role="form">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="Name" class="form-control" id="Name" placeholder="Enter Name">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
	<div class="form-group">
      <label for="id">CNIC:</label>
      <input type="id" class="form-control" id="id" placeholder="Enter CNIC">
    </div>
				
    <div class="form-group">
    <label>Languge:<span class="red">*</span></label><br>
    <td><select name="language" id="signup_type" class="txtfld1" required="required" >
     <option value="select" selected="selected">--Select--</option><option value="english">English</option><option value="urdu">Urdu</option><option value="sindhi">Sindhi</option>	
    </select></td>
    </div>
				
    <div class="form-group">
    <label>Area:<span class="red">*</span></label><br>
    <td><select name="area" id="area" class="txtfld1" required="required">
     <option value="select" selected="selected">--Select--</option><option value="karachi east">Karachi East</option><option value="karachi west">Karachi West</option><option value="malir">Malir</option>	
    </select></td>
    </div>
    
	<br><br>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>

</body>
</html>
