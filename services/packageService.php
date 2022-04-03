<?php

require('../database/clinet.php');
$idpackage = $_POST["idpackage"];
$packagename = $_POST["packagename"];
$name = $_POST["name"];
$number = $_POST["number"];
$price = $_POST["price"];

$queryEdit = "SELECT * FROM package WHERE idpackage = '$idpackage'";
$resultEdit = $conn->query($queryEdit);
if ($resultEdit->num_rows > 0) {
    $query = "UPDATE package 
            SET packagename1='$packagename',name='$name',price='$price',`number`='$number' 
            WHERE idpackage = '$idpackage'";
    if ($conn->query($query) === TRUE) {
        header("Location: ../?page=update");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    $query = "INSERT INTO package(idpackage2, packagename1, name, price, number) 
    VALUES ('$idpackage','$packagename','$name','$price','$number')";

    if ($conn->query($query) === TRUE) {
        header("Location: ../?page=update");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
