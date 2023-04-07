<?php
include_once 'connection.php';
$sql = "DELETE FROM users WHERE id='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: retrieve.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>