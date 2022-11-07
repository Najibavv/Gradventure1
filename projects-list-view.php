<?php 
require_once('dbconfig.php');
require_once('try.php');
require_once('add_Projects.php');


 
?>

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
<!--forces css to work-->
<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  </head>
  
  <body class="body-wrapper">
  
  <section>
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="">
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
									<a class="dropdown-item">Websites and applications</a>
									<a class="dropdown-item" href="projects-list-view.php">All projects</a>
									
								</div>
							</li>
							
							
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="user-profile.php">My profile</a>
							</li>
							
							
							
							 <button class=" navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
		   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            
            <div class="navbar-nav">
                <a href="investor-favorite.php" class="navbar-nav ml-auto mt-10 nav-item active">
                    <p class="nav-link login-button">
                        <i class="bi bi-bookmark-heart-fill"></i> Favorite Projects
						
                 

                    </p>
                </a>
            </div>
        </div>
							
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>
</section>
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					<form action="projects-list-view.php" method="post" >
						<div class="form-row">
							<div class="form-group col-md-4">
							
								<input type="text" class="form-control my-2 my-lg-0" id="inputCategory4" name="catagory" placeholder="Category" required>
							</div>
						
							<div class="form-group col-md-4">
 <select class="form-select-lg input-sm"   name="university-name">
      <option value="uoh">Hail University</option>
      <option value="uqu">Umm Al-Qura University</option>
	  <option value="iau">Imam Abdulrahman Bin Faisal University</option>
	  
</select>
								
							</div>
							<div class="form-group col-md-2">

								<button type="submit" name="search" class="btn btn-primary">Search Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>All Projects</h2>
					<p><?php echo $projectcount ?> Results</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h5 >All Categoris</h5>
	<ul class="category-list">
		<li><a href="category.html">Applications <span> <?php echo $rowcount ?></span></a></li>
		<li><a href="category.html">Websites <span> <?php echo $webcount ?></span></a></li>
		<li><a href="category.html">IoT<span> <?php echo $Iotcount ?></span></a></li>
		
	</ul>
</div>

<div class="widget category-list">
	<h5>Universities</h5>
	<ul class="category-list">
		<li><a href="category.html">Hail University <span><?php echo $uohcount ?></span></a></li>
		<li><a href="category.html">Um Alqura University<span><?php echo $uqucount ?></span></a></li>
		<li><a href="category.html">Imam Abdulrahman Bin Faisal University<span><?php echo $iaucount ?></span></a></li>
	</ul>
</div>


				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Sort</strong>
							<select>
								<option>Most Recent</option>
								<option value="1">Most Popular</option>
								
							</select>
						</div>
						
					</div>
					
				</div>

				<!-- project listing list  -->
				
<?php

if(isset($_POST['search'])){
	
$uni=$_POST['university-name'];
$catagory=$_POST['catagory'];

$sql= "SELECT * FROM projects WHERE catagory='$catagory' AND university='$uni'";

$result = $conn->query($sql);
$num=mysqli_num_rows($result);  
      if ($num>0){ 
                while ($row = mysqli_fetch_assoc($result)){ 
				
                    myfunction($row['pname'], $row['summary'], $row['added_date'], $row['catagory'], $row['id'], $row['describtion'], $row['sid'], $row['image'], $row['page']);
					
                }
					
				}else{
					   echo "<script>window.location = '404.php'</script>";
				}
				 
				}else{
             
			   $sql = "SELECT * FROM Projects";
$result = $conn->query($sql);
                while ($row = mysqli_fetch_assoc($result)){ 
				
                    myfunction($row['pname'], $row['summary'], $row['added_date'], $row['catagory'], $row['id'], $row['describtion'], $row['sid'], $row['image'], $row['page']);
					
                }}
	
            ?>
			
                    
                 
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

<script src="js/script.js"></script>

 
  
  
</body>

</html>
