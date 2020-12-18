<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quo!</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="contact">
      <div class="columns columns--has-gap">
        <div class="column">
          <div class="content content--contact">
            <h2>How Can We Help?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo praesentium! Excepturi ipsum,
              laudantium et magni natus ut a delectus.</p>
            <h3>Eligibility</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo praesentium! Excepturi ipsum,
              laudantium et magni natus ut a delectus.</p>
            <h3>Locations</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo praesentium! Excepturi ipsum,
              laudantium et magni natus ut a delectus..</p>
            <h3>Frequently Asked Questions</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo praesentium! Excepturi ipsum,
              laudantium et magni natus ut a delectus.</p>
          </div>
        </div>
        <div class="column">
          <div class="content content--contact">
            <h2>Send Us A Message</h2>
            <?php if (get_field('contact_form', 'option')): ?>
            <?php echo do_shortcode('[contact-form-7 id="'.get_field('contact_form', 'option').' title="Contact Form"]'); ?>
            <?php else: ?>
            <span></span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>