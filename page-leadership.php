<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>csd-leadership-placeholder.jpg"
        alt="Young child smiling at dentist">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">Community Smiles Dental is led by a strong team of compassionate professionals and
          providers.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="staff">
      <div class="staff__title">
        <h2>Leadership Team</h2>
      </div>
      <?php if (have_rows('staff_members')): ?>
      <?php while (have_rows('staff_members')): the_row(); ?>
      <div class="staff-card">
        <div class="staff-card__header"><img class="" src="<?php the_sub_field('photo') ?>" alt="Staffmember">
        </div>
        <div class="staff-card__body">
          <div class="name"><?php the_sub_field('name') ?></div>
          <div class="position"><?php the_sub_field('position') ?></div>
          <div class="phone"><?php the_sub_field('phone_number') ?></div>
          <?php if (get_sub_field('email_address')): ?>
          <div class="email">
            <a href="mailto:<?php the_sub_field('email_address') ?>"><?php the_sub_field('email_address') ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="staff">
      <div class="staff__title">
        <h2>Staff Dentists</h2>
      </div>
      <?php if (have_rows('staff_dentists')): ?>
      <?php while (have_rows('staff_dentists')): the_row(); ?>
      <div class="staff-card">
        <div class="staff-card__header"><img class="" src="<?php the_sub_field('photo') ?>" alt="Staffmember">
        </div>
        <div class="staff-card__body">
          <div class="name"><?php the_sub_field('name') ?></div>
          <div class="position"><?php the_sub_field('position') ?></div>
          <div class="phone"><?php the_sub_field('phone_number') ?></div>
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