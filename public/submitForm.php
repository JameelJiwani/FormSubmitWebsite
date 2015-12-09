<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "companyDB";

$date = $_POST["date"];
$orderNum = $_POST["ordernum"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO completionsheet (date, ordernum)
VALUES ('$date', '$ordernum')";

if (mysqli_query($conn, $sql)) {
  header("Location: /");
  die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>