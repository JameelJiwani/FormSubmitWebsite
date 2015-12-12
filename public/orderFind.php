<?php
session_start();
include('db.php');

// get the q parameter from URL
$q = $_REQUEST["q"];

$table = "completionsheet";
// sending query
$result = mysql_query("SELECT * FROM {$table} WHERE order_num LIKE '$q%'");
if (!$result) {
    die("Query to show fields from table failed");
}
?>
  <div class="table-responsive">
<table class="table table-hover table-condensed" style="padding-top: 10%; margin: 0 auto; width: 90%; height: 90%;">
 <thead>
     <tr>
        <th>Date</th>
        <th>Order Number</th>
        <th>Crew Number</th>
        <th>Address</th>
     </tr>
 </thead>
 <tbody>
<?php



// printing table rows
// $row = mysql_fetch_row($result);
while ($row = mysql_fetch_array($result)){
?>
 <tr>
     <td><?php echo $row['date']; ?></td>
     <td><?php echo $row['order_num']; ?></td>
     <td><?php echo $row['crew_num']; ?></td>
     <td><?php echo $row['address']; ?></td>
 </tr>
<?php
}
?>
</tbody>
</table>
  </div>