<?php
include("dbconnect.php");
$sql= "SELECT items.type ,items.status,orders.amount FROM items JOIN orders ON orders.item_id=items.item_id" ;
$query = mysqli_query($conn,$sql);
//select items.item_id ,items.type ,items.status,orders.amount, count(*) as qty from items join orders on orders.item_id=items.item_id group by items.type  
    $type1 = 0;
    $type2 = 0;
    $type3 = 0;
    $type4 = 0;
    $type5 = 0;
    $type6 = 0;
    $type7 = 0;
    $type8 = 0;
    $type9 = 0;
    $type10 = 0;
    $type11 = 0;
    $type12 = 0;
    while($row = mysqli_fetch_assoc($query)) {
      if($_POST['status']==3){
        if($_POST['type']==1){
          $type1 = $type1+amount;
        }
      } 
        
        ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Clothes',     11],
          ['Books',      2],
          ['Shoes',  2],
          ['Cosmetics', 2],
          ['Bag',    7],
          ['Accessories',     11],
          ['Sport',      2],
          ['Cameras and Equipments',  2],
          ['Entertainment', 2],
          ['Stationary',    7],
          ['Computer/Electronics',4],
          ['Others',5]
        ]);

        var options = {
          title: 'Report'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body><center>
    <div id="piechart" style="width: 900px; height: 500px;"></div></center>
  </body>
</html>
