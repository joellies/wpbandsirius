<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>"">
  <meta http-equiv=" X-UA-Compatible" content="IE=edge">
  <meta name=" viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php
      if (is_front_page()) : body_class("header-collapse");
      endif ?>>
  <?php do_action('after_body_open_tag'); ?>
  <div id="site-content">
    <header class="site-header">
      <div class="container">
        <a href="<?php bloginfo("index.php"); ?>" id="branding">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
          <?php echo get_bloginfo("title"); ?>
          <small class=" site-description">
            <?php echo get_bloginfo("description"); ?></small>
        </a>
        <div class="searchForm"><?php get_search_form(); ?></div>
        <!-- #branding -->
        <?php wp_nav_menu(array(
          'theme_location' => 'header_menu',
          'container' => 'nav',
          'menu_class' => 'menu',
          'container_class' => 'main-navigation',
        )); ?>

        <div class="mobile-menu"></div>
      </div>
    </header> <!-- .site-header -->
</body>

</html>