<?php 
include_once('includes/dbh.inc.php');
include_once('includes/pd.inc.php');
?>

<!DOCTYPE html>
<html dir="rtl">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>المساعد المدرسي</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>

<body style="background-color: #EEEEEE">

<div class="container">

<a href="index.php"><img alt="شعار"  src="img/asset.jpg" width="100%"></a>
   

<center>
<br>
       <h1>
              تسجيل الدخول

            </h1>
            
    <br>
    <form action="login.php" method="post">
        	<span style="color:red;"><strong><?php include('error.php');?></strong></span>
  <div class="form-group">
    <label for="username">اسم المستخدم</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">كلمة السر</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <input type="submit" class="btn btn-primary" id="log_in" name="log_in" value="تسجيل الدخول">
</form>
    <br>
    	<span>للانتقال لنظام نور
		<a href="https://noor.moe.gov.sa/Noor/login.aspx">اضغط هنا</a></span>
    
    
</center>
    

    
    
    </div>
    </body>
</html>
