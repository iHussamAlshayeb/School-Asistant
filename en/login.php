<?php 
include_once('includes/dbh.inc.php');
include_once('includes/pd.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>School Assistant</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>

<body style="background-color: #EEEEEE">

<div class="container">

<a href="index.php"><img alt="Logo"  src="img/asset.jpg" width="100%"></a>
   

<center>
<br>
       <h1>
              Login

            </h1>
            
    <br>
    <form action="login.php" method="post">
        	<span style="color:red;"><strong><?php include('error.php');?></strong></span>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <input type="submit" class="btn btn-primary" id="log_in" name="log_in" value="Login">
</form>
    <br>
    	<span>To visit Noor
		<a href="https://noor.moe.gov.sa/Noor/login.aspx">Click Here</a></span>
    
    
</center>
    

    
    
    </div>
    </body>
</html>
