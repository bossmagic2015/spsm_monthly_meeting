<style>
    .content {
        flex: 1;
        padding: 80px 15px 100px 15px;
    }

    .navbar-brand-img {
        max-height: 170px;
        object-fit: contain;
    }

    /* Form Styling */
    .login-header h3 {
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 10px;
    }

    .login-header p {
        color: var(--text-muted);
        font-size: 0.9rem;
        line-height: 1.5;
        margin-bottom: 30px;
    }

    .form-label {
        color: #b1b1b1;
        font-size: 0.85rem;
        margin-bottom: 5px;
        font-weight: 500;
    }

    /* เปลี่ยน input เป็นแบบเส้นขีดล่าง */
    .form-control-custom {
        border: none;
        border-bottom: 1px solid #eee;
        border-radius: 0;
        padding: 10px 0;
        font-weight: 500;
        box-shadow: none !important;
    }

    .form-control-custom:focus {
        border-bottom: 2px solid var(--primary-color);
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

    .btn-create {
        background-color: var(--secondary-color);
        color: #4a4a4a;
        margin-top: 15px;
    }

    /* Link & Text Helpers */
    .helper-text {
        font-size: 0.85rem;
        color: var(--text-muted);
        margin-top: 20px;
        text-align: center;
    }

    .link-green {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .input-group-text-custom {
        background: transparent;
        border: none;
        border-bottom: 1px solid #eee;
        border-radius: 0;
    }

    [data-theme="dark"] .form-control-custom {
        background-color: transparent;
        color: var(--text-main);
        border-bottom-color: #444;
    }

    [data-theme="dark"] .form-control-custom:focus {
        border-bottom-color: var(--primary-light-color);
    }

    [data-theme="dark"] .input-group-text-custom {
        border-bottom-color: #444;
        color: var(--text-muted);
    }

    [data-theme="dark"] .btn-create {
        background-color: #2a2a2a;
        color: var(--secondary-light-color);
        border: 1px solid var(--secondary-dark-color);
    }
   
    [data-theme="dark"] input::placeholder {
        color: #a0a0a0;       
        opacity: 1;       
    }

    @media (max-width : 768px) {
        .navbar-brand-img {
            max-height: 120px;
            object-fit: contain;
        }
    }
</style>