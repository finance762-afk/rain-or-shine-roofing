<?php
/**
 * Services Main — Rain or Shine Roofing
 */
$pageTitle       = "Roofing Services in Springfield, OR | Rain or Shine Roofing";
$pageDescription = "Full-service roofing in Springfield, OR. Residential & commercial roofing, asphalt shingles, TPO flat systems, tear-off & replacement, rot repair, and seamless gutters. Call (541) 606-3306.";
$canonicalUrl    = "https://rainorshine-roofing.com/services";
$ogImage         = "https://i.imgur.com/TcjRAxN.png";
$currentPage     = "services";
$heroImage       = "https://i.imgur.com/TcjRAxN.png";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://rainorshine-roofing.com/services" }
      ]
    },
    {
      "@type": "RoofingContractor",
      "name": "Rain or Shine Roofing",
      "telephone": "+1-541-606-3306",
      "email": "tim@expertroofer.net",
      "url": "https://rainorshine-roofing.com/",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Springfield",
        "addressRegion": "OR",
        "addressCountry": "US"
      },
      "priceRange": "\$\$",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "27"
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
  <section class="page-hero" style="background-image: linear-gradient(135deg, rgba(11,23,52,0.86) 0%, rgba(0,45,122,0.74) 60%, rgba(0,71,187,0.62) 100%), url('https://i.imgur.com/TcjRAxN.png');">
    <div class="page-hero-inner">
      <span class="eyebrow-label">Full-Service Roofing Contractor</span>
      <h1>Roofing Services in Springfield, OR</h1>
      <p class="lead">From single-family re-roofs to TPO commercial flat systems, Rain or Shine Roofing handles every phase of roof work across Oregon&rsquo;s I-5 corridor and coast &mdash; installation, tear-off, replacement, repair, and seamless gutters.</p>
      <div class="page-hero-ctas">
        <a href="/contact" class="btn-primary">
          <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
          Get a Free Estimate
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
          <li aria-current="page">Services</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== INTRO ========== -->
  <section>
    <div class="container">
      <div class="section-header">
        <h2>A Complete Roofing Company &mdash; Not a Specialty Shop</h2>
        <p>Rain or Shine Roofing is a licensed and insured roofing contractor based in Springfield, Oregon (CCB #198825), serving homeowners, property managers, and business owners across Eugene, the I-5 corridor, and the Oregon Coast. Owner Tim Davis and his crew work on every style of roof the Pacific Northwest throws at them &mdash; steep asphalt shingles, flat TPO commercial systems, full tear-offs, rot repair, and seamless gutters.</p>
      </div>

      <!-- ========== SERVICES CARD GRID ========== -->
      <div class="grid-3" data-animate>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="home" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Residential Roofing</h3>
          <p>Full residential roof installations, re-roofs, and repairs for single-family homes across Springfield and Lane County. Steep pitches, complex rooflines, and storm damage specialists.</p>
          <a href="/services/residential-roofing" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="building-2" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Commercial Roofing</h3>
          <p>Commercial and industrial roofing for warehouses, retail, office, and multi-unit properties. Code-compliant installations scheduled around your business hours.</p>
          <a href="/services/commercial-roofing" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="layers" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Asphalt Shingle Roofing</h3>
          <p>The workhorse of Pacific Northwest roofs &mdash; 3-tab and architectural shingles with 25&ndash;50 year warranties, built to handle Oregon&rsquo;s wet winters and windy coast.</p>
          <a href="/services/asphalt-shingle-roofing" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="square" width="28" height="28" aria-hidden="true"></i></span>
          <h3>TPO Flat Roofing</h3>
          <p>Thermoplastic single-ply membrane for flat and low-slope commercial buildings. Heat-welded seams, reflective white surface, and long-term performance in heavy rainfall.</p>
          <a href="/services/tpo-flat-roofing" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="refresh-cw" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Tear-Off &amp; Replacement</h3>
          <p>Complete removal of the old roof down to the deck, sheathing repair where needed, and a brand-new system installed the right way &mdash; not a layer-over shortcut.</p>
          <a href="/services/roof-tear-off-replacement" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="wrench" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Roof Rot Repair</h3>
          <p>Oregon moisture is relentless. We replace rotted sheathing, fascia, and rafters and fix the source of the leak &mdash; ventilation, flashing, or ice dams &mdash; so it doesn&rsquo;t come back.</p>
          <a href="/services/roof-rot-repair" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="droplets" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Seamless Gutters</h3>
          <p>On-site fabricated seamless aluminum gutters in 36 color options. Sized and pitched for Pacific Northwest rainfall volume, installed with hidden hangers.</p>
          <a href="/services/seamless-gutters" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

      </div>
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Free Estimates. No Pressure. Straight Answers.</h2>
    <p>Every roof project starts with a free on-site inspection and a written estimate. You&rsquo;ll know exactly what the job costs, what it includes, and how long it takes before anyone picks up a hammer.</p>
    <a href="tel:+15416063306" class="cta-phone">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
    <div class="cta-buttons">
      <a href="/contact" class="btn-primary on-dark">
        <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
        Request a Free Estimate
      </a>
      <a href="/about" class="btn-secondary on-dark">Meet Tim Davis</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
