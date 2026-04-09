<?php
/**
 * Asphalt Shingle Roofing — Rain or Shine Roofing
 */
$pageTitle       = "Asphalt Shingle Roofing Springfield OR | Rain or Shine Roofing";
$pageDescription = "Asphalt shingle roof installation and repair in Springfield, OR. Architectural and 3-tab shingles with 25-50 year warranties. Built for Oregon's wet climate. Call (541) 606-3306.";
$canonicalUrl    = "https://rainorshine-roofing.com/services/asphalt-shingle-roofing";
$ogImage         = "https://i.imgur.com/yX4DOpF.png";
$currentPage     = "asphalt-shingle-roofing";
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
        { "@type": "ListItem", "position": 3, "name": "Asphalt Shingle Roofing", "item": "https://rainorshine-roofing.com/services/asphalt-shingle-roofing" }
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Asphalt Shingle Roof Installation",
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
      "areaServed": "Springfield, Eugene, and Oregon properties within a 100-mile radius",
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
          "name": "How long do asphalt shingles last in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Architectural asphalt shingles typically last 25 to 30 years in Oregon with proper ventilation and periodic moss treatment. Lower-grade 3-tab shingles last 15 to 20 years. Roofs under heavy tree cover, on the north side of the Coast Range, or in year-round shade tend to see faster wear from moss growth and moisture."
          }
        },
        {
          "@type": "Question",
          "name": "Are architectural shingles worth the extra cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For most Oregon homes, yes. Architectural (also called dimensional or laminate) shingles cost roughly 20 to 30 percent more than 3-tab, but they last longer, have better wind ratings, carry stronger warranties, and add curb appeal. On homes you plan to live in for 10+ years, the upgrade almost always pays off."
          }
        },
        {
          "@type": "Question",
          "name": "What causes moss on Oregon asphalt shingle roofs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moss grows where shingles stay damp and shaded — under trees, on north-facing slopes, and in areas with poor airflow. It traps moisture against the shingle mat, which breaks down granules and shortens roof life. Zinc strips at the ridge, regular cleaning, and proper ventilation all help. Rain or Shine can install copper or zinc strips during a re-roof as preventive protection."
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
      <span class="eyebrow-label">Architectural &amp; 3-Tab Shingles</span>
      <h1>Asphalt Shingle Roofing in Springfield, OR</h1>
      <p class="lead">The workhorse roofing material of the Pacific Northwest &mdash; installed correctly, with proper underlayment, flashing, and ventilation for Oregon&rsquo;s wet winters.</p>
      <div class="page-hero-ctas">
        <a href="/contact" class="btn-primary">
          <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
          Free Shingle Estimate
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
          <li aria-current="page">Asphalt Shingle Roofing</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== ANSWER-FIRST INTRO ========== -->
  <section>
    <div class="container">
      <div class="prose-centered">
        <h2>How Much Does an Asphalt Shingle Roof Cost in Oregon?</h2>
        <p>Asphalt shingle roof replacements in Springfield, Oregon typically run <strong>$4 to $7 per square foot</strong> installed &mdash; or roughly <strong>$8,000 to $18,000</strong> for a single-family home depending on material grade, pitch, and tear-off. Architectural shingles cost about 20&ndash;30% more than 3-tab but last longer and carry stronger warranties. Rain or Shine Roofing provides asphalt shingle roof installation and repair for homeowners and businesses across Springfield, Eugene, and the surrounding 100-mile area.</p>

        <div class="answer-block">
          <h3>What warranty comes with a new shingle roof?</h3>
          <p>Manufacturer warranties on asphalt shingles typically range from <strong>25 years on 3-tab</strong> to <strong>50 years or lifetime on premium architectural</strong> lines. These warranties cover the shingles themselves &mdash; the installer warranty (on labor and workmanship) is separate. Rain or Shine backs every install with a written workmanship warranty.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — COMPLETED SHINGLE JOB ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/yX4DOpF.png" alt="Completed asphalt shingle roof installation on a Springfield Oregon home" width="900" height="700" loading="lazy">
        </div>
        <div>
          <h2 class="section-title">Why Asphalt Still Dominates Pacific NW Roofs</h2>
          <p>Metal, cedar, and tile all have their place &mdash; but for most homes in Springfield, Eugene, and the I-5 corridor, asphalt shingles remain the right answer. They&rsquo;re affordable, come in dozens of colors and profiles, handle wet weather well when installed with proper underlayment, and every local roofer is trained on them, which keeps repair costs low.</p>
          <p>The difference between a shingle roof that lasts 15 years and one that lasts 30 isn&rsquo;t the shingle &mdash; it&rsquo;s the install. Flashing details, underlayment, ventilation, and nailing pattern all determine how the roof ages. Rain or Shine installs every shingle roof to manufacturer spec, not the shortcut version.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== COMPARISON GRID ========== -->
  <section>
    <div class="container">
      <div class="section-header" data-animate>
        <h2>3-Tab vs. Architectural Shingles</h2>
        <p>The two main residential asphalt shingle categories &mdash; how they compare for Oregon homes.</p>
      </div>
      <div class="compare-grid" data-animate>
        <div class="compare-card">
          <h3>3-Tab Shingles</h3>
          <ul>
            <li>Flat, uniform single-layer profile</li>
            <li>Lower upfront cost &mdash; budget-friendly</li>
            <li>15&ndash;20 year typical lifespan in Oregon</li>
            <li>60&ndash;70 mph wind ratings</li>
            <li>25 year manufacturer warranty</li>
            <li>Limited color and style options</li>
          </ul>
        </div>
        <div class="compare-card">
          <h3>Architectural (Dimensional)</h3>
          <ul>
            <li>Multi-layer laminated, textured profile</li>
            <li>Premium look &mdash; better curb appeal</li>
            <li>25&ndash;30+ year typical lifespan in Oregon</li>
            <li>110&ndash;130 mph wind ratings</li>
            <li>30&ndash;50 year or lifetime warranty</li>
            <li>Dozens of colors and textured patterns</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PROCESS ========== -->
  <section class="process-section bg-alt">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Shingle Installation Steps</h2>
        <p>What actually happens between the tear-off and the final nail.</p>
      </div>
      <div class="process-track" data-animate>
        <div class="process-step">
          <div class="process-num">1</div>
          <h3>Deck Prep</h3>
          <p>Tear-off to sheathing, replace any rotted or damaged plywood, re-nail existing decking to current code.</p>
        </div>
        <div class="process-step">
          <div class="process-num">2</div>
          <h3>Underlayment &amp; Ice Shield</h3>
          <p>Ice and water shield at eaves, valleys, and penetrations. Synthetic underlayment over the full field.</p>
        </div>
        <div class="process-step">
          <div class="process-num">3</div>
          <h3>Flashing</h3>
          <p>Drip edge, step flashing at walls, counter flashing at chimneys, pipe boots, and skylight details &mdash; the leak-stopping layer most crews skip.</p>
        </div>
        <div class="process-step">
          <div class="process-num">4</div>
          <h3>Shingle Install</h3>
          <p>Starter course, field shingles nailed to manufacturer spec, ridge cap, and ridge ventilation. Then cleanup and final walk.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Asphalt Shingle FAQs</h2>
      </div>
      <div class="faq-list" data-animate>
        <details class="faq-item">
          <summary>How long do asphalt shingles last in Oregon?</summary>
          <div class="faq-answer">
            Architectural asphalt shingles typically last <strong>25 to 30 years</strong> in Oregon with proper ventilation and periodic moss treatment. Lower-grade 3-tab shingles last 15 to 20 years. Roofs under heavy tree cover, on the north side of the Coast Range, or in year-round shade tend to see faster wear from moss growth and moisture.
          </div>
        </details>
        <details class="faq-item">
          <summary>Are architectural shingles worth the extra cost?</summary>
          <div class="faq-answer">
            For most Oregon homes, yes. Architectural (also called dimensional or laminate) shingles cost roughly <strong>20 to 30 percent more</strong> than 3-tab, but they last longer, have better wind ratings, carry stronger warranties, and add curb appeal. On homes you plan to live in for 10+ years, the upgrade almost always pays off.
          </div>
        </details>
        <details class="faq-item">
          <summary>What causes moss on Oregon asphalt shingle roofs?</summary>
          <div class="faq-answer">
            Moss grows where shingles stay damp and shaded &mdash; under trees, on north-facing slopes, and in areas with poor airflow. It traps moisture against the shingle mat, which breaks down granules and shortens roof life. Zinc strips at the ridge, regular cleaning, and proper ventilation all help. Rain or Shine can install copper or zinc strips during a re-roof as preventive protection.
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
      <a href="/services/roof-tear-off-replacement" class="related-card">
        <span class="related-icon"><i data-lucide="refresh-cw" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Tear-Off &amp; Replacement</h3>
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
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Ready for a New Shingle Roof?</h2>
    <p>Free on-site inspection, honest recommendation on 3-tab vs architectural, and a written estimate you can take to the bank.</p>
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
