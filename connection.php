<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "laravelcrud";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn)
{
   echo 'Could not Connect Database';
}
else
{
	//echo 'Connect Database';
}
?>