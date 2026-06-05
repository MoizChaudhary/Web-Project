<?php get_header(); ?>
<main id="main">
  <section style="min-height:60vh;display:flex;align-items:center;justify-content:center;text-align:center;padding:4rem 2rem;background:var(--color-cream)">
    <div>
      <p style="font-family:var(--font-display);font-size:6rem;font-weight:700;color:var(--color-gold);line-height:1;margin-bottom:1rem">404</p>
      <h1 style="margin-bottom:1rem"><?php esc_html_e('Page Not Found','milestone');?></h1>
      <p style="max-width:480px;margin:0 auto 2rem"><?php esc_html_e("Sorry, we couldn't find that page. Let's get you back on track.",'milestone');?></p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
        <a href="<?php echo esc_url(home_url('/'));?>" class="btn btn-primary"><?php esc_html_e('Back to Home','milestone');?></a>
        <a href="<?php echo esc_url(home_url('/contact'));?>" class="btn btn-outline-dark"><?php esc_html_e('Contact Us','milestone');?></a>
      </div>
    </div>
  </section>
</main>
<?php get_footer();?>
