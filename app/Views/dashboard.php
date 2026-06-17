<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperMarket</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark d-md-none">
        <div class="container-fluid">
            <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
                <i class="bi"></i>☰
            </button>
            <span class="navbar-brand ms-2">SuperMarket</span>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-none d-md-block bg-dark text-white sidebar vh-100 p-0">
                <div class="d-flex flex-column p-3">
                    <span class="fs-4 mb-4">SuperMarket</span>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white active" aria-current="page" data-dashboard-page="caisse">
                                Caisse
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white" data-dashboard-page="produits">
                                Produits
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                stock
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <a href="<?= site_url('logout') ?>" class="nav-link text-white">
                        Déconnexion
                    </a>
                </div>
            </nav>

            <div class="offcanvas offcanvas-start bg-dark text-white d-md-none" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">SuperMarket</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white active" aria-current="page" data-dashboard-page="caisse">
                                Caisse
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white" data-dashboard-page="produits">
                                Produits
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                stock
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <a href="<?= site_url('logout') ?>" class="nav-link text-white">
                        Déconnexion
                    </a>
                </div>
            </div>

            <main class="col-md-9 col-lg-10 ms-sm-auto px-md-4 py-4" id="dashboard-main" data-default-page="caisse">

            </main>

        </div>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        window.dashboardPages = {
            caisse: "<?= site_url('dashboard/caisse') ?>",
            produits: "<?= site_url('dashboard/produits') ?>"
        };
    </script>
    <script src="<?= base_url('assets/js/script_dashoard.js') ?>"></script>
</body>

</html>
