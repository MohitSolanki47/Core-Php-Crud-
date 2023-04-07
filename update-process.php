<?php
include_once 'connection.php';
if(count($_POST)>0) {
	// print_r($_POST); 
	// exit();
mysqli_query($conn,"UPDATE users set id='". $_POST['id'] . "', name='" . $_POST['first_name'] . "', Mobile_No='" . $_POST['Mobile_No'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
header("Location: retrieve.php");
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Last Name :<br>
<input type="text" name="Mobile_No" class="txtField" value="<?php echo $row['Mobile_No']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>