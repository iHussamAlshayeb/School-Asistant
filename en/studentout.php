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

<?php 

include_once('includes/dbh.inc.php');

?>

<!DOCTYPE html>
<html dir="ltr">
  <head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />  
    <title>School Assistant</title>
      
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
      <a href="index.php"><img alt="logo"  src="img/asset.jpg" width="100%"></a>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">School Assistant</a>
  <button class="navbar-toggler" type="button" data-trigger="#main_nav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse" id="main_nav">

<div class="offcanvas-header mt-3">  
	<button class="btn btn-outline-danger btn-close float-right"> &times Close  </button>
	<h5 class="py-2 text-white">Menu</h5>
</div>

<ul class="navbar-nav">
	<li class="nav-item"> <a class="nav-link" href="index.php">Home</a> </li>
	<li class="nav-item"><a class="nav-link" href="info.php">Goals</a></li>
	<li class="nav-item"><a class="nav-link" href="student.php">Student Information</a></li>
    <li class="nav-item active"><a class="nav-link" href="cardtypes.php">Leaving Card</a></li>
    <li class="nav-item"><a class="nav-link" href="sitemap.php">Site Map</a></li>
    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    <li class="nav-item"><a class="nav-link" href="../index.php">عربي</a></li>
</ul>

  </div>
</nav>
    

		<center>
            <br>
<p>
               To Print Student Card [ Enter Academic Number ]

            </p>
            
            <form method="post" action="studentout.php">
            <input type="text" placeholder="Academic Number" required id="acc_id" name="acc_id">
            <input type="submit" class="btn btn-primary" value="Search" name="printstudent" id="printstudent">
            </form>
            
            
            <br>
            
                        <div id="GFG"> 

            <?php include_once('includes/pd.inc.php'); ?>
            </div>
<input class="btn btn-success" onclick="printDiv()" value="Print">

</center>
    
   

    
    
    
    </div>
    </body>
     <script> 
        function printDiv() { 
            var divContents = document.getElementById("GFG").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body > <h1>Student Information:<br>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 
</html>

