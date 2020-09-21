<?php get_header(); ?>
<main class="main-content">
  <div class="fullwidth-block inner-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <?php the_post_thumbnail('medium'); ?>
            <div><?php the_content(); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>