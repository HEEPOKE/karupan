<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: pages/login.php');
}
require('assets/icons/icon.php');
require('database/clinet.php');
$type = $_SESSION['type'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ครุภัณฑ์</title>
    <?php include 'components/Head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include 'components/Loading.php'; ?>
        <?php include 'components/NavBar.php'; ?>
        <?php include 'components/Menu.php'; ?>

        <div class="content-wrapper">
            <?php include 'components/Header.php'; ?>
            <?php include 'pages/giveMe.php'; ?>
        </div>
        <?php include 'components/Footer.php'; ?>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <?php include 'components/Script.php'; ?>

</body>

</html>