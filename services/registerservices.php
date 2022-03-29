<?php

$name = $_POST['name'];
$usernames = $_POST['usernames'];
$lastname = $_POST['lastname'];
$passwords = $_POST['passwords'];
$confirmpassword = $_POST['confirmpassword'];
$tel = $_POST['tel'];


if ($passwords == $confirmpassword) {
    require('../database/clinet.php');
    $sql = "INSERT INTO account (name, lastname,username, password, type, tel) 
    VALUES ('$name', '$lastname', '$usernames', '$passwords', 'user', '$tel')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("สมัครสมาชิกสำเร็จ");window.location.href = "../pages/login.php";</script>';
    } else {
        echo '<script>alert("ชื่อผู้ใช้งานมีอยู่แล้ว");window.location.href = "../pages/register.php";</script>';
    }
} else {
    echo '<script>alert("รหัสผ่านไม่ตรงกัน");window.location.href = "../pages/register.php";</script>';
}
