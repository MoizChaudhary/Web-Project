<?php
/**
 * Template Name: About Us Page
 * Template Post Type: page
 */
get_header();
?>
<main id="main">

  <section class="page-hero">
    <div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1600210492493-0946911123ea?w=1600&q=80')"></div>
    <div class="page-hero-overlay"></div>
    <div class="container">
      <div class="page-hero-content">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','milestone'); ?></a>
          <span class="sep">/</span>
          <span><?php esc_html_e('About Us','milestone'); ?></span>
        </nav>
        <h1><?php esc_html_e('About Milestone','milestone'); ?></h1>
        <p><?php esc_html_e('14+ years of trusted craftsmanship, serving families across Anthem and North Phoenix.','milestone'); ?></p>
      </div>
    </div>
  </section>

  <section class="about-intro">
    <div class="container">
      <div class="about-intro-grid">
        <div class="about-img-wrap animate-on-scroll">
          <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=900&q=80" alt="<?php esc_attr_e('Milestone team at work','milestone'); ?>">
          <div class="about-badge-wrap">
            <span class="big">14+</span>
            <span class="small"><?php esc_html_e('Years Serving AZ','milestone'); ?></span>
          </div>
        </div>
        <div class="animate-on-scroll">
          <span class="section-label"><?php esc_html_e('Our Story','milestone'); ?></span>
          <h2><?php esc_html_e('Your Trusted Remodeling Experts in North Phoenix','milestone'); ?></h2>
          <div class="divider"></div>
          <p style="margin-bottom:1.2rem"><?php esc_html_e('Milestone Flooring + Remodeling was founded on one simple belief: homeowners deserve a contractor they can truly trust — one who communicates clearly, shows up on time, and delivers work that stands the test of time.','milestone'); ?></p>
          <p style="margin-bottom:1.2rem"><?php esc_html_e('Since 2010, we\'ve been transforming homes across Anthem and North Phoenix with expert flooring installations, stunning kitchen remodels, and luxurious bathroom renovations.','milestone'); ?></p>
          <p><?php esc_html_e('We\'re a local, family-oriented company. When you hire Milestone, you\'re not just a number — you\'re a neighbor.','milestone'); ?></p>
          <div style="margin-top:2.5rem;display:flex;gap:1rem;flex-wrap:wrap">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary"><?php esc_html_e('Get a Free Estimate','milestone'); ?></a>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-outline-dark"><?php esc_html_e('Our Services →','milestone'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="stats-strip">
    <div class="container">
      <div class="stats-inner">
        <?php foreach([['500+',__('Homes Transformed','milestone')],['14+',__('Years Experience','milestone')],['200+',__('5-Star Reviews','milestone')],['3',__('Core Services','milestone')]] as $s): ?>
        <div class="stat-item"><div class="stat-num"><?php echo esc_html($s[0]);?></div><div class="stat-label"><?php echo esc_html($s[1]);?></div></div>
        <?php endforeach;?>
      </div>
    </div>
  </section>

  <section class="about-values">
    <div class="container">
      <div class="text-center animate-on-scroll">
        <span class="section-label"><?php esc_html_e('What We Stand For','milestone');?></span>
        <h2><?php esc_html_e('Our Approach to Every Project','milestone');?></h2>
        <div class="divider divider-center"></div>
      </div>
      <div class="values-grid">
        <?php
        $vals=[
          [__('Clear Communication','milestone'),__('We keep you informed at every stage — no surprises, no guesswork.','milestone')],
          [__('Quality Materials','milestone'),   __('Premium-grade materials from trusted suppliers — because great craftsmanship deserves a great foundation.','milestone')],
          [__('Reliable Timelines','milestone'),  __('We respect your schedule and your home. Projects completed on time every time.','milestone')],
          [__('Local Expertise','milestone'),     __('We understand the North Phoenix and Anthem market — the climate, styles, and expectations.','milestone')],
          [__('Licensed & Insured','milestone'),  __('Fully licensed (ROC 364355), bonded and insured — giving you complete peace of mind.','milestone')],
          [__('Clean Job Sites','milestone'),     __('Protective coverings, daily cleanup, and zero mess left behind at the end of each day.','milestone')],
        ];
        foreach($vals as $v):?>
        <div class="value-card animate-on-scroll">
          <div class="value-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg></div>
          <h3><?php echo esc_html($v[0]);?></h3>
          <p><?php echo esc_html($v[1]);?></p>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </section>

  <section class="team-section">
    <div class="container">
      <div class="text-center animate-on-scroll">
        <span class="section-label"><?php esc_html_e('The People Behind the Work','milestone');?></span>
        <h2><?php esc_html_e('Meet Our Team','milestone');?></h2>
        <div class="divider divider-center"></div>
      </div>
      <div class="team-grid">
        <?php
        $team=[
          ['https://images.unsplash.com/photo-1560250097-0b93528c311a?w=500&q=80','Marco Reyes',  __('Owner & Lead Contractor','milestone'),__('14+ years in the industry. Marco oversees every project.','milestone')],
          ['https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500&q=80','Angela Torres',__('Design Consultant','milestone'),   __('Helps clients translate their vision into stunning, functional spaces.','milestone')],
          ['https://images.unsplash.com/photo-1504257432389-52343af06ae3?w=500&q=80','Derek Chan',   __('Lead Installer','milestone'),        __('10+ years of hands-on experience in flooring and tile installation.','milestone')],
        ];
        foreach($team as $m):?>
        <div class="team-card animate-on-scroll">
          <img src="<?php echo esc_url($m[0]);?>" alt="<?php echo esc_attr($m[1]);?>">
          <div class="team-card-info">
            <h3><?php echo esc_html($m[1]);?></h3>
            <p class="role"><?php echo esc_html($m[2]);?></p>
            <p style="font-size:.85rem;margin-top:.5rem"><?php echo esc_html($m[3]);?></p>
          </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container">
      <div class="cta-inner">
        <div class="cta-text">
          <h2><?php esc_html_e("Let's Build Something Beautiful Together",'milestone');?></h2>
          <p><?php esc_html_e('Free consultations, free estimates — zero pressure.','milestone');?></p>
        </div>
        <div class="cta-actions">
          <a href="<?php echo esc_url(home_url('/contact'));?>" class="btn btn-white"><?php esc_html_e('Schedule Consultation','milestone');?></a>
          <a href="<?php echo esc_attr(milestone_phone_link());?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.5)"><?php echo esc_html('Call '.milestone_phone());?></a>
        </div>
      </div>
    </div>
  </section>

  <?php the_content(); ?>
</main>
<?php get_footer();?>
