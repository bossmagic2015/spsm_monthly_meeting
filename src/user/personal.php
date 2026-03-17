<!DOCTYPE html>
<html lang="th">

<head>
    <!-- head -->
    <?php include("layouts/head.php"); ?>
</head>

<body>
    <!-- loading -->
    <?php include("layouts/loading.php"); ?>

    <!-- header -->
    <?php include("layouts/header.php"); ?>

    <!-- content -->
    <main class="content">
        <!-- online -->
        <div id="main-content">
            <div class="container px-4 d-flex flex-column justify-content-center align-items-center">
                <!-- img -->
                <div class="person-img">

                </div>

                <!-- title -->
                <div class="person-title fw-bold">
                    ทดสอบ ระบบ
                </div>

                <!-- list -->
                <div class="person-list">
                    <div class="list-icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <div class="list-detail">
                        <div class="list-label">หน่วยงาน</div>
                        <div class="list-data">งานเทคโนโลยีสารสนเทศ</div>
                    </div>
                </div>

                <div class="person-list">
                    <div class="list-icon">
                        <i class="bi bi-person-badge"></i>
                    </div>
                    <div class="list-detail">
                        <div class="list-label">ตำแหน่ง</div>
                        <div class="list-data">นักวิชาการคอมพิวเตอร์</div>
                    </div>
                </div>

                <div class="person-list">
                    <div class="list-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="list-detail">
                        <div class="list-label">วันเริ่มทำงาน</div>
                        <div class="list-data">28 มีนาคม 2566</div>
                    </div>
                </div>

                <div class="person-list">
                    <div class="list-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="list-detail">
                        <div class="list-label">อีเมล</div>
                        <div class="list-data">veerayut.a41@gmail.com</div>
                    </div>
                </div>

                <div class="person-list">
                    <div class="list-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div class="list-detail">
                        <div class="list-label">เบอร์โทรศัพท์</div>
                        <div class="list-data">061-106-0253</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- offline -->
        <?php include('offline.php') ?>
    </main>

    <!-- footer -->
    <?php include("layouts/menu.php"); ?>
    <!-- cdn -->
    <?php include("layouts/cdn.php"); ?>
    <!-- js -->
    <?php include('js/middleware.php'); ?>
    <?php include("js/main.php"); ?>
</body>

</html>