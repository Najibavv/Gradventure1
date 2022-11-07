<!DOCTYPE html>
<html lang="en">
<head>

   <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cookie Notice</title>
  
  <!--for the tab logo-->
  
  <link href="./Images/logo.svg" rel="shortcut icon">
  
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
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
						<img src="images/Asset 5.png" alt="">
						
						
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
								<a class="nav-link add-button" href="investor-register-Form.php">Register</a>
							</li>
							
						</ul>
						<?php 
						
   } ?>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>



<!--================================
=            Page Title            =
=================================-->
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3>Cookie Notice</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto p-0">
               <div class="terms-condition-content">
                <h3 class="py-3">Cookie notice</h3>
				<p><span class="font-weight-bold text-dark">“Cookies” are small text files that a website saves on your computer or mobile device when you visit the site. Cookies enables the website to remember your actions and preferences over a period of time, so you don’t have to keep re-entering them whenever you come back to the site or browse from one page to another. </p>
                <h5 class="py-3">How do we use cookies? </h5>
                <p><span class="font-weight-bold text-dark">We use cookies to facilitate your interaction with our website, enhance your user experience, and analyze and improve our services.</p>
                <p>Our cookies are classified as follows:<br> 
				<p><span class="font-weight-bold text-dark">Cookies that are absolutely necessary.</span><br> Some cookies will be strictly necessary for our website to function properly.Cookies that record whether or not you have consented to the use of cookies are included in this category.
Strictly necessary cookies are not subject to your consent, and unless you limit the use of cookies by adjusting your web browser preferences, using our website will include the use of strictly necessary cookies.
You can limit the use of strictly necessary cookies by adjusting your web browser preferences, but this may have an impact on the functionality of our website. </p>
                <p><span class="font-weight-bold text-dark">• Cookies that improve performance:</span> They enable us to recognize and count the number of visitors as well as see how visitors navigate our website while using it.
This allows us to improve the functionality of our website, such as ensuring that users can easily find what they are looking for. </p>
<p><span class="font-weight-bold text-dark">• Cookies that are targeted:</span> These cookies track your visit to our website, including the pages you view and the links you click.
We will use this information to make our website and the advertising displayed on it more relevant to your interests.
This information may also be shared with third parties for this purpose. </p>
			  </div>
            </div>
        </div>
    </div>
</section>





<!--============================
=            Footer            =
=============================-->

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
            <li><a href="contact-us.php">Contact us</a></li>
           
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

 
  
  
</body>

</html>