<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===== TOP BAR ===== -->
<div class="topbar">
  <div class="container">
    <div class="topbar-left">
      <span class="topbar-badge">Licensed <span class="dot">●</span></span>
      <span class="topbar-badge">Bonded <span class="dot">●</span></span>
      <span class="topbar-badge">Insured <span class="dot">●</span></span>
      <span class="topbar-badge" style="border-left:1px solid rgba(255,255,255,0.1);padding-left:1.2rem;">
        <?php echo esc_html( milestone_roc() ); ?>
      </span>
    </div>
    <div class="topbar-right">
      <a href="https://g.co/reviews/milestone" class="topbar-link" target="_blank" rel="noopener">
        <span class="stars-small">★★★★★</span>
        <span>5.0 Google Reviews</span>
      </a>
      <a href="<?php echo esc_attr( milestone_phone_link() ); ?>" class="topbar-link">
        <svg width="12" height="12" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
        <?php echo esc_html( milestone_phone() ); ?>
      </a>
    </div>
  </div>
</div>

<!-- ===== MAIN HEADER ===== -->
<header class="site-header" id="site-header">
  <div class="container">
    <nav class="nav-inner" aria-label="<?php esc_attr_e( 'Primary Navigation', 'milestone' ); ?>">

      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mf-logo.png' ); ?>"
               alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        <?php endif; ?>
      </a>

      <!-- Desktop Nav -->
      <div class="nav-links">
        <?php
        wp_nav_menu( [
          'theme_location' => 'primary',
          'menu_class'     => '',
          'container'      => false,
          'depth'          => 1,
          'fallback_cb'    => function() {
              $pages = [
                  home_url( '/' )          => 'Home',
                  home_url( '/about' )     => 'About Us',
                  home_url( '/services' )  => 'Services',
                  home_url( '/contact' )   => 'Contact',
              ];
              foreach ( $pages as $url => $label ) {
                  $active = ( rtrim( get_permalink(), '/' ) === rtrim( $url, '/' ) ) ? ' class="active"' : '';
                  printf( '<a href="%s"%s>%s</a>', esc_url( $url ), $active, esc_html( $label ) );
              }
          },
        ] );
        ?>
      </div>

      <!-- CTA Button -->
      <div class="nav-cta">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
          <?php esc_html_e( 'Free Consultation', 'milestone' ); ?>
        </a>
      </div>

      <!-- Hamburger -->
      <button class="hamburger" aria-label="<?php esc_attr_e( 'Open menu', 'milestone' ); ?>" aria-expanded="false" aria-controls="mobile-menu">
        <span></span><span></span><span></span>
      </button>

    </nav>
  </div>
</header>

<!-- ===== MOBILE MENU ===== -->
<nav class="mobile-menu" id="mobile-menu" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'milestone' ); ?>">
  <button class="mobile-close" aria-label="<?php esc_attr_e( 'Close menu', 'milestone' ); ?>">×</button>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'milestone' ); ?></a>
  <a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About Us', 'milestone' ); ?></a>
  <a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Services', 'milestone' ); ?></a>
  <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'milestone' ); ?></a>
  <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="color:#fff">
    <?php esc_html_e( 'Schedule Consultation', 'milestone' ); ?>
  </a>
</nav>
