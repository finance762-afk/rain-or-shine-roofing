<?php
/**
 * Asphalt Shingle Roofing — Rain or Shine Roofing
 */
$pageTitle       = "Asphalt Shingle Roofing Willamette Valley | Rain or Shine Roofing";
$pageDescription = "Malarkey architectural laminated fiberglass shingle installation across the Willamette Valley and Oregon Coast. Built-in Scotchgard moss protection. Built for Oregon's wet climate. Call (541) 606-3306.";
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
      "areaServed": "Willamette Valley, Oregon Coast, and properties within a 100-mile radius of Springfield, OR",
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
            "text": "Architectural asphalt shingles typically last 25 to 30 years in Oregon with proper ventilation and periodic moss treatment. Roofs under heavy tree cover, on the north side of the Coast Range, or in year-round shade tend to see faster wear from moss growth and moisture."
          }
        },
        {
          "@type": "Question",
          "name": "Are architectural shingles worth the extra cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For most Oregon homes, yes. Architectural (also called dimensional or laminate) shingles cost roughly 20 to 30 percent more than basic shingles, but they last longer, have better wind ratings, and add curb appeal. On homes you plan to live in for 10+ years, the upgrade almost always pays off."
          }
        },
        {
          "@type": "Question",
          "name": "What causes moss on Oregon asphalt shingle roofs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moss grows where shingles stay damp and shaded — under trees, on north-facing slopes, and in areas with poor airflow. It traps moisture against the shingle mat, which breaks down granules and shortens roof life. Malarkey shingles feature built-in Scotchgard protector that resists moss and algae growth, reducing the need for chemical treatments. Proper ventilation and tree-trimming also help."
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
      <span class="eyebrow-label">Malarkey Architectural Shingles</span>
      <h1>Asphalt Shingle Roofing Across the Willamette Valley</h1>
      <p class="lead">Malarkey limited lifetime architectural laminated fiberglass shingles with built-in Scotchgard moss protection &mdash; installed correctly, with proper underlayment, flashing, and ventilation for Oregon&rsquo;s wet winters.</p>
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
        <p>Rain or Shine Roofing installs asphalt shingle roofs across the Willamette Valley and Oregon Coast. Asphalt shingle roof replacements typically run <strong>$8,000 to $18,000</strong> for a single-family home depending on material grade, pitch, and tear-off. We install Malarkey limited lifetime architectural laminated fiberglass shingles exclusively for pitched residential roofs. Malarkey shingles feature built-in Scotchgard protector that resists moss and algae growth &mdash; a critical advantage in Oregon&rsquo;s damp climate.</p>

      </div>
    </div>
  </section>

  <!-- ========== SPLIT — COMPLETED SHINGLE JOB ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/yX4DOpF.png" alt="Completed asphalt shingle roof installation on a Willamette Valley home" width="900" height="700" loading="lazy">
        </div>
        <div>
          <h2 class="section-title">Why Asphalt Still Dominates Pacific NW Roofs</h2>
          <p>For most homes across the Willamette Valley and Oregon Coast, Malarkey architectural laminated fiberglass shingles are the right answer. They&rsquo;re affordable, come in several colors and profiles, handle wet weather well when installed with proper underlayment, and every local roofer is trained on them, which keeps repair costs low.</p>
          <p>The difference between a shingle roof that lasts 15 years and one that lasts 30 isn&rsquo;t the shingle &mdash; it&rsquo;s the install. Flashing details, underlayment, ventilation, and nailing pattern all determine how the roof ages. Rain or Shine installs every Malarkey shingle roof with hands-on workmanship and no shortcuts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== MALARKEY ON THE ROOF — IMAGE PAIR ========== -->
  <section>
    <div class="container">
      <div class="section-header">
        <span class="eyebrow-label">Malarkey On The Roof</span>
        <h2>Underlayment First. Shingles Second. Every Time.</h2>
        <p>A shingle roof is only as good as what&rsquo;s underneath. Every Rain or Shine install runs synthetic underlayment over the entire deck before a single bundle of Malarkey goes on.</p>
      </div>
      <div class="grid-2" data-animate>
        <figure>
          <img src="https://i.imgur.com/UTSW4cY.jpeg" alt="Malarkey Highlander AR shingle bundles staged on fresh underlayment during a Rain or Shine Roofing install" width="1000" height="750" loading="lazy" style="border-radius:var(--radius);">
          <figcaption style="margin-top:var(--space-sm);text-align:center;color:var(--text-light);font-weight:600;font-size:0.95rem;">Malarkey Highlander AR bundles staged on synthetic underlayment.</figcaption>
        </figure>
        <figure>
          <img src="https://i.imgur.com/4HEWi8r.jpeg" alt="Pitched roof underlayment with Malarkey shingle stacks ready for install on a Willamette Valley home" width="1000" height="750" loading="lazy" style="border-radius:var(--radius);">
          <figcaption style="margin-top:var(--space-sm);text-align:center;color:var(--text-light);font-weight:600;font-size:0.95rem;">Underlayment rolled out, shingle bundles set &mdash; day of install.</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- ========== MALARKEY FEATURES ========== -->
  <section>
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Why Malarkey Shingles for Oregon Roofs?</h2>
        <p>Purpose-built for the Pacific Northwest &mdash; here&rsquo;s what sets Malarkey apart.</p>
      </div>
      <div class="benefit-grid" data-animate>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="leaf" width="24" height="24" aria-hidden="true"></i></span>
          <h3>Built-In Scotchgard Moss Protection</h3>
          <p>Malarkey shingles include 3M Scotchgard protector that resists moss, algae, and blue-green staining &mdash; no extra chemical treatments needed.</p>
        </div>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="layers" width="24" height="24" aria-hidden="true"></i></span>
          <h3>Architectural Laminated Fiberglass</h3>
          <p>Multi-layer laminated construction delivers a dimensional, textured profile with superior wind ratings and long-term durability in Oregon&rsquo;s wet climate.</p>
        </div>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="wind" width="24" height="24" aria-hidden="true"></i></span>
          <h3>High Wind Resistance</h3>
          <p>Rated for 110&ndash;130 mph wind zones, making Malarkey shingles ideal for Oregon Coast and exposed ridgeline installations.</p>
        </div>
        <div class="benefit-item">
          <span class="benefit-icon"><i data-lucide="palette" width="24" height="24" aria-hidden="true"></i></span>
          <h3>Color Options</h3>
          <p>Several color blends and textured profiles to match any Oregon home &mdash; from classic earth tones to modern grays and weathered wood looks.</p>
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
          <p>Starter course, field shingles nailed with professional workmanship, ridge cap, and ridge ventilation. Then cleanup and final walk.</p>
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
            Architectural asphalt shingles typically last <strong>25 to 30 years</strong> in Oregon with proper ventilation and periodic moss treatment. Roofs under heavy tree cover, on the north side of the Coast Range, or in year-round shade tend to see faster wear from moss growth and moisture.
          </div>
        </details>
        <details class="faq-item">
          <summary>Are architectural shingles worth the extra cost?</summary>
          <div class="faq-answer">
            For most Oregon homes, yes. Architectural laminated shingles like Malarkey cost roughly <strong>20 to 30 percent more</strong> than basic shingles, but they last longer, have better wind ratings, and add curb appeal. On homes you plan to live in for 10+ years, the upgrade almost always pays off.
          </div>
        </details>
        <details class="faq-item">
          <summary>What causes moss on Oregon asphalt shingle roofs?</summary>
          <div class="faq-answer">
            Moss grows where shingles stay damp and shaded &mdash; under trees, on north-facing slopes, and in areas with poor airflow. It traps moisture against the shingle mat, which breaks down granules and shortens roof life. Malarkey shingles feature built-in Scotchgard protector that resists moss and algae growth, reducing the need for chemical treatments. Proper ventilation and tree-trimming also help.
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
    <h2>Call for Your New Shingle Roof Estimate</h2>
    <p>Call today and a professional roofer will get back to you right away. Free on-site inspection, honest material recommendation, and a detailed written proposal.</p>
    <a href="tel:+15416063306" class="cta-phone">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
    <div class="cta-buttons">
      <a href="tel:+15416063306" class="btn-primary on-dark">
        <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
        Call Now &mdash; Free Estimates
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
