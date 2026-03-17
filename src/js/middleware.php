<script>
    // ติดตั้ง Service workder
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('sw.js')
            // .then(reg => console.log('Service Worker Registered!'))
            // .catch(err => console.log('Registration Failed:', err));
        });
    }

    // ตรวจสอบสถานะออนไลน์
    const $mainContent = $('#main-content'); // ออนไลน์
    const $offlineContent = $('#offline-content'); // ออฟไลน์

    function updateOnlineStatus() {
        if (navigator.onLine) {
            $mainContent.show();
            $offlineContent.hide();
        } else {
            $mainContent.hide();
            $offlineContent.show();
        }
    }

    updateOnlineStatus();
    $(window).on('online offline', updateOnlineStatus);
</script>