<?php
$servername = "localhost";
$username = "id16798641_projects";
$password = "Qwertyui-12345678";
$dbname = "id16798641_project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
