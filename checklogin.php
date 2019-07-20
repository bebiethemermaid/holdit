<?php
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
<!-- <script>
$document.ready(function(){
$('#Login').click(function(){

});

});
</script> -->
