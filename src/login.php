<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประชุมบุคลากร - โรงเรียนสาธิต มศว ประสานมิตร (ฝ่ายมัธยม)</title>

    <link rel="icon" href="../assets/bg/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.22/dist/sweetalert2.min.css" rel="stylesheet">

    <?php include("css/style.php"); ?>
    <?php include("css/login.php"); ?>
</head>

<body>
    <!-- content -->
    <div class="content">
        <!-- online -->
        <div id="main-content">
            <div class="img-header">
                <div class="container d-flex justify-content-center">
                    <img class="navbar-brand-img" src="../assets/bg/logo.png" alt="Ombe Logo">
                </div>
            </div>

            <div class="container px-4">
                <div class="row">
                    <div class="col-12 login-header">
                        <h4 class="mb-2">ประชุมบุคลากร</h4>
                        <p>โรงเรียนสาธิต มศว ประสานมิตร (ฝ่ายมัธยม)<br>ใช้สำหรับการสแกนลงทะเบียนเข้า-ออก ประชุมประจำเดือน</p>
                    </div>

                    <div class="col-12">
                        <form id="loginForm">
                            <div class="mb-4">
                                <label class="form-label">Username</label>
                                <input id="username" type="text" class="form-control form-control-custom" placeholder="เลขประจำตัวประชาชน 5 ตัวหลัง">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" id="password" class="form-control form-control-custom" placeholder="เบอร์โทรศัพท์" autocomplete="off">
                                    <span class="input-group-text-custom">
                                        <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer; color: var(--primary-color);"></i>
                                    </span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-pill btn-login w-100 mt-4">เข้าสู่ระบบ</button>
                        </form>

                        <div class="helper-text">
                            ติดต่อข้อมูลเพิ่มเติม <a href="https://lin.ee/E3PDOZ5" target="_blank" class="link-green">ADD LINE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- offline -->
        <?php include('offline.php') ?>
    </div>

    <?php include("layouts/cdn.php"); ?>
    <?php include('js/middleware.php'); ?>

    <script>
        $(document).ready(function() {
            const defaultTheme = localStorage.getItem('theme') || 'light';
            $('html').attr('data-theme', defaultTheme);

            $('#togglePassword').on('click', function() {
                const passwordField = $('#password');
                const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
                passwordField.attr('type', type);
                $(this).toggleClass('bi-eye bi-eye-slash');
            });

            $('#loginForm').submit(async function(e) {
                e.preventDefault();

                const username = $('#username').val() ?? '';
                const password = $('#password').val() ?? '';

                if (!username || !password) {
                    return alert('please fill input');
                }

                let result = await $.ajax({
                    url: '../router/auth.php',
                    method: 'post',
                    dataType: 'json',
                    data: {
                        userAuth: true,
                        username: username,
                        password: password
                    }
                });

                console.log(result);
                if (result.status == 'success') {
                    window.location.href = "main.php";
                }
            })
        });
    </script>
</body>

</html>