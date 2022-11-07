<?php 
require_once('dbconfig.php');
if (isset($_POST['add'])){
	 $item_array;
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], 'project_id');


        if(in_array($_POST['project_id'], $item_array_id)){
            echo "<script>alert('Project is already favoried..!')</script>";
            echo "<script>window.location = 'projects-list-view.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
		
            $item_array = array(
                'project_id' => $_POST['project_id'] ,'project_name' => $_POST['project_name'],'project_catagory' => $_POST['project_catagory']
            );

//$num= $item_array['project_id'];
//echo $num; 
            $_SESSION['cart'][$count] = $item_array;
			 print_r($_SESSION['cart']);
			 
			 
        }

    }else{

        $item_array = array(
                'project_id' => $_POST['project_id'],'project_name' => $_POST['project_name'],'project_catagory' => $_POST['project_catagory']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
		
	//	$sql = "INSERT into favoriteproject WHERE pid= $item_array";
		
    }
	// print_r($_SESSION['cart']);
}

//search 

if(isset($_POST['search'])){
	
$uni=$_POST['university-name'];
$catagory=$_POST['catagory'];

$sql= "SELECT * FROM projects WHERE catagory='$catagory' AND university='$uni'";

if ($result = mysqli_query($conn, $sql)) {

	echo $catagory;
	
}else {
	echo "notfound";

}}

$sql = "SELECT * FROM Projects WHERE catagory ='Application'";

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
   // printf("Total rows in this table :  %d\n", $rowcount);
 }
 
 $query = "SELECT * FROM Projects WHERE catagory ='IoT'";
 
if ($result = mysqli_query($conn, $query)) {

    // Return the number of rows in result set
    $Iotcount = mysqli_num_rows( $result );
    
    // Display result
 //  printf("Total rows in this table :  %d\n", $Iotcount);
 }
 
  $query1 = "SELECT * FROM Projects WHERE catagory ='website'";
 
if ($result = mysqli_query($conn, $query1)) {

    // Return the number of rows in result set
    $webcount = mysqli_num_rows( $result );
    
    // Display result
 //  printf("Total rows in this table :  %d\n", $webcount);
 }
 
 
 
  $query2 = "SELECT * FROM Projects WHERE university ='UOH'";
 
if ($result = mysqli_query($conn, $query2)) {

    // Return the number of rows in result set
    $uohcount = mysqli_num_rows( $result );
    
    // Display result
 // printf("Total rows in this table :  %d\n", $uohcount);
 }
 
 
 
  $query3 = "SELECT * FROM Projects WHERE university ='UQU'";
 
if ($result = mysqli_query($conn, $query3)) {

    // Return the number of rows in result set
    $uqucount = mysqli_num_rows( $result );
    
    // Display result
 //  printf("Total rows in this table :  %d\n", $webcount);
 }
 
 $query4 = "SELECT * FROM Projects WHERE university ='IAU'";
 
if ($result = mysqli_query($conn, $query4)) {

    // Return the number of rows in result set
    $iaucount = mysqli_num_rows( $result );
    
    // Display result
 //  printf("Total rows in this table :  %d\n", $webcount);
 }
 
 $query5 = "SELECT * FROM Projects";
 
if ($result = mysqli_query($conn, $query5)) {

    // Return the number of rows in result set
    $projectcount = mysqli_num_rows( $result );
    
    // Display result
 //  printf("Total rows in this table :  %d\n", $projectcount);
 }
 

 


?>