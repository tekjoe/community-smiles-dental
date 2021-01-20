</main>
<footer>
  <div class="container">
    <div class="footer">
      <div class="footer__logo">
        <img src="<?php echo get_template_directory_uri() . '/images/';?>csd-logo-reversed.svg"
          alt="Community Smiles Dental Logo" />
      </div>
      <div class="footer__details">
        <div class="footer__locations">
          <div class="location">
            <div class="location__title">Waukesha</div>
            <div class="location__address">
              <span>210 NW Barstow Street, Suite 305</span>
              <span>Waukesha, WI 53188</span>
              <span>(262) 522-7645</span>
            </div>
          </div>
          <div class="location">
            <div class="location__title">Menomonee Falls</div>
            <div class="location__address">
              <span>N81 W15062 Appleton Avenue</span>
              <span>Menomonee Falls, WI 53051</span>
              <span>(262) 522-7645</span>
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
        <div class="footer__legal"><?php the_date('Y'); ?> &copy; Community Smiles Dental. All Rights Reserved.
        </div>
      </div>
      <div class="footer__partners">
        <div class="partners__header"><a href="https://www.unitedwaygmwc.org/" rel="noopener noreferrer"
            target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/';?>united-way-logo.jpg"
              alt="United Way Logo"></a></div>
        <div class="partners__body">
          <p>Community Smiles Dental is a proud partner of the United Way of Greater Milwaukee & Waukesha County.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>

</html>