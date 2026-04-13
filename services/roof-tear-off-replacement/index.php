<?php
/**
 * Roof Tear-Off & Replacement — Rain or Shine Roofing
 */
$pageTitle       = "Roof Tear-Off &amp; Replacement Springfield OR | Rain or Shine Roofing";
$pageDescription = "Complete roof tear-off and replacement in Springfield, OR. Full removal to decking, sheathing repair, and new roof installation across Eugene and the I-5 corridor. Call (541) 606-3306 for a free estimate.";
$canonicalUrl    = "https://rainorshine-roofing.com/services/roof-tear-off-replacement";
$ogImage         = "https://i.imgur.com/TcjRAxN.png";
$currentPage     = "roof-tear-off-replacement";
$heroImage       = "https://i.imgur.com/TcjRAxN.png";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://rainorshine-roofing.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Roof Tear-Off and Replacement", "item": "https://rainorshine-roofing.com/services/roof-tear-off-replacement" }
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Roof Tear-Off and Replacement",
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
          "name": "When does a roof need to be torn off instead of layered over?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oregon residential code generally limits roofs to two total layers of shingles. A complete tear-off is required when the existing roof already has two layers, when the decking is damaged or rotted, when the existing shingles are severely curled or lifted, or when the homeowner wants the longest-lasting result. Tear-off also lets us inspect and repair the deck — which is the single biggest difference between a 15-year roof and a 30-year roof."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a full roof tear-off and replacement take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard single-family tear-off and re-roof in Springfield takes one to three days. Larger homes, two-layer tear-offs, or roofs with extensive deck damage can take up to a full week. Commercial projects are scheduled and phased based on building size and access."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if the deck underneath is damaged?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Deck damage is common when moisture has been getting past old flashing or ventilation. We replace any rotted sheathing with new ½″ CDX plywood, properly nailed, before the new underlayment and shingles go down. Deck repair is included in our tear-off process — we give a square footage allowance in the original bid and reconcile actual on the job."
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
  <section class="page-hero" style="background-image: linear-gradient(135deg, rgba(11,23,52,0.86) 0%, rgba(0,45,122,0.72) 60%, rgba(0,71,187,0.58) 100%), url('https://i.imgur.com/TcjRAxN.png');">
    <div class="page-hero-inner">
      <span class="eyebrow-label">Full Removal. No Layer-Overs.</span>
      <h1>Roof Tear-Off &amp; Replacement in Springfield, OR</h1>
      <p class="lead">Complete removal of the existing roof down to the deck &mdash; with sheathing inspection, repair, and a brand-new roof system installed the right way.</p>
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
          <li aria-current="page">Roof Tear-Off &amp; Replacement</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== ANSWER-FIRST INTRO ========== -->
  <section>
    <div class="container">
      <div class="prose-centered">
        <h2>How Much Does a Full Roof Replacement Cost in Oregon?</h2>
        <p>Complete roof tear-off and replacement in Springfield, Oregon typically runs <strong>$10,000 to $22,000</strong> for a single-family home &mdash; dependent on square footage, pitch, material grade, and the condition of the decking underneath. Tear-off adds roughly <strong>$1,000&ndash;$3,500</strong> over a layer-over install, but it&rsquo;s the only way to guarantee the new roof performs long-term. Rain or Shine Roofing provides complete tear-off and replacement for homeowners and businesses across Springfield, Eugene, and the surrounding 100-mile area.</p>

        <div class="answer-block">
          <h3>Why not just layer over the old roof?</h3>
          <p>A second layer hides deck damage, adds weight the structure wasn&rsquo;t designed for, shortens shingle life, and locks in whatever was wrong with the old install. Oregon code allows up to two layers total, but we don&rsquo;t recommend layer-overs on anything we expect to last 25 years.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — WIDE ROOF SHOT ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/BIxpP1I.jpeg" alt="Roofing supplies staged on a residential roof during a Rain or Shine Roofing tear-off in Oregon" width="900" height="700" loading="lazy">
        </div>
        <div>
          <h2 class="section-title">Tear-Off Exposes the Parts That Actually Matter</h2>
          <p>Most roof failures in Oregon don&rsquo;t start with the shingles &mdash; they start with decking, flashing, or ventilation that nobody ever looked at. A complete tear-off lets us see everything: rotted sheathing under the eaves, failed ice and water shield in the valleys, cracked plumbing boots, and bad step flashing at dormers and sidewalls.</p>
          <p>We document every issue, show you photos, and either fix it in the original scope or add a written change order before work continues. No mystery, no surprise charges at the end.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SIGNAL LIST — WHEN TO TEAR OFF ========== -->
  <section>
    <div class="container">
      <div class="section-header" data-animate>
        <h2>When a Full Tear-Off Is the Right Call</h2>
        <p>Four conditions where a layer-over won&rsquo;t cut it &mdash; and tear-off is the only honest answer.</p>
      </div>
      <ol class="signal-list" data-animate>
        <li>
          <h4>The Roof Already Has Two Layers</h4>
          <p>Oregon residential code caps shingle roofs at two layers. A third layer isn&rsquo;t permitted &mdash; tear-off is mandatory.</p>
        </li>
        <li>
          <h4>Visible Deck Damage or Sagging</h4>
          <p>If you can see dips, sag, or spongy sections from the ground or the attic, the decking underneath needs to come off so it can be inspected and replaced.</p>
        </li>
        <li>
          <h4>Active Leaks in Multiple Locations</h4>
          <p>Multiple leak points mean multiple flashing failures. Layering shingles over that won&rsquo;t fix the real problem.</p>
        </li>
        <li>
          <h4>Curling, Cupping, or Heavy Moss Damage</h4>
          <p>When shingles are heavily deformed or granule-stripped, a smooth second layer can&rsquo;t bond properly. Tear-off is the only way to get a flat, watertight base.</p>
        </li>
      </ol>
    </div>
  </section>

  <!-- ========== MID-PAGE PHONE CTA ========== -->
  <section class="phone-cta-bar">
    <h3>Not Sure If Your Roof Needs a Tear-Off?</h3>
    <p style="color: rgba(255,255,255,0.9); margin-bottom: var(--space-md);">Free on-site inspection. We&rsquo;ll tell you straight &mdash; repair, layer-over, or tear-off.</p>
    <a href="tel:+15416063306" class="phone-lg">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
  </section>

  <!-- ========== PROCESS ========== -->
  <section class="process-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>The Tear-Off Process</h2>
      </div>
      <div class="process-track" data-animate>
        <div class="process-step">
          <div class="process-num">1</div>
          <h3>Property Protection</h3>
          <p>Tarps over landscaping, drop cloths along the house, plywood shields on windows &mdash; before a single shingle comes off.</p>
        </div>
        <div class="process-step">
          <div class="process-num">2</div>
          <h3>Strip to Decking</h3>
          <p>All layers of existing roofing removed. Loaded directly into a disposal trailer &mdash; not dumped on the lawn.</p>
        </div>
        <div class="process-step">
          <div class="process-num">3</div>
          <h3>Deck Inspection</h3>
          <p>We walk the entire deck, photograph damaged sheathing, and replace any rotted or spongy sections with new &frac12;&Prime; CDX plywood.</p>
        </div>
        <div class="process-step">
          <div class="process-num">4</div>
          <h3>New Roof System</h3>
          <p>Ice and water shield, underlayment, drip edge, flashing, Malarkey architectural shingles (for pitched roofs), and ventilation &mdash; the full new system, installed with hands-on workmanship and no shortcuts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Tear-Off &amp; Replacement FAQs</h2>
      </div>
      <div class="faq-list" data-animate>
        <details class="faq-item">
          <summary>When does a roof need to be torn off instead of layered over?</summary>
          <div class="faq-answer">
            Oregon residential code generally limits roofs to two total layers of shingles. A complete tear-off is required when the existing roof already has two layers, when the decking is damaged or rotted, when the existing shingles are severely curled or lifted, or when the homeowner wants the longest-lasting result. Tear-off also lets us inspect and repair the deck &mdash; which is the single biggest difference between a 15-year roof and a 30-year roof.
          </div>
        </details>
        <details class="faq-item">
          <summary>How long does a full roof tear-off and replacement take?</summary>
          <div class="faq-answer">
            A standard single-family tear-off and re-roof in Springfield takes <strong>one to three days</strong>. Larger homes, two-layer tear-offs, or roofs with extensive deck damage can take up to a full week. Commercial projects are scheduled and phased based on building size and access.
          </div>
        </details>
        <details class="faq-item">
          <summary>What happens if the deck underneath is damaged?</summary>
          <div class="faq-answer">
            Deck damage is common when moisture has been getting past old flashing or ventilation. We replace any rotted sheathing with new &frac12;&Prime; CDX plywood, properly nailed, before the new underlayment and shingles go down. Deck repair is included in our tear-off process &mdash; we give a square footage allowance in the original bid and reconcile actual on the job.
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
      <a href="/services/roof-rot-repair" class="related-card">
        <span class="related-icon"><i data-lucide="wrench" width="22" height="22" aria-hidden="true"></i></span>
        <div>
          <h3>Roof Rot Repair</h3>
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
    <h2>Call for Your Tear-Off Estimate</h2>
    <p>Call today and a professional roofer will get back to you right away. Free on-site inspection with deck condition photos, detailed written proposal, and an honest recommendation on whether tear-off is the right call.</p>
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
