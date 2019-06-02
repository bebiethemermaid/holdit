<?php
include("dbconnect.php");
$sql = "SELECT u.user_id, u.user_email,u.user_firstname,u.user_lastname,v.image
FROM users u
JOIN verifies v
ON  u.user_id = v.user_id;";
$query = mysqli_query($conn,$sql);
    ?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>No.</th>
    <th>Email</th>
    <th>Name</th>
    <th>Register Date</th>
    <th>Verify Date</th>
    <th></th>
  </tr>
<?php
    $no = 1;
    while($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>" . $no . '</td>';
        echo "<td> " . $row["user_email"] . '</td>';
        echo "<td> " . $row["user_firstname"]. " " .$row["user_lastname"] . '</td>';
        // echo "<td> "."<img src ='http://pilot.cp.su.ac.th/usr/u07580319/holdit/pics/verify/".$row['image'] .">". "</td>";
        echo "<td> </td>";
        echo "<td> </td>";
        echo "<td>"."<button type='button' class='btn btn-info' data-toggle='modal' data-target='#myModal'>Info</button>".'</td>';
        echo "</tr>";
        ?>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">INFORMATION</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                <?php
                echo $row["user_email"];
                ?>
                <!-- <img src="<?php echo $row['image'];?>" width = "50px" height='50px;"> -->
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-success">ACCETPT</button>
                <button type="button" class="btn btn-danger">REFUSE</button>
                </div>
                
            </div>
            </div>
        </div>
        <?php
        $no++;
    }
?>
</table>

</body>
</html>
