<?php
/**
 * nav.php — fixed top navbar
 * Expects $currentPage from the including page.
 */
$currentPage = $currentPage ?? '';
$isActive = function($slug) use ($currentPage) {
  return $currentPage === $slug ? ' aria-current="page"' : '';
};
$isServiceActive = in_array($currentPage, [
  'services',
  'residential-roofing',
  'commercial-roofing',
  'asphalt-shingle-roofing',
  'tpo-flat-roofing',
  'roof-tear-off-replacement',
  'roof-rot-repair',
], true);
?>
<nav class="navbar" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="/" class="nav-logo" aria-label="Rain or Shine Roofing home">
      <img src="https://i.imgur.com/KunCdx5.png" alt="Rain or Shine Roofing logo" width="180" height="98">
    </a>

    <ul class="nav-menu" id="nav-menu">
      <li class="nav-item">
        <a href="/" class="nav-link"<?php echo $isActive('home'); ?>>Home</a>
      </li>

      <li class="nav-item has-dropdown">
        <a href="/services" class="nav-link"<?php echo $isServiceActive ? ' aria-current="page"' : ''; ?> aria-haspopup="true" aria-expanded="false">
          Services
          <i data-lucide="chevron-down" width="14" height="14" aria-hidden="true"></i>
        </a>
        <ul class="dropdown" role="menu" style="display:none">
          <li role="none"><a role="menuitem" href="/services/residential-roofing">Residential Roofing</a></li>
          <li role="none"><a role="menuitem" href="/services/commercial-roofing">Commercial Roofing</a></li>
          <li role="none"><a role="menuitem" href="/services/asphalt-shingle-roofing">Asphalt Shingle Roofing</a></li>
          <li role="none"><a role="menuitem" href="/services/tpo-flat-roofing">TPO Flat Roofing</a></li>
          <li role="none"><a role="menuitem" href="/services/roof-tear-off-replacement">Roof Tear-Off &amp; Replacement</a></li>
          <li role="none"><a role="menuitem" href="/services/roof-rot-repair">Roof Rot Repair</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="/gallery" class="nav-link"<?php echo $isActive('gallery'); ?>>Gallery</a>
      </li>
      <li class="nav-item">
        <a href="/service-area" class="nav-link"<?php echo $isActive('service-area'); ?>>Service Area</a>
      </li>
      <li class="nav-item">
        <a href="/about" class="nav-link"<?php echo $isActive('about'); ?>>About</a>
      </li>
      <li class="nav-item">
        <a href="/contact" class="nav-link"<?php echo $isActive('contact'); ?>>Contact</a>
      </li>
    </ul>

    <a href="tel:+15416063306" class="nav-phone" aria-label="Call Rain or Shine Roofing at (541) 606-3306">
      <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
      (541) 606-3306
    </a>

    <button
      class="hamburger"
      aria-label="Toggle navigation menu"
      aria-expanded="false"
      aria-controls="nav-menu"
      type="button">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>
