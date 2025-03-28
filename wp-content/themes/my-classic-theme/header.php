
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="">
    <div class=" site-header container">
      <a href="<?php echo home_url(); ?>" class="logo">
        <img src="https://www.shethagency.com/wp-content/uploads/2024/06/shethlogo-black.png" alt="Sheth Agency">
      </a>
      <nav class="main-nav">
        <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class' => 'main-menu',
            'container' => false
          ]);
        ?>
      </nav>
    </div>
  </header>