<?php
/**
 * Gallery — Rain or Shine Roofing project portfolio
 */
$pageTitle       = "Roofing Project Gallery | Willamette Valley & Oregon Coast | Rain or Shine Roofing";
$pageDescription = "See Rain or Shine Roofing's recent work across the Willamette Valley and Oregon Coast — commercial projects including the Waterfront Depot, residential re-roofs, rot repair, and tear-offs. Call (541) 606-3306.";
$canonicalUrl    = "https://rainorshine-roofing.com/gallery";
$ogImage         = "https://i.imgur.com/6ACBQtK.jpeg";
$currentPage     = "gallery";
$heroImage       = "https://i.imgur.com/6ACBQtK.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "Gallery", "item": "https://rainorshine-roofing.com/gallery" }
      ]
    },
    {
      "@type": "ImageGallery",
      "name": "Rain or Shine Roofing Project Gallery",
      "description": "Commercial and residential roofing projects completed across the Willamette Valley and Oregon Coast.",
      "url": "https://rainorshine-roofing.com/gallery",
      "publisher": {
        "@type": "RoofingContractor",
        "name": "Rain or Shine Roofing",
        "telephone": "+1-541-606-3306",
        "url": "https://rainorshine-roofing.com/"
      }
    }
  ]
}
JSON;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero" style="background-image: linear-gradient(135deg, rgba(11,23,52,0.84) 0%, rgba(0,45,122,0.72) 60%, rgba(0,71,187,0.58) 100%), url('https://i.imgur.com/6ACBQtK.jpeg');">
    <div class="page-hero-inner">
      <span class="eyebrow-label">Our Work, On Roofs Across Oregon</span>
      <h1>Our Roofing Projects</h1>
      <p class="lead">See our work across the Willamette Valley and Oregon Coast &mdash; from complete tear-offs and rot repair to finished residential and commercial roofs.</p>
      <div class="page-hero-ctas">
        <a href="tel:+15416063306" class="btn-primary">
          <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
          Call (541) 606-3306
        </a>
        <a href="/contact" class="btn-secondary on-dark">
          <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
          Free Estimate
        </a>
      </div>
    </div>
  </section>

  <!-- ========== BREADCRUMBS ========== -->
  <div class="breadcrumbs-bar">
    <div class="container">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <ol>
          <li><a href="/">Home</a></li>
          <li aria-current="page">Gallery</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== INTRO + GALLERY SECTIONS ========== -->
  <section>
    <div class="container">

      <div class="prose-centered" style="margin-bottom: var(--space-2xl);">
        <p>Every photo below is real Rain or Shine Roofing work &mdash; commercial tear-offs, residential re-roofs, mid-install underlayment details, rot repair exposures, and finished homes across the Willamette Valley and Oregon Coast. Tap any image to enlarge.</p>
      </div>

      <!-- ========== COMMERCIAL PROJECTS ========== -->
      <h2 class="gallery-section-title">Commercial Projects</h2>
      <div class="gallery-page-grid">
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/6ACBQtK.jpeg" data-lightbox-caption="Waterfront Depot Restaurant &mdash; Florence, OR. Commercial re-roof.">
          <img src="https://i.imgur.com/6ACBQtK.jpeg" alt="Tim standing on the completed Waterfront Depot restaurant roof in Florence, Oregon" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Waterfront Depot Restaurant &mdash; Florence, OR</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/shggGyN.jpeg" data-lightbox-caption="Completed commercial roof by Rain or Shine Roofing.">
          <img src="https://i.imgur.com/shggGyN.jpeg" alt="Completed commercial roof by Rain or Shine Roofing in Oregon" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Completed commercial roof</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/FHBhLTP.jpeg" data-lightbox-caption="Commercial roof &mdash; before Rain or Shine tear-off.">
          <img src="https://i.imgur.com/FHBhLTP.jpeg" alt="Commercial roof before replacement by Rain or Shine Roofing" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Commercial re-roof &mdash; before</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/i2XhvO4.jpeg" data-lightbox-caption="Commercial roof &mdash; after Rain or Shine installation.">
          <img src="https://i.imgur.com/i2XhvO4.jpeg" alt="Commercial roof after replacement by Rain or Shine Roofing" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Commercial re-roof &mdash; after</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/ZgpTzR1.jpeg" data-lightbox-caption="Commercial flat roof project.">
          <img src="https://i.imgur.com/ZgpTzR1.jpeg" alt="Commercial flat roof project completed by Rain or Shine Roofing" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Commercial flat roof</span>
        </button>
      </div>

      <!-- ========== RESIDENTIAL PROJECTS ========== -->
      <h2 class="gallery-section-title">Residential Projects</h2>
      <div class="gallery-page-grid">
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/TcjRAxN.png" data-lightbox-caption="Wide roof shot &mdash; completed residential project.">
          <img src="https://i.imgur.com/TcjRAxN.png" alt="Wide shot of a completed residential roof by Rain or Shine Roofing" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Completed residential roof &mdash; wide view</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/yX4DOpF.png" data-lightbox-caption="Completed residential roof &mdash; Willamette Valley.">
          <img src="https://i.imgur.com/yX4DOpF.png" alt="Completed residential roof replacement in the Willamette Valley" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Completed residential roof</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/dbzzO8P.png" data-lightbox-caption="Finished shingle roof on an Oregon home.">
          <img src="https://i.imgur.com/dbzzO8P.png" alt="Finished asphalt shingle roof on an Oregon home" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Completed shingle roof</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/DmUXr1D.jpeg" data-lightbox-caption="Red asphalt shingle roof &mdash; finished Willamette Valley project.">
          <img src="https://i.imgur.com/DmUXr1D.jpeg" alt="Red asphalt shingle roof completed by Rain or Shine Roofing" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Red shingle roof &mdash; finished</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/8bUmP8J.jpeg" data-lightbox-caption="Completed low-slope section with skylights and chimney flashing.">
          <img src="https://i.imgur.com/8bUmP8J.jpeg" alt="Completed flat section with skylights and chimney detail" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Flat section with skylights</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/Qi042q3.jpeg" data-lightbox-caption="Aerial view of a completed multi-section residential roof.">
          <img src="https://i.imgur.com/Qi042q3.jpeg" alt="Aerial photograph of a completed multi-section residential roof" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Aerial &mdash; multi-plane roof</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/GF216VO.jpeg" data-lightbox-caption="New skylight close-up &mdash; flashed and sealed.">
          <img src="https://i.imgur.com/GF216VO.jpeg" alt="Close-up of a new skylight installation by Rain or Shine Roofing" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">New skylight detail</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/NjXkViv.jpeg" data-lightbox-caption="House #3077 &mdash; completed shingle re-roof, front view.">
          <img src="https://i.imgur.com/NjXkViv.jpeg" alt="Completed single-family home roof replacement, front view" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">House #3077 &mdash; completed</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/5OFixm1.jpeg" data-lightbox-caption="House #3093 &mdash; completed re-roof with contractor trailer on site.">
          <img src="https://i.imgur.com/5OFixm1.jpeg" alt="Completed residential roof with Rain or Shine Roofing trailer on site" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">House #3093 &mdash; jobsite finished</span>
        </button>
      </div>

      <!-- ========== WORK IN PROGRESS ========== -->
      <h2 class="gallery-section-title">Work In Progress</h2>
      <div class="gallery-page-grid">
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/hK1TyUq.jpeg" data-lightbox-caption="Rain or Shine roofer on the ridge with TopShield underlayment.">
          <img src="https://i.imgur.com/hK1TyUq.jpeg" alt="Worker on a roof ridge with TopShield underlayment during a Willamette Valley install" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Worker on the ridge</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/KsZid9L.jpeg" data-lightbox-caption="Skylight cutout with blue flashing detail.">
          <img src="https://i.imgur.com/KsZid9L.jpeg" alt="Skylight cutout with blue flashing during a tear-off and replacement" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Skylight cutout with new flashing</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/UTSW4cY.jpeg" data-lightbox-caption="Malarkey Highlander AR shingle bundles staged on underlayment.">
          <img src="https://i.imgur.com/UTSW4cY.jpeg" alt="Malarkey Highlander AR shingle bundles staged on synthetic underlayment" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Malarkey stacks on underlayment</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/4HEWi8r.jpeg" data-lightbox-caption="Pitched roof with underlayment and shingle stacks.">
          <img src="https://i.imgur.com/4HEWi8r.jpeg" alt="Pitched roof with underlayment rolled out and shingle stacks ready" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Underlayment rolled, shingles staged</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/Q0w4WjL.jpeg" data-lightbox-caption="Mid-install &mdash; shingles rising from eave, underlayment above.">
          <img src="https://i.imgur.com/Q0w4WjL.jpeg" alt="Mid-install photograph showing shingles on lower course and underlayment above" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Mid-install &mdash; course line</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/VcfZye9.jpeg" data-lightbox-caption="Mid-install from another angle.">
          <img src="https://i.imgur.com/VcfZye9.jpeg" alt="Mid-install photograph of a residential re-roof by Rain or Shine Roofing" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Mid-install &mdash; alternate angle</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/GACzvIJ.jpeg" data-lightbox-caption="Fresh plywood sheathing with skylight frames ready.">
          <img src="https://i.imgur.com/GACzvIJ.jpeg" alt="Fresh plywood sheathing installed with skylight openings framed in" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Fresh sheathing &amp; skylight frames</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/BIxpP1I.jpeg" data-lightbox-caption="Roofing supplies staged on a residential roof.">
          <img src="https://i.imgur.com/BIxpP1I.jpeg" alt="Roofing supplies staged on a residential roof during a tear-off" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Supplies staged on the roof</span>
        </button>
      </div>

      <!-- ========== ROT REPAIR / TEAR-OFF ========== -->
      <h2 class="gallery-section-title">Rot Repair &amp; Tear-Off</h2>
      <div class="gallery-page-grid">
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/3GoORkp.jpeg" data-lightbox-caption="Stripped deck &mdash; rot cut out, new plywood going down.">
          <img src="https://i.imgur.com/3GoORkp.jpeg" alt="Stripped roof deck with rot damage and new plywood sheathing during a rot repair" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Stripped deck with new plywood</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/tn1fUo0.jpeg" data-lightbox-caption="Roof rot damage with moisture-impacted insulation.">
          <img src="https://i.imgur.com/tn1fUo0.jpeg" alt="Roof rot damage with exposed insulation during a rot tear-out" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Rot damage uncovered</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/2xp9fow.jpeg" data-lightbox-caption="Rafters exposed &mdash; rebuilding the assembly from the framing up.">
          <img src="https://i.imgur.com/2xp9fow.jpeg" alt="Exposed roof rafters with insulation during a rot repair job" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Rafters exposed</span>
        </button>
      </div>

      <!-- ========== OUR TEAM ========== -->
      <h2 class="gallery-section-title">Our Team</h2>
      <div class="gallery-page-grid">
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/bq3osMY.png" data-lightbox-caption="Tim &mdash; owner and lead roofer, on a Willamette Valley roof.">
          <img src="https://i.imgur.com/bq3osMY.png" alt="Tim, owner of Rain or Shine Roofing, working on a roof in Oregon" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Tim on the roof</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/QqH4mn0.jpeg" data-lightbox-caption="Tim, owner of Rain or Shine Roofing.">
          <img src="https://i.imgur.com/QqH4mn0.jpeg" alt="Portrait of Tim, owner of Rain or Shine Roofing" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Tim &mdash; owner</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/sfxIMf3.jpeg" data-lightbox-caption="Tim on a roof mid-install.">
          <img src="https://i.imgur.com/sfxIMf3.jpeg" alt="Tim, owner of Rain or Shine Roofing, on a residential roof mid-install" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Tim mid-install</span>
        </button>
        <button type="button" class="gallery-card" data-lightbox-src="https://i.imgur.com/6ACBQtK.jpeg" data-lightbox-caption="Tim on the Waterfront Depot roof in Florence after completion.">
          <img src="https://i.imgur.com/6ACBQtK.jpeg" alt="Tim on the completed Waterfront Depot restaurant roof in Florence, Oregon" width="1000" height="750" loading="lazy">
          <span class="gallery-caption">Tim &mdash; Waterfront Depot</span>
        </button>
      </div>

    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Like What You See?</h2>
    <p>Call (541) 606-3306 for your free estimate &mdash; a professional roofer will get back to you right away with a thorough inspection and a detailed written proposal.</p>
    <a href="tel:+15416063306" class="cta-phone">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
    <div class="cta-buttons">
      <a href="tel:+15416063306" class="btn-primary on-dark">
        <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
        Call Now &mdash; Free Estimates
      </a>
      <a href="/services" class="btn-secondary on-dark">
        Explore Our Services
      </a>
    </div>
  </section>

</main>

<!-- ========== LIGHTBOX OVERLAY ========== -->
<div class="lightbox" id="gallery-lightbox" role="dialog" aria-modal="true" aria-labelledby="lightbox-caption-text" aria-hidden="true">
  <button type="button" class="lightbox-close" id="lightbox-close" aria-label="Close enlarged image">&times;</button>
  <img class="lightbox-img" id="lightbox-img" src="" alt="">
  <div class="lightbox-caption" id="lightbox-caption-text"></div>
</div>

<script>
(function(){
  var lightbox = document.getElementById('gallery-lightbox');
  var imgEl = document.getElementById('lightbox-img');
  var captionEl = document.getElementById('lightbox-caption-text');
  var closeBtn = document.getElementById('lightbox-close');
  var lastFocused = null;

  function openLightbox(src, alt, caption){
    imgEl.src = src;
    imgEl.alt = alt || '';
    captionEl.innerHTML = caption || '';
    lightbox.classList.add('is-open');
    lightbox.setAttribute('aria-hidden','false');
    document.body.style.overflow = 'hidden';
    closeBtn.focus();
  }
  function closeLightbox(){
    lightbox.classList.remove('is-open');
    lightbox.setAttribute('aria-hidden','true');
    imgEl.src = '';
    document.body.style.overflow = '';
    if(lastFocused){ lastFocused.focus(); }
  }

  document.querySelectorAll('.gallery-card').forEach(function(card){
    card.addEventListener('click', function(){
      lastFocused = card;
      var src = card.getAttribute('data-lightbox-src');
      var caption = card.getAttribute('data-lightbox-caption');
      var img = card.querySelector('img');
      var alt = img ? img.getAttribute('alt') : '';
      openLightbox(src, alt, caption);
    });
  });

  closeBtn.addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', function(e){
    if(e.target === lightbox){ closeLightbox(); }
  });
  document.addEventListener('keydown', function(e){
    if(e.key === 'Escape' && lightbox.classList.contains('is-open')){ closeLightbox(); }
  });
})();
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
