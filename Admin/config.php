 <?php
// $con = mysqli_connect("localhost","vysoxnyu_ev","harshit@123","vysoxnyu_ev");
$con = mysqli_connect("localhost","root","","ezplug");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
date_default_timezone_set("Asia/Calcutta");
    $cdate= date('Y-m-d');
    $date= date('Y-m-d-H-i');
?> 