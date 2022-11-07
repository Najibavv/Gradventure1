<?php 
session_start();  
require_once("dbconfig.php");
  
  if (isset($_POST['registerBtn'])){
	//   $id = $_POST[''];
	  $fname = $_POST['fname'];
	  $lname = $_POST['lname'];
	 $email = $_POST['email'];
  	  $password = md5($_POST['password']);
 
  	//check if registered 
$query = "SELECT * FROM investor WHERE email LIKE '$email'";
$res = mysqli_query($conn,$query);
$data= mysqli_fetch_array($res); 

if($data[0] >= 1 ){
    // account exists 
  $email_error = "Sorry... email already taken"; 
		echo '<script>alert("Sorry... email already taken")</script>';
    
}else{ // create account

$sql = "INSERT INTO investor( email, password, fname, lname) VALUES ('$email','$password','$fname','$lname')";
$res = mysqli_query($conn,$sql); 
 
      $_SESSION['USER_ID']=$id;  
	  $_SESSION['USER_NAME']=$fname; 
	  $_SESSION['USER_lNAME']=$lname; 
	  $_SESSION['email']=$email; 
	  $_SESSION['user']='investor';
	  $_SESSION["login"]='OK';
	   $_SESSION['USER_join']=$row['JoinT']; 
	   
	   header("location:projects-list-view.php");  
	  
	  }  

}

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  
  <!--for the tab logo-->
  
  <link href="Images\logo.svg" rel="shortcut icon">
  
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


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



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
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="login.php">Login</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link add-button" href="investor-register.php">Register</a>
							</li>
							
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<section class="login py-5 border-top-1 bg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h4 class="bg-blue p-4">Register Now</h4>
											<h6 class="  px-2 ">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition.html">Terms & Conditions</a></h6>
                    <form action="investor-register.php" method="POST">
                        <fieldset class="p-4">
						<input type="first name" placeholder="first name" class="border p-3 w-100 my-2" name="fname" required>
                           <input type="last name" placeholder="last name" class="border p-3 w-100 my-2"name="lname" required>
						   
                           <input type="email" placeholder="Email*" class="border p-3 w-100 my-2" name="email" required>
      	
      
                           
                                <input type="password" placeholder="Password*" class="border p-3 w-100 my-2" name="password" required>
							
								
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3" name="registerBtn">Register</button>
                            <h6 class="mt-3 d-inline-block text-primary"> Register Now as a <a  href="supervisor-register-form.php"> Supervisor</a> </h6>
                        </fieldset>
                    </form>
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
