<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
<body>
  <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table id="myTable"  class="table table-striped w-auto">  
  <tr>
    <th><b>id</b></th>
    <th><b>First Name</b></th>
    <th><b>Mobile No</b></th>
    <th><b>Email id</b></th>
    <th><b>Edit</b></th>
    <th><b>Delete</b></th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["Mobile_No"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
    <td><a href="delete-process.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>