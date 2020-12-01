<?php get_header(); ?>

<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>smiling-kid.png"
        alt="Young child smiling at dentist">
      <div class="masthead__overlay">
        <h1>Intro headline or key message should go here like this</h1>
        <a href="/" class="button button--primary">Learn More</a>
      </div>
    </div>
  </div>
</section>

<section id="intro">
  <div class="container">
    <div class="intro">
      <div class="columns">
        <div class="column">
          <h2>Who we are and what we do goes here.</h2>
          <p>Support statement goes here liket his to add more information. Support statement goes here.</p>
        </div>
        <div class="column">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deleniti veniam iure cum veritatis
            minima
            fugit labore! Aut architecto, iusto, praesentium deserunt nesciunt earum molestias, corrupti laudantium
            nihil
            cumque quisquam.</p>
          <a href="/" class="button button--primary">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-grid">
      <div class="eligibility">
        <h3>Eligibility</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa obcaecati vero iure?</p>
        <form class="input-group">
          <input type="text" class="input-group__input input-group__input--text" placeholder="ZIP Code"
            pattern="^\d{5}$" />
          <button class="input-group__button">Verify</button>
        </form>
      </div>
      <div class="donate">
        <h3>Donate</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa obcaecati vero iure?</p>
        <form class="input-group">
          <input type="text" class="input-group__input input-group__input--text" placeholder="$25" />
          <button class="input-group__button">Donate</button>
        </form>
      </div>
      <div class="image"><img src="<?php echo get_template_directory_uri() . '/images/';?>smiling-girl.png"
          alt="Smiling Girl"></div>
    </div>
  </div>
</section>

<section id="features">
  <div class="container">
    <div class="features">
      <div class="columns">
        <div class="column">
          <div class="feature">
            <img src="<?php echo get_template_directory_uri() . '/images/';?>caring.svg" alt="Caring for the Community"
              class="feature__image" />
            <p class="feature__title">Caring</p>
            <p class="feature__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero quam
              aliquid
              quod assumenda voluptatibus, accusamus eaque esse iure! Soluta, vitae?</p>
          </div>
        </div>
        <div class="column">
          <div class="feature">
            <img src="<?php echo get_template_directory_uri() . '/images/';?>helping.svg" alt="Serving the Community"
              class="feature__image" />
            <p class="feature__title">Serving</p>
            <p class="feature__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam at aperiam
              incidunt quae! Labore libero voluptate, expedita officiis et dolorem?</p>
          </div>
        </div>
        <div class="column">
          <div class="feature">
            <img src="<?php echo get_template_directory_uri() . '/images/';?>community.svg"
              alt="Advocating in the Community" class="feature__image" />
            <p class="feature__title">Advocating</p>
            <p class="feature__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae nam,
              magni quae officia unde similique commodi aut in exercitationem assumenda.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>

<?php get_footer(); ?>