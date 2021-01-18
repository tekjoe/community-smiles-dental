<?php if (get_field('notification', 'option')): ?>
<div class="notification-bar" id="notification-bar">
  <div class="container">
    <div class="notification">
      <p class="notification__message"><?php the_field('notification', 'option'); ?></p>
      <span class="notification__button" role="button" id="notification-button">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>close.svg" alt="Close button">
      </span>
    </div>
  </div>
</div>
<?php else: ?>
<span class="notification"></span>
<?php endif; ?>