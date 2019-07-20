<?php
include("dbconnect.php");
$sql = "SELECT * FROM events";

$query = mysqli_query($conn,$sql);
    ?>
<html>
<head>
<meta charset="utf-8"
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 84%;
  margin-left: 250px;
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
  text-align: center;
  background-color: #88b3ce;
  color: white;
}
.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.pics{margin-left:50px;
margin-bottom:15px;
margin-top:15px;
}

.title{
  background-color: #88b3ce;
  width: auto;
  padding: 10px;
  margin-bottom: 10px;
  margin-left: 250px;
  color: white;

}


/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
#customers {
  margin-left: 250px; /* Same as the width of the sidenav */
  margin-right: auto;
  font-size: 20px; /* Increased text to enable scrolling */
}
/* Add an active class to the active dropdown button */
.active {
  background-color: #6e45e2;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div class="sidenav"> 
<img src="logo.png" class="pics" alt="logo" height="150" width="150">
<button class="dropdown-btn">Verification
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="non-verify.php">Non-Verify</a>
    <a href="verified.php">Verified</a>
  </div>
  <button class="dropdown-btn">Event
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="create.php">Create Event</a>
    <a href="eventhistory.php">History</a>
  </div>
  <a href="login.php">Logout</a>

</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<div class="title">
<h4>Event History</h4>
</div>

<table id="customers">
  <tr>
    <th>No.</th>
    <th>Title</th>
    <th>Description</th>
    <th>Image Cover</th>
    <th>Image Logo</th>
    <th>Date Start</th>
    <th>Date End</th>
    <th>Date Location</th>
  </tr>
<?php
    $no = 1;
    while($row = mysqli_fetch_assoc($query)) {
      
        echo "<tr>";
        echo "<td><center>" . $no . '</center></td>';
        echo "<td> " . $row["event_title"] . '</td>';
        echo "<td> " . $row["event_desc"] . '</td>';
        echo "<td> " . $row["event_img_cover"] . '</td>';
        echo "<td> " . $row["event_img_logo"] . '</td>';
        echo "<td> " . $row["event_date_start"] . '</td>';
        echo "<td> " . $row["event_date_end"] . '</td>';
        echo "<td> " . $row["event_location"] . '</td>';
     
       // echo "<td> "."<img src ='http://pilot.cp.su.ac.th/usr/u07580319/holdit/pics/verify/".$row['image'] .">". "</td>";
        ?>
      
    
       
        <?php
        $no++;
    }
  
?>
</table>

</body>
</html>
