<?php get_header() ?>
<?php while (have_posts()) : the_post(); ?>

<div class="hero">
  <div class="slider">
    <ul class="slides">
      <li class="lazy-bg" data-background="dummy/slide-1.jpg">
        <div class="container">
          <h2 class="slide-title">Header goes here</h2>
          <h3 class="slide-subtitle">Less important text goes here</h3>
          <p class="slide-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            <br />
            Fugiat aliquid minus nemo sed est.
          </p>

          <a href="#" class="button cut-corner">Read More</a>
        </div>
      </li>
      <li class="lazy-bg" data-background="dummy/slide-2.jpg">
        <div class="container">
          <h2 class="slide-title">Header goes here</h2>
          <h3 class="slide-subtitle">Less important text goes here</h3>
          <p class="slide-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            <br />
            Fugiat aliquid minus nemo sed est.
          </p>

          <a href="#" class="button cut-corner">Read More</a>
        </div>
      </li>
      <li class="lazy-bg" data-background="dummy/slide-3.jpg">
        <div class="container">
          <h2 class="slide-title">Header goes here</h2>
          <h3 class="slide-subtitle">Less important text goes here</h3>
          <p class="slide-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            <br />
            Fugiat aliquid minus nemo sed est.
          </p>

          <a href="#" class="button cut-corner">Read More</a>
        </div>
      </li>
    </ul>
  </div>
</div>

<main class="main-content">
  <div class="fullwidth-block testimonial-section">
    <div class="container">
      <div class="quote-slider">
        <ul class="slides">
          <li>
            <blockquote>
              <p>
                "Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium doloremque laudantium totam rem
                aperiam eaque ipsa quae ab illo inventore veritatis et
                quasi architecto beatae vitae dicta sunt explicabo"
              </p>
              <cite>John Smith</cite>
              <span>Corporation CEO, books author</span>
            </blockquote>
          </li>
          <li>
            <blockquote>
              <p>
                "Iste natus error sit voluptatem accusantium doloremque
                laudantium totam rem aperiam eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta
                sunt explicabo"
              </p>
              <cite>John Smith</cite>
              <span>Corporation CEO, books author</span>
            </blockquote>
          </li>
        </ul>
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
        <div class="event">
          <div class="entry-date">
            <div class="date">23</div>
            <span class="month">Jun</span>
          </div>
          <h2 class="entry-title">
            <a href="#">Sed et persipiatis unde omnis iste natus</a>
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid temporibus quos aspernatur
          </p>
        </div>
        <!-- .event -->

        <div class="event">
          <div class="entry-date">
            <div class="date">02</div>
            <span class="month">Juil</span>
          </div>
          <h2 class="entry-title">
            <a href="#">Sed et persipiatis unde omnis iste natus</a>
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid temporibus quos aspernatur
          </p>
        </div>
        <!-- .event -->

        <div class="event">
          <div class="entry-date">
            <div class="date">14</div>
            <span class="month">Aout</span>
          </div>
          <h2 class="entry-title">
            <a href="#">Sed et persipiatis unde omnis iste natus</a>
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid temporibus quos aspernatur
          </p>
        </div>
        <!-- .event -->

        <div class="event">
          <div class="entry-date">
            <div class="date">07</div>
            <span class="month">Sept</span>
          </div>
          <h2 class="entry-title">
            <a href="#">Sed et persipiatis unde omnis iste natus</a>
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid temporibus quos aspernatur
          </p>
        </div>
        <!-- .event -->

        <div class="event">
          <div class="entry-date">
            <div class="date">10</div>
            <span class="month">Oct</span>
          </div>
          <h2 class="entry-title">
            <a href="#">Sed et persipiatis unde omnis iste natus</a>
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid temporibus quos aspernatur
          </p>
        </div>
        <!-- .event -->
      </div>
      <!-- .event-carousel -->
    </div>
    <!-- .container -->
  </div>
  <!-- .upcoming-event-section -->

  <div class="fullwidth-block why-chooseus-section">
    <div class="container">
      <h2 class="section-title">Why choose us?</h2>

      <div class="row">
        <div class="col-md-4">
          <div class="feature">
            <figure class="cut-corner">
              <img src="dummy/medium-image-1.jpg" alt="" />
            </figure>
            <h3 class="feature-title">
              Similique sunt in culpa qui officia deserunt mollitia animi
              laborum dolorum
            </h3>
            <p>
              At vero eos et accusamus et iusto odio dignissimos ducimus
              qui blanditiis praesentium voluptatum deleniti atque
              corrupti quos dolores et quas molestias excepturi sint
              occaecati cupiditate non provident.
            </p>
          </div>
          <!-- .feature -->
        </div>
        <div class="col-md-4">
          <div class="feature">
            <figure class="cut-corner">
              <img src="dummy/medium-image-2.jpg" alt="" />
            </figure>
            <h3 class="feature-title">
              Similique sunt in culpa qui officia deserunt mollitia animi
              laborum dolorum
            </h3>
            <p>
              At vero eos et accusamus et iusto odio dignissimos ducimus
              qui blanditiis praesentium voluptatum deleniti atque
              corrupti quos dolores et quas molestias excepturi sint
              occaecati cupiditate non provident.
            </p>
          </div>
          <!-- .feature -->
        </div>
        <div class="col-md-4">
          <div class="feature">
            <figure class="cut-corner">
              <img src="dummy/medium-image-3.jpg" alt="" />
            </figure>
            <h3 class="feature-title">
              Similique sunt in culpa qui officia deserunt mollitia animi
              laborum dolorum
            </h3>
            <p>
              At vero eos et accusamus et iusto odio dignissimos ducimus
              qui blanditiis praesentium voluptatum deleniti atque
              corrupti quos dolores et quas molestias excepturi sint
              occaecati cupiditate non provident.
            </p>
          </div>
          <!-- .feature -->
        </div>
      </div>
    </div>
    <!-- .container -->
  </div>
  <!-- .why-chooseus-section -->
</main>
<!-- .main-content -->

<?php endwhile; ?>
<?php get_footer() ?>