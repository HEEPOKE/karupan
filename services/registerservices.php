<?php

$name = $_POST['name'];
$usernames = $_POST['usernames'];
$lastname = $_POST['lastname'];
$idstudent = $_POST['idstudent'];
$passwords = $_POST['passwords'];
$confirmpassword = $_POST['confirmpassword'];
$email = $_POST['email'];
$tel = $_POST['tel'];


if ($passwords == $confirmpassword) {
    require('../database/clinet.php');
    $sql = "INSERT INTO account (name, lastname, idstudent, username, password, type, email, tel) 
    VALUES ('$name', '$lastname', '$idstudent', '$usernames', '$passwords', 'user', '$email', '$tel')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("สมัครสมาชิกสำเร็จ");window.location.href = "../pages/login.php";</script>';
    } else {
        echo '<script>alert("ชื่อผู้ใช้งานมีอยู่แล้ว");window.location.href = "../pages/register.php";</script>';
    }
} else {
    echo '<script>alert("รหัสผ่านไม่ตรงกัน");window.location.href = "../pages/register.php";</script>';
}
