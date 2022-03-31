<?php
session_start();
require('../database/clinet.php');

$username = $_POST['username'];
$newpassword = $_POST['newpassword'];

$sql = "UPDATE `account` 
SET `username`='$username',
`password`='$password',
WHERE `password`='" . $_SESSION["usernames"] . "' AND `username`='" . $_SESSION["passwords"] . "'";


if ($conn->query($query) == TRUE) {
    echo '<script>alert("เปลี่ยนรหัสผ่านสำเร็จ")</script>';
} else {
    echo '<script>alert("รหัสผ่านไม่ตรงกัน")</script>';
}
