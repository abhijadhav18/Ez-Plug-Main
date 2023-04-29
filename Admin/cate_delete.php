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
$sql = "DELETE FROM `location` WHERE sno='$sno'";

if (mysqli_query($con, $sql)) 
{
    echo ("<script LANGUAGE='JavaScript'>
  window.location.href='cate';
  </script>");
   
} else {
  echo "Error deleting record: " . mysqli_error($con);
}

exit;
?>