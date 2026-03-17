<div class="header">
    <nav class="navbar fixed-top navbar-light bg-white border-0 shadow-sm" style="height: 60px;">
        <div class="container-fluid px-3 h-100">
            <div class="d-flex w-100 justify-content-between align-items-center">

                <div class="brand-logo">
                    <img src="../assets/bg/spsm.png" alt="Logo" style="height: 18px; width: auto;">
                </div>

                <div class="d-flex align-items-baseline gap-3">
                    <div class="theme-switch-wrapper" id="theme-toggle" title="theme">
                        <i class="bi bi-brightness-high-fill" id="light-theme"></i>
                        <i class="bi bi-moon-stars-fill" id="dark-theme"></i>
                    </div>

                    <div class="menu-trigger" data-bs-toggle="offcanvas" data-bs-target="#mainMenu">
                        <i class="bi bi-list"></i>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="mainMenu" aria-labelledby="mainMenuLabel">
    <div class="offcanvas-header p-4">
        <h5 class="offcanvas-title fw-bold" id="mainMenuLabel text-danger">Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="list-group list-group-flush">
            <a href="main.php" class="list-group-item list-group-item-action py-3 px-4 border-0">
                <i class="bi bi-qr-code-scan me-3"></i> สแกน
            </a>
            <a href="personal.php" class="list-group-item list-group-item-action py-3 px-4 border-0">
                <i class="bi bi-person me-3"></i> ข้อมูลส่วนตัว
            </a>
            <a href="history.php" class="list-group-item list-group-item-action py-3 px-4 border-0">
                <i class="bi bi-list-task me-3"></i> ประวัติการเข้าประชุม
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 px-4 border-0">
                <i class="bi bi-filetype-pdf me-3"></i> คำชี้แจง
            </a>
            <hr class="mx-4 my-2">
            <a href="#" class="list-group-item list-group-item-action py-3 px-4 border-0 text-danger btn-logout">
                <i class="bi bi-door-closed me-3"></i> ออกจากระบบ
            </a>
        </div>
    </div>
</div>