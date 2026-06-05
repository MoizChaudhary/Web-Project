<?php
/**
 * Template Name: Contact Us Page
 * Template Post Type: page
 */
get_header();
?>
<main id="main">

  <section class="page-hero">
    <div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1484154218962-a197022b5858?w=1600&q=80')"></div>
    <div class="page-hero-overlay"></div>
    <div class="container">
      <div class="page-hero-content">
        <nav class="breadcrumb"><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home','milestone');?></a><span class="sep">/</span><span><?php esc_html_e('Contact Us','milestone');?></span></nav>
        <h1><?php esc_html_e('Get In Touch','milestone');?></h1>
        <p><?php esc_html_e('We\'d love to hear about your project. Reach out for a free consultation and estimate.','milestone');?></p>
      </div>
    </div>
  </section>

  <!-- Quick Bar -->
  <div class="quick-contact-bar">
    <div class="container">
      <div class="quick-contact-inner">
        <a href="<?php echo esc_attr(milestone_phone_link());?>" class="quick-contact-item">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
          <?php echo esc_html(milestone_phone());?>
        </a>
        <a href="mailto:<?php echo esc_attr(milestone_email());?>" class="quick-contact-item">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <?php echo esc_html(milestone_email());?>
        </a>
        <span class="quick-contact-item" style="cursor:default">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <?php esc_html_e('Mon–Sat: 7am–6pm','milestone');?>
        </span>
        <span class="quick-contact-item" style="cursor:default">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          <?php echo esc_html(milestone_area());?>
        </span>
      </div>
    </div>
  </div>

  <section class="contact-section">
    <div class="container">
      <div class="contact-grid">

        <!-- Info Column -->
        <div class="animate-on-scroll">
          <span class="section-label"><?php esc_html_e("Let's Connect",'milestone');?></span>
          <h2><?php esc_html_e("Let's Discuss Your Project",'milestone');?></h2>
          <div class="divider"></div>
          <p><?php esc_html_e('Whether you have a full project in mind or just a question, we\'re here to help.','milestone');?></p>
          <div class="contact-cards">
            <div class="contact-card">
              <div class="contact-card-icon"><svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg></div>
              <div><h4><?php esc_html_e('Phone','milestone');?></h4><a href="<?php echo esc_attr(milestone_phone_link());?>"><?php echo esc_html(milestone_phone());?></a></div>
            </div>
            <div class="contact-card">
              <div class="contact-card-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
              <div><h4><?php esc_html_e('Email','milestone');?></h4><a href="mailto:<?php echo esc_attr(milestone_email());?>"><?php echo esc_html(milestone_email());?></a></div>
            </div>
            <div class="contact-card">
              <div class="contact-card-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
              <div><h4><?php esc_html_e('Service Area','milestone');?></h4><p><?php echo esc_html(milestone_area());?></p></div>
            </div>
          </div>
          <h4 style="font-family:var(--font-body);font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--color-gold);margin-bottom:1rem"><?php esc_html_e('Business Hours','milestone');?></h4>
          <div class="hours-table">
            <?php foreach([['Monday – Friday','7:00 AM – 6:00 PM'],['Saturday','8:00 AM – 4:00 PM'],['Sunday','By Appointment']] as $h):?>
            <div class="hours-row"><span class="day"><?php echo esc_html($h[0]);?></span><span class="time"><?php echo esc_html($h[1]);?></span></div>
            <?php endforeach;?>
          </div>
        </div>

        <!-- Form Column -->
        <div class="animate-on-scroll">
          <div class="contact-form-wrap">
            <span class="section-label"><?php esc_html_e('Quick Contact','milestone');?></span>
            <h3><?php esc_html_e('Request Your Free Consultation','milestone');?></h3>
            <p><?php esc_html_e("Tell us about your project and we'll get back to you within a few hours.",'milestone');?></p>

            <div id="contactFormMsg" style="display:none;padding:1rem;border-radius:4px;margin-bottom:1rem"></div>

            <form id="contactForm">
              <?php wp_nonce_field('milestone_nonce','milestone_nonce_field');?>
              <div class="form-row">
                <div class="form-group"><label><?php esc_html_e('First Name *','milestone');?></label><input type="text" name="fname" placeholder="John" required></div>
                <div class="form-group"><label><?php esc_html_e('Last Name *','milestone');?></label><input type="text" name="lname" placeholder="Smith" required></div>
              </div>
              <div class="form-row">
                <div class="form-group"><label><?php esc_html_e('Phone *','milestone');?></label><input type="tel" name="phone" placeholder="(480) 000-0000" required></div>
                <div class="form-group"><label><?php esc_html_e('Email','milestone');?></label><input type="email" name="email" placeholder="john@email.com"></div>
              </div>
              <div class="form-group">
                <label><?php esc_html_e('Project Type *','milestone');?></label>
                <select name="service" required>
                  <option value="" disabled selected><?php esc_html_e('Select a service…','milestone');?></option>
                  <option value="flooring"><?php esc_html_e('Flooring Installation','milestone');?></option>
                  <option value="kitchen"><?php esc_html_e('Kitchen Remodeling','milestone');?></option>
                  <option value="bathroom"><?php esc_html_e('Bathroom Remodeling','milestone');?></option>
                  <option value="custom-kitchen"><?php esc_html_e('Custom Kitchen','milestone');?></option>
                  <option value="custom-bathroom"><?php esc_html_e('Custom Bathroom','milestone');?></option>
                  <option value="full-remodel"><?php esc_html_e('Full Home Remodel','milestone');?></option>
                  <option value="other"><?php esc_html_e('Other / Not Sure Yet','milestone');?></option>
                </select>
              </div>
              <div class="form-group">
                <label><?php esc_html_e('Desired Timeline','milestone');?></label>
                <select name="timeline">
                  <option value="" disabled selected><?php esc_html_e('When are you looking to start?','milestone');?></option>
                  <option><?php esc_html_e('ASAP – within 1 month','milestone');?></option>
                  <option><?php esc_html_e('1–3 months','milestone');?></option>
                  <option><?php esc_html_e('3–6 months','milestone');?></option>
                  <option><?php esc_html_e('6+ months','milestone');?></option>
                  <option><?php esc_html_e('Just exploring for now','milestone');?></option>
                </select>
              </div>
              <div class="form-group">
                <label><?php esc_html_e('Tell Us About Your Project','milestone');?></label>
                <textarea name="message" placeholder="<?php esc_attr_e('Describe your project, size, style preferences, or specific needs…','milestone');?>"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:1rem" id="contactSubmitBtn">
                <?php esc_html_e("Send My Request — It's Free",'milestone');?>
              </button>
              <p style="font-size:.75rem;text-align:center;margin-top:1rem;color:var(--color-stone)"><?php esc_html_e('No spam, ever.','milestone');?></p>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Map -->
  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26627.64905454773!2d-112.10897668972714!3d33.84842649261753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b6b72b6c38d17%3A0x5b8c5a71a2b0a8e!2sAnthem%2C%20AZ!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Service area"></iframe>
  </div>

  <section class="cta-section">
    <div class="container">
      <div class="cta-inner">
        <div class="cta-text">
          <h2><?php esc_html_e("Prefer to Call? We'd Love to Hear From You.",'milestone');?></h2>
          <p><?php esc_html_e('Speak directly with our team — fast, friendly, and zero pressure.','milestone');?></p>
        </div>
        <div class="cta-actions">
          <a href="<?php echo esc_attr(milestone_phone_link());?>" class="btn btn-white"><?php echo esc_html('Call '.milestone_phone());?></a>
          <a href="mailto:<?php echo esc_attr(milestone_email());?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.5)"><?php esc_html_e('Email Us','milestone');?></a>
        </div>
      </div>
    </div>
  </section>

  <?php the_content();?>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('contactForm');
  const msg  = document.getElementById('contactFormMsg');
  const btn  = document.getElementById('contactSubmitBtn');
  if (!form) return;
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    btn.textContent = '<?php esc_html_e('Sending…','milestone');?>';
    btn.disabled = true;
    const data = new FormData(form);
    data.append('action', 'milestone_contact');
    data.append('nonce',  form.querySelector('[name="milestone_nonce_field"]').value);
    fetch('<?php echo esc_url(admin_url('admin-ajax.php'));?>', { method:'POST', body: data })
      .then(r => r.json())
      .then(res => {
        msg.style.display = 'block';
        if (res.success) {
          msg.style.cssText = 'display:block;padding:1.5rem;background:rgba(196,151,59,0.1);border:1px solid rgba(196,151,59,0.3);border-radius:4px;color:#8B6914;text-align:center;margin-bottom:1rem';
          msg.textContent = res.data.message;
          form.reset();
        } else {
          msg.style.cssText = 'display:block;padding:1rem;background:#fff0f0;border:1px solid #f5c6c6;border-radius:4px;color:#c0392b;margin-bottom:1rem';
          msg.textContent = res.data.message;
          btn.textContent = '<?php esc_html_e("Send My Request — It's Free",'milestone');?>';
          btn.disabled = false;
        }
      });
  });
});
</script>

<?php get_footer();?>
