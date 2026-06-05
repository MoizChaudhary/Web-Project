<?php
/**
 * Template Name: Services Page
 * Template Post Type: page
 */
get_header();
?>
<main id="main">

  <section class="page-hero">
    <div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1600&q=80')"></div>
    <div class="page-hero-overlay"></div>
    <div class="container">
      <div class="page-hero-content">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home','milestone');?></a>
          <span class="sep">/</span>
          <span><?php esc_html_e('Services','milestone');?></span>
        </nav>
        <h1><?php esc_html_e('Our Services','milestone');?></h1>
        <p><?php esc_html_e('Flooring, kitchens, bathrooms — and everything in between. Expert remodeling for North Phoenix homeowners.','milestone');?></p>
      </div>
    </div>
  </section>

  <section class="services-detail">
    <div class="container">
      <?php
      $blocks=[
        ['flooring', '01', __('Flooring Installation','milestone'), false,
         'https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?w=900&q=80',
         __('Beautiful floors are the foundation of any great home. We install a full range of flooring types with precision, care, and an eye for lasting beauty.','milestone'),
         [__('Hardwood Flooring','milestone'),__('Luxury Vinyl Plank (LVP)','milestone'),__('Porcelain & Ceramic Tile','milestone'),__('Laminate Flooring','milestone'),__('Engineered Hardwood','milestone'),__('Natural Stone','milestone'),__('Subfloor Repair','milestone'),__('Full Home Installations','milestone')],
         __('Get a Flooring Quote','milestone'),
        ],
        ['kitchens','02',__('Kitchen Remodeling','milestone'),true,
         'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=900&q=80',
         __('The kitchen is the heart of your home. From a simple cabinet refresh to a full custom kitchen transformation, Milestone delivers results families love.','milestone'),
         [__('Custom Cabinetry','milestone'),__('Quartz & Granite Countertops','milestone'),__('Kitchen Island Design','milestone'),__('Layout Redesign','milestone'),__('Backsplash Installation','milestone'),__('Lighting & Electrical','milestone'),__('Appliance Integration','milestone'),__('Full Kitchen Remodels','milestone')],
         __('Get a Kitchen Quote','milestone'),
        ],
        ['bathrooms','03',__('Bathroom Remodeling','milestone'),false,
         'https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=900&q=80',
         __('Your bathroom should be a sanctuary. Whether you\'re dreaming of a spa-like master suite or a sleek guest bath, our team creates spaces that are beautiful and functional.','milestone'),
         [__('Custom Walk-in Showers','milestone'),__('Freestanding Soaking Tubs','milestone'),__('Double Vanity Installs','milestone'),__('Tile & Stone Work','milestone'),__('Niche & Shelf Build-outs','milestone'),__('Frameless Glass Enclosures','milestone'),__('Plumbing Fixture Upgrades','milestone'),__('Full Bathroom Remodels','milestone')],
         __('Get a Bathroom Quote','milestone'),
        ],
        ['custom','04',__('Custom Kitchens & Bathrooms','milestone'),true,
         'https://images.unsplash.com/photo-1484154218962-a197022b5858?w=900&q=80',
         __('For homeowners who want something truly one-of-a-kind, our custom design service is your blank canvas. Work directly with our designer to build a space that\'s uniquely yours.','milestone'),
         [__('1-on-1 Design Consultation','milestone'),__('Custom Cabinet Builds','milestone'),__('Bespoke Material Selection','milestone'),__('3D Layout Planning','milestone'),__('Specialty Tile Patterns','milestone'),__('Custom Countertop Edging','milestone'),__('Built-in Storage Design','milestone'),__('Luxury Fixture Sourcing','milestone')],
         __('Start Your Custom Project','milestone'),
        ],
      ];
      foreach($blocks as $b):
        [$id,$num,$title,$rev,$img,$desc,$items,$cta]=$b;
        $cls=$rev?'service-block reverse':'service-block';
      ?>
      <div class="<?php echo esc_attr($cls);?>" id="<?php echo esc_attr($id);?>">
        <img src="<?php echo esc_url($img);?>" alt="<?php echo esc_attr($title);?>" class="animate-on-scroll">
        <div class="service-detail-content animate-on-scroll">
          <span class="section-label"><?php echo esc_html('Service '.$num);?></span>
          <h2><?php echo esc_html($title);?></h2>
          <div class="divider"></div>
          <p><?php echo esc_html($desc);?></p>
          <ul class="service-list">
            <?php foreach($items as $item):?><li><?php echo esc_html($item);?></li><?php endforeach;?>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact'));?>" class="btn btn-primary"><?php echo esc_html($cta);?></a>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </section>

  <section class="process-section">
    <div class="container">
      <div class="text-center animate-on-scroll">
        <span class="section-label"><?php esc_html_e('How It Works','milestone');?></span>
        <h2><?php esc_html_e('Our Simple 4-Step Process','milestone');?></h2>
        <div class="divider divider-center"></div>
        <p style="max-width:560px;margin:0 auto"><?php esc_html_e('We make remodeling stress-free. Here\'s exactly what to expect when you work with Milestone.','milestone');?></p>
      </div>
      <div class="process-steps">
        <?php
        $steps=[
          [__('Free Consultation','milestone'), __('We meet at your home to understand your vision, assess the space, and answer all your questions — free, zero obligation.','milestone')],
          [__('Design & Estimate','milestone'),  __('A detailed proposal with material options, timeline, and clear itemized price — no hidden fees, ever.','milestone')],
          [__('Expert Installation','milestone'),__('Our craftsmen work on your schedule, keeping your home clean and keeping you informed throughout.','milestone')],
          [__('Final Walkthrough','milestone'),  __('We do a complete walkthrough to make sure every detail is perfect before we consider the job done.','milestone')],
        ];
        foreach($steps as $i=>$step):?>
        <div class="process-step animate-on-scroll">
          <div class="step-num"><?php echo $i+1;?></div>
          <h4><?php echo esc_html($step[0]);?></h4>
          <p><?php echo esc_html($step[1]);?></p>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container">
      <div class="cta-inner">
        <div class="cta-text">
          <h2><?php esc_html_e('Ready to Get Started?','milestone');?></h2>
          <p><?php esc_html_e('Call or click for your free, no-obligation consultation and estimate today.','milestone');?></p>
        </div>
        <div class="cta-actions">
          <a href="<?php echo esc_url(home_url('/contact'));?>" class="btn btn-white"><?php esc_html_e('Schedule Consultation','milestone');?></a>
          <a href="<?php echo esc_attr(milestone_phone_link());?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.5)"><?php echo esc_html('Call '.milestone_phone());?></a>
        </div>
      </div>
    </div>
  </section>

  <?php the_content();?>
</main>
<?php get_footer();?>
