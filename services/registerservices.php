<?php

$usernames = $_POST['usernames'];
$passwords = $_POST['passwords'];
$confirmpassword = $_POST['confirmpassword'];



if ($passwords == $confirmpassword) {
    require('../database/clinet.php');
    $sql = "INSERT INTO account (username, password, type) 
    VALUES ('$usernames', '$passwords', 'user')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("สมัครสมาชิกสำเร็จ");window.location.href = "../pages/login.php";</script>';
    } else {
        echo '<script>alert("ชื่อผู้ใช้งานมีอยู่แล้ว");window.location.href = "../pages/register.php";</script>';
    }
} else {
    echo '<script>alert("รหัสผ่านไม่ตรงกัน");window.location.href = "../pages/register.php";</script>';
}
