<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">There are many different ways you can help Community Smiles Dental.</p>
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
            <h2>Ways to Contribute</h2>
            <p>Donations to our mission directly improve the health and well-being of low-income patients with nowhere
              else to turn for dental care. We welcome you to discuss any of the following giving opportunities with our
              Director of Development, Emily Lukasek, at 262-953-4692.</p>
            <h3>Pledge/Recurring Gifts</h3>
            <p>Create ease in submitting your annual support by setting up a monthly or quarterly automatic payment.
            </p>
            <h3>Matching Gifts</h3>
            <p>Increase your impact by using your company’s matching gift program. Check with your HR or benefits
              manager to see if your organization has a matching gift program. </p>
            <h3>Event Sponsorship</h3>
            <p>Our signature fundraising event, “Laugh for a Smile,” will be hosted next on April 22, 2021. At this
              event, we laugh and generate crucial dollars so that many others may smile. Learn more on our <a
                href="<?php echo site_url('/laugh-for-a-smile'); ?>">Laugh for a
                Smile page.</a></p>
            <h3>Planned Giving – Leave a Legacy</h3>
            <p>A planned gift can help serve patients for years to come. We welcome the opportunity to discuss ways you
              can leave a legacy at Community Smiles Dental.

              (Our legal name is ‘Waukesha County Community Dental Clinic’ for estate plan and legacy giving purposes)
            </p>
            <h3>Honorary Gifts/Memorials</h3>
            <p>Gifts in honor or memory of someone are a great way to recognize that individual’s impact in your life
              and our community. We will notify the recognized individual of your generous support. </p>
            <h3>Our United Way Relationship</h3>
            <p>Individuals who donate through the United Way campaign can direct their funding to Community Smiles
              Dental.</p>
            <h3>Stock/Security Contributions</h3>
            <p>Please use the following instructions for donations of stock or securities.</p>
            <p>The most common method of delivery of marketable securities is an electronic transfer through Depository
              Trust Company. Any DTC-eligible securities can be transferred electronically to Community Smiles Dental
              through Baird, custodian of CSD's assets:</p>
            <p><strong>Robert W. Baird & Co. Inc.</strong></p>
            <p><strong>DTC participant Number: 0547</strong></p>
            <p><strong>Account Number: 7658-1242</strong></p>
            <p><strong>Community Smiles Dental EIN: 30-0436162</strong></p>
            <p>In order to promptly and accurately credit a security gift to the appropriate donor; it is essential that
              the transfer instructions include the donor’s name and address. Without this information, Baird is
              occasionally unable to identify the donors of certain securities.</p>
            <p>A charitable receipt will be provided by Community Smiles Dental following notification from Baird about
              the donation and stock/security sale. Donors are encouraged to consult their tax advisor about the
              deductibility of their gift.</p>
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