<div class="post">
  <div class="entry-date">
    <div class="date"><?php echo get_the_date('j'); ?></div>
    <span class="month"><?php echo get_the_date('M'); ?></span>
  </div>
  <div class="featured-image">
    <?php the_post_thumbnail(); ?>
  </div>
  <h2 class=" entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <p>Posted by : <?php the_author_link(); ?></p>
  <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>"></a>
</div>