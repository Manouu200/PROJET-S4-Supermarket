document.addEventListener('DOMContentLoaded', () => {
    const main = document.getElementById('dashboard-main');
    const links = document.querySelectorAll('[data-dashboard-page]');
    const pages = window.dashboardPages || {};

    if (!main) {
        return;
    }

    const setActiveLink = (page) => {
        links.forEach((link) => {
            const isActive = link.dataset.dashboardPage === page;

            link.classList.toggle('active', isActive);

            if (isActive) {
                link.setAttribute('aria-current', 'page');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    };

    const closeMobileSidebar = () => {
        const offcanvasElement = document.getElementById('sidebarOffcanvas');

        if (!offcanvasElement || !window.bootstrap) {
            return;
        }

        const offcanvas = window.bootstrap.Offcanvas.getInstance(offcanvasElement);

        if (offcanvas) {
            offcanvas.hide();
        }
    };

    const loadPage = async (page) => {
        const url = pages[page];

        if (!url) {
            return;
        }

        main.innerHTML = '<p class="text-muted">Chargement...</p>';

        try {
            const response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (!response.ok) {
                throw new Error(`Erreur HTTP ${response.status}`);
            }

            main.innerHTML = await response.text();
            setActiveLink(page);
            closeMobileSidebar();
        } catch (error) {
            main.innerHTML = '<div class="alert alert-danger">Impossible de charger cette page.</div>';
            console.error(error);
        }
    };

    links.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            loadPage(link.dataset.dashboardPage);
        });
    });

    loadPage(main.dataset.defaultPage || 'caisse');
});
