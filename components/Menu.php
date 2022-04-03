<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $person; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="?page=profile" class="nav-link"><?php echo $type; ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="?page=home" class="nav-link">
                        <img src="<?php echo $homepage; ?>" alt="" srcset="" width="30" height="30">
                        <p>
                            &emsp;หน้าแรก
                        </p>
                    </a>
                </li>
                <?php if ($type == "admin") { ?>
                    <li class="nav-item">
                        <a href="?page=update" class="nav-link">
                            <img src="<?php echo $package; ?>" alt="" srcset="" width="30" height="30">
                            <p>
                                &emsp;จัดการวัสดุ-ครุภัณฑ์
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($type == "user") { ?>
                    <li class="nav-item">
                        <a href="?page=add" class="nav-link">
                            <img src="<?php echo $package; ?>" alt="" srcset="" width="30" height="30">
                            <p>
                                &emsp;เบิก
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-header">Setting</li>
                <?php if ($type == "admin") { ?>
                    <li class="nav-item">
                        <a href="pages/register.php" class="nav-link" onclick="window.open('pages/register.php', '_blank'); return false;">
                            <img src="<?php echo $edit; ?>" width="30" height="30">
                            <p>&emsp;เพิ่มเเละจัดการผู้ใช้</p>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="pages/login.php" class="nav-link">
                        <img src="<?php echo $logout; ?>" width="30" height="30">
                        <p>&emsp;logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>