<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('index.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);


	if($uname=="")	{
		$error[] = "<b><font color='red'>provide username !</font></b>";
	}
	else if($umail=="")	{
		$error[] = "<b><font color='red'>provide email id !";
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = "<b><font color='red'>Please enter a valid email address !</font></b>";
	}
	else if($upass=="")	{
		$error[] = "<b><font color='red'>provide password !</font></b>";
	}
	else if(strlen($upass) < 6){
		$error[] = "<b><font color='red'>Password must be at least 6 characters</font></b>";
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if($row['user_name']==$uname) {
				$error[] = "<b><font color='red'>sorry username already taken !</font></b>";
			}
			else if($row['user_email']==$umail) {
				$error[] = "<b><font color='red'>sorry email id already taken !</font></b>";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){
					$user->redirect('Signup.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>
<link rel="stylesheet" href="style.css" type="text/css"  />
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Sign Up </title>
    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.css">
	 <link rel="shortcut icon" href="..\..\wp-content\themes\mdbootstrap4\favicon.ico">
    <link href="res/css/bootstrap.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="css/cater.css">
    <link rel="stylesheet" type="text/css" href="iconfont/material-icons.css">
    <link href="res/css/style.css" type="text/css" rel="stylesheet">
    <link href="res/css/mdb.css" rel="stylesheet">
    <link href="res/css/compiled.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">

      
	<style>		
        }
        .view {
            margin-top: -56px;
        }
        .navbar {
            z-index: 1;
        }
        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 700px; 
            } 
        }
		 
		 
    </style>
</head>
    <body class="main" >
		<div class="Logo " style="height:110px; text-align:left">
		<a href = "index.php" ><img class="hoverable responsive-img" src="images/EDSG92.png" style="width:130px; float:left; padding-right:10px; margin-left:50px"></a> 
			 
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
		 
		<div class="container">
			<div class="col-lg-10 col-md-6 mb-r">
				<!--Card-->
				<div class="card card-cascade narrower" >
					<!--Card content-->
					<div class="card-body text-left" style="width:100%">
						<!--Register form-->
						<form method="post">
							<p class="h3 text-center mb-4"><b>Sign up</b></p>
							<!--Card content-->
							<?php
							if(isset($error))
							{
								foreach($error as $error)
								{
									 ?>
									 <div class="alert alert-danger">
										<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
									 </div>
									 <?php
								}
							}
							else if(isset($_GET['joined']))
							{
								 ?>
								 <div class="alert alert-info">
									  <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='Login.php'>login</a> here
								 </div>
								 <?php
							}
							?>
							<div class="card-body " style="width:80%">
								<div class="md-form">
									<i class="fa fa-user prefix grey-text"></i>
									<input type="text" name="txt_uname" id="orangeForm-name" class="form-control" mdbActive style="margin-left:25px" required>
									<label for="orangeForm-name">Your name</label>
								</div>
								<div class="md-form">
									<i class="fa fa-envelope prefix grey-text"></i>
									<input type="text" name="txt_umail" id="orangeForm-email" class="form-control" mdbActive style="margin-left:25px" required>
									<label for="orangeForm-email">Your email</label>
								</div>

								<div class="md-form">
									<i class="fa fa-lock prefix grey-text"></i>
									<input type="password"  name="txt_upass" id="orangeForm-pass" class="form-control" mdbActive style="margin-left:25px" required>
									<label for="orangeForm-pass">Your password</label>
								</div>
								<div class="md-form">
									<i class="fa fa-lock prefix grey-text"></i>
									<input type="password" id="orangeForm-pass" class="form-control" mdbActive style="margin-left:25px" required>
									<label for="orangeForm-pass">Confirm Your password</label>
								</div>

								<div class="text-center">
									<button name="btn-signup" class="btn btn-deep-orange waves-light" mdbRippleRadius>Sign up</button>
								</div>
								<p>Don't have an account ! <a href="index.php">Sign In</a></p>
								<div class="text-center">
								<!--Linkedin-->
								<a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a>
								<!--Twitter-->
								<a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a>
								<!--Dribbble-->
								<a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a>
								<a class="icons-sm email-ic"><i class="fa fa-envelope"> </i></a>
								<a class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
						</form>
						<!--/Register form-->
					</div>
				</div>
			</div>
		</div>  
						 
		<footer class="page-footer  	default-color center-on-small-only">
              <div  style = "  padding-left:100px;">
                <div class="row">
					<div class="col 16 s12 m6">
					  <h5 class="white-text">EDSG9 Consulting  Group</h5>
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
						<li>EDSG9Consultinggroup@gmail.com.com</li>
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
        </footer>
         <script type="text/javascript" src="res/js/jquery.js"></script>
                <script type="text/javascript" src="res/js/compiled.js"></script>
                <script type="text/javascript" src="res/js/jarallax.js"></script>
                <script type="text/javascript" src="res/js/jarallax-video.js"></script>
                <script type="text/javascript" src="res/js/popper.min.js"></script>
                <script type="text/javascript" src="res/js/mdb.min.js"></script>
                <script type="text/javascript" src="res/js/bootstrap.min.js"></script>
                <script>
                    $('body').scrollspy({
                        target: '.dotted-scrollspy'
                    });
                    $(function () {
                        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
                    });

                    $('.navbar-collapse a').click(function(){
                        $(".navbar-collapse").collapse('hide');
                    });
                    new WOW().init();
            </script>
    </body>
</html>