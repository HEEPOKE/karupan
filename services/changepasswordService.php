<?php
session_start();
require('../database/clinet.php');

$username = $_POST['username'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];

$sql = "UPDATE `account` 
SET `username`='$username',
`password`='$password',
`newpassword`='$newpassword',
`confirmnewpassword`='$confirmnewpassword',
WHERE `password`='" . $_SESSION["usernames"] . "' AND `username`='" . $_SESSION["passwords"] . "'";


if ($conn->query($query) == TRUE) {
    echo '<script>alert("เปลี่ยนรหัสผ่านสำเร็จ")</script>';
} else {
    echo '<script>alert("กรอกรหัสผ่านไม่ตรงกัน")</script>';
}
