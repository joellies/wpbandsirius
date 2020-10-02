<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>"">
  <meta http-equiv=" X-UA-Compatible" content="IE=edge">
  <meta name=" viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />
  <?php wp_head(); ?>
</head>

<body>
  <footer class="site-footer">
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo("title") ?>" />

      <address>
        <p>
          <?php the_field('mfi_adress', 'option'); ?>
          <br />
          <a href="tel:354543543"><?php the_field('mfi_phone', 'option') ?></a>
          <br />
          <?php $mail = get_field('mfi_email', 'option');
          ?>
          <a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a>
        </p>
      </address>

      <form action=" #" class="newsletter-form">
        <?php echo do_shortcode('[sibwp_form id=2] ') ?>
      </form>
      <!-- .newsletter-form -->

      <div class="social-links">
        <a href="<?php the_field('facebook', "option") ?>"><i class="fa fa-facebook-square"></i></a>
        <a href="<?php the_field('twitter', "option") ?>"><i class="fa fa-twitter"></i></a>
        <a href="<?php the_field('google_plus', "option") ?>"><i class="fa fa-google-plus"></i></a>
        <a href="<?php the_field('pinterest', "option") ?>"><i class="fa fa-pinterest"></i></a>
      </div>
      <!-- .social-links -->
      <p class="copy">
        <?php the_field('mfi_copyright', 'option') ?>
      </p>
    </div>
    <!-- #site-content -->

  </footer>
  <!-- .site-footer -->
  </div>
  <?php wp_footer(); ?>

</body>

</html>