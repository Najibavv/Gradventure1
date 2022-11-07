<?php 
require_once('dbconfig.php');
require_once('try.php');
require_once('add_Projects.php');

function project(){
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
}


?>