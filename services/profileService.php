<?php
session_start();
require('../database/clinet.php');

$name = $_POST['name'];
$lastname = $_POST['lastname'];

$sql = "UPDATE `account` 
SET `name`='$name',
`lastname`='$lastname',
WHERE `username`='" . $_SESSION["usernames"] . "' AND password='" . $_SESSION["passwords"] . "'";


if ($conn->query($sql) === TRUE) {
    header('location: ../?page=profile');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
