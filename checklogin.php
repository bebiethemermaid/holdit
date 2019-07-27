<?php
// include("dbconnect.php");
// $username=$_POST['username'];
// $password=md5($_POST['username']);
// if($username==''){
// echo "Check Email";}
// else if($password==''){
//     echo "Check Password";}
//         else{
//             $sql = mysqli_query("SELECT * FROM users where user_email=$username AND user_password=$password");
//             $num = mysqli_num_rows($sql);
//             if($num<=0){
//                 echo "Invalid Email or Password";
//             }
//             else{
//                 while($user=mysql_fetch_array($sql)){

//                 }
//             }
        
    
// }

include("dbconnect.php");
$success="";
$error="";
$username = $_REQUEST['username'];
$password=md5($_REQUEST['password']);
$sql ="SELECT * FROM users WHERE user_firstname='$username' AND user_password='$password'";
$query = mysqli_query($conn,$sql);
if ($query=mysqli_query($conn,$sql))
{
// Return the number of rows in result set
$rowcount=mysqli_num_rows($query);
if($rowcount==1){
    header("Location: non-verify.php");
}
else{
header("Location: login.php");
  
}

}
else{

    header("Location: login.php");
}

?>
