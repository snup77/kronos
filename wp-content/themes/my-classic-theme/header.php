<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
</head>
<body>
    <header class="site-header">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="50" height="50">
                    <circle cx="50" cy="50" r="48" fill="#0073aa" />
                    <text x="50%" y="55%" text-anchor="middle" fill="#fff" font-size="40" font-family="Arial, sans-serif" dy=".3em">WP</text>
                </svg>
            </a>
        </div>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'main-menu',
            ));
            ?>
        </nav>
    </header>
    <main>