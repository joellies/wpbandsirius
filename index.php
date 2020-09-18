<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>"">
  <meta name=" viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />
  <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
    <![endif]-->

<body>
  <?php get_header() ?>
  <?php
  if (have_posts()) :
  ?>
  <?php
    //On commence la boucle
    while (have_posts()) : the_post();
      get_template_part(
        'template-parts/content',
        get_post_format()
      );
    endwhile;
    the_posts_pagination(array(
      'prev_text' => __('Previous page', 'wpTest'),
      'next_text' => __('Next page', 'wpTest'),
      'before_page_number' => '<span class="meta-navscreen-reader-text">' . __('Page', 'wpTest') . '</span>',
    ));
  //Si pas de contenu, no posts found
  else :
    get_template_part('template-parts-content', 'none');
  endif;
  ?>
  <?php get_footer() ?>

  <!-- #site-content -->
</body>

</html>