<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Community Smiles Dental improves lives through oral healthcare, education, and systemic healthcare change - Because everyone deserves a healthy smile.">
  <meta name="google-site-verification" content="unjF738_XjXFtmMTNBo9lPB9evKWQkLG6DGIPVwXUeg" />
  <title><?php the_title(); ?> | Community Smiles Dental</title>
  <?php wp_head(); ?>
</head>

<body>
  <?php get_template_part('partials/notification-bar'); ?>
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
          <div class="logo">
            <a href="<?php echo site_url(); ?>">
              <img src="<?php echo get_template_directory_uri() . '/images/';?>csd-logo-reversed.svg"
                alt="Community Smiles Dental Logo" />
            </a>
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
      <div class="header__mobile">
        <div class="logo">
          <a href="<?php echo site_url(); ?>"><img
              src="<?php echo get_template_directory_uri() . '/images/';?>csd-logo-reversed.svg"
              alt="Community Smiles Dental Logo" />
          </a>
        </div>
        <div class="hamburger">
          <button class="open-button" id="open-menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path fill="#fff" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <button class="close-button" id="close-menu">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path fill="#fff"
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
          </svg>
        </button>
        <?php get_template_part('partials/mobile-navigation'); ?>
      </div>
    </div>

  </header>
  <main>