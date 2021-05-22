<!DOCTYPE html>
<html>
    <head>
        <!-- FAVICONS -->
        <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <?php 
            wp_head();
        ?>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- SEO/META -->
        <!--<meta property="og:image" content="">
        <meta property="og:type" content="website">


        <!-- SEO/META --
        <title>Home - TopFlight Builders</title>
        <meta name="description" content="">
        <link rel="canonical" href="">
        <meta property="og:title" content="Home - TopFlight Builders">
        <meta property="og:description" content="">
        <meta property="og:url" content="">-->
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                    <?php 
                        if (function_exists('the_custom_logo')) {
                            //the_custom_logo();
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, array());
                        }
                    ?>
                    <img src="<?php echo $logo[0]; ?>" alt="TopFlight Builders Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse highlightTextIn" id="navbarNav">
                    <?php 
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="" class="navbar-nav ml-auto my-2 my-lg-0">%3$s</ul>',
                                'walker' => new WP_Bootstrap_Navwalker()
                            )
                        );
                    ?>
                    <?php 
                        /*
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="" class="navbar-nav ml-auto my-2">%3$s</ul>'
                            )
                        );
                        */
                    ?>
                    <!--<ul class="navbar-nav ml-auto my-2">
                        <li class="nav-item">
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>" href="home" data-text="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : '' ?>" href="about" data-text="About">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'estimate.php') ? 'active' : '' ?>" href="estimate" data-text="Get An Estimate">Get An Estimate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'gallery.php') ? 'active' : '' ?>" href="gallery" data-text="Gallery">Gallery</a>
                        </li>
                    </ul>-->
                </div>
            </div>
        </nav>