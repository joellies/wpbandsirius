<?php get_header() ?>

<!-- slider-->
<div class="hero">
  <div class="slider">
    <?php if (have_rows('main_slider')) : ?>
    <ul class="slides">
      <?php while (have_rows('main_slider')) : the_row();
          $slide_image = get_sub_field('slide_image');
        ?>
      <li class="lazy-bg" data-background="<?php echo $slide_image['url']; ?>">
        <div class="container">
          <h2 class=" slide-title"><?php the_sub_field('slide_title'); ?></h2>
          <h3 class=" slide-subtitle"><?php the_sub_field('slide_subtitle'); ?></h3>
          <p class="slide-desc"><?php the_sub_field('slide_description'); ?></p>
          <a href="<?php the_sub_field('slide_link'); ?>" class=" button cut-corner">Read More</a>
        </div>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
  </div>
</div>
<!-- end of slider-->
<main class=" main-content">
  <div class="fullwidth-block testimonial-section">
    <div class="container">
      <div class="quote-slider">
        <?php if (have_rows('quotes')) : ?>
        <ul class="slides">
          <?php while (have_rows('quotes')) : the_row(); ?>
          <li>
            <blockquote>
              <p><?php the_sub_field('quote'); ?> </p>
              <cite><?php the_sub_field('quote_author'); ?></cite>
              <span><?php the_sub_field('author_function'); ?></span>
            </blockquote>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- .testimonial-section -->

  <div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
    <div class="container">
      <header class="section-header">
        <h2 class="section-title">Upcoming events</h2>

        <div class="event-nav">
          <a class="prev" id="event-prev" href="#">
            <i class="fa fa-caret-left"></i>
          </a>
          <a class="next" id="event-next" href="#">
            <i class="fa fa-caret-right"></i>
          </a>
        </div>
        <!-- .event-nav -->
      </header>
      <!-- .section-header -->
      <div class="event-carousel">
        <?php
        $args = array(
          'post_type' => 'event',
          'posts_per_page' => 5,
          'order'     => 'ASC',
        );
        $events = new WP_Query($args);
        ?><?php if ($events->have_posts()) : ?>
        <?php while ($events->have_posts()) : $events->the_post();
              $event_date = get_field('event_date');
              $event_day = date("j", strtotime($event_date));
              $event_month = date("M", strtotime($event_date));
        ?>
        <div class="event">
          <div class="entry-date">
            <div class="date"><?php echo $event_day; ?></div>
            <span class="month"><?php echo $event_month; ?></span>
          </div>
          <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <p><?php ?><?php the_field('event_location') ?></p>
          <p><?php the_excerpt(); ?></p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <!-- .event -->
      </div>
      <!-- .event-carousel -->
    </div>
    <!-- .container -->
  </div>
  <!-- .upcoming-event-section -->

  <div class=" fullwidth-block why-chooseus-section">
    <div class="container">
      <h2 class="section-title">Why choose us?</h2>
      <?php if (have_rows('why_choose_us')) : ?>
      <div class="row">
        <?php while (have_rows('why_choose_us')) : the_row();
            $why_image = get_sub_field('why_image');
          ?>
        <div class="col-md-4">
          <div class="feature">
            <figure class="cut-corner">
              <img src="<?php echo $why_image['url']; ?>" alt="" />
            </figure>
            <h3 class="feature-title"><?php the_sub_field('why_title'); ?>
            </h3>
            <p><?php the_sub_field('why_description'); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
    <!-- .container -->
  </div>
  <!-- .why-chooseus-section -->
</main>
<!-- .main-content -->


<?php get_footer(); ?>