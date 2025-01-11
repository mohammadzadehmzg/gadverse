<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gadverse</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $BaseUrl; ?>/assets/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicon_io/site.webmanifest">

    <link rel="stylesheet" href="<?= $BaseUrl; ?>/assets/lib/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $BaseUrl; ?>/assets/lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= $BaseUrl; ?>/assets/css/styles.css">
    <script src="<?= $BaseUrl; ?>/assets/lib/jquery-3.7.1.min.js"></script>
    <script src="<?= $BaseUrl; ?>/assets/lib/popper.min.js"></script>
    <script src="<?= $BaseUrl; ?>/assets/lib/bootstrap.min.js"></script>
    <script src="<?= $BaseUrl; ?>/assets/lib/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?= $BaseUrl; ?>/assets/lib/swiper@11/swiper-bundle.min.css"></script>
    <script src="<?= $BaseUrl; ?>/assets/js/configs.js"></script>
</head>

<body id="<?= $url[0] . "_" . $url[1]; ?>">

<header class="d-print-none">
    <nav class="">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="#">
                        <img src="<?= $BaseUrl; ?>/assets/img/logo.png" alt="Logo" width="80"
                             class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto m-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">CATEGORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/compare_device">COMPARE PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">DIGISTARS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">TOP PICKS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">ABOUT US</a>
                            </li>
                        </ul>
                        <form class="d-flex align-items-center" role="search">
                            <input class="form-control me-2 home-search-input" type="search"
                                   placeholder="PRODUCT NAME" aria-label="Search">
                            <button class="btn text-white" type="submit">
<!--                                <i class="bi bi-person-circle" style="font-size: 30px"></i>-->
                                <img src="<?= $BaseUrl; ?>/assets/img/icon_account-12.png" alt="Logo" width="30"
                                     class="d-inline-block align-text-top">
                            </button>
                        </form>
                    </div>
            </nav>
        </div>

        <!--            <div class="container-fluid offset-6">-->
        <!--              -->
        <!---->
        <!--            </div>-->
    </nav>
</header>
