<?php
// Database configuration
$dbHost     = "avaritia.aserv.co.za:3306";
$dbUsername = "sishudql";
$dbPassword = "myX6~91)b(G8";
$dbName     = "sishudql_maths";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>