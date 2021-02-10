<?php get_header(); ?>

<section id="masthead">
  <div class="container">
    <div class="masthead"><img class="masthead__image"
        src="<?php echo get_template_directory_uri() . '/images/';?>about-masthead.png"
        alt="Young child smiling at dentist">
      <div class="masthead__overlay">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p class="subtitle">We have two clinics conveniently located in Waukesha and Menomonee Falls</p>
      </div>
    </div>
  </div>
</section>
<section id="locations">
  <div class="container">
    <div class="locations">
      <div class="columns columns--has-gap">
        <div class="column">
          <div class="location">
            <div class="location__image"><img
                src="<?php echo get_template_directory_uri() . '/images/';?>barstow-clinic.png"
                alt="Community Smiles Dental Waukesha" /></div>
            <div class="location__title">Waukesha</div>
            <div class="location__address">
              <span>210 NW Barstow Street, Suite 305</span>
              <span>Waukesha, WI 53188</span>
              <span>(262) 522-7645</span>
            </div>
            <button class="button" id="waukesha">Show on Map</button>
          </div>
        </div>
        <div class="column">
          <div class="location">
            <div class="location__image"><img
                src="<?php echo get_template_directory_uri() . '/images/';?>menomonee-falls.png"
                alt="Community Smiles Dental Menomonee Falls" /></div>
            <div class="location__title">Menomonee Falls</div>
            <div class="location__address">
              <span>N81 W15062 Appleton Avenue</span>
              <span>Menomonee Falls, WI 53051</span>
              <span>(262) 522-7645 ext. 2280</span>
            </div>
            <button class="button" id="menomoneeFalls">Show on Map</button>
          </div>
        </div>
      </div>
      <div class="columns columns--has-gap">
        <div class="column column--is-40">
          <div class="schedule">
            <h2 class="schedule__title">Hours of Operation</h2>
            <div class="days">
              <span>Monday</span>
              <span>Tuesday</span>
              <span>Wednesday</span>
              <span>Thursday</span>
              <span>Friday</span>
              <span>Saturday</span>
              <span>Sunday</span>
            </div>
            <div class="hours">
              <span>8:00AM - 4:30PM</span>
              <span>8:00AM - 4:30PM</span>
              <span>8:00AM - 4:30PM</span>
              <span>8:00AM - 4:30PM</span>
              <span>8:00AM - 2:00PM</span>
              <span>Closed</span>
              <span>Closed</span>
            </div>
          </div>
        </div>
        <div class="column column--is-60 map">
          <div id="map"></div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php get_template_part('partials/newsletter'); ?>
<?php get_template_part('partials/featured-posts'); ?>
<?php get_footer(); ?>