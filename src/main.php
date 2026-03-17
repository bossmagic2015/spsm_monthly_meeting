<!DOCTYPE html>
<html lang="th">

<head>
    <!-- head -->
    <?php include("layouts/head.php"); ?>
    <?php include("css/scan.php") ?>
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
            <div class="container py-5 d-flex flex-column align-items-center">
                <div class="page-title fw-bold mb-4">สแกนเข้าร่วมประชุม</div>

                <div class="main-card">
                    <div class="card-header-img">
                        <div class="img-placeholder">
                            <img src="../assets/bg/bgspsm.jpg" alt="">
                        </div>
                    </div>

                    <div class="card-body-detail">
                        <h5 class="fw-bold">ประชุมบุคลากรครั้งที่ 1/2569</h5>
                        <p class="small">กรุณากดปุ่มด้านล่างเพื่อบันทึกเวลาเข้าร่วม</p>

                        <div class="mt-3">
                            <button class="btn-pill btn-login w-100">เข้าร่วมประชุม</button>
                        </div>
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