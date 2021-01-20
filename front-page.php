<?php get_header(); ?>

<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>smiling-kid.png"
        alt="Young child smiling at dentist">
      <div class="masthead__overlay">
        <h1 class="title">Community Smiles Dental</h1>
        <p class="subtitle">Strengthening smiles. Strengthening community.</p>
        <a href="<?php echo site_url('/eligibility'); ?>" class="button button--primary">Learn More</a>
      </div>
    </div>
  </div>
</section>

<section id="intro">
  <div class="container">
    <div class="intro">
      <div class="columns">
        <div class="column">
          <h2>Everyone deserves a healthy smile.</h2>
          <p>Community Smiles Dental improves the lives of the underserved through oral healthcare services, preventive
            education, and advocating for systemic healthcare change - Because everyone deserves a healthy smile.</p>
        </div>
        <div class="column">
          <p>Our vision is to create a healthier Community by improving oral health and ensuring that no one suffers
            from dental pain.</p>
          <a href="<?php echo site_url('/about-us'); ?>" class="button button--primary">Learn More</a>
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
        <p>We are currently accepting new patients. Follow the link below to learn if you qualify for
          our clinic’s services.</p>
        <a href="<?php echo site_url('/eligibility'); ?>" class="button button--inverse">Check Eligibility</a>
      </div>
      <div class="donate">
        <h3>Donate</h3>
        <p>Donations to our clinic grant patients crucial and life-changing dental care access.</p>
        <a href="https://forms.donorsnap.com/form?id=c0f77fce-51df-4101-b726-ad789c2a24b4"
          class="button button--inverse" target="_blank" rel="noreferrer noopener">Donate</a>
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
            <p class="feature__description">Our work is about so much more than clinical services. It’s about quality.
              It’s about respect. And it’s about bringing compassion to each individual we serve. Because we know that
              compassion creates a ripple effect. Impacting not only oral health but the whole life of the individuals
              we serve.</p>
          </div>
        </div>
        <div class="column">
          <div class="feature">
            <img src="<?php echo get_template_directory_uri() . '/images/';?>serving.svg" alt="Serving the Community"
              class="feature__image" />
            <p class="feature__title">Serving</p>
            <p class="feature__description">With a big-picture approach, we believe that healthy habits create healthy
              smiles. And that produces healthy lives. Through programs, training, and education we empower families to
              take charge of their oral healthcare not just for today, but for tomorrow as well.</p>
          </div>
        </div>
        <div class="column">
          <div class="feature">
            <img src="<?php echo get_template_directory_uri() . '/images/';?>advocating.svg"
              alt="Advocating in the Community" class="feature__image" />
            <p class="feature__title">Advocating</p>
            <p class="feature__description">At Community Smiles Dental we champion access to care, advocating for those
              who struggle to find access to dental care. Regardless of any barrier, regardless of any status, and
              regardless of a broken system, we believe everyone deserves the best in oral healthcare.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>

<?php get_footer(); ?>