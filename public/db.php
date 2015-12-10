<?php
session_start();
$servername = "localhost";
$username = "d28ee7158903";
$password = "06aa0aec949d6604";
$dbname = "companyDB";
$dbport = 3306;

// Connecting, selecting database
$link = @mysql_connect($servername, $username, $password) or die(mysql_error());
$dbase = mysql_select_db($database) or die(mysql_error())
?>