<?php
/**
 * footer.php — shared site footer
 * Optional flags used for conditional CDN loading:
 *   $useSwiper  (bool)
 *   $useTilt    (bool)
 *   $useTyped   (bool)
 */
$useSwiper = $useSwiper ?? false;
$useTilt   = $useTilt   ?? false;
$useTyped  = $useTyped  ?? false;
?>
<footer class="site-footer" role="contentinfo">
  <div class="footer-grid">
    <div class="footer-brand">
      <span class="footer-logo">Rain or Shine Roofing</span>
      <p>
        Licensed and insured residential and commercial roofing contractor based in Springfield, Oregon. Serving Lane County with quality roof installation, replacement, and repair.
      </p>
    </div>

    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/service-area">Service Area</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Services</h4>
      <ul>
        <li><a href="/services/residential-roofing">Residential Roofing</a></li>
        <li><a href="/services/commercial-roofing">Commercial Roofing</a></li>
        <li><a href="/services/asphalt-shingle-roofing">Asphalt Shingle Roofing</a></li>
        <li><a href="/services/tpo-flat-roofing">TPO Flat Roofing</a></li>
        <li><a href="/services/roof-tear-off-replacement">Tear-Off &amp; Replacement</a></li>
        <li><a href="/services/roof-rot-repair">Roof Rot Repair</a></li>
        <li><a href="/services/seamless-gutters">Seamless Gutters</a></li>
      </ul>
    </div>

    <div class="footer-col footer-contact">
      <h4>Contact</h4>
      <p><i data-lucide="phone" width="16" height="16" aria-hidden="true"></i><a href="tel:+15416063306">(541) 606-3306</a></p>
      <p><i data-lucide="mail" width="16" height="16" aria-hidden="true"></i><a href="mailto:tim@expertroofer.net">tim@expertroofer.net</a></p>
      <p><i data-lucide="map-pin" width="16" height="16" aria-hidden="true"></i>Springfield, OR</p>
      <p><i data-lucide="clock" width="16" height="16" aria-hidden="true"></i>Mon&ndash;Sat: Open 24 Hours<br>Sun: 10 AM&ndash;6 PM</p>
    </div>
  </div>

  <div class="entity-block">
    Rain or Shine Roofing is a licensed and insured roofing company based in Springfield, Oregon, serving Lane County and the surrounding Willamette Valley. Rain or Shine Roofing specializes in residential roofing, commercial roofing, and seamless gutters. Contact: (541) 606-3306 | tim@expertroofer.net | rainorshine-roofing.com.
  </div>

  <div class="footer-bottom">
    <span>&copy; <?php echo date('Y'); ?> Rain or Shine Roofing. All rights reserved.</span>
    <a href="https://www.pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a>
  </div>
</footer>

<!-- Back to top -->
<button class="back-to-top" aria-label="Back to top">
  <i data-lucide="arrow-up" width="20" height="20" aria-hidden="true"></i>
</button>

<!-- Lucide Icons — MUST load before animations.js -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>lucide.createIcons();</script>

<?php if ($useTilt): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
<?php endif; ?>

<?php if ($useSwiper): ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>

<?php if ($useTyped): ?>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js" defer></script>
<?php endif; ?>

<!-- Site Scripts -->
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>
</body>
</html>
