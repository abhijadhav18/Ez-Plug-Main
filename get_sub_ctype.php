<?php
session_start();
unset($_SESSION['wr']);
include('config.php');
$cat_name = $_POST['cegory_id'];
$_SESSION['wr'] = $cat_name;
$cat_name = $_POST['cegory_id'];
$cat=mysqli_query($con,"SELECT * from `station` Where ctype='$cat_name'");

if(mysqli_num_rows($cat)>0)
{
    $html='';
    while($row=mysqli_fetch_assoc($cat)){
        $html.= "<option>".$row['id']."</option>";
    }
    echo $html;
}else{
    echo "<option value=''>Not Found</option>";
}
echo $html;

?>	