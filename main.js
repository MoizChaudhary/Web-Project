// ================================================
// MILESTONE FLOORING + REMODELING
// Main JavaScript
// ================================================

document.addEventListener('DOMContentLoaded', () => {

  // ---- Sticky Header ----
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 50);
    });
  }

  // ---- Mobile Menu ----
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');
  const mobileClose = document.querySelector('.mobile-close');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
      document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
    });

    if (mobileClose) {
      mobileClose.addEventListener('click', () => {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
      });
    }

    // Close on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  // ---- Active Nav Link ----
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links a, .mobile-menu a').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });

  // ---- Scroll Animations ----
  const observerOpts = { threshold: 0.12, rootMargin: '0px 0px -50px 0px' };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, entry.target.dataset.delay || 0);
        observer.unobserve(entry.target);
      }
    });
  }, observerOpts);

  document.querySelectorAll('.animate-on-scroll').forEach((el, i) => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(28px)';
    el.style.transition = 'opacity 0.7s ease, transform 0.7s ease';
    el.dataset.delay = i * 80;
    observer.observe(el);
  });

  document.addEventListener('animationVisible', (e) => {});

  // Add visible class styles
  const style = document.createElement('style');
  style.textContent = `.animate-on-scroll.visible { opacity: 1 !important; transform: translateY(0) !important; }`;
  document.head.appendChild(style);

  // ---- Smooth Counter Animation ----
  function animateCounter(el) {
    const target = parseInt(el.textContent.replace(/\D/g, ''));
    const suffix = el.textContent.replace(/[\d]/g, '');
    let start = 0;
    const dur = 1800;
    const step = (timestamp) => {
      if (!start) start = timestamp;
      const progress = Math.min((timestamp - start) / dur, 1);
      const ease = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.floor(ease * target) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll('.stat-num, .trust-item .number').forEach(animateCounter);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.stats-strip, .hero-trust').forEach(el => counterObserver.observe(el));

  // ---- Contact Form ----
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = contactForm.querySelector('[type="submit"]');
      const original = btn.textContent;
      btn.textContent = 'Sending…';
      btn.disabled = true;

      setTimeout(() => {
        btn.textContent = original;
        btn.disabled = false;
        const successEl = document.getElementById('formSuccess');
        if (successEl) {
          successEl.classList.add('show');
          contactForm.reset();
          successEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
      }, 1200);
    });
  }

  // ---- Gallery lightbox simple effect ----
  document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', () => {
      const img = item.querySelector('img');
      if (!img) return;
      const overlay = document.createElement('div');
      overlay.style.cssText = `position:fixed;inset:0;background:rgba(0,0,0,0.9);z-index:9999;display:flex;align-items:center;justify-content:center;cursor:zoom-out;animation:fadeIn 0.3s ease`;
      const bigImg = document.createElement('img');
      bigImg.src = img.src;
      bigImg.style.cssText = `max-width:90vw;max-height:88vh;object-fit:contain;border-radius:4px;box-shadow:0 24px 60px rgba(0,0,0,0.6)`;
      const close = document.createElement('button');
      close.textContent = '×';
      close.style.cssText = `position:absolute;top:1.5rem;right:2rem;background:none;border:none;color:#fff;font-size:2.5rem;cursor:pointer;opacity:0.7`;
      overlay.appendChild(bigImg);
      overlay.appendChild(close);
      document.body.appendChild(overlay);
      document.body.style.overflow = 'hidden';
      const closeOverlay = () => { overlay.remove(); document.body.style.overflow = ''; };
      overlay.addEventListener('click', closeOverlay);
      close.addEventListener('click', closeOverlay);
      const fadeInStyle = document.createElement('style');
      fadeInStyle.textContent = `@keyframes fadeIn { from { opacity:0 } to { opacity:1 } }`;
      document.head.appendChild(fadeInStyle);
    });
  });

});
