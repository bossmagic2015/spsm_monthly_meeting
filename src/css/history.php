<style>
    .history-list {
        display: flex;
        align-items: center;
        width: 100%;
        margin-bottom: 1.5rem;
        padding-left: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border-radius: 16px;
        padding: 1rem;
        background-color: var(--card-bg);
    }

    .list-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background-color: var(--pwa-base);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        color: var(--primary-color);
        font-size: 1.4rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border: none;
    }

    .list-detail {
        display: flex;
        flex-direction: column;
    }

    .list-label {
        font-size: 0.85rem;
        color: var(--text-muted);
        margin-bottom: 2px;
    }

    .list-data {
        font-size: 1rem;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 0.5rem;
    }
</style>