<?php get_header(); ?>
<?php
$about_image = get_field("about_image");
$about_url = $about_image["url"];
$about_image_alt = $about_image["alt"];
?>

<main class="main-content">
  <div class="fullwidth-block inner-content">
    <div class="container">
      <div class="row">
        <!--1ere colonne our history-->
        <div class="col-md-7">
          <div class="content">
            <h2 class="entry-title">Our History</h2>
            <figure class="featured-image">
              <img src="<?php echo $about_url; ?>" alt="<?php echo $about_image_alt; ?>" />
            </figure>
            <p class="leading"><?php the_field('about_description'); ?>
            </p>
          </div>
        </div>

        <!--2e colonne discography-->
        <div class=" col-md-4 col-md-push-1">
          <aside class="sidebar">
            <div class="widget">
              <h3 class="widget-title">Discography</h3>
              <ul class="discography-list">
                <?php $args = array('post_type' => 'album');
                $albums = new WP_Query($args);
                ?>
                <?php if ($albums->have_posts()) : ?>
                <?php while ($albums->have_posts()) : $albums->the_post(); ?>
                <li>
                  <?php get_template_part('template-parts/content', 'single-album'); ?>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <!-- .testimonial-section -->
</main>
<!-- .main-content -->
<?php get_footer(); ?>