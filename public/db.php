<?php
session_start();
$servername = getenv('IP');
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$dbname = "companyDB";

// Connecting, selecting database
$link = @mysql_connect($servername, $username, $password) or die(mysql_error());
$dbase = mysql_select_db($dbname) or die(mysql_error())
?>