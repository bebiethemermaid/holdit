<?php
include("dbconnect.php");
date_default_timezone_set("Asia/Bangkok");
$date = new DateTime("NOW");
$id=($_GET['id']);
// $sql = "UPDATE users set user_status_verified='1' where user_id='".$id."'";
// $sql .= "UPDATE verifies set v_status='1' where user_id='".$id."'";

$sql = "UPDATE users
JOIN verifies ON (users.user_id = verifies.user_id) 
SET user_status_verified = '1', 
    status='1'
WHERE users.user_id='".$id."'";
$query = mysqli_query($conn,$sql);
$sql2 ="UPDATE verifies SET verifies.verdate = '{$date->format('Y-m-d h:i:s')}'";
$query2 = mysqli_query($conn,$sql2);
if(mysqli_query($conn,$sql))
header("Location: non-verify.php");
else
echo "Cant Update";
    ?>