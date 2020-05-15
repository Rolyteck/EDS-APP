 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pledge</title>
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
		<a href = "Index.php" ><img class="hoverable responsive-img" src="images/EDSG92.png" style="width:130px; float:left; padding-right:10px; margin-left:50px"></a> 
			 
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
<?php

function dball($msql){
$servername = "localhost";
$username = "u876407312_EDSG9";
$password = "soccer4325";
$dbname = "u876407312_details";   

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // use exec() because no results are returned
    $conn->exec($msql);
    //echo "New record created successfully";
    }
catch(PDOException $e)
   {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

}
	
	if(isset($_POST['submit'])){
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$hash = substr(md5(uniqid(rand(), true)), 16, 16);
	$Password = $_POST['Password'];
	$active = md5(rand());				  
					  
	insert('pledge',  $Name , $email,$hash, $active, $Password  );
	 
	}
	
	 
function insert($tb, $col1, $col2, $col3,$col4, $col5 ){
		$sql = "INSERT INTO $tb VALUES (Id, '".$col1."','".$col2."', '".$col3."', '".$col4."', '".$col5."'  )";
    // use exec() because no results are returned
    if(dball($sql)){
		
    
	}
	 
}

 

?>
	<div class="container">
			
		<div class="col-lg-10 col-md-8 mb-r">

			<!--Card-->
			<div class="card card-cascade narrower text-center"  >
				<!--Card content-->
				<div class="card-body text-left" style="width:95%"> 
					<?php echo "Pledge Made Successfully"; ?>
					<hr>
					<br>
					<a href = "" style ="Text-align:center">You can follow us on our social media via:</a>
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
				<!--/.Card--> 
			</div>
			<!--/.Card-->
		</div>
					 
	</div>



<footer class="page-footer  default-color center-on-small-only">
              <div  style = "  padding-left:100px;">
                <div class="row">
					<div class="col 16 s12 m6">
					  <h5 class="white-text">EDSG9 Consulting Group</h5>
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
						<li>EDSG9Consultinggroup@gmail.com</li>
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

