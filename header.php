<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Community Smiles Dental improves the lives of the underserved through oral healthcare services, preventive education, and advocating for systemic healthcare change - Because everyone deserves a healthy smile.">
  <title><?php the_title(); ?> | Community Smiles Dental</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container">
      <div class="header">
        <div class="header__top">
          <div class="left">
            <p class="tagline">caring. serving. advocating</p>
          </div>
          <div class="right">
            <div class="social"></div>
            <a href="https://forms.donorsnap.com/form?id=c0f77fce-51df-4101-b726-ad789c2a24b4" class="donate"
              target="_blank" rel="noreferrer noopener">Donate</a>
          </div>
        </div>
        <div class="header__desktop">
          <div class="logo"><img src="<?php echo get_template_directory_uri() . '/images/';?>csd-logo.png"
              alt="Community Smiles Dental Logo" />
          </div>
          <nav class="header__nav">
            <?php wp_nav_menu(array(
              "theme_location" => "header-menu",
              "container" => "ul",
              "container_class" => "nav__links",
              "menu_class" => "nav__links"
              )); ?>
          </nav>
        </div>
      </div>
      <div class="header__mobile"></div>
    </div>

  </header>
  <main>