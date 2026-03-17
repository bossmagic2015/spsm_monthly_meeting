<script>
    $(document).ready(function() {
        // ออกจากระบบ
        $('.btn-logout').on('click', function() {
            window.location.href = 'login.php';
        })

        // Loading
        $('#preloader').fadeOut(400, function() {
            $('.content').addClass('animate-up');
        });

        // ตั้งค่าธีม Light, Dark
        const $btnToggle = $('#theme-toggle');
        const $html = $('html');

        function updateToggleButton(theme) {
            $html.attr('data-theme', theme);
            localStorage.setItem('theme', theme);
        }

        $btnToggle.on('click', function() {
            const isDark = $html.attr('data-theme') === 'dark';
            updateToggleButton(isDark ? 'light' : 'dark');
        });

        // ตรวจสอบค่าเริ่มต้นของธีม
        const savedTheme = localStorage.getItem('theme') || 'light';
        updateToggleButton(savedTheme);
    });
</script>