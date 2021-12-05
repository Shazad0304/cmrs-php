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

<div class="container">
  <h2>Login</h2>
  <form role="form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
	
				
    <div>
    <label>Type:<span class="red">*</span></label>
    <br><td><select name="signup_type" id="signup_type" class="txtfld1" required="required" >
     <option value="select" selected="selected">--Select--</option><option value="admin">Admin</option><option value="verifyagent">Verify Agent</option><option value="filteragent">Filter Agent</option>	
    </select></td>
    
    </div>
    
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>

</body>
</html>


