<?php
session_start();

if (!isset($_SESSION['Username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['Username']);
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html dir="rtl">
  <head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />  
    <title>المساعد المدرسي</title>
      
<script src="js/jquery-3.4.1.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript">
/// some script
$(function () {
	  'use strict'

	$("[data-trigger]").on("click", function(){
        var trigger_id =  $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
    });

    // close if press ESC button 
    $(document).on('keydown', function(event) {
        if(event.keyCode === 27) {
           $(".navbar-collapse").removeClass("show");
           $("body").removeClass("overlay-active");
        }
    });

    // close button 
    $(".btn-close").click(function(e){
        $(".navbar-collapse").removeClass("show");
        $("body").removeClass("offcanvas-active");
    }); 


})
</script>

<style type="text/css">

body.offcanvas-active{
	overflow:hidden;
}
.offcanvas-header{ display:none; }

@media (max-width: 992px) {
  .offcanvas-header{ display:block; }
  .navbar-collapse {
    position: fixed;
    top:0; 
    bottom: 0;
    left: 100%;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: black;
    transition: visibility .2s ease-in-out, transform .2s ease-in-out;
  }
  .navbar-collapse.show {
    visibility: visible;
    transform: translateX(-100%);
  }
}

</style>
  </head>
  <body style="background-color: #EEEEEE">
  <div class="container">
      <a href="index.php"><img alt="شعار"  src="img/asset.jpg" width="100%"></a>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">المساعد المدرسي</a>
  <button class="navbar-toggler" type="button" data-trigger="#main_nav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse" id="main_nav">

<div class="offcanvas-header mt-3">  
	<button class="btn btn-outline-danger btn-close float-left">  اغلاق &times </button>
	<h5 class="py-2 text-white">القائمة الرئيسية</h5>
</div>

<ul class="navbar-nav">
	<li class="nav-item "> <a class="nav-link" href="index.php">الصفحة الرئيسية </a> </li>
	<li class="nav-item"><a class="nav-link" href="info.php"> اهدافنا </a></li>
	<li class="nav-item"><a class="nav-link" href="student.php"> بيانات الطالبة </a></li>
    <li class="nav-item active"><a class="nav-link" href="cardtypes.php"> بطاقات الخروج </a></li>
    <li class="nav-item"><a class="nav-link" href="sitemap.php"> خريطة الموقع </a></li>
    <li class="nav-item"><a class="nav-link" href="logout.php"> خروج </a></li>
    <li class="nav-item"><a class="nav-link" href="en/index.php">English</a></li>
</ul>

  </div>
</nav>
    
    

		<center>

            <br><br>
            <a href="classout.php" style="text-decoration: none;"> <button class="btn btn-outline-success btn-lg btn-block">طباعة بطاقات طالبات الفصل</button></a>
        <br>
            <a href="studentout.php" style="text-decoration: none;"> <button class="btn btn-outline-success btn-lg btn-block">لطباعة بطاقة طالبة واحدة</button></a>

</center>
    
   

    
    
    
    </div>
    </body>
</html>
