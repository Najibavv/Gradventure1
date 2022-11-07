<?php 
//this code cintaines the blocks of html that I want to be repeated based on the number of projects 

//my function is for displaying the projects
function myfunction($pname, $summary, $added_date, $catagory,$id, $describtion , $sid, $image, $link){
  // after this next, plain HTML
  ?>
  
  <!-- more HTML code here -->
  <div class="ad-listing-list mt-20">
    <div class="row p-lg-3 p-sm-5 p-4">
        <div class="col-lg-4 align-self-center">
            <a href="<?php echo $link ?>">
                <img src="./Images/Projects/<?php echo $image ?>" class="img-fluid" alt="">
            </a>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="ad-listing-content">
                        <div>
                            <a href= " <?php echo $link ?> " class="font-weight-bold"><?php echo $pname?></a>
                        </div>
                        <ul class="list-inline mt-2 mb-3">
                            <li class="list-inline-item"><a href="category.html"> <i class="fa fa-folder-open-o"></i> <?php echo $catagory ?></a></li>
                            <li class="list-inline-item"><i class="fa fa-calendar"></i> <?php echo $added_date?></a></li>
                        </ul>
                        <p><?php echo $summary ?></p>
						
						
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
					    <form action="projects-list-view.php" method="post">
						
						<button data-toggle="tooltip" data-placement="top" type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3" title="Add to favorite" name="add"><i class="bi bi-bookmark-heart"></i></button>				 
						 <input type='hidden' name='project_id' value='<?php echo $id ?>'>
						  <input type='hidden' name='project_name' value='<?php echo $pname ?>'>
						  <input type='hidden' name='project_catagory' value='<?php echo $catagory ?>'>
						  <input type='hidden' name='project_image' value='<?php echo $image ?>'>
						  <input type='hidden' name='project_link' value='<?php echo $link ?>'>
						
						</form>						
                </div>
            </div>
        </div>
    </div>
</div>
  <?php   
return;
}
//myfave is to show the projects thats been favoried 
function myfav($id,$pname,$image ,$catagory,$link){
  // after this next, plain HTML
  ?>
  
  <!-- more HTML code here -->
  <div class="widget dashboard-container my-adslist">
		
          
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Project Title</th>
                <th class="text-center">Category</th>
				<th class="text-center">Action</th>
              
              </tr>
            </thead>
            <tbody>
              <tr>

                <td class="product-thumb">
                  <img width="90px" height="auto" src="./Images/Projects/<?php echo $image ?>" alt="image description"></td>
                <td class="product-details">
				<a href= " <?php echo $link ?> " class="font-weight-bold"><?php echo $pname?></a>
                 
                  <span class="add-id"><strong>Porject ID:</strong>  <?php echo $id ?></span>
                  
                </td>
                <td class="product-category"><span class="categories"><?php echo $catagory?></span></td>
				
                <td class="action" data-title="Action">
				<form action="projects-list-view.php" method="post">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
<button data-toggle="tooltip" data-placement="top" title="view" class="d-block btn bg-primary text-white border-0 rounded font-weight-bold mt-3"type="button" onclick="window.location.href='<?php echo $link ?>'">
 <i class="fa fa-eye"></i></button>
                      </li>
                    
                      <li class="list-inline-item">
					   <button  data-toggle="tooltip" data-placement="top" title="Delete" name= "remove" type="submit" class="d-block btn bg-primary text-white border-0 rounded font-weight-bold mt-3">
						<input type='hidden' name='project_id' value='<?php echo $id ?>'>
                          <i class="fa fa-trash"></i>
						  
                        </button>
                       
						  
                      </li>
					  
						
						
                    </ul>
					</form>	
                  </div>
                </td>
              </tr>
              
              
            </tbody>
          </table>

        </div>
  <?php   
  // .. some more PHP stuff
return;
}

?>

<?php
require_once('dbconfig.php'); 

 $sql = "SELECT * FROM Projects WHERE catagory ='Application'";

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    
 }
 
 $query = "SELECT * FROM Projects WHERE catagory ='IoT'";
 
if ($result = mysqli_query($conn, $query)) {

    // Return the number of rows in result set
    $Iotcount = mysqli_num_rows( $result );
    

 }
 
  $query1 = "SELECT * FROM Projects WHERE catagory ='website'";
 
if ($result = mysqli_query($conn, $query1)) {

    // Return the number of rows in result set
    $webcount = mysqli_num_rows( $result );
    
 }
 
 
 
  $query2 = "SELECT * FROM Projects WHERE university ='UOH'";
 
if ($result = mysqli_query($conn, $query2)) {

    // Return the number of rows in result set
    $uohcount = mysqli_num_rows( $result ); 
    
 }
 
  $query3 = "SELECT * FROM Projects WHERE university ='UQU'";
 
if ($result = mysqli_query($conn, $query3)) {

    // Return the number of rows in result set
    $uqucount = mysqli_num_rows( $result );
   
 }
 
 $query4 = "SELECT * FROM Projects WHERE university ='IAU'";
 
if ($result = mysqli_query($conn, $query4)) {

    // Return the number of rows in result set
    $iaucount = mysqli_num_rows( $result );   
  
 }
 
 $query5 = "SELECT * FROM Projects";
 
if ($result = mysqli_query($conn, $query5)) {

    // Return the number of rows in result set
    $projectcount = mysqli_num_rows( $result );
      
 }
 
?>