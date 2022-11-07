
<?php
session_start();  
$id=$_POST[''];
$university=$_POST['university-name'];
$location=$_POST['Location'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=md5($_POST['password']);

require_once("dbconfig.php");

$sql = "INSERT INTO supervisors (ID, university, location, fname, lname, email, password) VALUES ('$id','$university','$location','$fname','$lname' ,'$email' ,'$password')";

if($conn->query($sql)===TRUE) {
		echo "New record created successfully";
		
	  $sql=mysqli_query($conn,"select * from supervisors where email='$email'");  
	  $row=mysqli_fetch_assoc($sql);  
      $_SESSION['USER_ID']=$row['ID'];  
           $_SESSION['USER_NAME']=$row['fname']; 
		   $_SESSION['USER_lNAME']=$row['lname'];  
		   $_SESSION['USER_join']=$row['JoinT']; 
		   $_SESSION['email']=$row['email'];
		   $_SESSION["login"]="OK";
		   $_SESSION['user']="Supervisor";

	 header("location: supervisor-main.php");
            // next code block
        }else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

//close conn
mysqli_close($conn);



?>