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
      <img src="/dummy/logo-footer.png" alt="Site Name" />
      <address>
        <p>
          495 Brainard St. Detroit, MI 48201
          <br />
          <a href="tel:354543543">(563) 429 234 890</a>
          <br />
          <a href="mailto:info@bandname.com">info@bandname.com</a>
        </p>
      </address>

      <form action="#" class="newsletter-form">
        <input type="email" placeholder="Enter your email to join newsletter..." />
        <input type="submit" class="button cut-corner" value="Subscribe" />
      </form>
      <!-- .newsletter-form -->

      <div class="social-links">
        <a href="#"><i class="fa fa-facebook-square"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
      </div>
      <!-- .social-links -->

      <p class="copy">
        Copyright 2014 Company Name. Designed by Themezy. All right reserved
      </p>
    </div>
    <!-- #site-content -->
    --
  </footer>
  <!-- .site-footer -->
  </div>
  <?php wp_footer(); ?>

</body>

</html>