<?php
session_start();

$servername = "localhost";
$username = "userdb";
$password = "databaza";
$dbname = "norhtwindmysql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
