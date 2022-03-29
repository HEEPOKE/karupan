<?php
session_start();
require('../database/clinet.php');

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *FROM account WHERE username='" . $_SESSION["username"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["newpassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE username set password='" . $_POST["newpassword"] . "' WHERE userId='" . $_SESSION["username"] . "'");
        $message = "เปลี่ยนรหัสผ่่านเรียบร้อยแล้ว";
    } else
        $message = "กรอกรหัสผ่านใหม่ไม่ถูกต้อง";
}
