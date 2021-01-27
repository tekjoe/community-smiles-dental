<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead masthead--404"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay masthead__overlay--404">
        <p class="subtitle">Thank you for registering for our Laugh for A Smile Event. Please check your email for
          payment instructions or click the button below to pay.</p>
        <p><a class="button" href="https://forms.donorsnap.com/form?id=9a9a1602-d0bb-4614-8cd1-8b179122dbe6"
            target="_blank">Go to the payment page</a></p>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>