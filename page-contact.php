<?php get_header(); ?>

<main class="main-content">
  <div class="fullwidth-block inner-content">
    <div class="container">
      <h2 class="page-title">Contact Us</h2>
      <div class="row">
        <div class="col-md-6">
          <?php $contact_form = get_field('contact_form'); ?>
          <?php
          echo do_shortcode('[contact-form-7 id="$contact_form" title="Formulaire de contact" html_class="contact-form"]'); ?>
        </div>
        <div class="col-md-6">
          <div class="map-wrapper">
            <div class="map">
              <?php $map = get_field('google_maps'); ?>
              <?php echo $map; ?>
            </div>
            <address>
              <?php if (have_rows('contact_details')) : ?>
              <?php while (have_rows('contact_details')) : the_row(); ?>
              <div class="row">
                <div class="col-sm-6">
                  <strong><?php the_sub_field('company_name'); ?></strong>
                  <span><?php the_sub_field('company_adress'); ?></span>
                </div>
                <div class="col-sm-6">
                  <a href=""><?php the_sub_field('company_email'); ?>
                  </a>
                  <br />
                  <a href=""><?php the_sub_field('company_phone'); ?></a>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </address>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .testimonial-section -->
</main>


<?php get_footer(); ?>