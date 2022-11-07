<?php
require_once('try.php');
require_once('dbconfig.php');
session_start();
require_once('try.php');
require_once('try2.php');
//require_once('projects-list-view.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Page</title>
  
  <!--for the tab logo-->
  
  <link href="./Images/logo.svg" rel="shortcut icon">
  
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  	<!-- Bootstrap CSS -->

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
<!--forces css to work-->
<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  </head>
  
  <body class="body-wrapper">
  
  <section>
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand">
						<img src="./Images/Asset 5.png" alt="">
						
						
					</a>
				
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
			
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Browse Projects <span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" >AI</a>
								
									<a class="dropdown-item" >Websites and Applications</a>
										<a class="dropdown-item" href="projects-list-view.php">All Projects</a>
									
								</div>
							
							
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link logout-button" href="logout.php">Logout</a>
							</li>
							
							
							
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>



<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
        <div class="sidebar">
          <!-- User Widget -->
          <div class="widget user-dashboard-profile">
            <!-- User Image -->
		
            <div class="profile-thumb">
              <img src="./Images/user.jpg" alt="">
            </div>
            <!-- User Name -->
            
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            
            
              <h5 class="text-center"><?php echo $_SESSION['USER_NAME']; ?> 
						<?php echo $_SESSION['USER_lNAME']; ?>
						</h5>
				
            <p>Joined <?php echo $_SESSION['USER_join']; ?> </p>
			
			<a href="user-profile.php" class="btn btn-main-sm">Edit Profile</a>
			</div>
            
          </div>
          <!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li class="active"><a href="dashboard-my-ads.html"> <i class="bi bi-bookmark-heart-fill"></i> My Favorite Projects </a> </li>
            
			   <li><a href="dashboard-pending-ads.html"><i class="bi bi-send-plus-fill"></i> Messages<span>2</span></a></li>
             
				  
            </ul>
          </div>


        </div>
      
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Recently Favorited -->
  
                 
                <h3><i class="bi bi-bookmark-heart"></i> Favorite Projects</h3>  
                  <br />   
   
                          
                          <?php  
		$investorID=$_SESSION['USER_ID'];
						
			   $query = "SELECT * FROM favoriteproject WHERE investorID='$investorID'";
$result = $conn->query($query);
                while ($row = mysqli_fetch_assoc($result)){ 
                       myfav($row['pid'], $row['pname'], $row['image'], $row['catagory'],$row['link']);      
                               } 
							   							   
                          ?>  
                         
                        
                
				
				 <!-- pagination -->
        <div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"> <a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				
				         
        <!-- pagination -->
				
           </div>	

       

      </div>
    </div>
    <!-- Row End -->
  
  
  <!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->

<!-- Footer Bottom -->
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

<script src="js/script.js"></script>

 
  
  
</body>

</html>
