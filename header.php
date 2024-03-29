<?php global $bionatura_options; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= BIONATURA_IMG_URL . 'favicon/android-chrome-512x512.png'; ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= BIONATURA_IMG_URL . 'favicon/android-chrome-192x192.png'; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BIONATURA_IMG_URL . 'favicon/apple-touch-icon.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BIONATURA_IMG_URL . 'favicon/favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BIONATURA_IMG_URL . 'favicon/favicon-16x16.png'; ?>">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />

    <!-- CSS -->
    <?php wp_head(); ?>
</head>
<body class="theme-creote">
    <div id="page" class="page_wapper hfeed site">
        <div id="wrapper_full" class="content_all_warpper">
            <div class="header_area" id="header_contents">
                <!-- Top bar -->
                <div class="top_bar style_one">
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="top_inner">
                                    <div class="left_side common_css">
                                        <div class="contntent address">
                                            <i class="icon-placeholder"></i>
                                            <div class="text">
                                                <small>Adresse :</small>
                                                <span>Grand Carrefour CAP, Amadahome, Lomé</span>
                                            </div>
                                        </div>
                                        <div class="contntent email">
                                            <i class="icon-email"></i>
                                            <div class="text">
                                                <small>Email :</small>
                                                <a href="mailto:info@bionaturaprod.com">info@bionaturaprod.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_side common_css">
                                        <div class="contntent phone">
                                            <i class="icon-phone-call"></i>
                                            <div class="text">
                                                <small>Téléphone :</small>
                                                <span>+228 90060929 / 97622515</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header -->
                <header class="header header_default style_one get_sticky_header">
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-9 col-sm-9 col-xs-9 logo_column">
                                <div class="header_logo_box">
                                    <a href="http://localhost/bionatura/" class="logo navbar-brand">
                                        <img src="<?= BIONATURA_IMG_URL . 'logo.png'; ?>" alt="Logo" class="logo_default">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-3 col-sm-3 col-xs-3 menu_column">
                                <div class="navbar_togglers hamburger_menu">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                                <div class="header_content_collapse">
                                    <div class="header_menu_box">
                                        <div class="navigation_menu">
                                            <ul id="myNavbar" class="navbar_nav">
                                                <li class="menu-item nav-item">
                                                    <a href="http://localhost/bionatura/" class="nav-link"><span>Accueil</span></a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="http://localhost/bionatura/a-propos/" class="nav-link"><span>A propos</span></a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="http://localhost/bionatura/notre-mission/" class="nav-link"><span>Notre mission</span></a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="http://localhost/bionatura/details-techniques/" class="nav-link"><span>Détails techniques</span></a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="http://localhost/bionatura/actualites/" class="nav-link"><span>Actualités</span></a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="http://localhost/bionatura/contact/" class="nav-link"><span>Contact</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

            <div id="content" class="site-content">