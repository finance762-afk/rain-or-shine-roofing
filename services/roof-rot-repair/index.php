<?php
/**
 * Roof Rot Repair — Rain or Shine Roofing
 */
$pageTitle       = "Roof Rot Repair Springfield OR | Rain or Shine Roofing";
$pageDescription = "Roof rot repair in Springfield, OR. Rotted decking, sheathing, fascia, and rafter replacement. We fix the source of the leak, not just the symptom. Call (541) 606-3306.";
$canonicalUrl    = "https://rainorshine-roofing.com/services/roof-rot-repair";
$ogImage         = "https://i.imgur.com/bq3osMY.png";
$currentPage     = "roof-rot-repair";
$heroImage       = "https://i.imgur.com/bq3osMY.png";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://rainorshine-roofing.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Roof Rot Repair", "item": "https://rainorshine-roofing.com/services/roof-rot-repair" }
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Roof Rot and Moisture Damage Repair",
      "provider": {
        "@type": "RoofingContractor",
        "name": "Rain or Shine Roofing",
        "telephone": "+1-541-606-3306",
        "email": "tim@expertroofer.net",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Springfield",
          "addressRegion": "OR",
          "addressCountry": "US"
        }
      },
      "areaServed": "Properties within 100 miles of Springfield, OR",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "27"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What causes roof rot in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Roof rot in Oregon is almost always caused by trapped moisture — failed flashing, poor attic ventilation, blocked drainage backing water under shingles, or ice dams forming at the eaves in winter. Moss and debris holding water against the shingles accelerates the damage. By the time you see rotted fascia or sagging decking from the ground, moisture has usually been getting in for years."
          }
        },
        {
          "@type": "Question",
          "name": "How much does roof rot repair cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Targeted rot repair in Springfield typically runs $500 to $3,500 depending on how much wood needs to be replaced and whether the source (flashing, ventilation, drainage) also needs correction. Small soft spots caught early are at the low end. Extensive sheathing and rafter replacement with fascia and soffit work runs higher. We always provide a written estimate with photos before work starts."
          }
        },
        {
          "@type": "Question",
          "name": "Can roof rot be repaired without replacing the whole roof?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Often yes. If the rot is localized — say, one valley, one wall intersection, or one section of fascia — we cut back to solid wood, replace the damaged area with new sheathing and framing, re-flash properly, and tie new shingles into the existing roof. If the rot is widespread across multiple sections, a full tear-off becomes the more cost-effective option."
          }
        }
      ]
    }
  ]
}
JSON;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero" style="background-image: linear-gradient(135deg, rgba(11,23,52,0.86) 0%, rgba(0,45,122,0.72) 60%, rgba(0,71,187,0.58) 100%), url('https://i.imgur.com/bq3osMY.png');">
    <div class="page-hero-inner">
      <span class="eyebrow-label">Moisture Damage Specialists</span>
      <h1>Roof Rot Repair in Springfield, OR</h1>
      <p class="lead">Rotted sheathing, decking, fascia, and rafter repair &mdash; plus the flashing and ventilation fixes that stop the moisture from coming back.</p>
      <div class="page-hero-ctas">
        <a href="/contact" class="btn-primary">
          <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
          Free Rot Inspection
        </a>
        <a href="tel:+15416063306" class="btn-secondary on-dark">
          <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
          (541) 606-3306
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
          <li><a href="/services">Services</a></li>
          <li aria-current="page">Roof Rot Repair</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== ANSWER-FIRST INTRO ========== -->
  <section>
    <div class="container">
      <div class="prose-centered">
        <h2>Why Oregon Roofs Rot &mdash; and How We Fix It</h2>
        <p>Oregon&rsquo;s 40+ inches of annual rainfall, year-round humidity, and long wet winters make rot a near-constant threat to any roof that isn&rsquo;t ventilated, flashed, and drained correctly. Targeted rot repair in Springfield typically runs <strong>$500 to $3,500</strong>, depending on how much wood needs replacement and whether the moisture source also needs correction. Rain or Shine Roofing provides rot repair for homeowners and businesses across Springfield, Eugene, and the surrounding 100-mile area &mdash; decking, sheathing, fascia, soffits, and rafter work.</p>

        <div class="answer-block">
          <h3>What does &ldquo;fixing the source&rdquo; mean?</h3>
          <p>Cutting out rotted wood and nailing in new sheathing only delays the problem if the original cause is still there. We trace moisture back to its source &mdash; failed step flashing, blocked drainage, inadequate ventilation, or an ice dam pattern &mdash; and fix that first. Otherwise the new wood rots within a few years and you&rsquo;re paying for the same repair twice.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — TIM ON ROOF ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/bq3osMY.png" alt="Tim Davis inspecting rotted sheathing during a roof rot repair job in Oregon" width="900" height="700" loading="lazy">
        </div>
        <div>
          <h2 class="section-title">Where Rot Shows Up First</h2>
          <p>Rot doesn&rsquo;t usually start where you can see it. By the time a homeowner notices a sagging fascia board or a soft spot when they walk the roof, moisture has been working for years in places you can&rsquo;t easily inspect.</p>
          <ul class="why-list" style="margin-top: var(--space-lg);">
            <li>
              <span class="why-icon"><i data-lucide="cloud-rain" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Eaves and Fascia</h4>
                <p>Ice dams and blocked drainage push water under the drip edge. Fascia boards and the first row of sheathing take the damage.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="triangle-alert" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Valleys and Wall Intersections</h4>
                <p>Concentrated water flow plus any flashing imperfection equals rot. Valleys are the single most common rot location on Oregon roofs.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="wind" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Around Chimneys and Skylights</h4>
                <p>Counter flashing and step flashing are tricky details. When they fail, water runs down into the rafters and rots framing members.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="leaf" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Under Moss-Covered Areas</h4>
                <p>Moss holds moisture against shingles 24/7. Granules break down, shingles curl, water gets to the underlayment, and the decking rots silently underneath.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PROCESS ========== -->
  <section class="process-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>How Roof Rot Repair Works</h2>
        <p>Four steps from inspection to finished fix.</p>
      </div>
      <div class="process-track" data-animate>
        <div class="process-step">
          <div class="process-num">1</div>
          <h3>Inspection &amp; Source</h3>
          <p>Locate the rot, trace the moisture source, and document with photos. No guesswork &mdash; we show you the damage.</p>
        </div>
        <div class="process-step">
          <div class="process-num">2</div>
          <h3>Cut Back to Solid Wood</h3>
          <p>Remove damaged sheathing, fascia, rafters, or soffit. Cut back until every piece of remaining wood is sound and dry.</p>
        </div>
        <div class="process-step">
          <div class="process-num">3</div>
          <h3>Replace &amp; Waterproof</h3>
          <p>New framing and &frac12;&Prime; CDX plywood sheathing installed, then proper ice and water shield, flashing, and underlayment before roofing goes back on.</p>
        </div>
        <div class="process-step">
          <div class="process-num">4</div>
          <h3>Fix the Root Cause</h3>
          <p>Correct the ventilation, flashing, or drainage issue that caused the rot &mdash; so the repair actually lasts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Roof Rot FAQs</h2>
      </div>
      <div class="faq-list" data-animate>
        <details class="faq-item">
          <summary>What causes roof rot in Oregon?</summary>
          <div class="faq-answer">
            Roof rot in Oregon is almost always caused by trapped moisture &mdash; failed flashing, poor attic ventilation, blocked drainage backing water under shingles, or ice dams forming at the eaves in winter. Moss and debris holding water against the shingles accelerates the damage. By the time you see rotted fascia or sagging decking from the ground, moisture has usually been getting in for years.
          </div>
        </details>
        <details class="faq-item">
          <summary>How much does roof rot repair cost?</summary>
          <div class="faq-answer">
            Targeted rot repair in Springfield typically runs <strong>$500 to $3,500</strong> depending on how much wood needs to be replaced and whether the source (flashing, ventilation, drainage) also needs correction. Small soft spots caught early are at the low end. Extensive sheathing and rafter replacement with fascia and soffit work runs higher. We always provide a written estimate with photos before work starts.
          </div>
        </details>
        <details class="faq-item">
          <summary>Can roof rot be repaired without replacing the whole roof?</summary>
          <div class="faq-answer">
            Often yes. If the rot is localized &mdash; say, one valley, one wall intersection, or one section of fascia &mdash; we cut back to solid wood, replace the damaged area with new sheathing and framing, re-flash properly, and tie new shingles into the existing roof. If the rot is widespread across multiple sections, a full tear-off becomes the more cost-effective option.
          </div>
        </details>
      </div>

      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- ========== RELATED SERVICES ========== -->
  <section class="related-services">
    <h2>Related Roofing Services</h2>
    <div class="related-grid">
      <a href="/services/roof-tear-off-replacement" class="related-card">
        <span class="related-icon"><i data-lucide="refresh-cw" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Tear-Off &amp; Replacement</h3>
          <span>View Details &rarr;</span>
        </div>
      </a>
      <a href="/services/residential-roofing" class="related-card">
        <span class="related-icon"><i data-lucide="home" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Residential Roofing</h3>
          <span>View Details &rarr;</span>
        </div>
      </a>
      <a href="/services/asphalt-shingle-roofing" class="related-card">
        <span class="related-icon"><i data-lucide="layers" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Asphalt Shingle Roofing</h3>
          <span>View Details &rarr;</span>
        </div>
      </a>
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Spotted Soft Decking or a Sagging Fascia?</h2>
    <p>Get a free rot inspection &mdash; we&rsquo;ll document the damage, trace the moisture source, and write up a targeted repair scope. No pressure, no upsell.</p>
    <a href="tel:+15416063306" class="cta-phone">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
    <div class="cta-buttons">
      <a href="/contact" class="btn-primary on-dark">
        <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
        Schedule an Inspection
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
