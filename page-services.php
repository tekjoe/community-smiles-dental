<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">Our programs provide access to affordable dental care to children throughout our community.
        </p>
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
            <p>At Community Smiles Dental, we strive to provide access to affordable and quality dental care to children
              throughout our community. Our dental clinics are designed and created with you and your kids in mind, and
              staffed with skilled, caring and dedicated staff committed to providing a positive and healthy dental
              experience. By providing care today, we can help prevent serious health problems from occurring later in
              the child's life.</p>
            <p>To reach as many children as possible in our community, Community Smiles Dental builds relationships
              with local daycare centers, schools, other healthcare providers and community organizations that are
              working hard to meet the needs of our children. We partner with these groups to educate their members on
              the need for good oral health which leads to healthier bodies and minds and a positive self-esteem.</p>
            <h2>
              Services Provided
            </h2>
            <p><strong>Children Receive:</strong></p>
            <ul>
              <li>Exams and X-rays</li>
              <li>Cleanings</li>
              <li>Fluoride Varnish and Sealants</li>
              <li>Fillings</li>
              <li>Extractions</li>
              <li>6 Month Recare</li>
              <li>Education</li>
              <li>Nitrous oxide (laughing gas)</li>
              <li>Dental care in a hospital setting</li>
            </ul>
            <p><strong>Adults Receive:</strong></p>
            <ul>
              <li>Exams and dental treatment limited to an urgent or emergent dental need.</li>
            </ul>
            <h2>Services Not Provided</h2>
            <ul>
              <li>Orthodontics (e.g., braces)</li>
              <li>Oral Surgery for Orthodontics</li>
              <li>Wisdom Teeth Extractions</li>
              <li>Dentures or Partials</li>
              <li>Cosmetic Dentistry</li>
              <li>Teeth Whitening</li>
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
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>