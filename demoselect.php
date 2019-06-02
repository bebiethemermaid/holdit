<?php
include("dbconnect.php");
$sql = "select * from category";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query)) {
    echo "Name: " . $row["namecategory"];
}
?>