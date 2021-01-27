<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Young child smiling at dentist">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">We believe that everyone deserves a healthy smile</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">

    <div class="page-wrapper">
      <div class="columns">
        <div class="column column--is-75">
          <div class="text-block">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/YeZN8lTcij4" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
            <h2>Mission</h2>
            <p>Community Smiles Dental improves the lives of the underserved through oral healthcare services,
              preventive education, and advocating for systemic healthcare change - Because
              everyone deserves a healthy smile.
            </p>
            <h2>Vision</h2>
            <p>To create a healthier Community by improving oral health and ensuring that no
              one suffers from dental pain.</p>
            <h2>Our Values</h2>
            <ul>
              <li><strong>Inclusivity:</strong> We value diversity, providing the highest quality care to all in our
                community.</li>
              <li><strong>Professionalism:</strong> We have high expectations for our service, demonstrating “cutting
                edge” clinical care, customer service, and administrative support in our clinics.</li>
              <li><strong>Compassion:</strong> We know compassion isn’t just caring for the person, it’s advocating
                together to improve the system.</li>
              <li><strong>Quality:</strong> A simple promise that takes organizational commitment - Offer the best
                possible clinical care, healthcare technology, and resources.</li>
              <li><strong>Community:</strong> Our work creates more than healthy smiles, it creates strong lives across
                our entire community.</li>
            </ul>
          </div>
        </div>
        <div class="column column--is-25">
          <?php get_template_part('partials/donate'); ?>
        </div>
      </div>
    </div>

  </div>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>