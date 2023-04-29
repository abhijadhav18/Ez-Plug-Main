<?php
session_start();
include('config.php');
$cat_name = ($_POST['cegory_id']);

$cat=mysqli_query($con,"select * from `station` Where location_code='$cat_name'");

if(mysqli_num_rows($cat)>0){
    $html='';
    while($row=mysqli_fetch_assoc($cat)){
        $html.= "<option>".$row['station']."</option>";
    }
    echo $html;
}else{
    echo "<option value=''>Not Found</option>";
}
?>	