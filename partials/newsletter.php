<section id="newsletter">
  <div class="container">
    <div class="newsletter">
      <div class="columns">
        <div class="column column--centered">
          <h2>Newsletter</h2>
          <p>Support statement goes here like this to add more information. Support statement goes here.</p>
        </div>
        <div class="column column--centered">
          <?php if (get_field('newsletter_signup', 'option')): ?>
          <?php echo do_shortcode('[ctct form="'.get_field('newsletter_signup', 'option').'" ]'); ?>
          <?php else: ?>
          <span></span>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>