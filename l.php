<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	
  
  
  </head>
<body>
<br><br>




<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="C:\xampp\htdocs\cmrs\welcome.php">CMRS</a>
    </div>
    <div>

 <ul class="nav navbar-nav navbar-right">
        
        	<li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-off"></span><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
	</li>
      </ul>

      
    </div>
  </div>
</nav>

<h2>Identify Language:</h2>
<div class="container">
 <br><br><br><br>             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Voice Message</th>
		<th>Date</th>
		 <th>Area</th>		
		 <th>Language</th>
		<th>Discription</th>
		<th>Submit</th>
	   </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>audio message here </td>
		<td>22-01-2012</td>
        <td>Malir</td>
		<td>
		<input type="text" list="Language" />
		<datalist id="Language" />
		<option value="Urdu">
		<option value="Sindhi">
		<option value="Punjabi">
		<option value="Siraiki">
		<option value="Pashto">
		<option value="Gujrati">
		<option value="English">
		<option value="Farsi">
		<option value="Brahavi">
		</datalist>
		</td>
		<td><textarea class="form-control" rows="2" id="comment"></textarea></td>
		<td><button type="submit" class="btn btn-info">Submit</button>
	</td>
      </tr>
      <tr>
        <td>2</td>
        <td>audio message here </td>
		<td>22-01-2012</td>
        <td>Hyderabad</td>
		<td>
		<input type="text" list="Language" />
		<datalist id="Language" />
		<option value="Urdu">
		<option value="Sindhi">
		<option value="Punjabi">
		<option value="Siraiki">
		<option value="Pashto">
		<option value="Gujrati">
		<option value="English">
		<option value="Farsi">
		<option value="Brahavi">
		</datalist>
		<td><textarea class="form-control" rows="2" id="comment"></textarea></td>
	<td><button type="submit" class="btn btn-info">submit</button>
	    </td>
      </tr>
            </tbody>
  </table>
</div>


  
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>



</body>
</html>
