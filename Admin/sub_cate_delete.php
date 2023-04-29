<?php

// // Create connection
// $conn = mysqli_connect("localhost","root","","xxx");

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
include('config.php');
// sql to delete a record
$sno = $_GET['id'];
$sql = "DELETE FROM sub_categeory WHERE sno='$sno'";

if (mysqli_query($con, $sql)) {
  echo "Record deleted successfully";
  header('location:sub_cate');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

exit;
?>