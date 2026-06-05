<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mf-logo.png' ); ?>"
               alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        <?php endif; ?>
        <p><?php esc_html_e( 'Serving Anthem and North Phoenix homeowners with exceptional flooring installations, kitchen remodels, and bathroom transformations. Quality craftsmanship you can trust.', 'milestone' ); ?></p>
        <div class="footer-social">
          <a href="<?php echo esc_url( milestone_facebook() ); ?>" class="social-btn" aria-label="Facebook" target="_blank" rel="noopener">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="<?php echo esc_url( milestone_instagram() ); ?>" class="social-btn" aria-label="Instagram" target="_blank" rel="noopener">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"/></svg>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h4><?php esc_html_e( 'Quick Links', 'milestone' ); ?></h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'milestone' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About Us', 'milestone' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Services', 'milestone' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'milestone' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Free Consultation', 'milestone' ); ?></a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="footer-col">
        <h4><?php esc_html_e( 'Our Services', 'milestone' ); ?></h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/services/#flooring' ) ); ?>"><?php esc_html_e( 'Flooring Installation', 'milestone' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#kitchens' ) ); ?>"><?php esc_html_e( 'Kitchen Remodeling', 'milestone' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#bathrooms' ) ); ?>"><?php esc_html_e( 'Bathroom Remodeling', 'milestone' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#custom' ) ); ?>"><?php esc_html_e( 'Custom Kitchens', 'milestone' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#custom' ) ); ?>"><?php esc_html_e( 'Custom Bathrooms', 'milestone' ); ?></a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-col">
        <h4><?php esc_html_e( 'Contact Us', 'milestone' ); ?></h4>
        <div class="footer-contact-item">
          <span class="footer-contact-icon">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11.5 19.79 19.79 0 010 2.74 2 2 0 012 .56h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 8a16 16 0 006.91 6.91l.75-.74a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          </span>
          <span><a href="<?php echo esc_attr( milestone_phone_link() ); ?>"><?php echo esc_html( milestone_phone() ); ?></a></span>
        </div>
        <div class="footer-contact-item">
          <span class="footer-contact-icon">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </span>
          <span><a href="mailto:<?php echo esc_attr( milestone_email() ); ?>"><?php echo esc_html( milestone_email() ); ?></a></span>
        </div>
        <div class="footer-contact-item">
          <span class="footer-contact-icon">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </span>
          <span><?php echo esc_html( milestone_area() ); ?></span>
        </div>
        <div class="footer-contact-item">
          <span class="footer-contact-icon">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </span>
          <span><?php esc_html_e( 'Mon–Fri: 7am–6pm', 'milestone' ); ?><br><?php esc_html_e( 'Sat: 8am–4pm', 'milestone' ); ?></span>
        </div>
      </div>

    </div>
  </div><!-- .container -->

  <div class="footer-bottom">
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem;width:100%">
      <p>© <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'milestone' ); ?></p>
      <div class="footer-badges">
        <span class="footer-badge"><?php esc_html_e( 'Licensed', 'milestone' ); ?></span>
        <span class="footer-badge"><?php esc_html_e( 'Bonded', 'milestone' ); ?></span>
        <span class="footer-badge"><?php esc_html_e( 'Insured', 'milestone' ); ?></span>
        <span class="footer-badge"><?php echo esc_html( milestone_roc() ); ?></span>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
