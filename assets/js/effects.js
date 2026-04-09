/* ============================================
   RAIN OR SHINE ROOFING — EFFECTS.JS
   Navbar scroll, mobile menu, back-to-top,
   ripple, ticker, GA4 conversion stubs.
   ============================================ */

(function() {
  'use strict';

  // ---------- Navbar scroll glassmorphism ----------
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    const onScroll = () => {
      if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---------- Mobile menu toggle + body scroll lock ----------
  const hamburger = document.querySelector('.hamburger');
  const navMenu = document.querySelector('.nav-menu');
  const body = document.body;

  if (hamburger && navMenu) {
    const closeMenu = () => {
      navMenu.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
      body.classList.remove('menu-open');
    };
    const openMenu = () => {
      navMenu.classList.add('open');
      hamburger.setAttribute('aria-expanded', 'true');
      body.classList.add('menu-open');
    };

    hamburger.addEventListener('click', () => {
      const isOpen = navMenu.classList.contains('open');
      isOpen ? closeMenu() : openMenu();
    });

    // Close on link tap (but not on parent of dropdown)
    navMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        if (navMenu.classList.contains('open')) {
          closeMenu();
        }
      });
    });

    // Close on overlay / Escape
    document.addEventListener('click', (e) => {
      if (
        navMenu.classList.contains('open') &&
        !navMenu.contains(e.target) &&
        !hamburger.contains(e.target)
      ) {
        closeMenu();
      }
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('open')) {
        closeMenu();
      }
    });
  }

  // ---------- Back to top ----------
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    const toggleBTT = () => {
      if (window.scrollY > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    };
    window.addEventListener('scroll', toggleBTT, { passive: true });
    backToTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ---------- Ripple effect (primary CTAs only) ----------
  document.querySelectorAll('.btn-primary, .btn-ripple').forEach(btn => {
    btn.addEventListener('click', function(e) {
      const rect = this.getBoundingClientRect();
      const ripple = document.createElement('span');
      const size = Math.max(rect.width, rect.height);
      ripple.className = 'ripple';
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
      ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
      this.appendChild(ripple);
      setTimeout(() => ripple.remove(), 600);
    });
  });

  // ---------- Ticker pause on hover (CSS handles, JS is redundant safety) ----------
  document.querySelectorAll('.ticker-strip').forEach(strip => {
    const track = strip.querySelector('.ticker-track');
    if (!track) return;
    strip.addEventListener('mouseenter', () => {
      track.style.animationPlayState = 'paused';
    });
    strip.addEventListener('mouseleave', () => {
      track.style.animationPlayState = 'running';
    });
  });

  // ---------- GA4 Conversion Tracking Stubs ----------
  // Click-to-call tracking
  document.querySelectorAll('a[href^="tel:"]').forEach(el => {
    el.addEventListener('click', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'phone_call', {
          event_category: 'contact',
          event_label: el.href
        });
      }
    });
  });

  // Form submission tracking
  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'form_submit', {
          event_category: 'contact',
          event_label: window.location.pathname
        });
      }
    });
  });
})();
