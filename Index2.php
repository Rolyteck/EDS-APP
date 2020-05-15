<?php

	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$Id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE Id=:Id");
	$stmt->execute(array(":Id"=>$Id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html>
  <head>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <title>EDSG9Consultinggroup</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="shortcut icon" href="..\..\wp-content\themes\mdbootstrap4\favicon.ico">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/mdb.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/cater.css">
      <link rel="stylesheet" type="text/css" href="iconfont/material-icons.css">
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	  <!-- Your custom styles (optional) -->
	  <link href="css/style.css" rel="stylesheet">
	
  `	  
    </head>
	<style>
	a:link {
     
    text-decoration: none;
	}
	a:visited {
		 
		background-color: transparent;
		text-decoration: none;
	}
	a:hover {
		color: red;
		background-color: transparent;
		text-decoration: underline;
	}
	a:active {
		color: yellow;
		background-color: transparent;
		text-decoration: underline;
	}
	</style >
    <body class="main" style = "background-color:#f2f2f2"  >
        <div class="Logo " style="height:110px; text-align:left">
		<a href = "Index.php" ><img class="hoverable responsive-img" src="images/EDSG92.PNG" style="width:130px; float:left; padding-right:10px; margin-left:50px"></a> 
			 
			&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;
			 <span style="float:center">Scottish SMEs Climate Pledge</span>
		</div>
		
		<!--Nav Bar-->
        <nav class="nav-bar-1">
            <div class="nav-wrapper" style="font-size:30px">
				
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="left hide-on-med-and-down" style="margin-left:100px;  ">
					<li><a href="Index.php" >Home</a></li>
					<li><a href="Pledge.html">Pledge</a></li>
					<li><a href="About.html">About Us</a></li>
					<li><a href="Contact.php">Contact Us</a></li>
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
		
		<div class="col s13 col m6 col l3 animated slideInLeft">
			<div class="menu-block" >
				<div class="card card-cascade narrower" style= "; padding: 20px; background-color:#333333" >
					<h5 class=" white-text">Coronavirus (COVID-19) updates</h5>
					<h6 class=" white-text"> For the latest information and advice see: <a href="https://www.bmj.com/coronavirus">Coronavirus updates</a></h6>
					 
				</div>
			 
		
		 
			 
				<div class="card card-cascade narrower" style= "; padding: 20px; background-color:#333333" >
					<div class="card card-cascade   " ><br>
							<h4 class="center light-blue-text"><b>Edinburgh Science</b></h4>
							 
							<p style= "font-size: 18px; Text-align:Justify; padding-right:15px; padding-left:15px">
							Edinburgh Science is an educational Charity that stages science festivals and educational programmes <a href="https://www.sciencefestival.co.uk"> www.sciencefestival.co.uk</a>  . <br>
							Since April 2019, it has been running a series of high-level round table meetings for directors of businesses, government entities, 
							NGOs and researchers in the Universities. This was stimulated by a visit to the festival by Christiana Figueres, the former Secretary 
							of the IPCC at the time of the Paris Climate Agreement. <br>The aim of these meetings is to mobilise Scottish businesses to take bold and urgent action to reduce their carbon and environmental impacts.<br>
							We believe that the pledge would be a tool for SMEs to assess their carbon footprint with guidance on how to act to reduce their impacts.

							</p>
					   </div> 
				</div>
			</div>
		 
		</div> 	 
 
		<div class="row" style="margin-bottom:0px">
			
						 
                <!-- Menu Section -->
				<div class=" col lg8 col l7 animated zoomIn">
					<div class="menu-block">
						<div class="card card-cascade   "  style= " padding: 20px; Text-align:Justify">
							<h4 class="center light-blue-text"><b>Carbon Footprint</b></h4>
							<div style= " padding-right:80px;; padding-left:80px; ">
							<img class="hoverable responsive-img" src="images/Carbon4.jpg" style="  width:80%;  ">
							</div>
							<p style = "font-size: 18px;">
							<b>A Carbon Footprint can be defined as a measure of:</b><br>
							"The total greenhouse gas emissions caused directly and indirectly by a person, organisation, event or product". The GHG emissions required to be measured under a carbon footprint were also set out under the Kyoto Protocol: Carbon Dioxide, Methane, Nitrous Oxide, Sulphur Hexafluoride, Hydrofluorocarbons (HFCs), Perfluorocarbons (PFCs) to an equivalent of Carbon dioxide.
							Carbon Footprint calculations is an emerging important tool for greenhouse gas management which has been commercialised in different areas of the economy and life.<b> At a minimum, all companies should know their carbon footprint, take steps at the next level to reduce emissions and calculate the costs per ton to make those reductions.</b> 

							</p>
							 <h5 class="center"><a href="Carbon Footprint.html" class="waves-effect waves-light btn">Read Further</a></h5>
					   </div>
					</div>
				</div>
				<div class=" col lg8 col l5 animated zoomIn">
					<div class="menu-block">
						<div class="card card-cascade   " style= " padding: 20px; Text-align:Justify" >
							<h4 class="center light-blue-text"><b>Low Carbon Activities</b></h4>
							<div style= " padding-right:60px;; padding-left:60px; ">
							<img class="hoverable responsive-img" src="images/Carbon1.jpg" style="Text-align:Justify; width:100%">
							</div>
							<p style = "font-size: 18px;">
							 
							<ul>
								<li><b>1. Energy Management</b></li>
								<li> 	Set an Energy Efficiency target and Do an Energy Assessment.</li>
								<li> 	Install Sub-metering</li>
								<li> 	Turn off electrical switch after use.</li>
							 </ul>
							 



							
							<b>A Carbon Footprint can be defined as a measure of:</b><br>
							"The total greenhouse gas emissions caused directly and indirectly by a person, organisation, event or product". The GHG emissions required to be measured under a carbon footprint were also set out under the Kyoto Protocol: Carbon Dioxide, Methane, Nitrous Oxide, Sulphur Hexafluoride, Hydrofluorocarbons (HFCs), Perfluorocarbons (PFCs) to an equivalent of Carbon dioxide.
							Carbon Footprint calculations is an emerging important tool for greenhouse gas management which has been commercialised in different areas of the economy and life.<b> At a minimum, all companies should know their carbon footprint, take steps at the next level to reduce emissions and calculate the costs per ton to make those reductions.</b> 

							</p>
							 
							<br>
							<h5 class="center"><a href="Carbon Footprint.html" class="waves-effect waves-light btn">Read Further</a></h5>
					   </div>
					</div>
				</div>
		</div>		 
			 
        <div class="row">
            <div class="section">
                <!-- Menu Section -->
				<div class=" col lg8 col l4 animated zoomIn">
					<div class="menu-block">
						<div class="card card-cascade   " >
							<h5 class="center light-blue-text"><b>Measuring a Carbon Footprint</b></h5>
							<img class="hoverable responsive-img" src="images/About.jpg" style="Text-align:Justify; width:100%">
							<h5> A Corporate Accounting and Reporting Standard. 
							Due to the slight differences in the reporting processes between each guideline, it is our recommendation that Edinburgh Science base all educational tool elements off the following protocol.
							</h5>
							<br>
							<h5 class="center"><a href="Carbon Footprint.html" class="waves-effect waves-light btn">Read Further</a></h5>
					   </div>
					</div>
				</div>
				<div class="col s16 col m8 col l4 animated zoomIn">
					<div class="menu-block">
						<div class="card card-cascade narrower">
							<h5 class="center light-blue-text"><b>General Action & Education</b></h5>
							<img class="hoverable responsive-img" src="images/research1.jpg" style="Text-align:Justify; width:100%">
							<h5>The rising demand for greenhouse gas measurements has led to the development of many tools and consultancies that can be used to assess efficiently and quantitatively the environmental impact each company produces.  
							<br><br>
							<h5 class="center"><a href="Education.html" class="waves-effect waves-light btn">Read Further</a></h5>
					   </div>
					</div>
				</div>
				
				<div class="col s16  col m8 col l4 animated zoomIn">
					<div class="menu-block">
						<div class="card card-cascade narrower">
							<h5 class="center light-blue-text"><b>Educational Tools</b></h5>
							<img class="hoverable responsive-img" src="images/1.jpg" style="Text-align:Justify; width:100%">
							<h5>SMEs act as an important part in the transition to low-carbon economy, but generally lack information on emission reduction, along with methods to achieve the reduction target, and many kinds of opportunities like technology and money saving within the process. </h5>
						
							<h5 class="center"><a href="Education.html" class="waves-effect waves-light btn">Read Further</a></h5>
							 
					   </div>
					</div>
				</div>
  
            </div>
 
        </div>
         
        <!-- Footer -->
        <footer class="footer-1 page-footer">
             <div  style = "  padding-left:100px;">
              <div class="row">
                <div class="col 16 s12 m4">
                  <h5 class="white-text">EDSG9 Consulting Group </h5>
                  <p class="grey-text text-lighten-4">Researching into the Creation of a New Initiative Designed to Persuade and Help Businesses Take Bold Action to Drive Down their Carbon Emissions</p>
                </div>
                
				<div class="col 6 s6 m2">
                  <a href="Index.php"><h5 class="white-text">Home</h5></a> 
				  <a href="Article.html"><h6 class="white-text">Pleadge</h6></a>
				  <a href="About.html"><h6 class="white-text">About Us</h6></a> 
				  <a href="Contact.php"><h6 class="white-text">Contact Us</h6></a>
				 
                </div>
				<div class="col 5 s6 m2">
                  <h5 class="white-text">Address</h5>
                  <ul>
                    <li>University of Edinburhg</li>
                    <li>Edimbourge</li>
                    <li>United Kingdom</li>
                  </ul>
                </div>
                <div class="col l3 s6 m3">
                  <h5 class="white-text">Contact</h5>
                  <ul>
                    <li>info@EDSG9Consultinggroup.com</li>
                   
                  </ul>
                </div>
				<div class="col l3 s6 m3">
                   <a href="logout.php?logout=true" class="white-text" >SIGN OUT</a>
                   
                </div>
              </div>
            </div>
            <div class="footer-2 footer-copyright">
              <div class="container">
				 
                  © 2020 Copyright: <a href="https://www.EDSG9Consultinggroup.com">EDSG9 Consulting Group </a>  
              </div>
           
            </div>
        </footer>
        <script type="text/javascript" src="js/jquery.js"></script>
         <script src="materialize/js/materialize.min.js"></script>
        <script src="js/scrol.js"></script>
		 <script src="js/jquery.min.js"></script>
		   
		<script>
          $(".button-collapse").sideNav();
         $('.collapsible').collapsible();
         });
          $('.carousel.carousel-slider').carousel({fullWidth: true});
            
        </script>
    </body>    
</html>