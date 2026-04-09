<?php
/**
 * Residential Roofing — Rain or Shine Roofing
 */
$pageTitle       = "Residential Roofing Springfield OR | Rain or Shine Roofing";
$pageDescription = "Residential roof installation, replacement, and repair in Springfield, OR. Shingle, steep-pitch, and storm damage work across Eugene and the I-5 corridor. Call (541) 606-3306 for a free estimate.";
$canonicalUrl    = "https://rainorshine-roofing.com/services/residential-roofing";
$ogImage         = "https://i.imgur.com/bq3osMY.png";
$currentPage     = "residential-roofing";
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
        { "@type": "ListItem", "position": 3, "name": "Residential Roofing", "item": "https://rainorshine-roofing.com/services/residential-roofing" }
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Residential Roof Installation and Repair",
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
      "areaServed": "Springfield, Eugene, and the Oregon I-5 corridor within 100 miles of Springfield, OR",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "27"
      }
    },
    {
      "@type": "HowTo",
      "name": "How a residential roof replacement works in Springfield, OR",
      "step": [
        { "@type": "HowToStep", "name": "On-Site Inspection", "text": "Full walk-around and in-attic moisture check to document decking, flashing, ventilation, and drainage." },
        { "@type": "HowToStep", "name": "Written Estimate", "text": "Itemized written estimate with materials, labor, disposal, and warranty terms." },
        { "@type": "HowToStep", "name": "Tear-Off and Deck Prep", "text": "Remove old roofing down to the deck, replace any damaged sheathing, install ice and water shield and synthetic underlayment." },
        { "@type": "HowToStep", "name": "Installation and Walkthrough", "text": "Install shingles, flashing, and ridge ventilation to manufacturer spec, then clean up and walk the property before handing over warranty paperwork." }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What's included in a residential roof replacement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A complete residential roof replacement from Rain or Shine Roofing includes tear-off of the existing roof, deck and sheathing inspection, ice and water shield in vulnerable areas, synthetic underlayment, new flashing around penetrations, drip edge, manufacturer-approved shingles, ridge ventilation, and full jobsite cleanup with magnetic nail sweep. Warranty paperwork is delivered at the final walkthrough."
          }
        },
        {
          "@type": "Question",
          "name": "How often should a residential roof be replaced in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most asphalt shingle roofs in Oregon last 20 to 30 years depending on the product line, ventilation, and moss exposure. Homes under heavy tree cover, north-facing slopes, or coastal wind often need replacement earlier. If you're seeing curling shingles, granule loss in gutters, or moss buildup that keeps returning, it's time for an inspection."
          }
        },
        {
          "@type": "Question",
          "name": "Can you work with my homeowner's insurance on storm damage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Rain or Shine Roofing regularly documents storm damage and works alongside Oregon homeowner's insurance adjusters. We provide photographs, measurements, and written scopes that support your claim, and we can meet the adjuster on-site at no charge."
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
      <span class="eyebrow-label">Residential Roofing Specialists</span>
      <h1>Residential Roofing in Springfield, OR</h1>
      <p class="lead">New roof installs, complete re-roofs, and repair work for homes across Springfield, Eugene, and the Oregon I-5 corridor &mdash; from 4/12 asphalt shingle roofs to steep-pitch specialty builds.</p>
      <div class="page-hero-ctas">
        <a href="/contact" class="btn-primary">
          <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
          Free Roof Inspection
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
          <li aria-current="page">Residential Roofing</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== ANSWER-FIRST INTRO ========== -->
  <section>
    <div class="container">
      <div class="prose-centered">
        <h2>What Residential Roofing Costs in Springfield, OR</h2>
        <p>Most residential asphalt shingle roof replacements in Springfield, Oregon run <strong>$8,000 to $18,000</strong> for a typical single-family home &mdash; a figure driven by square footage, pitch, tear-off complexity, and material grade. Premium architectural shingles on steep pitches land at the higher end. Rain or Shine Roofing provides residential roof installation and repair for homeowners and businesses across Springfield, Eugene, and the surrounding 100-mile area, with itemized written estimates that hold through the day the job ends.</p>

        <div class="answer-block">
          <h3>How long does a residential roof replacement take?</h3>
          <p>A typical Springfield single-family tear-off and re-roof takes <strong>one to three days</strong>, weather permitting. Larger homes, multi-layer tear-offs, and steep cut-up roofs can run up to a full week. We schedule around Oregon&rsquo;s rain windows and tarp the job each night work isn&rsquo;t finished.</p>
        </div>

        <div class="answer-block">
          <h3>What does a residential roof project include?</h3>
          <p>Tear-off of the old roof, deck and sheathing inspection, new ice and water shield, synthetic underlayment, drip edge, step and counter flashing, manufacturer-approved shingles, ridge ventilation, and full jobsite cleanup with magnetic nail sweep. Warranty paperwork is delivered at the final walkthrough &mdash; not weeks later.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — TIM ON THE ROOF ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="img-reveal">
          <img src="https://i.imgur.com/bq3osMY.png" alt="Tim Davis of Rain or Shine Roofing installing a residential asphalt shingle roof in Springfield Oregon" width="900" height="700" loading="lazy">
        </div>
        <div>
          <h2 class="section-title">Built for How Oregon Homes Actually Weather</h2>
          <p class="section-subtitle">Moss, sideways rain, and four-month-long wet stretches &mdash; our installs are spec&rsquo;d around what actually happens on Pacific Northwest roofs.</p>
          <ul class="why-list">
            <li>
              <span class="why-icon"><i data-lucide="cloud-rain" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Wet-Climate Underlayment Details</h4>
                <p>Synthetic underlayment (not felt), ice and water shield at eaves, valleys, and penetrations &mdash; so slow snowmelt and wind-driven rain don&rsquo;t reach the decking.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="wind" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Ridge and Soffit Ventilation</h4>
                <p>Proper attic airflow keeps rafters dry, extends shingle life, and prevents the ice dams that rot Oregon eaves every winter. Ventilation is part of every re-roof &mdash; not an upsell.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="hammer" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Steep Pitch and Cut-Up Roof Experience</h4>
                <p>From 4/12 ranches to 12/12 Craftsman remodels, we handle complex rooflines, dormers, valleys, and multi-plane cuts &mdash; the kind of roof most crews upcharge for and then do wrong.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="shield-check" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Storm Damage &amp; Insurance Claims</h4>
                <p>We document wind and storm damage, meet adjusters on-site, and provide the written scope your homeowner&rsquo;s insurance needs to approve the claim. No extra charge.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== MID-PAGE PHONE CTA ========== -->
  <section class="phone-cta-bar">
    <h3>Active Leak or Storm Damage? We&rsquo;re Open.</h3>
    <p style="color: rgba(255,255,255,0.9); margin-bottom: var(--space-md);">Rain or Shine answers emergency roofing calls 24 hours a day, Monday through Saturday.</p>
    <a href="tel:+15416063306" class="phone-lg">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
  </section>

  <!-- ========== PROCESS SECTION ========== -->
  <section class="process-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>How a Residential Re-Roof Actually Goes</h2>
        <p>Four phases from the first phone call to the magnetic nail sweep &mdash; you&rsquo;ll know what&rsquo;s happening at every step.</p>
      </div>
      <div class="process-track" data-animate>
        <div class="process-step">
          <div class="process-num">1</div>
          <h3>Inspection</h3>
          <p>We climb the roof, check the attic, and document the entire system &mdash; decking, flashing, ventilation, drainage.</p>
        </div>
        <div class="process-step">
          <div class="process-num">2</div>
          <h3>Written Estimate</h3>
          <p>Itemized scope, materials, labor, disposal, and warranty terms. Nothing verbal &mdash; everything on paper.</p>
        </div>
        <div class="process-step">
          <div class="process-num">3</div>
          <h3>Tear-Off &amp; Install</h3>
          <p>Strip to decking, repair sheathing, install underlayment, flashing, and shingles to manufacturer spec.</p>
        </div>
        <div class="process-step">
          <div class="process-num">4</div>
          <h3>Cleanup &amp; Walkthrough</h3>
          <p>Magnetic sweep, gutter check, and a property walkthrough before warranty paperwork changes hands.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Residential Roofing FAQs</h2>
        <p>Straight answers to the questions Springfield and Eugene homeowners actually ask before hiring a roofer.</p>
      </div>
      <div class="faq-list" data-animate>
        <details class="faq-item">
          <summary>What&rsquo;s included in a residential roof replacement?</summary>
          <div class="faq-answer">
            A complete residential roof replacement from Rain or Shine Roofing includes tear-off of the existing roof, deck and sheathing inspection, ice and water shield in vulnerable areas, synthetic underlayment, new flashing around penetrations, drip edge, manufacturer-approved shingles, ridge ventilation, and full jobsite cleanup with magnetic nail sweep. Warranty paperwork is delivered at the final walkthrough.
          </div>
        </details>
        <details class="faq-item">
          <summary>How often should a residential roof be replaced in Oregon?</summary>
          <div class="faq-answer">
            Most asphalt shingle roofs in Oregon last <strong>20 to 30 years</strong> depending on the product line, ventilation, and moss exposure. Homes under heavy tree cover, north-facing slopes, or coastal wind often need replacement earlier. If you&rsquo;re seeing curling shingles, granule loss in gutters, or moss buildup that keeps returning, it&rsquo;s time for an inspection.
          </div>
        </details>
        <details class="faq-item">
          <summary>Can you work with my homeowner&rsquo;s insurance on storm damage?</summary>
          <div class="faq-answer">
            Yes. Rain or Shine Roofing regularly documents storm damage and works alongside Oregon homeowner&rsquo;s insurance adjusters. We provide photographs, measurements, and written scopes that support your claim, and we can meet the adjuster on-site at no charge.
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
      <a href="/services/asphalt-shingle-roofing" class="related-card">
        <span class="related-icon"><i data-lucide="layers" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Asphalt Shingle Roofing</h3>
          <span>View Details &rarr;</span>
        </div>
      </a>
      <a href="/services/roof-tear-off-replacement" class="related-card">
        <span class="related-icon"><i data-lucide="refresh-cw" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Tear-Off &amp; Replacement</h3>
          <span>View Details &rarr;</span>
        </div>
      </a>
      <a href="/services/seamless-gutters" class="related-card">
        <span class="related-icon"><i data-lucide="droplets" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Seamless Gutters</h3>
          <span>View Details &rarr;</span>
        </div>
      </a>
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Get a Free Residential Roof Estimate</h2>
    <p>Tim will walk your roof, inspect the attic, and write up a detailed scope &mdash; then sit down at your kitchen table and answer every question you&rsquo;ve got. Free, no pressure.</p>
    <a href="tel:+15416063306" class="cta-phone">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
    <div class="cta-buttons">
      <a href="/contact" class="btn-primary on-dark">
        <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
        Request a Free Estimate
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
