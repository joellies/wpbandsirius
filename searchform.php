<form action="<?php bloginfo('url'); ?>" method="get" accept-charset="utf-8">
  <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
  <button class="searchForm-btn">Rechercher</button>
</form>