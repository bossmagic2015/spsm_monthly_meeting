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
            <h4>ไม่ได้เชื่อมต่อ</h4>
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