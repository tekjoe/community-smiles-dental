<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead masthead--404"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay masthead__overlay--404">
        <p class="subtitle">Thank you for registering for our Laugh for A Smile Event. Please check your email for
          payment instructions.</p>
        <p><a class="button" href="<?php echo site_url('/'); ?>">Go back to the home page</a></p>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>