<?php
$queryAccount = "SELECT * FROM account WHERE username = '" . $usernames . "' AND password = '" . $passwords . "'";
$resultAccount = $conn->query($queryAccount);
$name = "";
$lastname = "";
if ($resultAccount->num_rows > 0) {
    $rowAccount = $resultAccount->fetch_assoc();
    $name = $rowAccount["name"];
    $lastname = $rowAccount["lastname"];
}
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link" href="#profile" data-toggle="tab">เเก้ไขข้อมูลส่วนตัว</a></li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <form action="services/profileService.php" method="POST" class="signin-form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputname">ชื่อ</label>
                            <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" id="inputname" placeholder="กรอกชื่อ">
                        </div>
                        <div class="form-group">
                            <label for="inputlastname">นามสกุล</label>
                            <input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control" id="inputlastname" placeholder="กรอกนามสกุล">
                        </div>
                    </div>
                    <div class="form-group text-center ">
                        <button type="submit" class="btn btn-success col-6">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>