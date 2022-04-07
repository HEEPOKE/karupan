<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">รายการวัสดุ - ครุภัณฑ์</h3>
                </div>
                <div class="card-body">
                    <table id="historyone" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>รหัสวัสดุ-ครุภัณฑ์</th>
                                <th>ชื่อวัสดุ-ครุภัณฑ์</th>
                                <th>จำนวน</th>
                                <th>ราคา</th>
                                <th>เบิก/ยืมวัสดุ-ครุภัณฑ์</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $queryHistory = "SELECT * FROM package";
                            $resultHistory = $conn->query($queryHistory);
                            if ($resultHistory->num_rows > 0) {
                                while ($rowHistory = $resultHistory->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td><?php echo $rowHistory["idpackage"]; ?></td>
                                        <td><?php echo $rowHistory["packagename1"]; ?></td>
                                        <td><?php echo $rowHistory["price"]; ?></td>
                                        <td><?php echo $rowHistory["number"]; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary" data-toggle="modal" onclick="Ordering(`<?php echo $rowHistory['packagename1']; ?>`)" data-target="#modal-default">
                                                เบิก/ยืมวัสดุ-ครุภัณฑ์
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