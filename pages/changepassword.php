<?php
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">

<head>
    <title>เข้าสู่ระบบ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../login/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">

</head>

<body class="img js-fullheight" style="background-image: url(../assets/image/bg1.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">Change Password</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="../services/changepasswordService.php" method="POST" class="signin-form">
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" name="newpassword" placeholder="NEWPASSWORD" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" name="confirmnewpassword" placeholder="CONFIRMNEWPASSWORD" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <button type="submit" class="form-control btn btn-primary submit px-3">CONFIRM</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <script src="../login/js/jquery.min.js"></script>
    <script src="../login/js/popper.js"></script>
    <script src="../login/js/bootstrap.min.js"></script>
    <script src="../login/js/main.js"></script>

</body>

</html>