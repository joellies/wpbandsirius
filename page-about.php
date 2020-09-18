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
                <li>
                  <figure class="cover">
                    <img src="dummy/thumbnail-1.jpg" alt="thumbnail 1" />
                  </figure>
                  <div class="detail">
                    <h3><a href="#">Deserunt mollitia animi</a></h3>
                    <span class="year">2004</span>
                    <span class="track">17 tracks</span>
                  </div>
                </li>
                <li>
                  <figure class="cover">
                    <img src="dummy/thumbnail-2.jpg" alt="thumbnail 2" />
                  </figure>
                  <div class="detail">
                    <h3><a href="#">Deserunt mollitia animi</a></h3>
                    <span class="year">2004</span>
                    <span class="track">17 tracks</span>
                  </div>
                </li>
                <li>
                  <figure class="cover">
                    <img src="dummy/thumbnail-3.jpg" alt="thumbnail 3" />
                  </figure>
                  <div class="detail">
                    <h3><a href="#">Deserunt mollitia animi</a></h3>
                    <span class="year">2004</span>
                    <span class="track">17 tracks</span>
                  </div>
                </li>
                <li>
                  <figure class="cover">
                    <img src="dummy/thumbnail-4.jpg" alt="thumbnail 4" />
                  </figure>
                  <div class="detail">
                    <h3><a href="#">Deserunt mollitia animi</a></h3>
                    <span class="year">2004</span>
                    <span class="track">17 tracks</span>
                  </div>
                </li>
                <li>
                  <figure class="cover">
                    <img src="dummy/thumbnail-5.jpg" alt="thumbnail 5" />
                  </figure>
                  <div class="detail">
                    <h3><a href="#">Deserunt mollitia animi</a></h3>
                    <span class="year">2004</span>
                    <span class="track">17 tracks</span>
                  </div>
                </li>
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