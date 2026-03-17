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
        <div id="main-content">
            Scan
        </div>

        <div id="offline-content" style="display: none; text-align: center; padding: 50px;">
            <i class="fas fa-wifi-slash" style="font-size: 4rem; color: #ccc;"></i>
            <h2 style="margin-top: 20px;">คุณไม่ได้เชื่อมต่ออินเทอร์เน็ต</h2>
            <p>กรุณาตรวจสอบการเชื่อมต่อของคุณและลองใหม่อีกครั้ง</p>
            <button onclick="window.location.reload()" class="btn-pill" style="background: var(--primary-color); color: white; padding: 10px 20px; border: none; cursor: pointer;">
                ลองใหม่อีกครั้ง
            </button>
        </div>
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