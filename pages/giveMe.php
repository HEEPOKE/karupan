<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="card-title">ประวัติการเบิก/ยืมวัสดุ-ครุภัณฑ์</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รหัสวัสดุ-ครุภัณฑ์</th>
                            <th>ชื่อวัสดุ-ครุภัณฑ์</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>วันที่เบิก/ยืม</th>
                            <th>จำนวน</th>
                            <th>สถานะ</th>
                            <th>ราคา</th>
                            <th>หมายเหตุ</th>
                            <th>คืนวัสดุ-ครุภัณฑ์</th>
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
                                <tr class="text-center">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $rowHistory["itemscode"]; ?></td>
                                    <td><?php echo $rowHistory["packagename"]; ?></td>
                                    <td><?php echo $rowHistory["name"] . '  ' . $rowHistory["lastname"]; ?></td>
                                    <td><?php echo $rowHistory["date"]; ?></td>
                                    <td><?php echo $rowHistory["number"]; ?></td>
                                    <td><?php echo $rowHistory["status"]; ?></td>
                                    <td><?php echo $rowHistory["price"]; ?></td>
                                    <td><?php echo $rowHistory["note"]; ?></td>
                                    <td>
                                        <a href="pages/returnPackageService.php?id=<?php echo $rowHistory["id"]; ?>" class="btn btn-primary">
                                            คืนวัสดุ-ครุภัณฑ์
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