 <?php   

//myfave is to show the projects thats been favoried 
function myproject($id,$pname,$image ,$catagory,$link){
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
				<form action="up_rem_project.php" method="post">
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