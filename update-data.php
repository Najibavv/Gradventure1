<?php 

//here is what happend when the user updates his/her data
require_once('dbconfig.php');

session_start();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$id=$_SESSION['USER_ID'];
$email=$_POST['email'];
$user=$_SESSION['user'];

if (isset($_POST['save'])){
	
	//check if the user is supervisors or investor 
	if($user=="investor"){
		
	if(!(empty($fname))){
		
		$sql= "UPDATE investor SET fname = '$fname'
WHERE id = '$id'";

 $res = mysqli_query($conn,$sql);
	echo "<script>alert('Data updated login again to see changes')</script>";	
	 echo "<script>window.location = 'user-profile.php'</script>";
		
	}
	
	if(!(empty($lname))){
		
		$sql= "UPDATE investor SET lname = '$lname'
WHERE id = '$id'";

 $res = mysqli_query($conn,$sql);
	echo "<script>alert('Data updated login again to see changes')</script>";	
	 echo "<script>window.location = 'user-profile.php'</script>";
		
	}
	
		if(!(empty($email))){
		
		$sql= "UPDATE investor SET email = '$email'
WHERE id = '$id'";

 $res = mysqli_query($conn,$sql);
	echo "<script>alert('Data updated login again to see changes')</script>";	
	 echo "<script>window.location = 'user-profile.php'</script>";
		
	}
	
	
	
	else{
		echo "<script>alert('please fill in the fields to update')</script>";
 echo "<script>window.location = 'user-profile.php'</script>";		
	}
	
//else it must mean that the user is a supervisor 


	}
	
	
	if($user=="supervisor"){

			if(!(empty($fname))){
		
		$sql= "UPDATE supervisors SET fname = '$fname'
WHERE id = '$id'";

 $res = mysqli_query($conn,$sql);
	echo "<script>alert('Data updated login again to see changes')</script>";	
	 echo "<script>window.location = 'supervisor-main.php'</script>";
		
	}
	
	if(!(empty($lname))){
		
		$sql= "UPDATE supervisors SET lname = '$lname'
WHERE id = '$id'";

 $res = mysqli_query($conn,$sql);
	echo "<script>alert('Data updated login again to see changes')</script>";	
	 echo "<script>window.location = 'supervisor-main.php'</script>";
		
	}
	
		if(!(empty($email))){
		
		$sql= "UPDATE supervisors SET email = '$email'
WHERE id = '$id'";

 $res = mysqli_query($conn,$sql);
	echo "<script>alert('Data updated login again to see changesll')</script>";	
	 echo "<script>window.location = 'supervisor-main.php'</script>";
		
	}
		
		echo "<script>alert('please fill in the fields to update')</script>";
		 echo "<script>window.location = 'user-profile.php'</script>";
	
	}

	
}

?>