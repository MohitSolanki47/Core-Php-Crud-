<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	// print_r($_POST); 
	// exit();
	 $first_name = $_POST['first_name'];
	 $mobile_number = $_POST['mobile_number'];
	 $email = $_POST['email'];

	 $sql = "INSERT INTO users (name,Mobile_No,email)
	 VALUES ('$first_name','$mobile_number','$email')";

	 if (mysqli_query($conn, $sql)) 
	 {
		echo "New record created successfully !";
	 } 
	 else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>