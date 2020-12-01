</main>
<footer>
  <div class="container">
    <div class="footer">
      <div class="footer__logo"></div>
      <div class="footer__locations">
        <div class="location">
          <div class="location__title">Waukesha</div>
          <div class="location__address">
            <span>Barstow Street</span>
            <span>Waukesha, WI 53186</span>
            <span>(262)555-5555</span>
          </div>
        </div>
        <div class="location">
          <div class="location__title">Menomonee Falls</div>
          <div class="location__address">
            <span>Appleton Ave</span>
            <span>Menomonee Falls, WI 53186</span>
            <span>(262)555-5555</span>
          </div>
        </div>
      </div>
      <div class="footer__nav">
        <?php wp_nav_menu(array(
        "theme_location" => "footer-menu",
        "container" => "ul",
        "container_class" => "nav__links",
        "menu_class" => "nav__links"
        )); ?>
      </div>
    </div>
    <div class="footer__content">

    </div>
  </div>
</footer>
</body>

</html>