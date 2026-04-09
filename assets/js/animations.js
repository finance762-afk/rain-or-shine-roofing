/* ============================================
   RAIN OR SHINE ROOFING — ANIMATIONS.JS
   Scroll reveals, wipe images, stat counters.
   IMPORTANT: data-animate is NEVER applied to
   above-fold content (hero, first section, trust
   badges). Those must be visible without JS.
   ============================================ */

(function() {
  'use strict';

  const prefersReducedMotion =
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // If user prefers reduced motion, instantly reveal everything.
  if (prefersReducedMotion) {
    document.querySelectorAll('[data-animate]').forEach(el => {
      el.classList.add('in-view');
    });
    document.querySelectorAll('[data-counter]').forEach(el => {
      el.textContent = el.getAttribute('data-counter');
    });
    return;
  }

  // ---------- Scroll reveal (fade-up / wipe-right) ----------
  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -40px 0px'
    });

    document.querySelectorAll('[data-animate]').forEach(el => {
      revealObserver.observe(el);
    });

    // ---------- Stat counter animation ----------
    const counterObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;

        const el = entry.target;
        const target = parseInt(el.getAttribute('data-counter'), 10) || 0;
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 1600;
        const start = performance.now();

        function tick(now) {
          const progress = Math.min((now - start) / duration, 1);
          // easeOutCubic
          const eased = 1 - Math.pow(1 - progress, 3);
          const current = Math.floor(target * eased);
          el.textContent = current.toLocaleString() + suffix;
          if (progress < 1) {
            requestAnimationFrame(tick);
          } else {
            el.textContent = target.toLocaleString() + suffix;
          }
        }
        requestAnimationFrame(tick);
        observer.unobserve(el);
      });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-counter]').forEach(el => {
      counterObserver.observe(el);
    });
  } else {
    // No IntersectionObserver — reveal everything immediately.
    document.querySelectorAll('[data-animate]').forEach(el => {
      el.classList.add('in-view');
    });
    document.querySelectorAll('[data-counter]').forEach(el => {
      el.textContent = el.getAttribute('data-counter');
    });
  }
})();
