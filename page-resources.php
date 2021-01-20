<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">Subtitle about the resources below will go here</p>
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
            <p>
              There is no one-size-fits-all volunteer commitment at Community Smiles Dental (CSD). Even if you can spare
              only a few hours of your time, you will make a valuable contribution to the quality of someone’s life. You
              can provide professional service at the CSD or accept referrals from the clinic in your private practice
              on a reduced basis. We also need non-dental volunteers to help us with outreach programs and community
              events.</p>
            <p>
              You will never meet more grateful patients than those you help through the CSD. They are residents of our
              community who work and live here and are striving to create a better life for their families.
            </p>
            <p>
              If you are interested in volunteering, please call for any questions you may have.
            </p>
            <p><a href="tel:+262-953-4693" class="button">
                Call for More Information
              </a></p>
            </p>
          </div>
        </div>
        <div class="column column--is-25">
          <?php get_template_part('partials/donate'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>