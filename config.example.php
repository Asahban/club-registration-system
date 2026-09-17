<?php
$host = "YOUR_DB_HOST";
$user = "YOUR_DB_USERNAME";
$pass = "YOUR_DB_PASSWORD";
$db = "YOUR_DB_NAME";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die("Database connection failed."); }
$conn->set_charset("utf8mb4");
?>