<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">We look forward to hearing from you.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="contact">
      <div class="columns columns--has-gap">
        <div class="column">
          <div class="content content--contact">
            <h2>General Inquiries</h2>
            <p>
              Please contact our main phone number (<a href="tel:262-522-7645">262-522-7645</a>) to learn more about our
              work, how to get involved,
              and/or patient eligibility.
            </p>
            <h2>Press</h2>
            <p>For press inquiries, please contact Emily Lukasek at <a href="tel:262-953-4692">262-953-4692</a>.</p>
            <h2>Other Questions</h2>
            <p>For any other questions, please use the contact form on this page.</p>
          </div>
        </div>
        <div class="column">
          <div class="content content--contact">
            <h2>Waukesha Clinic</h2>
            <div class="address"><span>210 NW Barstow Street</span>
              <span>Suite 305 Waukesha, WI 53188</span>
              <span><a href="tel:2625227645">(262) 522-7645</a></span>
            </div>
            <h2>Menomonee Falls Clinic</h2>
            <div class="address">
              <span>N81 W15062 Appleton Avenue</span>
              <span>Menomonee Falls, WI 53051</span>
              <span><a href="tel:2625227645,2280">(262) 522-7645 ext. 2280</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>