<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "items";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
