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
    <div class="about">
      <div class="columns">
        <div class="column column--is-75">
          <div class="text-block">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quam repellendus magnam soluta quas.
              Repudiandae asperiores ab magni? Ad nesciunt dignissimos suscipit dolore debitis consequatur, ipsum
              ducimus hic illo magnam sint, alias, fugit minima numquam officiis cupiditate repellendus ex. Labore magni
              nihil aperiam libero provident obcaecati impedit necessitatibus quo corporis.</p>
            <p>The WCCDC provides dental care to children, women who are pregnant, and individuals who have special
              health needs(by referral) and who meet these eligibility guidelines:
            </p>
            <ul>
              <li>Be currently enrolled in BadgerCare/Medicaid.</li>
              <li>Have income that falls below 200% of the Federal Poverty Guidelines and has no dental insurance.<ul>
                  <li>Patients without insurance pay copays for the initial exam and cleaning.
                  </li>
                  <li>WCCDC accepts credit or debit cards only.</li>
                </ul>
              </li>
              <li>For more information please call 262-522-7645</li>
            </ul>
          </div>
        </div>
        <div class="column column--is-25">
          <?php get_template_part('partials/resources'); ?>
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