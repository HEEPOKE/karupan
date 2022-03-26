<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: pages/login.php');
}
require('assets/icons/icon.php');
require('database/clinet.php');
$type = $_SESSION['type'];
$usernames = $_SESSION['usernames'];
$passwords = $_SESSION['passwords'];
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
    <?php include 'components/Modals.php'; ?>
    <div class="wrapper">

        <?php include 'components/Loading.php'; ?>
        <?php include 'components/NavBar.php'; ?>
        <?php include 'components/Menu.php'; ?>

        <div class="content-wrapper">
            <?php include 'components/Header.php'; ?>
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            switch ($page) {
                case 'home':
                    include 'pages/giveMe.php';
                    break;
                case 'add':
                    include 'pages/addPackage.php';
                    break;
                case 'update':
                    include 'pages/updatepackage.php';
                    break;
                case 'profile':
                    include 'pages/profile.php';
                    break;
            }
            ?>
        </div>
        <?php include 'components/Footer.php'; ?>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <?php include 'components/Script.php'; ?>

</body>

</html>