<style>
    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400;500;600;700&display=swap");

    /* Light Mode */
    :root {
        --primary-color: #04764e;
        --primary-light-color: #069b67;
        --primary-dark-color: #035c3d;
        --pwa-base: #ffffff;
        --card-bg: #ffffff;
        --text-main: #212529;
        --text-muted: #6c757d;
        --navbar-bg: #ffffff;
        --border-color: #dee2e6;
        --nav-color: #6c757d;
    }

    /* Dark Mode */
    [data-theme="dark"] {
        --pwa-base: #121212;
        --card-bg: #1e1e1e;
        --text-main: #f6f3f3;
        --text-muted: #a0a0a0;
        --navbar-bg: #1e1e1e;
        --border-color: #333333;
        --primary-light-color: #08b97b;
        --primary-color: #069b67;
        --nav-color: #b9bec3;
    }

    /* เปลี่ยน Icon สลับโหมด */
    /* Light */
    [data-theme="light"] #dark-theme {
        display: none;
    }

    [data-theme="light"] #light-theme {
        background-color: #ffffff;
        color: #ffc107;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Dark */
    [data-theme="dark"] #light-theme {
        display: none;
    }

    [data-theme="dark"] #dark-theme {
        background-color: #343a40;
        color: #d3e33f;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
    }

    /* ตั้งค่าเริ่มต้นเป็น Light Mode */
    html:not([data-theme]) #light-theme {
        display: none;
    }

    /* reset ค่าเริ่มต้นของบราวเซอร์ */
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* กำหนดส่วน body */
    body {
        background-color: var(--pwa-base);
        font-family: "IBM Plex Sans Thai", sans-serif;
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        color: var(--text-main);
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
        margin-bottom: 0;
    }

    .navbar {
        background-color: var(--navbar-bg) !important;
        border-color: var(--border-color) !important;
    }

    /* Icon สำหรับ สลับโหมด */
    .theme-switch-wrapper {
        padding: 4px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .theme-switch-wrapper i {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        font-size: 1.2rem;
    }

    .theme-switch-wrapper i:not(.active) {
        color: var(--text-muted);
        opacity: 0.6;
    }

    .theme-switch-wrapper i:hover {
        transform: scale(1.1);
    }

    /* Card */
    .custom-card {
        border: none;
        border-radius: var(--card-bg);
        background-color: var(--card-bg);
        color: var(--text-main);
        transition: transform 0.2s;
    }

    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Buttons Style */
    .btn-pill {
        border-radius: 50px;
        padding: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.9rem;
        border: none;
        transition: all 0.3s;
    }
</style>