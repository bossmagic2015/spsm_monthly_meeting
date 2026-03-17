<style>
    .content {
        flex: 1;
        padding: 80px 15px 80px 15px;
        scroll-behavior: smooth;
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 50px;
        z-index: 1000;
    }

    .foot-menu {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        z-index: 1000;
    }

    .foot-menu .nav-link {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        color: var(--nav-color) !important;
    }

    .foot-menu .nav-link.active {
        color: var(--primary-color) !important;
    }

    .foot-menu .nav-link.active i {
        transform: translateY(-3px);
        color: var(--primary-color);
    }

    .foot-menu .nav-link span {
        font-weight: 400;
        margin-top: 2px;
    }

    .btn-login {
        background-color: var(--primary-color);
        color: white;
        margin-top: 20px;
    }

    .btn-login:hover {
        background-color: #035c3d;
        color: white
    }

    .page-title {
        color: var(--primary-color);
        font-size: 20px;
        margin-bottom: 2rem;
    }
</style>