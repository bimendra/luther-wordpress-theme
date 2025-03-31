
<?php
/**
 * Header template
 */
?>

<!DOCTYPE html>
<html class="no-js ss-preload" <?php language_attributes(); ?>>
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">   
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <!-- <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css"> -->

    <!-- favicons
    ================================================== -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest"> -->
    <?php site_icons(); ?>
    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>


    <!-- # preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- # page wrap
    ================================================== -->
    <div class="s-pagewrap">

        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>


        <!-- ## site header 
        ================================================== -->
        <header class="s-header">

            <div class="header-mobile">
                <span class="mobile-home-link"><a href="index.html">Luther.</a></span>
                <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <div class="row wide main-nav-wrap">
                <!-- <nav class="column lg-12 main-nav">
                    <ul>
                        <li><a href="index.html" class="home-link">Luther.</a></li>
                        <li class="current"><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#about" class="smoothscroll">About</a></li>
                        <li><a href="#works" class="smoothscroll">Works</a></li>
                        <li><a href="#contact" class="smoothscroll">Say Hello</a></li>
                    </ul>
                </nav> -->
                <?php 
                  wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'column lg-12 main-nav'
                  ])
                ?>
            </div>

        </header> <!-- end s-header -->


        <!-- ## main content
        ==================================================- -->
        <main class="s-content">