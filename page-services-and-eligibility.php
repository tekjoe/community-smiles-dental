<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">Our programs provide access to affordable dental care throughout our community.
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
            <p>At our <strong>Community Smiles Dental</strong> clinics, we strive to provide access to affordable and
              quality dental care to individuals throughout our communities. Our dental clinics are designed and created
              with your oral health in mind and are staffed with skilled, caring and dedicated professionals committed
              to providing a positive and healthy dental experience. </p>
            <p>Dental care for children is the core of what we do!</p>
            <h2>
              Services we provide for children
            </h2>
            <ul>
              <li>Exams and X-rays</li>
              <li>Dental Cleanings</li>
              <li>Fluoride Varnish and Sealants</li>
              <li>Fillings</li>
              <li>Extractions</li>
              <li>6 Month Recare</li>
              <li>Oral Health Education</li>
              <li>Nitrous Gas</li>
              <li>Emergency Dental Care</li>
            </ul>
            <h2>Services we provide for adults</h2>
            <p>Community Smiles Dental provides dental treatment limited to comprehensive exams, dental cleanings,
              simple restorations, and simple extractions at our Menomonee Falls clinic. Please call 262-522-7645 ext.
              2291 to discuss program eligibility. </p>
            <p>Adults who are experiencing pain or a dental emergency can be seen for a limited oral exam at our
              Waukesha Clinic or our Menomonee Falls clinic. We have limited availability for emergency appointments
              each day. Please call 262-522-7645 to schedule an appointment.
            </p>
            <p>At Community Smiles Dental we have special programs for pregnant women and adults with special health
              care needs. Please call 262-522-7645 ext. 2250 to discuss program eligibility.
            </p>
            <h2>Services Not Provided</h2>
            <ul>
              <li>Orthodontics (braces)</li>
              <li>Extraction of Wisdom Teeth</li>
              <li>Cosmetic Dentistry</li>
              <li>Teeth Whitening</li>
              <li>Partials or Dentures</li>
            </ul>
            <h2>How Do I know If I Qualify for Help?</h2>
            <p>Community Smiles Dental provides dental care to children, women who are pregnant, and individuals who
              have special
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
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>