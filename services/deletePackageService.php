<?php

require('../database/clinet.php');
$id = $_POST["hidden-namepackage"];

$query = "DELETE FROM `package` WHERE idpackage = '$id'";

if ($conn->query($query) == TRUE) {
    header("Location: ../?page=update");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
