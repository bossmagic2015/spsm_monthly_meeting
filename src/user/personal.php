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
                    <div class="list-icon"></div>
                    <div class="list-detail"></div>
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