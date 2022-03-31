<?php
session_start();
require('../database/clinet.php');

$email = $_POST['email'];


$sql = "SELECT *  FROM  account WHERE  email =  $email";
$result = $conn->query($sql);

if ($conn->query($query) == TRUE) {
    echo $result;
} else {
    echo '<script>alert("รหัสผ่านไม่ตรงกัน")</script>';
}
