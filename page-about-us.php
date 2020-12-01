<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Young child smiling at dentist">
      <div class="masthead__overlay">
        <h1><?php echo get_the_title(); ?></h1>
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
            <p class="intro">The Waukesha County Community Dental Clinic is dedicated to improving the oral health of
              disadvantaged
              individuals through clinical services, preventive education, and advocacy because everyone deserves a
              healthy
              smile.</p>
            <p>The Waukesha County Dental Coalition (WCDC) was established under a planning grant to develop a
              community-academic partnership that addressed oral health needs in Waukesha County. The Waukesha County
              Dental
              Coalition members devoted 18 months to these assessments and worked to create and complete a business
              plan.
              The business plan proposed the establishment of a non-profit dental health clinic, now known as the
              Waukesha
              County Community Dental Clinic (WCCDC), to reduce barriers to oral health care and ultimately improve the
              oral
              health in Waukesha County.</p>
            <p>Appropriate space for a dental clinic was identified in the “Barstow Building”, home to the Waukesha
              Family
              Practice Center, the Hispanic Community Health Resource Center, and La Casa de Esperanza Behavioral Health
              Clinic, which is centrally located in the city of Waukesha and adjacent to the local bus terminal.</p>
            <p>Executive Director hired to coordinate the business aspects of the dental clinic. The WCCDC was been
              successful in achieving all of the initial goals. A successful fundraising campaign raised donations and
              pledges totaling $1.6 million dollars.</p>
            <p>The construction phase of the dental clinic concluded. The clinic opened in May 2008 and provided access
              to
              dental care for thousands of children during its first year.</p>
            <p>WCCDC established a Community Dental Health Coordinator position. The CDHC offers dental screening,
              comprehensive dental exams, and oral health education, using mobile dental equipment, as well as patient
              navigation to volunteer dentists for follow up dental care.</p>
            <p>Sets a record by providing 10,286 appointments and $2.52 million in dental care to 3500 patients in one
              year,
              effectively reaching capacity of the Barstow clinic. Discussions and plans are underway for the buildout
              of
              a
              new satellite clinic in Menomonee Falls to widen the reach of dental service to those in the Menomonee
              Falls
              area.</p>
          </div>
        </div>
        <div class="column column--is-25">
          <?php get_template_part('partials/social-share'); ?>
        </div>
      </div>
    </div>

  </div>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>