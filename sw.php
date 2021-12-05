<!DOCTYPE html>
<html lang="en">
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

  
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  
	
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css" MEDIA=all>
  
	<LINK REL=StyleSheet HREF="bootstrap-theme" TYPE="text/css" MEDIA=all>
  
<body>



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


<div class="container">
  <br><br><br><br><table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Complaints</th>
        <th>Language</th>
		<th>Department</th>
        <th>script(language identifier)</th>    		
		<th>Write Script(English)</th>
		<th>Submit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ksdjaldjaldjaldjald</td>
        
		<td>Urdu</td>
       	
		<td>
		<form action="#" method="post">
<input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++   </label>
<input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
<input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
<input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
	
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
}
?>
		</td>
	
	
        <td>
        <textarea rows="6" cols="50">
	    </textarea>
		</td>
		
	<td><button type="submit" class="btn btn-info">Submit</button>
	</td>
      </tr>
	 
      <tr>
        <td>2</td>
        <td>ksdjaldjaldjaldjald</td>
        
		<td>Urdu</td>
       	
		<td>
		<select id="multiple-selected" multiple="multiple">
		<option value="1">Police Dept.</option>
		<option value="2">Health Dept.</option>
		<option value="3">CyberCrime Dept.</option>
		<option value="4">Food Dept.</option>
		<option value="5">Treasury Dept.</option>
		<option value="6">Water and Sewage Dept.</option>
		
		<option value="7">Education Dept.</option>
		</select>
		</td>
	
	
        <td>
        <textarea rows="6" cols="50">
	    </textarea>
		</td>
		
	<td><button type="submit" class="btn btn-info">Submit</button>
	</td>
      </tr>
	  
    
	  
      </tbody>
  </table>
</div>


  
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>



</body>
</html>
