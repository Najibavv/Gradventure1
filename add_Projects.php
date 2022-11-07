<?php

error_reporting(0);

session_start();

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST['add'])){
	 $pid=$_POST['project_id'];
	 $pname;
	 $image;
	 $catagory;
	$investorID=$_SESSION['USER_ID'];
	

 
$query = "SELECT * FROM favoriteproject WHERE investorID='$investorID' AND pid='$pid'";
$res = mysqli_query($conn,$query);
$data= mysqli_fetch_array($res); 

if($data[0] >= 1){
    // account exists 
            echo "<script>alert('Project is already favoried..!')</script>";
            echo "<script>window.location = 'projects-list-view.php'</script>";
        }else{

   
		$pid=$_POST['project_id'];
		$image=$_POST['project_image'];
		$pname=$_POST['project_name'];
		$catagory=$_POST['project_catagory'];
		$link=$_POST['project_link'];
		
		   $sql= "INSERT INTO favoriteproject (pid, investorID,pname, image, catagory,link) VALUES ('$pid','$investorID','$pname','$image','$catagory','$link')";
						  $res = mysqli_query($conn,$sql);
	 
        

    }
	}
	
	if(isset($_POST['remove'])){
	$investorID=$_SESSION['USER_ID'];
$pid=$_POST['project_id'];


$sql="DELETE FROM favoriteproject WHERE pid='$pid' AND investorID='$investorID'";
      $res = mysqli_query($conn,$sql);
	  echo $pid;
	 // echo $investorID;
              echo "<script>alert('Project has been Removed...!')</script>";
              echo "<script>window.location = 'investor-favorite.php'</script>";
         
      }
	


?>