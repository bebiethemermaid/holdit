<?php
require_once('dbconnect.php');

//     if(!empty($_FILES['event_img_cover']['name'])){
// $filename=md5($_FILES['event_img_cover']['name'].time());
// $ext=explode('.',$_FILES['event_img_cover']['name']);
// $dest=__DIR__.DIRECTORY_SEPARATOR.'holdit_web'.DIRECTORY_SEPARATOR.$filename.'.'.$ext[1];
// if(!copy($_FILES['event_img_cover']['tmp_name'],$dest)){
//     echo 'upload error';

//     exit();
// }
// }

if(isset($_POST['save'])){
    
   
    $event_title      = $_POST['event_title'];
    $event_desc       = $_POST['event_desc'];
    $event_category   = $_POST['event_category'];
    $event_date_start = $_POST['event_date_start'];
    $event_date_end   = $_POST['event_date_end'];
    $event_location   = $_POST['event_location'];
    
$ext1 = pathinfo(basename($_FILES['event_img_cover']['name']), PATHINFO_EXTENSION);
$new_img_name1='img_'.uniqid().".".$ext1;
$img_path1 ="images/";
$upload_path1 = $img_path1.$new_img_name1;
$success1 = move_uploaded_file($_FILES['event_img_cover']['tmp_name'],$upload_path1);
if($success1==false){
    echo "cant upload image";
    exit();
}

$ext2 = pathinfo(basename($_FILES['event_img_logo']['name']), PATHINFO_EXTENSION);
$new_img_name2='img_'.uniqid().".".$ext2;
$img_path2 ="images/";
$upload_path2 = $img_path1.$new_img_name2;
$success2 = move_uploaded_file($_FILES['event_img_logo']['tmp_name'],$upload_path2);
if($success2==false){
    echo "cant upload image";
    exit();
}
$event_img_cover  = $new_img_name1;
$event_img_logo   = $new_img_name2;



    $sql = "INSERT INTO events ( event_img_cover,event_img_logo, event_title,    event_desc,   event_category,   event_date_start,   event_date_end,   event_location)
            VALUES ('$event_img_cover','$event_img_logo','$event_title','$event_desc', '$event_category','$event_date_start','$event_date_end','$event_location')";
    $query = mysqli_query($conn, $sql);
   
}
if($query){
    header("Location: eventhistory.php");

}








// $sql = "INSERT INTO events (event_img_cover,event_img_logo,event_location,event_date_start,event_date_end,event_title,event_desc,event_category) VALUES ('$event_img_cover','$event_img_logo','$event_location','$event_date_start','$event_date_end','$event_title','$event_desc','$event_category')";
// $query = mysqli_query($conn,$sql);


// if($query){
// echo "insert success";
// }else{
//     echo "insert failed";


// }


?>
<!-- upload image
$ext = pathinfo(basename($_FILES['event_img_cover']['name']), PATHINFO_EXTENSION);
$new_img_name='img_'.uniqid().".".$ext;
$img_path ="images/";
$upload_path = $img_path.$new_img_name; -->
