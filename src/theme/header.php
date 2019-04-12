<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110577987-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-110577987-1');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<header class="header">
    <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="">
    </a>
    <nav>
        <?php wp_nav_menu(); ?>
    </nav>
</header>

<body <?php body_class(); ?>>
