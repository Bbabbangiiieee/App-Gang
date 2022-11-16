<?php session_start(); ?>
<?php 	

if(isset($_GET['med_id'])){
	include "../constant/connect.php";
	 function validate($data){
		 $data = trim($data);
		 $data = stripslashes($data);
		 $data = htmlspecialchars($data);
		 return $data;
	 }
 
	 $med_id = validate($_GET['med_id']);
 
	 $sql = "DELETE FROM medicine
			 WHERE med_id=$med_id";
			 
	$result = mysqli_query($db2, $sql);
 
	if ($result) {
	   $_SESSION['success'] = "Successfully Deleted";
	   header('location: ./product.php');
	   }else {
	   $_SESSION['error'] = "Something went wrong. Try again.";
	   header('location: ../product.php');
	   }
 
 }else {
	 header("Location: ../product.php");
 }

 // /if $_POST