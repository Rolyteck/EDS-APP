<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);

	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('index.php');
	}
	else
	{
		$error = "Wrong Details !";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Access Denied</title>
<link rel="stylesheet" href="style.css" type="text/css"  />
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.css">
	 <link rel="shortcut icon" href="..\..\wp-content\themes\mdbootstrap4\favicon.ico">
    <link href="res/css/bootstrap.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="css/cater.css">
    <link rel="stylesheet" type="text/css" href="iconfont/material-icons.css">
    <link href="res/css/style.css" type="text/css" rel="stylesheet">
    <link href="res/css/mdb.css" rel="stylesheet">
    <link href="res/css/compiled.css" rel="stylesheet">
	
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
</head>

<body>
	<div class="Logo " style="height:90px; text-align:left">
		<a href = "index.php" ><img class="hoverable responsive-img" src="images/EDSG92.png" style="width:100px; float:left; padding-right:10px;margin-left:50px"></a> 
		EDSG9  
		&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;
		<span style="float:center">Scottish SMEs Climate Pledge</span>
	</div>
		
		<!--Nav Bar-->
        <nav class="nav-bar-1">
            <div class="nav-wrapper" style="font-size:30px">
				
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="left hide-on-med-and-down" style="margin-left:100px;  ">
					<li><a href="denied.php" >Home</a></li>
					<li><a href="denied.php">Pledge</a></li>
					<li><a href="denied.php">About Us</a></li>
					<li><a href="denied.php">Contact Us</a></li>
					<li><a href=""></a></li> 
				</ul>
				<ul class="right hide-on-med-and-down"  >
					<li><a href="Signup.php">Sign Up</a></li>
					<li><a href="Login.php">Login</a></li> 
				</ul>
                <form   class="right hide-on-med-and-down" Style="width:15%">
					<input type="text" placeholder="Search" aria-label="Search">
				</form>
            </div>
			
        </nav>
        <!-- End of Nav-Bar -->
	 <div class="row">

		<!--First column-->
		<div class="col-lg-2 col-md-2 mb-r">

			 

		</div>
		<!--/First column-->

		<!--Second column-->
		<div class="col-lg-6 col-md-6 mb-r" >
			<!--Card-->
			<div class="card card-cascade narrower text-center" style = "padding: 20px">
				 					 
				 <h1><font color='red'>Access Denied !</font></h1>
				 
				<p><b>Sorry! You can't access this page. You have to Sign In</b></p>
				 
				<div class="m12 s14  animated slideInRight">
					<h5 class="center"><a href="Login.php" class="waves-effect waves-light btn">SIGN IN</a></h5>
					 
				</div>

			</div>
			<!--/.Card-->

		</div>
		<!--/Second column-->

		 
		
		
		
		<!--Third column-->
		<div class="col-lg-4 col-md-6 mb-r">
			 

		</div>
						<!--/Third column-->

						 
	</div>
	<footer class="page-footer  	default-color center-on-small-only">
              <div  style = "  padding-left:100px;">
                <div class="row">
					<div class="col 16 s12 m6">
					  <h5 class="white-text">EDSG9 Consulting Group </h5>
					  <p class="white-text text-lighten-4" style="text-align:justify; padding-right:50px">Our aim is Creation of a New Initiative Designed to Persuade and Help Businesses Take Bold Action to Drive Down their Carbon Emissions</p>
					</div>
					 
				<div class="col 5 s6 m2">
                  <h5 class="white-text">Address</h5>
                  <ul>
                    <li>University of Edinburgh</li>
                    <li>Business School.</li>
                    <li>United Kingdom.</li>
                  </ul>
                </div>
				<div class="col l3 s6 m3">
					<h5 class="white-text">Contact Us</h5>
					<ul>
						<li>EDSG9Consultingrgoup@gmail.com</li>
					</ul>
				</div>
                
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container-fluid">
                      © 2020 Copyright: <a href="https://www.EDSG9Consultinggroup.com">EDSG9 Consulting Group </a>    

                </div>
            </div>
			 
        </footer>
		

</body>
</html>
