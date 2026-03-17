<!DOCTYPE html>
<html lang="th">

<head>
    <!-- head -->
    <?php include("layouts/head.php"); ?>
    <?php include("css/scan.php") ?>
    <style>
        /* ซ่อน Scanner ไว้เป็น Overlay */
        #qr-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            /* Backdrop ดำโปร่งแสง */
            display: none;
            /* ปิดไว้ก่อน */
            z-index: 9999;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #reader {
            width: 90%;
            max-width: 400px;
            /* background: #fff; */
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }

        .btn-close-scanner {
            margin-top: 20px;
            background: var(--card-bg);
            color: var(--text-muted);
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
        }

        /* ลบขอบและข้อความที่ไม่จำเป็นของ Library ออก */
        #reader__dashboard,
        #reader__status_span {
            display: none !important;
        }

        #reader video {
            border-radius: 15px;
        }  
    </style>
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
                            <img src="<?= ASSETS_URL ?>/bg/bgspsm.jpg" alt="">
                        </div>
                    </div>

                    <div class="card-body-detail">
                        <h5 class="fw-bold">ประชุมบุคลากรครั้งที่ 1/2569</h5>
                        <p class="small">กรุณากดปุ่มด้านล่างเพื่อบันทึกเวลาเข้าร่วม</p>

                        <div class="mt-3">
                            <button id="openQr" class="btn-pill btn-login w-100">เข้าร่วมประชุม</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offline -->
        <?php include('offline.php') ?>

        <div id="qr-overlay">
            <div id="reader">
                <div class="zoom-container" id="zoom-control">
                    <input type="range" id="zoom-slider" class="zoom-slider" min="1" max="5" step="0.1" value="1">
                    <div class="text-white text-center small mt-1">Zoom</div>
                </div>
            </div>
            <button class="btn-close-scanner" id="closeQr">ยกเลิก</button>
        </div>
    </main>

    <!-- footer -->
    <?php include("layouts/menu.php"); ?>
    <!-- cdn -->
    <?php include("layouts/cdn.php"); ?>
    <!-- js -->
    <?php include('js/middleware.php'); ?>
    <?php include("js/main.php"); ?>
    <script src="js/html5Qrcode.min.js"></script>

    <script>
        // ประกาศตัวแปร Global ไว้สำหรับควบคุมการปิดกล้อง
        let html5QrCode;

        $(document).ready(function() {
            // สร้าง Instance ของตัวสแกน
            html5QrCode = new Html5Qrcode("reader");

            const qrConfig = {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                },
                aspectRatio: 1.0 // ช่วยให้ภาพใน iOS ไม่ยืด
            };

            // ฟังก์ชันเปิดกล้องทันที
            $('#openQr').on('click', function() {
                $('#qr-overlay').css('display', 'flex').hide().fadeIn(300);

                // เริ่มต้นกล้อง (ใช้กล้องหลัง environment)
                html5QrCode.start({
                        facingMode: "environment"
                    },
                    qrConfig,
                    (decodedText) => {
                        // เมื่อสแกนสำเร็จ
                        console.log("Scanned:", decodedText);
                        alert("สแกนสำเร็จ: " + decodedText);
                        stopScanner(); // ปิดกล้อง
                    },
                    (errorMessage) => {
                        // ข้าม error ตอนหา QR ไม่เจอ
                    }
                ).catch((err) => {
                    alert("ไม่สามารถเข้าถึงกล้องได้: " + err);
                    $('#qr-overlay').fadeOut();
                });
            });

            // ปุ่มปิด/ยกเลิก
            $('#closeQr').on('click', function() {
                stopScanner();
            });
        });

        function stopScanner() {
            if (html5QrCode && html5QrCode.isScanning) {
                html5QrCode.stop().then(() => {
                    $('#qr-overlay').fadeOut();
                }).catch((err) => console.error("Stop failed", err));
            } else {
                $('#qr-overlay').fadeOut();
            }
        }
    </script>
</body>

</html>