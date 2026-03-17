<style>
    .main-card {
        background-color: var(--card-bg);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border-radius: 16px;
        width: 100%;
        height: 420px;
        max-height: 600px;
    }

    .card-header-img {
        width: 100%;
        height: 240px;
        overflow: hidden;
        border-radius: 16px 16px 0 0;
    }

    .img-placeholder,
    .img-placeholder img {
        width: 100%;
        height: 100%;
        display: block;
    }

    .img-placeholder img {
        object-fit: cover;
    }

    .card-body-detail {
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card-body-detail h5 {
        color: var(--text-main);
    }

    .card-body-detail p {
        color: var(--text-muted);
    }
</style>