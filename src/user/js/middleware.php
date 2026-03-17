<script>
    // install service worker
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('sw.js')
                .then(reg => console.log('Service Worker Registered!'))
                .catch(err => console.log('Registration Failed:', err));
        });
    }

    // check online status
    const $mainContent = $('#main-content');
    const $offlineContent = $('#offline-content');

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