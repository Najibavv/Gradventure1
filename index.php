<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gradventure</title>
  
  <!--for the tab logo-->
  
  <link href="./Images/logo.svg" rel="shortcut icon">
  
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Bootstrap Font Icon CSS -->
	<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>
  
  <body class="body-wrapper">
  
  <section>
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.php">
						<img src="./Images/Asset 5.png" alt="">
						
						
					</a>
				
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
			
						
							
							
						</ul>
							<?php
session_start();
  if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
    
   
?>

						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="login.php">Login</a>
							</li>
							

							<li class="nav-item">
								<a class="nav-link add-button" href="investor-register.php">Register</a>
							</li>
							
						</ul>
						<?php 
						
   }else{ 
    

	   ?>
	 <li class="nav-item">
								<a class="nav-link login-button" href="user-profile.php">My profile</a>
							</li>
	   
   
   
   <?php 
   }
   
   ?>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>




<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				
				<div class="content-block">
					<h1>Invest in promising projects</h1>
					<p>Join the millions who invest in great projects <br> by students around Saudi Arabia Universities</p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
	
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#"><i class="bi bi-cpu"></i> AI</a></li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-grav"></i> IoT</a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-edge"></i> Websites</a>
							</li>
						
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-mobile"></i> Applications</a>
							</li>
						</ul>
					</div>
					
					
				</div>
				
	</div>
	<!-- Container End -->
</section>


<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Projects</h2>
					<p>To view more information kindly sign up</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			
			<a href="ProjectInfo.php">
				<img class="card-img-top img-fluid" src="./Images/Projects/budsGrowth.png" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="ProjectInfo.html">Buds Growth</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Lifestyle</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>2021</a>
		    	</li>
				
				<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-graduation-cap"></i>Hail University</a>
		    	</li>
				
		    </ul>
		    <p class="card-text">Parenting is an important part of life in a family structure. Parent engagement is a term used 
to describe parents' involvement in all aspects of their children's education and development, 
based on the assumption that parents are their children's primary influence.
</p>
		   
		</div>
	</div>
</div>



					</div>
					
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
		
			<a>
				<img class="card-img-top img-fluid" src="./Images/Projects/bus.png" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a>IoT based School Bus Tracking System</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-folder-open-o"></i>Transportation</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-calendar"></i>2020</a>
		    	</li>
				
				<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-graduation-cap"></i>imam abdulrahman bin faisal University</a>
		    	</li>
		    </ul>
		    <p class="card-text">This project is dedicated to being a contribution in community service it targets 
transportation in the education sector in order to provide a convenient environment 
for the students.</p>
		   
		</div>
	</div>
</div>

</div>
					
					<div class="col-sm-12 col-lg-4">
						<!-- project card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			
			<a>
				<img class="card-img-top img-fluid" src="./Images/Projects/Intra.png" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a>IntraTeach</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-folder-open-o"></i>Education</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-calendar"></i>26th December</a>
		    	</li>
				<li class="list-inline-item">
		    		<a><i class="fa fa-graduation-cap"></i>imam abdulrahman bin faisal University</a>
		    	</li>
		    </ul>
		    <p class="card-text">The research management system is a customized system requested by the research 
committee in the College of Public Health to fulfil their needs and requirements. </p>
		    
		</div>
	</div>
</div>



					</div>
					<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			
			<a>
				<img class="card-img-top img-fluid" src="./Images/Projects/carAcc.png" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a>Accident trackers application</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-folder-open-o"></i>Roads</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-calendar"></i>2021</a>
		    	</li>
				
				<li class="list-inline-item">
		    		<a><i class="fa fa-graduation-cap"></i>Umm Al-Qura University</a>
		    	</li>
				
		    </ul>
		    <p class="card-text">In Saudi Arabia, people who have car accidents are required to follow some procedures in order to claim a compensation from the car insurance company if car accident occurred. Unfortunately, 
			these procedures are not well known or clear for most people, which results in wasting their time, and effort. 
			This motivates us to propose a system that would facilitate and accelerate the process of making a claim for a compensation. 
			This was the motivative to develop this system.
</p>
		    
		</div>
	</div>
</div>

				</div>
			</div>
			
			
		</div>
	</div>
</section>

  <section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Looking to add your students project?</h2>
					<p>Please <a class="" href="supervisor-register-form.php"><b> Register!</b></a></p>
				</div>
				<div class="row">
					<!-- Category list -->
				 
					
				
					
					
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--====================================
=            Call to Action            =
=====================================-->

<section class="call-to-action overly bg-3 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					<h2>Invest in promicing youth</h2>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="./Images/gradventure.svg" alt="">
          <!-- description -->
          <p class="alt-color">Invest in well-vetted senior projects.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Company</h4>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Meet the team</a></li>
            <li><a href="contact-us.html">Contact us</a></li>
           
          </ul>
        </div>
      </div>
    
	  
	  <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Legal</h4>
          <ul>
                <li><a href="privacyPolicy.php">Privacy Policy</a></li>
			<li><a href="cookie-notice.php">Cookie Notice </a>
			<li><a href="terms-condition.php">Terms and conditions</a></li>
            </li>


 </ul>
 
        </div>
      </div>
      
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, by <a class="text-primary" href="https://www.linkedin.com/in/najiba-jarraf/" target="_blank">Najiba Jarraf</a></p>
        </div>
		</div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-twitter" href="https://twitter.com/gradventure98" target="_blank"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  
	  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->

<script src="js/script.js"></script>

 
  
  
</body>

</html>
