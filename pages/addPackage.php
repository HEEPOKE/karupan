<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="card-title">เพิ่มข้อมูล</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="idpackage">รหัสวัสดุ-ครุภัณฑ์</label>
                            <input type="text" class="form-control" id="idpackage" placeholder="กรอกรหัสวัส-ครุภัณฑ์">
                        </div>
                        <div class="form-group">
                            <label for="packagename">ชื่อวัสดุ-ครุภัณฑ์</label>
                            <input type="text" class="form-control" id="packagename" placeholder="กรอกชื่อวัสดุ-ครุภัณฑ์">
                        </div>
                        <div class="form-group">
                            <label for="number">จำนวน</label>
                            <input type="number" class="form-control" id="number" placeholder="กรอกจำนวนวัสดุ-ครุภัณฑ์">
                        </div>
                        <div class="form-group">
                            <label for="price">ราคา</label>
                            <input type="text" class="form-control" id="price" placeholder="กรอกราคาวัสดุ-ครุภัณฑ์">
                        </div>
                        <div class="form-group">
                            <label for="note">หมายเหตุ</label>
                            <input type="text" class="form-control" id="note" placeholder="กรอกหมายเหตุ">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-secondary col-6">เพิ่ม</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">เบิกวัสดุ - ครุภัณฑ์</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รหัสวัสดุ-ครุภัณฑ์</th>
                            <th>ชื่อวัสดุ-ครุภัณฑ์</th>
                            <th>จำนวน</th>
                            <th>ราคา</th>
                            <th>หมายเหตุ</th>
                            <th>สถานะ</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $queryHistory = "SELECT * FROM items 
                        WHERE name = '" . $_SESSION["name"] . "' AND lastname = '" . $_SESSION["lastname"] . "'";
                        $resultHistory = $conn->query($queryHistory);
                        if ($resultHistory->num_rows > 0) {
                            $i = 1;
                            while ($rowHistory = $resultHistory->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $rowHistory["itemscode"]; ?></td>
                                    <td><?php echo $rowHistory["packagename"]; ?></td>
                                    <td><?php echo $rowHistory["number"]; ?></td>
                                    <td><?php echo $rowHistory["price"]; ?></td>
                                    <td><?php echo $rowHistory["note"]; ?></td>
                                    <td><?php echo $rowHistory["status"]; ?></td>
                                    <td>
                                        <a href="pages/returnPackageService.php?id=<?php echo $rowHistory["id"]; ?>" class="btn btn-primary">
                                            แก้ไขวัสดุ-ครุภัณฑ์
                                        </a>
                                        <a href="pages/deletePackageService.php?id=<?php echo $rowHistory["id"]; ?>" class="btn btn-danger">
                                            ลบ
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<tr><td colspan="9">ไม่มีประวัติการเบิก/ยืม</td></tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>