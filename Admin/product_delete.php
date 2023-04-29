<?php

include('config.php');
// sql to delete a record
$sno = $_GET['id'];
$sql = "DELETE FROM `station` WHERE sno='$sno'";

if (mysqli_query($con, $sql)) {
  echo "Record deleted successfully";
  header('location:product');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

exit;
?>