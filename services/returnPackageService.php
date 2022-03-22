<?php
require('../database/client.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';

$query = "UPDATE items 
        SET `status`='คืนแล้ว'
        WHERE id = '" . $id . "'";

if ($conn->query($query) == TRUE) {
    echo '<script>alert("คืนวัสดุ-ครุภัณฑ์เรียบร้อยแล้ว")</script>';
    echo '<script>window.location.href = "../"</script>';
} else {
    echo '<script>alert("ไม่สามารถคืนวัสดุ-ครุภัณฑ์ได้")</script>';
    echo '<script>window.location.href = "../"</script>';
}
