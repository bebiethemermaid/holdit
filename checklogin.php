<?php
include("../dbconnect.php");
$username = $_REQUEST['username'];
$password=md5($_REQUEST['password']);
$sql ="SELECT * FROM `users` WHERE user_firstname='$username' AND user_password='$password'";
$query = mysqli_query($conn,$sql);
if ($query=mysqli_query($conn,$sql))
{
// Return the number of rows in result set
$rowcount=mysqli_num_rows($query);
echo $rowcount;
if($rowcount==1){
    header("Location: home.php");
}
else{
    header("Location: login.php");
}

}
else{

    header("Location: login.php");
}

?>