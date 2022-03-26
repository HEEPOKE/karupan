<?php
session_start();
require('../database/clinet.php');

$sql = "SELECT * FROM account WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['login'] = true;
    $_SESSION['type'] = $row['type'];
    $_SESSION['name'] = $row['name'];
    $_SESSION["usernames"] = $row['username'];
    $_SESSION["passwords"] = $row['password'];
    $_SESSION['lastname'] = $row['lastname'];
    header('Location: ../');
} else {
    echo '<script>alert("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");window.location.href = "../pages/login.php";</script>';
}
