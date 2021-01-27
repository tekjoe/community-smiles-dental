<?php get_header(); ?>

<section id="event-masthead">
  <div class="container">
    <div class="event-masthead">
      <div class="top">
        <h1 class="title">Laugh for a Smile</h1>
        <span class="subtitle">Join us for an evening of laughs and smiles</span>
      </div>
      <div class="bottom">
        <div class="masthead-column">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/images/';?>star-full.svg" alt="Star Icon" />
          </div>
          <div class="details">
            <div class="details__title">Sponsor</div>
            <div class="details__subtitle">
              <?php if (get_field('sponsor_opportunities')): ?>
              <a href="<?php the_field('sponsor_opportunities'); ?>" download>View Opportunities</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="masthead-column">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/images/';?>calendar.svg" alt="Calendar Icon" />
          </div>
          <div class="details">
            <div class="details__title">The Date</div>
            <div class="details__subtitle">
              <?php if (get_field('date')): ?>
              <?php echo the_field('date'); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="masthead-column">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/images/';?>clipboard.svg" alt="Clipboard Icon" />
          </div>
          <div class="details">
            <div class="details__title">Register</div>
            <div class="details__subtitle">
              <a href="#register">Get your tickets</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="event-details">
  <div class="container">
    <div class="event-details">
      <div class="row">
        <div class="columns columns--reversed-mobile">
          <div class="column">
            <div class="content content--centered">
              <div class="content__title">
                <h2>Event Details</h2>
              </div>
              <div class="content__body">
                <p>
                  In partnership with the Community Smiles Dental (CSD) Board of Directors and our
                  headliner comedian, Charlie Berens, we've decided to postpone Laugh for a Smile 2020 to Thursday,
                  April 22, 2021 to ensure the most successful and safe event for all involved.
                </p>
                <p>
                  While the date has changed, the experience has not and we can’t wait to host you as we generate
                  important dollars for the CSD mission!
                </p>
                <p><strong>When:</strong> April 22, 2021</p>
                <p><strong>Time:</strong> 5:00 pm – 8:30 pm</p>
                <p><strong>Where:</strong> Brookfield Conference Center</p>
                <p>
                  <strong>Co-Chaired By:</strong> Laura and Mike Arnow, Coreen Dicus-Johnson and Kurt Johnson,Dr.
                  Miranda and Kurt Peter
                </p>
                <p><a class="button" href="#register">Get your tickets</a>
                </p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="content content--centered">
              <div class="content__image"><img
                  src="<?php echo get_template_directory_uri() . '/images/';?>lfas-save.jpg" alt="Save the Date" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="columns">
          <div class="column">
            <div class="content content--centered">
              <div class="content__image"><img
                  src="<?php echo get_template_directory_uri() . '/images/';?>Charlie-Berens-2020.jpg"
                  alt="Charlie Berens" /></div>
            </div>
          </div>
          <div class="column">
            <div class="content content--centered">
              <div class="content__title">
                <h2>Special Guest</h2>
              </div>
              <div class="content__body">
                <p>This year, we are excited to feature Wisconsin’s own, Charlie Berens, as the
                  evening’s headliner comedian. Charlie, a local favorite, will entertain guests following the event’s
                  formal program. All proceeds generated directly support our dental care programs for low-income
                  children, pregnant women, special needs patients, and medically-fragile adults in the Greater
                  Milwaukee
                  area.</p>
                <?php if (get_field('guest_announcement')): ?>
                <p><a class="button" href="<?php the_field('guest_announcement'); ?>" download>Read the Announcement</a>
                </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="columns columns--reversed-mobile">
          <div class="column">
            <div class="content content--centered">
              <div class="content__title">
                <h2>Sponsorship Opportunities</h2>
              </div>
              <div class="content__body">
                <p>Event sponsorship is available at levels ranging from $10,000 to $500. To learn more about these
                  opportunities, along with the associated marketing and sponsor benefits, please view our sponsorship
                  packet below.</p>
                <?php if (get_field('sponsor_opportunities')): ?>
                <p><a class="button" href="<?php the_field('sponsor_opportunities'); ?>" download>View Sponsor
                    Opportunities</a></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="content content--centered">
              <div class="content__image content__image--contain"><img
                  src="<?php echo get_template_directory_uri() . '/images/';?>lfas-logo.jpg"
                  alt="Laugh for a Smile Logo" /></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="event-highlights">
  <div class="container">
    <div class="highlights">
      <div class="highlights__title">
        <h3>Event Highlights</h3>
      </div>
      <div class="highlights__highlights">
        <div class="highlight">
          <div class="highlight__icon"><img src="<?php echo get_template_directory_uri() . '/images/';?>comedy.svg"
              alt="Comedy Icon" /></div>
          <div class="highlight__title">
            <h5>Featured Comedy Show</h5>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight__icon"><img src="<?php echo get_template_directory_uri() . '/images/';?>stories.svg"
              alt="Stories Icon" /></div>
          <div class="highlight__title">
            <h5>
              Stories of CSD's Impact
            </h5>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight__icon"><img src="<?php echo get_template_directory_uri() . '/images/';?>cocktails.svg"
              alt="Cocktails Icon" /></div>
          <div class="highlight__title">
            <h5>
              Cocktail Reception
            </h5>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight__icon"><img src="<?php echo get_template_directory_uri() . '/images/';?>food.svg"
              alt="Food Icon" /></div>
          <div class="highlight__title">
            <h5>
              Appetizers, Small Plates, and Deserts
            </h5>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight__icon"><img src="<?php echo get_template_directory_uri() . '/images/';?>raffle.svg"
              alt="Raffle Icon" /></div>
          <div class="highlight__title">
            <h5>
              Raffle and Live Auction
            </h5>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight__icon"><img src="<?php echo get_template_directory_uri() . '/images/';?>fun.svg"
              alt="Balloons Icon" /></div>
          <div class="highlight__title">
            <h5>
              Hours of Fun
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sponsors">
  <div class="container">
    <div class="sponsors">
      <h3 class="sponsors__title">Sponsors</h3>
      <div class="sponsor-grid">
        <div class="sponsor-grid__title">
          <h4>$5,000 Round of Applause</h4>
        </div>
        <?php if (have_rows('round_of_applause')): ?>
        <?php while (have_rows('round_of_applause')): the_row(); ?>
        <div class="sponsor">
          <?php if (get_sub_field('logo')): ?>
          <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><img
              src="<?php the_sub_field('logo'); ?>" alt="Sponsor Image" />
          </a>
          <?php else: ?>
          <span><?php the_sub_field('name'); ?></span>
          <?php endif; ?>

        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="sponsors">
      <div class="sponsor-grid">
        <div class="sponsor-grid__title">
          <h4>$2,500 Knee Slapper</h4>
        </div>
        <?php if (have_rows('knee_slapper')): ?>
        <?php while (have_rows('knee_slapper')): the_row(); ?>
        <div class="sponsor">
          <?php if (get_sub_field('logo')): ?>
          <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><img
              src="<?php the_sub_field('logo'); ?>" alt="Sponsor Image" />
          </a>
          <?php else: ?>
          <span><?php the_sub_field('name'); ?></span>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="sponsors">
      <div class="sponsor-grid sponsor-grid--text-only">
        <div class="sponsor-grid__title">
          <h4>$1,000 Giggle</h4>
        </div>
        <?php if (have_rows('giggle')): ?>
        <?php while (have_rows('giggle')): the_row(); ?>
        <div class="sponsor">
          <?php if (get_sub_field('logo')): ?>
          <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><img
              src="<?php the_sub_field('logo'); ?>" alt="Sponsor Image" />
          </a>
          <?php else: ?>
          <span><?php the_sub_field('name'); ?></span>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="sponsors">
      <div class="sponsor-grid sponsor-grid--text-only">
        <div class="sponsor-grid__title">
          <h4>$500 Grinnin'</h4>
        </div>
        <?php if (have_rows('grinnin')): ?>
        <?php while (have_rows('grinnin')): the_row(); ?>
        <div class="sponsor">
          <?php if (get_sub_field('logo')): ?>
          <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><img
              src="<?php the_sub_field('logo'); ?>" alt="Sponsor Image" />
          </a>
          <?php else: ?>
          <span><?php the_sub_field('name'); ?></span>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php if (get_field('registration_form')): ?>
<section id="register">
  <div class="container">
    <div class="page-wrapper">
      <?php echo do_shortcode('[erforms id="'.get_field('registration_form').'"]'); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>