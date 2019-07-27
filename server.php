<?php
session_start();
$user_email="";
$user_firstname="";
$errors=array();

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "holdit_test";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die("connection failed");

if(isset($_POST['register'])){
$user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
$user_firstname=mysqli_real_escape_string($conn,$_POST['user_firstname']);
$user_lastname=mysqli_real_escape_string($conn,$_POST['user_lastname']);
$user_citizen=mysqli_real_escape_string($conn,$_POST['user_citizen']);
$user_tel=mysqli_real_escape_string($conn,$_POST['user_tel']);
$user_password=mysqli_real_escape_string($conn,$_POST['user_password']);
$user_password2=mysqli_real_escape_string($conn,$_POST['user_password2']);
$user_id=uniqid().uniqid();
if(empty($user_email)){
    array_push($error,"Email is required");
}
if(empty($user_firstname)){
    array_push($errors,"Firstname is required");
}
if(empty($user_lastname)){
    array_push($errors,"Lastname is required");
}
if(empty($user_citizen)){
    array_push($errors,"Identification Number is required");
}
if(empty($user_tel)){
    array_push($errors,"Phone Number is required");
}
if(empty($user_password)){
    array_push($errors,"Password is required");
}
if($user_password != $user_password2){
    array_push($errors,"The two passwords do not match");
}
if(count($errors)==0){
    $user_password = md5($user_password2);
    $sql="INSERT INTO users(user_id,user_email,user_password,user_firstname,user_lastname,user_image,user_citizen,user_rating_score,user_rating_vote,user_status_login,user_status_verified,user_tel,user_role)
     VALUES ('$user_id','$user_email','$user_password','$user_firstname','$user_lastname','','$user_citizen','0','0','0','0','$user_tel','0')";
     mysqli_query($conn,$sql);
     $_SESSION['user_email'] = $user_email;
     $_SESSION['success'] = "You are now logged in";
     header('location:requestevent.php');
}
}


if(isset($_POST['login'])){
    $user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
    $user_password=mysqli_real_escape_string($conn,$_POST['user_password']);
    if(empty($user_email)){
        array_push($errors,"Email is required");
    }
    if(empty($user_password)){
        array_push($errors,"Password is required");
    }
    if(count($errors) == 0){
        $user_password=md5($user_password);
        $sql="SELECT * FROM users WHERE user_email='$user_email' AND user_password = '$user_password'";
        $result = mysqli_query($conn,$sql); 
        if(mysqli_num_rows($result)==1){
            $_SESSION['user_email']=$user_email;
            $_SESSION['success']="You are now logged in";
            header('location: requestevent.php');
        }else{
            array_push($errors,"Invalid Email or Password");
        
         
        }
    }

}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user_email']);
    header('location: requestevent.php');
}



?> 