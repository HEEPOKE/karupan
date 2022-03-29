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
