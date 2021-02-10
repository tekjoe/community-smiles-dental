<div class="mobile-nav" id="mobile-nav">
  <nav>
    <?php wp_nav_menu(array(
              "theme_location" => "header-menu",
              "container" => "ul",
              "container_class" => "mobile-nav__links",
              "depth" => 2,
              "menu_class" => "mobile-nav__links",
              "walker" => new CSD_Menu_Walker()
    )); ?>
  </nav>
  <div class="call"><a href="tel:2625227645">Call for an Appointment</a></div>
</div>