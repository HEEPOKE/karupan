<?php
session_start();
require('../database/clinet.php');

$username = $_POST['username'];


$sql = "UPDATE `account` 
-- SET `username`='$username',
-- `password`='$password',
WHERE `username`='" . $_SESSION["usernames"] . "' AND `username`='" . $_SESSION["passwords"] . "'";


if ($conn->query($query) == TRUE) {
    echo '$sql';
} else {
    echo '<script>alert("รหัสผ่านไม่ตรงกัน")</script>';
}
