<?php
session_start();
require('../database/clinet.php');

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$idstudent = $_POST['idstudent'];
$tel = $_POST['tel'];
$email = $_POST['email'];

$sql = "UPDATE `account` 
SET `name`='$name',
`lastname`='$lastname',
`idstudent`='$idstudent',
`username`='$username',
`password`='$password',
`email`='$email',
`tel`='$tel' 
WHERE `username`='" . $_SESSION["usernames"] . "' AND password='" . $_SESSION["passwords"] . "'";


if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
