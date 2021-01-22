<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">We appreciate and thank our program sponsors</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="sponsors">
      <div class="sponsor-grid">
        <div class="sponsor-grid__body">
          <p>The Community Smiles Dental mission is made possible by the generosity of foundation, corporate,
            government, and individual donors. The following are a few of our most considerable program sponsors.</p>
        </div>

        <?php if (have_rows('program_sponsors')): ?>
        <?php while (have_rows('program_sponsors')): the_row(); ?>
        <div class="sponsor">
          <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><img
              src="<?php the_sub_field('logo'); ?>" alt="Sponsor Image" /></a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<section>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>