<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">Our programs provide access to affordable dental care to children throughout our community.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="programs">
      <div class="programs__title">
        <h3>Oral Health Programs</h3>
      </div>
      <div class="program">
        <div class="program__header"><img class="masthead__image"
            src="<?php echo get_template_directory_uri() . '/images/';?>smiling-kid.png" alt="Healthy Smiles"></div>
        <div class="program__body">
          <h3 class="title">Healthy Smiles for Tot & Teens Dental Program</h3>
          <p>Both clinics see children ages 0-18 who have Medicaid insurance or who have income falling below 200% of
            the Federal Poverty Guidelines and have no dental insurance.</p>
          <p><a href="#" class="button">Learn more</a></p>
        </div>
      </div>
      <div class="program">
        <div class="program__header"><img class="masthead__image"
            src="<?php echo get_template_directory_uri() . '/images/';?>program-placeholder.jpg" alt="Healthy Smiles"></div>
        <div class="program__body">
          <h3 class="title">Healthy Smiles for Moms and Babies</h3>
          <p>Both clinics offers dental care to pregnant women who have Medicaid insurance or who have income falling
            below 200% of the Federal Poverty Guidelines and have no dental insurance, in order that they have good oral
            health before their babies are born.</p>
          <p><a href="#" class="button">Learn more</a></p>
        </div>
      </div>
      <div class="program">
        <div class="program__header"><img class="masthead__image"
            src="<?php echo get_template_directory_uri() . '/images/';?>program-placeholder-2.jpg" alt="Healthy Smiles"></div>
        <div class="program__body">
          <h3 class="title">Head Start Partnership</h3>
          <p>The clinic's dental team and volunteers provide oral health instructions and federally mandated exams to
            preschoolers enrolled in the Headstart Program. All children screened at Head Start who are eligible to be
            seen are directly referred to one of the clinics.</p>
          <p><a href="#" class="button">Learn more</a></p>
        </div>
      </div>
      <div class="program">
        <div class="program__header"><img class="masthead__image"
            src="<?php echo get_template_directory_uri() . '/images/';?>program-placeholder-3.jpg" alt="Healthy Smiles"></div>
        <div class="program__body">
          <h3 class="title">Give Kids a Smile Program</h3>
          <p>The American Dental Association’s annual Give Kids A Smile Program is working to eliminate the silent
            epidemic of dental disease for the millions of children that can not sleep, eat properly, pay attention in
            school, or simply smile. We offer this opportunity at our clinics on annually, providing comprehensive
            dental care to children in need and welcomes them into a new dental home.</p>
          <p><a href="#" class="button">Learn more</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>