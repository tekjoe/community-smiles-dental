<?php get_header(); ?>
<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Community Smiles Dental Programs">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">These are our most frequently asked questions</p>
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
            <h2>Are there patient forms I can fill out before my visit?</h2>
            <ul>
              <?php if (have_rows('patient_forms')): ?>
              <?php while (have_rows('patient_forms')): the_row();

                // Get sub field values.
                $name = get_sub_field('name');
                $file = get_sub_field('file');
                
                ?>
              <li><a href="<?php echo $file ?>" download><?php echo $name ?></a></li>
              <?php endwhile; ?>
              <?php endif; ?>
            </ul>
            <h2>What is the referral process?</h2>
            <p>
            <ul>
              <li>Please complete the <?php if (get_field('referral_form')): ?>
                <a href="<?php the_field('referral_form'); ?>" download>Agency Referral Form.</a>
                <?php endif; ?></a> Provide as much information about the patient as possible.
              </li>
              <li>Fax referral form to FAX NUMBER 262-522-2828.
              </li>
              <li>For all questions pertaining to a referral, please call 262-522-7645, ext. 2250.
              </li>
              <li>Patients will be scheduled for appointments by the Community Smiles Dental staff after eligibility is
                confirmed.</li>
            </ul>
            </p>

            <h2>What is your Snow Day policy?</h2>
            <p>Our clinic policy is to cancel clinic for the day when the Waukesha Public Schools and Menomonee Falls
              Public Schools close due to inclement winter weather. If your child has an appointment and school is
              cancelled for the day, please note that your child's dental appointment will also be cancelled. We will
              call you to reschedule as soon as we have a make up day plan.</p>
            <p>New this year, we will not call you to tell you your appointment is cancelled. You can verify that the
              clinic is closed by visiting our <a href="https://www.facebook.com/WCCDC/" rel="noopener norefferer"
                target="_blank">Facebook page</a>, looking for us on your local news TV station snow closing listing OR
              by calling and our clinic voicemail will confirm our closing for you.</p>
            <h2>How has COVID 19 impacted Community Smiles Dental?</h2>
            <p>You may see some changes when it is time for your next appointment. For example:</p>
            <ul>
              <li>We will call you before your appointment to ask some screening questions. You’ll be asked the same
                questions again when you come to the clinic.
              </li>
              <li>We will ask you to use hand sanitizer when you enter the clinic.
              </li>
              <li>Please bring your own mask and pen when you come to the clinic.</li>
              <li>We will clean our waiting room often for the health of all of you.
              </li>
              <li>You will see fewer chairs in the waiting room to make sure that you are able to have a safe distance
                from
                each other.
              </li>
              <li>To keep the number of people in our waiting room to a minimum, we will ask that only one
                parent/guardian
                comes with their children to the appointment and that siblings without appointments stay at home or
                safely
                in a vehicle where appropriate.
              </li>
              <li>If your child has a fever or any flu-like symptoms the day of their appointment, please call to
                reschedule. It won’t count against you.
              </li>
              <li>Before every appointment, we will take the patient’s temperature. If the patient has a temperature of
                100.4 or higher, he/she will be asked to reschedule and leave the clinic.
              </li>
              <li>We will be wearing more Personal Protective Equipment (PPE) We will do our best to make appointments
                fun and comfortable for you.</li>
            </ul>
            <p>We look forward to seeing you and your children again and are happy to answer any questions you may have.
            </p>
            <p>To make an appointment, please call the clinic at <a href="tel:262-522-7645">262-522-7645</a>.</p>
            <?php if (have_rows('annual_reports')): ?>
            <h2>Annual Reports</h2>
            <ul>
              <?php while (have_rows('annual_reports')): the_row();

                // Get sub field values.
                $name = get_sub_field('name');
                $file = get_sub_field('file');
                
                ?>
              <li><a href="<?php echo $file ?>" download><?php echo $name ?></a></li>
              <?php endwhile; ?>
            </ul>
            <?php endif; ?>
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