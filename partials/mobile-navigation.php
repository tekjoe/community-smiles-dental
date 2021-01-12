<div class="mobile-nav" id="mobile-nav">
  <nav>
    <?php wp_nav_menu(array(
              "theme_location" => "header-menu",
              "container" => "ul",
              "container_class" => "mobile-nav__links",
              "depth" => 2,
              "menu_class" => "mobile-nav__links"
    )); ?>
  </nav>
</div>