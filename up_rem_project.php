<?php
error_reporting(0);
session_start();
//you need this piece of code to understand whats going on
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  // Create database connection
 include('dbconfig.php');

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
	$pname= $_POST['pname'];
	$uni= $_POST['university'];
	$catagory= $_POST['catagory'];
	$summary= $_POST['summary'];
	$sid= $_SESSION['USER_ID'];
	
  	// Get text
  	$image_des = mysqli_real_escape_string($conn, $_POST['describtion']);

  	// image file directory
  	$target = "Images/".basename($image);

  	$sql = "INSERT INTO projects (pname ,sid ,university, catagory, summary, image, describtion) VALUES ('$pname','$sid','$uni','$catagory','$summary','$image','$image_des')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
		  echo '<script>alert("Project uploaded successfully")</script>';
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($conn, "SELECT * FROM projects");
	
	//when we remove a project 
	
	if(isset($_POST['remove'])){
	$sid= $_SESSION['USER_ID'];
$pid=$_POST['project_id'];


$sql="DELETE FROM projects WHERE id='$pid' AND sid='$sid'";
      $res = mysqli_query($conn,$sql);
	  echo $pid;
	 // echo $investorID;
              echo "<script>alert('Project has been Removed...!')</script>";
              echo "<script>window.location = 'supervisor-main.php'</script>";
         
      }
	


?>