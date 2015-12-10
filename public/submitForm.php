<?php
$servername = "localhost";
$username = "d28ee7158903";
$password = "06aa0aec949d6604";
$dbname = "companyDB";

$date = $_POST["date"];
$orderNum = $_POST["ordernum"];
$additionalID = $_POST["additionalid"];
$crewnum = $_POST["crewnum"];
$techid1 = $_POST["techid1"];
$techid2 = $_POST["techid2"];
$civicnum = $_POST["civicnum"];
$address = $_POST["address"];
$municipality = $_POST["municipality"];
$postalcode = $_POST["postalcode"];
$repairtype = $_POST["repairtype"];
$droplength = $_POST["droplength"];
$cabletype = $_POST["cabletype"];
$drivewaycross = $_POST["crossingnum"];
$type = $_POST["type"];
$sidewalk = $_POST["sidewalk"];
$primary = $_POST["primary"];
$secondary = $_POST["secondary"];
$tlch34 = $_POST["tlch34"];
$tlch70 = $_POST["tlch70"];
$cselch34 = $_POST["cselch34"];
$cselch70 = $_POST["cselch70"];
$taplocate = $_POST["taplocat"];
$dropremove = $_POST["dropremoved"];
$csepoint = $_POST["csepoint"];
$conduitplaced = $_POST["conduitplaced"];
$drivewaynum = $_POST["drivewaynum"];
$feetdrive = $_POST["drivefeet"];
$flowbed = $_POST["flowerbed"];
$feetbed = $_POST["flowfeet"];
$comment = $_POST["comment"];
$wtime = $_POST["worktime"];
$email = $_POST["email"];
$faultlocate = $_POST["faultlocat"];
$from = $_POST["from"];


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `completionsheet`(`date`, `order_num`, `additional_id`,
    `crew_num`, `techid1`, `techid2`, `civic_num`, `address`,
    `municipality`, `postal_code`, `repair_type`, `drop_length`,
    `cable_type`, `driveway_cross`, `type`, `sidewalk`, `primary`,
    `secondary`, `tlch34`, `tlch70`, `cselch34`, `cselch70`, `tap_locate`,
    `drop_remove`, `cse_point`, `conduit_placed`, `driveway_num`, `feet_drive`,
    `flow_bed`, `feet_bed`, `comment`, `w_time`, `email`, `fault_locate`, `from`)
VALUES ('$date', '$orderNum', '$additionalID', '$crewnum', '$techid1', '$techid2', '$civicnum', '$address',
    '$municipality', '$postalcode', '$repairtype', '$droplength', '$cabletype', '$drivewaycross', '$type',
    '$sidewalk', '$primary', '$secondary', '$tlch34', '$tlch70', '$cselch34', '$cselch70', '$taplocate',
    '$dropremove', '$csepoint', '$conduitplaced', '$drivewaynum', '$feetdrive', '$flowbed', '$feetbed',
    '$comment', '$wtime', '$email', '$faultlocate', '$from')";

// $sql = "INSERT INTO completionsheet (date, ordernum)
// VALUES ('$date', '$ordernum')";

if (mysqli_query($conn, $sql)) {
  header("Location: /");
  die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>