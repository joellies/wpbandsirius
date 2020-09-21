<li>
  <figure class="cover">
    <?php the_post_thumbnail('thumbnail'); ?>
  </figure>
  <div class="detail">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <span class="year"><?php the_field('album_year') ?></span>
    <span class="track"></span>
  </div>
</li>