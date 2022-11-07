

<?php 

//this code cintaines the blocks of html that I want to be repeated based on the number of projects 

//my function is for displaying the projects
function project($pname, $image2, $added_date, $catagory,$id, $describtion , $sid, $image, $link, $university){
  // after this next, plain HTML
  
  
  ?>
  
  <!-- more HTML code here -->
  <div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<h1 class="projetc-title"><?php echo $pname ?></h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href=""> <?php echo $university ?></a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href=""> Application</a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a> Makkah</a></li>
						</ul>
					</div>

			

					<div class="content mt-5 pt-5">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
								 aria-selected="true">Project Details</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
								 aria-selected="false">Specifications</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
								 aria-selected="false">Statics</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Projet Description</h3>
								<p><br><br></p>

								<img class="card-img-top img-fluid" src="./Images/<?php echo $image2?>" alt="image for budgrowth interfaces">
								<p></p>
								<p><?php echo $describtion ?></p>

							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">Project Specifications</h3>
								<table class="table table-bordered product-table">
									<tbody>
										<tr>
											<td>Framework</td>
											<td>not used</td>
										</tr>
										<tr>
											<td>Users</td>
											<td>drivers and trackers</td>
										</tr>
										
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">Project Review</h3>
								<div >
									<div class="media">
										<!-- Avater -->
										<img src="" alt="not found">
										
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4>Price</h4>
						<p>10,000 SAR</p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<i class="fa fa-users" aria-hidden="true"></i>
						<br><br>
						<h4><a href="" target="_blank">Dr. Tariq Fahad Aljabr</a></h4>
					
						<p class="team-members" align="center">Team members:<br>
Osama Ghazai Almatrafi<br>
Abdulmajed Ali Alganawi</p>
						<ul class="list-inline mt-20">
						<a>For more information contact the supervisors</a>
						<br><br>
							<li class="list-inline-item"><a href="" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contact</a></li>
							
						</ul>
					</div>
				
				

				</div>
			</div>

		</div>
	</div>
  <?php   
return;
}

  ?>