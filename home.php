<?php get_header(); ?>
<main class="main-content">
  <div class="fullwidth-block inner-content">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="content">
            <h2 class="entry-title">
              <?php get_the_title(); ?></h2>
            <?php
            if (have_posts()) :
              while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content-single', 'single'); ?>
            <?php endwhile;
            else :
              ?>
            <p>Sorry no posts found
            </p>
            <?php endif;
            ?>
          </div>
        </div>