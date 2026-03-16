    <?php
    $basePath = basename($_SERVER['PHP_SELF']);
    ?>

    <div class="foot-menu">
        <nav class="navbar fixed-bottom navbar-light bg-white border-top shadow-sm py-2">
            <div class="container-fluid px-0">
                <div class="d-flex w-100 justify-content-around">
                    <a href="history.php" class="nav-link text-center pt-2 pb-1 text-muted <?= $basePath == 'history.php' ? 'active' : '' ?>">
                        <i class="bi bi-list-task fs-4 d-block"></i>
                        <span style="font-size: 10px;">ประวัติ</span>
                    </a>
                    <a href="#" class="nav-link text-center pt-2 pb-1 text-muted">
                        <i class="bi bi-filetype-pdf fs-4 d-block"></i>
                        <span style="font-size: 10px;">คำชี้แจง</span>
                    </a>
                    <a href="main.php" class="nav-link text-center pt-2 pb-1 text-primary <?= $basePath == 'main.php' ? 'active' : '' ?>">
                        <i class="bi bi-qr-code-scan fs-4 d-block"></i>
                        <span style="font-size: 10px;">สแกน</span>
                    </a>
                    <a href="personal.php" class="nav-link text-center pt-2 pb-1 text-muted <?= $basePath == 'personal.php' ? 'active' : '' ?>">
                        <i class="bi bi-person fs-4 d-block"></i>
                        <span style="font-size: 10px;">ข้อมูลส่วนตัว</span>
                    </a>
                    <a href="#" class="nav-link text-center pt-2 pb-1 text-muted btn-logout">
                        <i class="bi bi-door-closed fs-4 d-block"></i>
                        <span style="font-size: 10px;">ออกจากระบบ</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>