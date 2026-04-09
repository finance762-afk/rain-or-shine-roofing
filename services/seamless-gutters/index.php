<?php
/**
 * Seamless Gutters — Rain or Shine Roofing
 */
$pageTitle       = "Seamless Gutters Springfield OR | 36 Colors | Rain or Shine Roofing";
$pageDescription = "On-site fabricated seamless aluminum gutters in Springfield, OR. 36 color options, proper sizing for Pacific Northwest rainfall, and hidden-hanger installation. Call (541) 606-3306.";
$canonicalUrl    = "https://rainorshine-roofing.com/services/seamless-gutters";
$ogImage         = "https://i.imgur.com/yX4DOpF.png";
$currentPage     = "seamless-gutters";
$heroImage       = "https://i.imgur.com/yX4DOpF.png";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://rainorshine-roofing.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Seamless Gutters", "item": "https://rainorshine-roofing.com/services/seamless-gutters" }
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Seamless Aluminum Gutter Installation",
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
      "areaServed": "Homes and businesses within 100 miles of Springfield, OR",
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
          "name": "What's the difference between seamless gutters and sectional gutters?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sectional gutters come in pre-cut pieces (typically 10 feet) that get joined on-site with seams and sealant — each joint is a potential leak point. Seamless gutters are fabricated on-site in one continuous length for each run of the house. The only joints are at inside and outside corners, which means far fewer places for water to escape. For Oregon's heavy rainfall, seamless is almost always the right call."
          }
        },
        {
          "@type": "Question",
          "name": "How many color options do you offer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rain or Shine Roofing carries seamless aluminum gutter coil in 36 standard color options — including whites, beiges, browns, grays, greens, reds, and black. We bring the color samples to the estimate so you can match them against the siding, trim, and roof in natural light before you commit."
          }
        },
        {
          "@type": "Question",
          "name": "How much do seamless gutters cost in Springfield?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Seamless gutter installation in Springfield typically runs $8 to $14 per linear foot installed, which puts a typical single-family home between $1,200 and $2,800 for a full gutter replacement. Pricing includes gutter, downspouts, hidden hangers, and tear-off of existing gutters. Oversized 6-inch gutters for homes with heavy roof runoff cost slightly more than standard 5-inch."
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
  <section class="page-hero" style="background-image: linear-gradient(135deg, rgba(11,23,52,0.86) 0%, rgba(0,45,122,0.72) 60%, rgba(0,71,187,0.58) 100%), url('https://i.imgur.com/yX4DOpF.png');">
    <div class="page-hero-inner">
      <span class="eyebrow-label">On-Site Fabrication &middot; 36 Colors</span>
      <h1>Seamless Gutters in Springfield, OR</h1>
      <p class="lead">Custom-length aluminum gutters rolled on-site &mdash; no splice joints, 36 color options, and proper sizing for Pacific Northwest rainfall.</p>
      <div class="page-hero-ctas">
        <a href="/contact" class="btn-primary">
          <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
          Free Gutter Estimate
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
          <li aria-current="page">Seamless Gutters</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== ANSWER-FIRST INTRO ========== -->
  <section>
    <div class="container">
      <div class="prose-centered">
        <h2>Seamless Gutter Installation in Springfield</h2>
        <p>Seamless aluminum gutters in Springfield, Oregon typically run <strong>$8 to $14 per linear foot installed</strong>, or roughly <strong>$1,200 to $2,800</strong> for a full single-family home replacement. Pricing includes the gutter run, downspouts, hidden hangers, tear-off of existing gutters, and 5&rdquo; or 6&rdquo; sizing depending on roof area. Rain or Shine Roofing provides seamless gutter installation for homeowners and businesses across Springfield, Eugene, and the surrounding 100-mile area, in <strong>36 standard color options</strong>.</p>

        <div class="answer-block">
          <h3>Why seamless instead of sectional gutters?</h3>
          <p>Sectional gutters are joined every 10 feet with sealant that degrades in Oregon sun, freeze-thaw, and constant moisture. Seamless gutters are fabricated on-site as one continuous piece per run &mdash; the only joints are at inside and outside corners. Fewer seams means fewer leak points over the life of the gutter.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — GUTTER IMAGE LEFT ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="img-reveal">
          <img src="https://i.imgur.com/yX4DOpF.png" alt="Home with new seamless aluminum gutters installed in Springfield Oregon" width="900" height="700" loading="lazy">
        </div>
        <div>
          <h2 class="section-title">Sized for Pacific Northwest Rainfall</h2>
          <p>A 5&rdquo; K-style gutter works fine on most Oregon homes. But if your roof sheds runoff from a large single plane, a steep pitch, or a valley dumping onto one section of gutter, you&rsquo;ll want to step up to <strong>6&rdquo; oversized gutters</strong> with 3&rdquo;&times;4&rdquo; downspouts &mdash; nearly double the capacity. We look at roof area, pitch, and runoff pattern on every estimate and spec the size that will actually handle the volume.</p>
          <p>Every seamless install includes hidden hangers (no ugly spike heads), proper slope to downspouts, splash blocks or extensions where runoff hits the ground, and a fascia board inspection before we install. If we find rotted fascia, we address it before hanging anything new.</p>

          <h4 style="margin-top: var(--space-xl); font-size: 1rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--primary);">36 Color Options</h4>
          <div class="swatch-row" aria-label="Seamless gutter color options">
            <span class="swatch" style="background:#ffffff;" title="White"></span>
            <span class="swatch" style="background:#f5f5ec;" title="Almond"></span>
            <span class="swatch" style="background:#dcd4b8;" title="Sandstone"></span>
            <span class="swatch" style="background:#b8a684;" title="Khaki"></span>
            <span class="swatch" style="background:#7a5b3c;" title="Brown"></span>
            <span class="swatch" style="background:#3e2a1a;" title="Dark Bronze"></span>
            <span class="swatch" style="background:#c0c0c0;" title="Pewter"></span>
            <span class="swatch" style="background:#6a6a6a;" title="Charcoal Gray"></span>
            <span class="swatch" style="background:#2c2c2c;" title="Matte Black"></span>
            <span class="swatch" style="background:#3e5c3a;" title="Forest Green"></span>
            <span class="swatch" style="background:#6b2323;" title="Brick Red"></span>
            <span class="swatch" style="background:#143a5c;" title="Colonial Blue"></span>
          </div>
          <p style="font-size: 0.85rem; color: var(--text-light); margin-top: var(--space-sm);">Sample of available colors &mdash; full swatch book brought to every estimate.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== BENEFITS ========== -->
  <section>
    <div class="container">
      <div class="section-header" data-animate>
        <h2>What&rsquo;s Included With Every Seamless Gutter Install</h2>
      </div>
      <div class="benefit-grid" data-animate>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="ruler" width="24" height="24" aria-hidden="true"></i></span>
          <h3>On-Site Fabrication</h3>
          <p>We bring the gutter machine to your house and roll each run to exact length. Every gutter is cut to fit &mdash; no factory splices.</p>
        </div>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="palette" width="24" height="24" aria-hidden="true"></i></span>
          <h3>36 Color Options</h3>
          <p>Whites, beiges, browns, grays, greens, reds, and blacks &mdash; matched to your siding, trim, or roof shingle in natural light.</p>
        </div>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="anchor" width="24" height="24" aria-hidden="true"></i></span>
          <h3>Hidden Hangers</h3>
          <p>Heavy-gauge hidden hangers every 24 inches &mdash; no exposed spike heads, no sagging sections over time.</p>
        </div>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="arrow-down" width="24" height="24" aria-hidden="true"></i></span>
          <h3>Downspouts Sized to Roof</h3>
          <p>Standard 2&rdquo;&times;3&rdquo; or oversized 3&rdquo;&times;4&rdquo; downspouts, placed to drain efficiently and routed away from the foundation.</p>
        </div>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="trash-2" width="24" height="24" aria-hidden="true"></i></span>
          <h3>Old Gutter Removal</h3>
          <p>Tear-off and haul-away of existing gutters included in every estimate. Full cleanup before we leave.</p>
        </div>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="search" width="24" height="24" aria-hidden="true"></i></span>
          <h3>Fascia Board Inspection</h3>
          <p>Every gutter install starts with a fascia check. If the wood is rotted, we fix it first &mdash; otherwise new gutters sag within a season.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Seamless Gutter FAQs</h2>
      </div>
      <div class="faq-list" data-animate>
        <details class="faq-item">
          <summary>What&rsquo;s the difference between seamless and sectional gutters?</summary>
          <div class="faq-answer">
            Sectional gutters come in pre-cut pieces (typically 10 feet) that get joined on-site with seams and sealant &mdash; each joint is a potential leak point. Seamless gutters are fabricated on-site in one continuous length for each run of the house. The only joints are at inside and outside corners, which means far fewer places for water to escape. For Oregon&rsquo;s heavy rainfall, seamless is almost always the right call.
          </div>
        </details>
        <details class="faq-item">
          <summary>How many color options do you offer?</summary>
          <div class="faq-answer">
            Rain or Shine Roofing carries seamless aluminum gutter coil in <strong>36 standard color options</strong> &mdash; including whites, beiges, browns, grays, greens, reds, and black. We bring the color samples to the estimate so you can match them against the siding, trim, and roof in natural light before you commit.
          </div>
        </details>
        <details class="faq-item">
          <summary>How much do seamless gutters cost in Springfield?</summary>
          <div class="faq-answer">
            Seamless gutter installation in Springfield typically runs <strong>$8 to $14 per linear foot</strong> installed, which puts a typical single-family home between $1,200 and $2,800 for a full gutter replacement. Pricing includes gutter, downspouts, hidden hangers, and tear-off of existing gutters. Oversized 6&rdquo; gutters for homes with heavy roof runoff cost slightly more than standard 5&rdquo;.
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
      <a href="/services/residential-roofing" class="related-card">
        <span class="related-icon"><i data-lucide="home" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Residential Roofing</h3>
          <span>View Details &rarr;</span>
        </div>
      </a>
      <a href="/services/roof-rot-repair" class="related-card">
        <span class="related-icon"><i data-lucide="wrench" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Roof Rot Repair</h3>
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
    <h2>Ready for New Seamless Gutters?</h2>
    <p>Free on-site measurement, full color swatch book, and a written quote with hidden-hanger hardware and fascia inspection included.</p>
    <div class="cta-buttons">
      <a href="/contact" class="btn-primary on-dark">
        <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
        Request a Free Estimate
      </a>
      <a href="tel:+15416063306" class="btn-secondary on-dark">
        <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
        Call (541) 606-3306
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
