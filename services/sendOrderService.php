<?php
session_start();
require('../database/clinet.php');

$id = $_POST["hidden-namepackage"];
$number = $_POST["ordering"];
$note = $_POST["note"];

$queryGet = "SELECT * FROM package WHERE packagename1= '$id'";
$result = $conn->query($queryGet);
$row = $result->fetch_assoc();
$sum = $row["number"] - 2;

$query = "UPDATE `package` 
        SET `number`='$sum' 
        WHERE packagename1 = '$id'";

$queryGetAccount = "SELECT * FROM account 
WHERE username = '" . $_SESSION["usernames"] . "' AND `password` = '" . $_SESSION["passwords"] . "'";
$resultGetAccount = $conn->query($queryGetAccount);
$rowGetAccount = $resultGetAccount->fetch_assoc();

date_default_timezone_set("Asia/Bangkok");
$date = date("d-m-Y");

$queryHistory = "INSERT INTO 
`items`(
`itemscode`, 
`name`, 
`lastname`, 
`packagename`, 
`date`, 
`number`, 
`status`, 
`price`, 
`note`) VALUES (
'" . $row["idpackage"] . "',
'" . $rowGetAccount["name"] . "',
'" . $rowGetAccount["lastname"] . "',
'" . $id . "',
'" . $date . "',
'" . $number . "',
'ยืมอยู่',
'" . $row["price"] . "',
'" . $note . "')";

if ($conn->query($query) === TRUE && $conn->query($queryHistory) === TRUE) {
    header('location: ../');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
