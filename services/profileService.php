<?php
session_start();
require('../database/clinet.php');

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$email = $_POST['email'];

$sql = "UPDATE `account` 
SET `name`='$name',
`lastname`='$lastname',
`email`='$email',
`tel`='$tel' 
WHERE `username`='" . $_SESSION["usernames"] . "' AND password='" . $_SESSION["passwords"] . "'";


if ($conn->query($sql) === TRUE) {
    header('location: ../?page=profile');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
