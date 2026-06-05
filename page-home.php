<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 *
 * Assign this template to your "Home" page in WordPress.
 * If you are using Elementor, assign this template then edit with Elementor.
 */
get_header();
?>

<main id="main">

  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="container">
      <div class="hero-content">
        <span class="hero-tagline">
          <svg width="12" height="12" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <?php esc_html_e( 'Serving Anthem & North Phoenix Since 2010', 'milestone' ); ?>
        </span>
        <h1><?php esc_html_e( 'Craftsmanship You Can See.', 'milestone' ); ?><br><em><?php esc_html_e( 'Experience You Can Trust.', 'milestone' ); ?></em></h1>
        <p class="hero-sub"><?php esc_html_e( 'Transform your home with expert flooring installations, kitchen remodels, and bathroom renovations — delivered on time, on budget, and built to last.', 'milestone' ); ?></p>
        <div class="hero-services">
          <span class="hero-service-dot"><?php esc_html_e( 'Flooring', 'milestone' ); ?></span>
          <span class="hero-service-dot"><?php esc_html_e( 'Kitchens', 'milestone' ); ?></span>
          <span class="hero-service-dot"><?php esc_html_e( 'Bathrooms', 'milestone' ); ?></span>
          <span class="hero-service-dot"><?php esc_html_e( 'Full Home Remodels', 'milestone' ); ?></span>
        </div>
        <div class="hero-actions">
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Schedule Free Consultation', 'milestone' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline"><?php esc_html_e( 'View Our Services →', 'milestone' ); ?></a>
        </div>
        <div class="hero-trust">
          <div class="trust-item">
            <span class="number">500+</span>
            <span class="label"><?php esc_html_e( 'Homes Transformed', 'milestone' ); ?></span>
          </div>
          <div class="trust-divider"></div>
          <div class="trust-item">
            <span class="number">14+</span>
            <span class="label"><?php esc_html_e( 'Years Experience', 'milestone' ); ?></span>
          </div>
          <div class="trust-divider"></div>
          <div class="trust-item">
            <div class="hero-rating">
              <span class="hero-stars">★★★★★</span>
              <span>5.0 / 200+ <?php esc_html_e( 'Reviews', 'milestone' ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== SERVICES SECTION ===== -->
  <section class="services-intro">
    <div class="container">
      <div class="text-center animate-on-scroll">
        <span class="section-label"><?php esc_html_e( 'What We Do Best', 'milestone' ); ?></span>
        <h2><?php esc_html_e( 'Complete Home Transformation Under One Roof', 'milestone' ); ?></h2>
        <div class="divider divider-center"></div>
        <p style="max-width:580px;margin:0 auto"><?php esc_html_e( 'From beautiful hardwood floors to completely custom kitchens and spa-like bathrooms — we handle every detail with precision and care.', 'milestone' ); ?></p>
      </div>
      <div class="services-grid">
        <?php
        $services = [
          [ 'num'=>'01', 'title'=>__('Flooring','milestone'),            'img'=>'https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?w=800&q=80', 'alt'=>'Flooring', 'desc'=>__('Hardwood, luxury vinyl, tile, laminate — we install flooring that elevates every room.','milestone'), 'href'=>'#flooring' ],
          [ 'num'=>'02', 'title'=>__('Kitchen Remodeling','milestone'),  'img'=>'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=800&q=80', 'alt'=>'Kitchen', 'desc'=>__('Custom cabinets, quartz countertops, islands, and full layout redesigns.','milestone'), 'href'=>'#kitchens' ],
          [ 'num'=>'03', 'title'=>__('Bathroom Remodeling','milestone'), 'img'=>'https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=800&q=80', 'alt'=>'Bathroom', 'desc'=>__('Walk-in showers, soaking tubs, double vanities, and custom tile work.','milestone'), 'href'=>'#bathrooms' ],
        ];
        foreach ( $services as $s ) : ?>
        <div class="service-card animate-on-scroll">
          <img src="<?php echo esc_url($s['img']); ?>" alt="<?php echo esc_attr($s['alt']); ?>">
          <div class="service-card-overlay"></div>
          <div class="service-card-content">
            <span class="label"><?php echo esc_html('Service '.$s['num']); ?></span>
            <h3><?php echo esc_html($s['title']); ?></h3>
            <p><?php echo esc_html($s['desc']); ?></p>
            <a href="<?php echo esc_url(home_url('/services/'.$s['href'])); ?>" class="service-card-link"><?php esc_html_e('Explore →','milestone'); ?></a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ===== WHY CHOOSE US ===== -->
  <section class="why-us">
    <div class="container">
      <div class="why-us-inner">
        <div class="why-image-stack animate-on-scroll">
          <img class="why-img-main"      src="https://images.unsplash.com/photo-1600210492493-0946911123ea?w=900&q=80" alt="<?php esc_attr_e('Beautiful kitchen remodel','milestone'); ?>">
          <img class="why-img-secondary" src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=600&q=80" alt="<?php esc_attr_e('Bathroom transformation','milestone'); ?>">
          <div class="why-badge"><span class="num">14+</span><span class="yr"><?php esc_html_e('Years','milestone'); ?></span></div>
        </div>
        <div class="animate-on-scroll">
          <span class="section-label"><?php esc_html_e('Why Milestone?','milestone'); ?></span>
          <h2><?php esc_html_e('Your Trusted Remodeling Experts in North Phoenix','milestone'); ?></h2>
          <div class="divider"></div>
          <p><?php esc_html_e('We\'re not just contractors — we\'re craftsmen who take pride in every tile laid, every cabinet installed, every floor finished. Licensed, bonded, and insured, we\'ve earned hundreds of 5-star reviews from families across Anthem and North Phoenix.','milestone'); ?></p>
          <div class="why-features">
            <?php
            $features = [
              [ 'title'=>__('Licensed & Insured','milestone'), 'desc'=>__('ROC 364355 — fully licensed, bonded and insured for your protection.','milestone') ],
              [ 'title'=>__('Clear Communication','milestone'), 'desc'=>__('You\'re kept in the loop at every step — no surprises, ever.','milestone') ],
              [ 'title'=>__('On-Time Delivery','milestone'),   'desc'=>__('We respect your home, your schedule, and your deadlines.','milestone') ],
              [ 'title'=>__('Quality Materials','milestone'),  'desc'=>__('We source premium materials built to last — and look stunning.','milestone') ],
            ];
            foreach ( $features as $f ) : ?>
            <div class="why-feature">
              <div class="why-feature-icon">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
              </div>
              <div class="why-feature-text">
                <h4><?php echo esc_html($f['title']); ?></h4>
                <p><?php echo esc_html($f['desc']); ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div style="margin-top:2.5rem">
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-outline-dark"><?php esc_html_e('Learn More About Us →','milestone'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== STATS STRIP ===== -->
  <section class="stats-strip">
    <div class="container">
      <div class="stats-inner">
        <?php foreach ( [ ['500+',__('Homes Transformed','milestone')], ['14+',__('Years Experience','milestone')], ['200+',__('5-Star Reviews','milestone')], ['100%',__('Satisfaction Goal','milestone')] ] as $s ) : ?>
        <div class="stat-item animate-on-scroll">
          <div class="stat-num"><?php echo esc_html($s[0]); ?></div>
          <div class="stat-label"><?php echo esc_html($s[1]); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ===== GALLERY ===== -->
  <section class="gallery-section">
    <div class="container">
      <div class="text-center animate-on-scroll">
        <span class="section-label"><?php esc_html_e('Our Work','milestone'); ?></span>
        <h2><?php esc_html_e('Recent Transformations','milestone'); ?></h2>
        <div class="divider divider-center"></div>
        <p style="max-width:500px;margin:0 auto"><?php esc_html_e('Every project is a story of a home made better. Here\'s a look at some of our favorite recent work.','milestone'); ?></p>
      </div>
      <div class="gallery-grid" style="margin-top:3rem">
        <?php
        $gallery = [
          ['https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1200&q=80','Kitchen Remodel'],
          ['https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=600&q=80', 'Bathroom Reno'],
          ['https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?w=600&q=80','Hardwood Flooring'],
          ['https://images.unsplash.com/photo-1600210492493-0946911123ea?w=1200&q=80','Open Plan Kitchen'],
          ['https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=800&q=80', 'Custom Shower'],
        ];
        foreach ( $gallery as $g ) : ?>
        <div class="gallery-item animate-on-scroll">
          <img src="<?php echo esc_url($g[0]); ?>" alt="<?php echo esc_attr($g[1]); ?>">
          <div class="gallery-hover"><span><?php echo esc_html($g[1]); ?></span></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="text-center" style="margin-top:3rem">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline-dark"><?php esc_html_e('Start Your Project →','milestone'); ?></a>
      </div>
    </div>
  </section>

  <!-- ===== TESTIMONIALS ===== -->
  <section class="testimonials-section">
    <div class="container">
      <div class="testimonials-header animate-on-scroll">
        <span class="section-label"><?php esc_html_e('What Clients Say','milestone'); ?></span>
        <h2 style="color:#fff"><?php esc_html_e('What Homeowners Are Saying','milestone'); ?></h2>
        <div class="rating-row">
          <span class="rating-score">5.0</span>
          <span class="rating-stars">★★★★★</span>
          <span class="rating-count"><?php esc_html_e('Based on 200+ Google Reviews','milestone'); ?></span>
        </div>
      </div>
      <div class="testimonials-grid">
        <?php
        $testimonials = [
          [ 'Milestone completely transformed our master bathroom. The tile work is flawless, the custom shower is stunning, and the team was respectful of our home throughout.', 'Sarah M.', 'Anthem, AZ', 'https://randomuser.me/api/portraits/women/44.jpg' ],
          [ 'We hired Milestone for new flooring throughout our entire house — over 2,200 sq ft. The installation was seamless, the crew was professional, and the results are beautiful.', 'James K.', 'North Phoenix, AZ', 'https://randomuser.me/api/portraits/men/32.jpg' ],
          [ 'Our kitchen is completely unrecognizable — in the best way. From the custom island to the quartz countertops and new cabinets, Milestone delivered exactly what we envisioned.', 'Lisa R.', 'Anthem, AZ', 'https://randomuser.me/api/portraits/women/68.jpg' ],
        ];
        foreach ( $testimonials as $t ) : ?>
        <div class="testimonial-card animate-on-scroll">
          <div class="t-stars">★★★★★</div>
          <p class="t-text">"<?php echo esc_html($t[0]); ?>"</p>
          <div class="t-author">
            <img class="t-avatar" src="<?php echo esc_url($t[3]); ?>" alt="<?php echo esc_attr($t[1]); ?>">
            <div>
              <div class="t-name"><?php echo esc_html($t[1]); ?></div>
              <div class="t-loc"><?php echo esc_html($t[2]); ?></div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="cta-section">
    <div class="container">
      <div class="cta-inner">
        <div class="cta-text">
          <h2><?php esc_html_e('Ready to Transform Your Home?','milestone'); ?></h2>
          <p><?php esc_html_e('Get a free consultation and estimate — no pressure, no obligation.','milestone'); ?></p>
        </div>
        <div class="cta-actions">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white"><?php esc_html_e('Schedule Free Consultation','milestone'); ?></a>
          <a href="<?php echo esc_attr(milestone_phone_link()); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.5)"><?php echo esc_html('Call '.milestone_phone()); ?></a>
        </div>
      </div>
    </div>
  </section>

  <?php the_content(); // Renders any Elementor content added to the page ?>

</main>

<?php get_footer(); ?>
