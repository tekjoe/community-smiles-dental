<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>young-boy-smiling.jpg"
        alt="Young boy smiling at dentist">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">We are governed by a dedicated and accomplished Board of Directors with a wide range of
          expertise.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="staff">
      <div class="staff__title">
        <h2>Board of Directors</h2>
      </div>
      <?php if (have_rows('board_members')): ?>
      <?php while (have_rows('board_members')): the_row(); ?>
      <div class="staff-card">
        <div class="staff-card__header"><img class="" src="<?php the_sub_field('photo') ?>" alt="Board Member">
        </div>
        <div class="staff-card__body">
          <div class="name"><?php the_sub_field('name') ?></div>
          <div class="employer"><?php the_sub_field('employer') ?></div>
          <div class="role"><?php the_sub_field('role') ?></div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>