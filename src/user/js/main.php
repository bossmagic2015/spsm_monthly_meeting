<script>
    $(document).on('click', '.btn-logout', function() {
        window.location.href = 'login.php';
    })
</script>

<script>
    $(document).ready(function() {

        $('#preloader').fadeOut(400, function() {
            $('.content').addClass('animate-up');
        });

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

        // ตรวจสอบค่าเริ่มต้น
        const savedTheme = localStorage.getItem('theme') || 'light';
        updateToggleButton(savedTheme);
    });
</script>