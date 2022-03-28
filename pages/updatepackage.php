<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="card-title">เพิ่มข้อมูลวัสดุ-ครุภัณฑ์</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="services/packageService.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="idpackage">รหัสวัสดุ-ครุภัณฑ์</label>
                            <input type="text" class="form-control" name="idpackage" id="idpackage" placeholder="กรอกรหัสวัส-ครุภัณฑ์" required>
                        </div>
                        <div class="form-group">
                            <label for="packagename">ชื่อวัสดุ-ครุภัณฑ์</label>
                            <input type="text" class="form-control" name="packagename" id="packagenames" placeholder="กรอกชื่อวัสดุ-ครุภัณฑ์" required>
                        </div>
                        <div class="form-group">
                            <label for="number">จำนวน</label>
                            <input type="number" class="form-control" name="number" id="numbers" placeholder="กรอกจำนวนวัสดุ-ครุภัณฑ์" required>
                        </div>
                        <div class="form-group">
                            <label for="price">ราคา</label>
                            <input type="text" class="form-control" name="price" id="prices" placeholder="กรอกราคาวัสดุ-ครุภัณฑ์" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-secondary col-6">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">เเก้ไขวัสดุ - ครุภัณฑ์</h3>
            </div>
            <div class="card-body">
                <table id="historyone" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รหัสวัสดุ-ครุภัณฑ์</th>
                            <th>ชื่อวัสดุ-ครุภัณฑ์</th>
                            <th>จำนวน</th>
                            <th>ราคา</th>
                            <th>ยืม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $queryHistory = "SELECT * FROM package";
                        $resultHistory = $conn->query($queryHistory);
                        if ($resultHistory->num_rows > 0) {
                            $i = 1;
                            while ($rowHistory = $resultHistory->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $rowHistory["idpackage2"]; ?></td>
                                    <td><?php echo $rowHistory["packagename1"]; ?></td>
                                    <td><?php echo $rowHistory["number"]; ?></td>
                                    <td><?php echo $rowHistory["price"]; ?></td>
                                    <td>
                                        <a onclick="editPackage<?php echo $i; ?>(`<?php echo $rowHistory['idpackage']; ?>`)" class="btn btn-primary">
                                            เเก้ไขวัสดุ-ครุภัณฑ์
                                        </a>
                                        <a onclick="deletePackage(`<?php echo $rowHistory['idpackage']; ?>`)" class="btn btn-danger" data-target="#modal-default-delete" data-toggle="modal">
                                            ลบ
                                        </a>
                                    </td>
                                </tr>
                                <script>
                                    function editPackage<?php echo $i; ?>() {
                                        document.getElementById("idpackage").value = '<?php echo $rowHistory["idpackage"]; ?>';
                                        document.getElementById("packagenames").value = '<?php echo $rowHistory["packagename1"]; ?>';
                                        document.getElementById("numbers").value = '<?php echo $rowHistory["price"]; ?>';
                                        document.getElementById("prices").value = '<?php echo $rowHistory["number"]; ?>';
                                    }
                                </script>
                        <?php
                                $i++;
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