<!doctype html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yourdomain.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://yourdomain.com/assets/images/og-image.jpg">

    <link rel="canonical" href="https://yourdomain.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <!-- Favicon -->
    <!-- <link href="assets/favicon.png?v=1738728310" rel="shortcut icon" type="image/x-icon" /> -->


    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <!-- Vendor CSS -->

    <link href="assets/css/bootstrap/css/bootstrap.min.css?v=1738728310" rel="stylesheet" type="text/css" />
    <link href="assets/css/fontawesome-free/css/all.min.css?v=1738728310" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate/animate.compat.css?v=1738728310" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/simple-line-icons/css/simple-line-icons.min.css?v=1738728310" rel="stylesheet"
        type="text/css" /> -->
    <link href="assets/css/owl.carousel/assets/owl.carousel.min.css?v=1738728310" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.carousel/assets/owl.theme.default.min.css?v=1738728310" rel="stylesheet"
        type="text/css" />
    <link href="assets/css/magnific-popup/magnific-popup.min.css?v=1738728310" rel="stylesheet" type="text/css" />


    <!-- Theme CSS -->
    <link href="assets/css/theme-elements.css?v=1738728310" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-blog.css?v=1738728310" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-shop.css?v=1738728310" rel="stylesheet" type="text/css" />

    <link href="assets/css/demo-it-services.css?v=1738728310" rel="stylesheet" type="text/css" />
    <!-- Skin CSS -->
    <link href="assets/css/skin-it-services.css?v=1738728310" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.css?v=1738728310" rel="stylesheet" type="text/css" />

    <!-- Theme Custom CSS -->
    <link href="assets/css/custom.css?v=1738728310" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/node-snackbar@latest/dist/snackbar.min.css" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T21B0FFW8M"></script>


</head>

<body>
    <div class="body">
        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 90}">
            <div class="header-body border-top-0 box-shadow-none">
                <div class="header-container container container-xl-custom">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="/" class="text-5 fw-bolder"><img
                                            src="./assets/images/Amberoo-logo.png" alt="logo" srcset="" width="250"></a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div
                                    class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a href="/" class="nav-link ">Home</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="about.php">
                                                        About Us
                                                    </a>
                                                </li>
                                                <!-- <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="services.php">
                                                        Services
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="nav-link" href="web-design.php">Web Design &
                                                                Development</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" href="social-media.php">Social Media
                                                                Management</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" href="review-response.php">Review
                                                                Response Management</a>
                                                        </li>

                                                    </ul>
                                                </li> -->

                                                <li>
                                                    <a href="products.php" class="nav-link ">Products</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="pricing.php">
                                                        Pricing
                                                    </a>
                                                </li>
                                                <!-- <li>
                                                    <a class="nav-link" href="contact.php">
                                                        Contact
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div class="d-none d-sm-inline-flex order-1 order-lg-2 ms-2">
                                    <a href="contact.php"
                                        class="btn btn-primary mb-2">Get Started Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    </div>
