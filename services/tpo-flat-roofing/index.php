<?php
/**
 * TPO Flat Roofing — Rain or Shine Roofing
 */
$pageTitle       = "TPO Flat Roofing Willamette Valley | Rain or Shine Roofing";
$pageDescription = "TPO single-ply flat roof installation and repair across the Willamette Valley and Oregon Coast. Heat-welded seams, reflective white membrane, and peel-and-stick alternatives for commercial buildings. Call (541) 606-3306.";
$canonicalUrl    = "https://rainorshine-roofing.com/services/tpo-flat-roofing";
$ogImage         = "https://i.imgur.com/dbzzO8P.png";
$currentPage     = "tpo-flat-roofing";
$heroImage       = "https://i.imgur.com/dbzzO8P.png";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://rainorshine-roofing.com/services" },
        { "@type": "ListItem", "position": 3, "name": "TPO Flat Roofing", "item": "https://rainorshine-roofing.com/services/tpo-flat-roofing" }
      ]
    },
    {
      "@type": "Service",
      "serviceType": "TPO Flat Roof Installation",
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
      "areaServed": "Commercial and low-slope properties within 100 miles of Springfield, OR",
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
          "name": "How long does a TPO roof last in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A properly installed TPO roof in Oregon typically lasts 20 to 30 years. Lifespan depends on membrane thickness (45-, 60-, or 80-mil), quality of heat-welded seams, proper slope to drains, and ongoing maintenance. Rain or Shine installs commercial-grade membrane with fully welded seams — no adhesive-only shortcuts."
          }
        },
        {
          "@type": "Question",
          "name": "What's the difference between TPO and EPDM?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TPO (thermoplastic polyolefin) is typically white, reflective, and heat-welded at the seams. EPDM (rubber) is typically black and seamed with adhesive or tape. TPO is more energy-efficient in hot climates and has stronger seam integrity when properly welded. For most Oregon commercial buildings, TPO is the recommended modern choice."
          }
        },
        {
          "@type": "Question",
          "name": "Can TPO be installed over an existing roof?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sometimes. Code allows a TPO recover on an existing roof if the deck is dry, structurally sound, and the assembly meets current fire and wind requirements. However, full tear-off is the right call when the existing insulation is saturated, when there are already two roof layers, or when inspection reveals deck damage. We core-test before recommending either option."
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
  <section class="page-hero" style="background-image: linear-gradient(135deg, rgba(11,23,52,0.86) 0%, rgba(0,45,122,0.72) 60%, rgba(0,71,187,0.58) 100%), url('https://i.imgur.com/dbzzO8P.png');">
    <div class="page-hero-inner">
      <span class="eyebrow-label">Flat &amp; Low-Slope Commercial Systems</span>
      <h1>TPO Flat Roofing Across the Willamette Valley</h1>
      <p class="lead">Single-ply thermoplastic membrane with heat-welded seams &mdash; Tim has spent over 30 years specializing in low-slope systems like this one. The industry standard for flat and low-slope commercial roofs across Oregon.</p>
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
          <li aria-current="page">TPO Flat Roofing</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== ANSWER-FIRST INTRO ========== -->
  <section>
    <div class="container">
      <div class="prose-centered">
        <h2>What TPO Flat Roofing Costs in Oregon</h2>
        <p>Rain or Shine Roofing specializes in TPO flat roofing across the Willamette Valley and Oregon Coast. TPO flat roof installations are priced based on membrane thickness (45-, 60-, or 80-mil), insulation R-value, and deck condition. A standard 8,000 sq ft commercial roof runs <strong>$40,000 to $80,000</strong> for a full system replacement including insulation, membrane, flashing, and tear-off. Owner Tim has over 30 years of hands-on low-slope experience &mdash; this is what he&rsquo;s known for.</p>

        <div class="answer-block">
          <h3>Why is TPO the standard for flat roofs?</h3>
          <p>TPO (thermoplastic polyolefin) is a single-ply membrane that&rsquo;s heat-welded at every seam &mdash; so the entire roof becomes one continuous sheet with no adhesive joints to fail. The white reflective surface keeps buildings cooler in summer, and the material handles ponding water better than most alternatives. That&rsquo;s why it&rsquo;s now the dominant commercial flat roof system across Oregon.</p>
        </div>

        <div class="answer-block">
          <h3>Do you install alternatives to TPO?</h3>
          <p>Yes. Peel-and-stick modified bitumen is still the right call on some smaller flat roofs, decks, and additions. We&rsquo;ll recommend the system that actually fits the building &mdash; not just the one we want to install.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — TPO IMAGE RIGHT ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="img-reveal">
          <img src="https://i.imgur.com/dbzzO8P.png" alt="Commercial flat TPO roof membrane installation in Eugene Oregon" width="900" height="700" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label">Built for Oregon Rainfall</span>
          <h2 class="section-title">Heat-Welded Seams. No Leak Paths.</h2>
          <p>Flat roofs have one job: get water off the roof, fast. In Oregon, where annual rainfall tops 40 inches in the Willamette Valley and 70+ inches on the coast, seam integrity is everything. Rain or Shine installs TPO with <strong>fully heat-welded seams</strong> &mdash; not adhesive, not tape, not self-adhering strips that peel in a decade.</p>
          <p>Every install includes proper slope-to-drain, reinforced flashing at all penetrations (HVAC curbs, plumbing stacks, skylights), and walk pads where maintenance traffic happens. Simple, methodical, and spec&rsquo;d to last.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TPO VS EPDM COMPARISON ========== -->
  <section>
    <div class="container">
      <div class="section-header" data-animate>
        <h2>TPO vs. EPDM: What Oregon Buildings Actually Need</h2>
        <p>Two of the most common flat-roof systems &mdash; here&rsquo;s how they stack up for Pacific Northwest commercial buildings.</p>
      </div>
      <div class="compare-grid" data-animate>
        <div class="compare-card">
          <h3>TPO (Recommended)</h3>
          <ul>
            <li>White reflective surface reduces cooling load</li>
            <li>Heat-welded seams create a monolithic membrane</li>
            <li>Excellent tear and puncture resistance</li>
            <li>20&ndash;30 year lifespan with proper install</li>
            <li>Available in 45-, 60-, and 80-mil thicknesses</li>
            <li>Cleaner appearance for visible flat roofs</li>
          </ul>
        </div>
        <div class="compare-card">
          <h3>EPDM (Legacy Option)</h3>
          <ul>
            <li>Black rubber membrane &mdash; absorbs heat</li>
            <li>Adhesive or tape seams can fail over time</li>
            <li>Proven decades-long track record</li>
            <li>15&ndash;25 year typical lifespan</li>
            <li>Lower upfront cost on simple applications</li>
            <li>Harder to repair cleanly once it ages</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PROCESS ========== -->
  <section class="process-section bg-alt">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>TPO Installation Process</h2>
      </div>
      <div class="process-track" data-animate>
        <div class="process-step">
          <div class="process-num">1</div>
          <h3>Core Test &amp; Scope</h3>
          <p>Core sample of existing assembly, moisture scan of insulation, and a line-item bid based on what&rsquo;s actually on the roof.</p>
        </div>
        <div class="process-step">
          <div class="process-num">2</div>
          <h3>Tear-Off &amp; Deck Prep</h3>
          <p>Remove old roof to the deck, replace damaged sheathing or ISO, and verify slope to drain.</p>
        </div>
        <div class="process-step">
          <div class="process-num">3</div>
          <h3>Insulation &amp; Membrane</h3>
          <p>Mechanically fastened or adhered insulation, then TPO membrane rolled and heat-welded at every seam.</p>
        </div>
        <div class="process-step">
          <div class="process-num">4</div>
          <h3>Flashing &amp; Inspection</h3>
          <p>Reinforced flashing at curbs, penetrations, and perimeter. Full seam probe and water test before handoff.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>TPO Roofing FAQs</h2>
      </div>
      <div class="faq-list" data-animate>
        <details class="faq-item">
          <summary>How long does a TPO roof last in Oregon?</summary>
          <div class="faq-answer">
            A properly installed TPO roof in Oregon typically lasts <strong>20 to 30 years</strong>. Lifespan depends on membrane thickness (45-, 60-, or 80-mil), quality of heat-welded seams, proper slope to drains, and ongoing maintenance. Rain or Shine installs commercial-grade membrane with fully welded seams &mdash; no adhesive-only shortcuts.
          </div>
        </details>
        <details class="faq-item">
          <summary>What&rsquo;s the difference between TPO and EPDM?</summary>
          <div class="faq-answer">
            TPO is typically white, reflective, and heat-welded at the seams. EPDM (rubber) is typically black and seamed with adhesive or tape. TPO is more energy-efficient in hot climates and has stronger seam integrity when properly welded. For most Oregon commercial buildings, TPO is the recommended modern choice.
          </div>
        </details>
        <details class="faq-item">
          <summary>Can TPO be installed over an existing roof?</summary>
          <div class="faq-answer">
            Sometimes. Code allows a TPO recover on an existing roof if the deck is dry, structurally sound, and the assembly meets current fire and wind requirements. However, full tear-off is the right call when the existing insulation is saturated, when there are already two roof layers, or when inspection reveals deck damage. We core-test before recommending either option.
          </div>
        </details>
      </div>

      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- ========== RELATED SERVICES ========== -->
  <section class="related-services">
    <h2>Related Commercial Services</h2>
    <div class="related-grid">
      <a href="/services/commercial-roofing" class="related-card">
        <span class="related-icon"><i data-lucide="building-2" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Commercial Roofing</h3>
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
    <h2>Call for Your TPO Flat Roof Estimate</h2>
    <p>Call today and a professional roofer will get back to you right away. Free on-site inspection, core test if needed, and a detailed written proposal that covers membrane grade, insulation, and every flashing detail.</p>
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
