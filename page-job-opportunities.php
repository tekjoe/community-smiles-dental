<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">Join our team and help bring healthy smiles to our community</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="page-wrapper">
      <div class="columns">
        <div class="column grid">
          <?php if (have_rows('job_opportunities')): ?>
          <?php while (have_rows('job_opportunities')): the_row(); ?>
          <details class="job-listing">
            <summary class="job-summary">
              <h2 class="job-title"><?php the_sub_field('job_title'); ?></h2>
              <div class="status"><span><strong>Status:</strong></span><span><?php the_sub_field('status'); ?></span>
              </div>
              <div class="read-more">Read more</div>
            </summary>
            <div class="job-details">
              <span class="job-details__title">Reports to:</span>
              <p><?php the_sub_field('reports_to'); ?></p>
              <span class="job-details__title">Status:</span>
              <p>
                <?php the_sub_field('status'); ?>
              </p>
              <span class="job-details__title">Job Summary:</span>
              <p>
                <?php the_sub_field('job_summary'); ?>
              </p>
              <span class="job-details__title">Duties & Responsibilities</span>
              <p><?php the_sub_field('duties'); ?></p>
            </div>
          </details>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>