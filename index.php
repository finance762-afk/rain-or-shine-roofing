<?php
/**
 * Rain or Shine Roofing — Homepage
 * Springfield, OR roofing contractor
 */
$pageTitle       = "Willamette Valley Roofing Contractor | Rain or Shine Roofing";
$pageDescription = "Licensed roofing contractor serving the Willamette Valley and Oregon Coast. 24/7 residential and commercial roofing. Based in Springfield, OR. Free estimates. Call (541) 606-3306.";
$canonicalUrl    = "https://rainorshine-roofing.com/";
$ogImage         = "https://i.imgur.com/TcjRAxN.png";
$currentPage     = "home";
$heroImage       = "https://i.imgur.com/TcjRAxN.png";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "RoofingContractor",
      "@id": "https://rainorshine-roofing.com/#business",
      "name": "Rain or Shine Roofing",
      "image": "https://i.imgur.com/KunCdx5.png",
      "logo": "https://i.imgur.com/KunCdx5.png",
      "url": "https://rainorshine-roofing.com/",
      "telephone": "+1-541-606-3306",
      "email": "tim@expertroofer.net",
      "priceRange": "\$\$",
      "description": "Licensed and insured roofing contractor serving Springfield, OR and a 100-mile radius including Eugene, the I-5 corridor, and the Oregon Coast. Residential and commercial roofing, asphalt shingles, TPO flat roofing, tear-off and replacement, rot repair.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Springfield",
        "addressRegion": "OR",
        "addressCountry": "US"
      },
      "areaServed": [
        { "@type": "City", "name": "Springfield, OR" },
        { "@type": "City", "name": "Eugene, OR" },
        { "@type": "City", "name": "Cottage Grove, OR" },
        { "@type": "City", "name": "Roseburg, OR" },
        { "@type": "City", "name": "Albany, OR" },
        { "@type": "City", "name": "Corvallis, OR" },
        { "@type": "City", "name": "Lebanon, OR" },
        { "@type": "City", "name": "Sweet Home, OR" },
        { "@type": "City", "name": "Florence, OR" },
        { "@type": "City", "name": "Reedsport, OR" },
        { "@type": "City", "name": "Newport, OR" },
        { "@type": "City", "name": "Lincoln City, OR" },
        { "@type": "City", "name": "Coos Bay, OR" }
      ],
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
          "opens": "00:00",
          "closes": "23:59"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Sunday",
          "opens": "10:00",
          "closes": "18:00"
        }
      ],
      "founder": {
        "@type": "Person",
        "name": "Tim"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "27"
      },
      "veteranOwned": true,
      "license": "OR #158625"
    },
    {
      "@type": "WebSite",
      "@id": "https://rainorshine-roofing.com/#website",
      "url": "https://rainorshine-roofing.com/",
      "name": "Rain or Shine Roofing",
      "publisher": { "@id": "https://rainorshine-roofing.com/#business" },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://rainorshine-roofing.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does a new roof cost in Springfield, OR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most residential asphalt shingle roof replacements in Springfield, Oregon range from \$8,000 to \$18,000 depending on the home's square footage, pitch, tear-off requirements, and material grade. Larger homes, steep pitches, and premium architectural shingles sit at the higher end. Rain or Shine Roofing provides free, itemized written estimates so homeowners know exactly what's included before work starts."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer emergency roof repair?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Rain or Shine Roofing is available 24 hours a day Monday through Saturday and 10 AM to 6 PM on Sunday for emergency roof repair across Springfield, Eugene, and the Oregon Coast. Storm damage, active leaks, and wind damage are top priority — we tarp and stabilize fast to prevent interior damage."
          }
        },
        {
          "@type": "Question",
          "name": "What's the difference between asphalt shingles and TPO roofing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Asphalt shingles are the standard for sloped residential roofs — affordable, durable in Oregon's wet climate, and available in several colors. TPO (Thermoplastic Polyolefin) is a single-ply membrane used on flat and low-slope roofs, mostly on commercial buildings, shops, and additions. Rain or Shine Roofing installs both and can help you decide which system is right for your structure."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a full roof replacement take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A typical single-family home tear-off and asphalt shingle replacement in Springfield takes one to three days, weather permitting. Larger homes, multi-layer tear-offs, or complex cut-up roofs can take up to a week. We schedule around Oregon's rain windows and protect your property every day work is in progress."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide free estimates?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All estimates from Rain or Shine Roofing are free and include a full on-site inspection, written scope of work, material recommendations, and itemized pricing. There's no obligation and no pressure — just a straight answer on what your roof needs."
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

  <!-- ========== HERO ========== -->
  <section class="hero" style="background-image: linear-gradient(180deg, rgba(10,23,58,0.55) 0%, rgba(10,23,58,0.78) 100%), url('https://i.imgur.com/TcjRAxN.png');">
    <div class="hero-inner">
      <h1>The Willamette Valley&rsquo;s 24/7 Roofing Contractor</h1>
      <p class="hero-subtitle">Residential &amp; commercial roofing across the Willamette Valley and Oregon Coast &mdash; from steep-pitch shingles to flat TPO systems.</p>
      <div class="hero-cta-row">
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

  <!-- ========== TRUST BADGE STRIP ========== -->
  <section class="trust-strip" aria-label="Key trust signals">
    <div class="trust-strip-inner">
      <div class="trust-item">
        <span class="trust-icon"><i data-lucide="clock" width="24" height="24" aria-hidden="true"></i></span>
        <span class="trust-label">24/7 Emergency<br>Service</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon"><i data-lucide="badge-check" width="24" height="24" aria-hidden="true"></i></span>
        <span class="trust-label">Free Written<br>Estimates</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon"><i data-lucide="map-pin" width="24" height="24" aria-hidden="true"></i></span>
        <span class="trust-label">100-Mile<br>Service Radius</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon"><i data-lucide="building-2" width="24" height="24" aria-hidden="true"></i></span>
        <span class="trust-label">Residential &amp;<br>Commercial</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon"><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/flag-icon.php'; ?></span>
        <span class="trust-label">Veteran<br>Owned</span>
      </div>
    </div>
  </section>

  <!-- ========== IDENTITY SENTENCE (AEO — within first 100 words of visible content) ========== -->
  <section>
    <div class="container">
      <div class="section-header">
        <span class="eyebrow-label">Willamette Valley Roofing Specialists</span>
        <h2>Built for Oregon Weather. Backed by a Local Crew.</h2>
        <p>Rain or Shine Roofing is a licensed and insured roofing contractor based in Springfield, Oregon (Oregon State Contractor License #158625). Owner Tim and his crew install, replace, and repair residential and commercial roofs across the Eugene-Springfield area, the Willamette Valley, and the Oregon Coast &mdash; Malarkey architectural shingles, TPO flat systems, tear-offs, and rot repair. From steep-pitch residential roofs to flat commercial systems, Rain or Shine handles every roofing style common across the Pacific Northwest &mdash; the only exception is metal roofing.</p>
      </div>

      <!-- ========== SERVICES GRID ========== -->
      <div class="grid-3" data-animate>
        <article class="service-card">
          <span class="service-icon"><i data-lucide="home" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Residential Roofing</h3>
          <p>Full-service roof installation and repair for single-family homes across the Willamette Valley and Oregon Coast &mdash; steep pitches, complex rooflines, and wet-weather builds.</p>
          <a href="/services/residential-roofing" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="building-2" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Commercial Roofing</h3>
          <p>Durable, code-compliant commercial roof systems for shops, warehouses, retail, and multi-unit properties throughout the Willamette Valley.</p>
          <a href="/services/commercial-roofing" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="layers" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Asphalt Shingle Roofing</h3>
          <p>Malarkey limited lifetime architectural laminated fiberglass shingles with built-in Scotchgard moss protection, installed with proper ventilation and ice-and-water shield.</p>
          <a href="/services/asphalt-shingle-roofing" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="square" width="28" height="28" aria-hidden="true"></i></span>
          <h3>TPO Flat Roofing</h3>
          <p>Single-ply TPO membrane systems for flat and low-slope commercial buildings, shops, and additions &mdash; heat-welded seams, no leak paths.</p>
          <a href="/services/tpo-flat-roofing" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="refresh-cw" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Tear-Off &amp; Replacement</h3>
          <p>Complete roof tear-off and replacement, down to the decking. We inspect, re-sheet where needed, and install a brand-new system the right way.</p>
          <a href="/services/roof-tear-off-replacement" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

        <article class="service-card">
          <span class="service-icon"><i data-lucide="wrench" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Roof Rot Repair</h3>
          <p>Targeted sheathing and rafter repair for homes hit by leaks, ice dams, or dry rot &mdash; common in Oregon&rsquo;s wet winters. We find the source, not just the symptom.</p>
          <a href="/services/roof-rot-repair" class="service-link">
            Learn More
            <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
          </a>
        </article>

      </div>
    </div>
  </section>

  <!-- ========== WHY US SPLIT SECTION ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/QqH4mn0.jpeg" alt="Tim, owner of Rain or Shine Roofing in Springfield Oregon" width="800" height="600" loading="lazy">
        </div>
        <div>
          <h2 class="section-title">Why the Willamette Valley Trusts Rain or Shine</h2>
          <p class="section-subtitle">Owner-operated since day one. No subcontracted crews, no sales pressure &mdash; just a local roofer who shows up when he says he will.</p>
          <ul class="why-list">
            <li>
              <span class="why-icon"><i data-lucide="clock" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Available 24 Hours, Six Days a Week</h4>
                <p>Roof emergencies don&rsquo;t wait. We tarp, stabilize, and secure leaks around the clock so interior damage doesn&rsquo;t compound.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="user-check" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Owner-Operated by Tim</h4>
                <p>Tim is on every job site. You get one point of contact from estimate to final walkthrough &mdash; not a rotating crew of strangers.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="mountain" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Steep-Pitch and Flat Roof Expertise</h4>
                <p>Malarkey architectural shingles and TPO flat systems. We handle the full spectrum &mdash; residential and commercial, from 1/12 to 12/12 pitch.</p>
              </div>
            </li>
            <li>
              <span class="why-icon"><i data-lucide="map-pin" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Local Oregon Contractor, Not a Franchise</h4>
                <p>Licensed, bonded, insured (Oregon State Contractor License #158625). Springfield-based with a 100-mile radius that covers Eugene, the I-5 corridor, and the Oregon Coast.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== STATS SECTION ========== -->
  <section class="stats-section" aria-label="Company statistics">
    <div class="stats-grid">
      <div class="stat-counter">
        <span class="stat-number" data-counter="1200" data-suffix="+">1,200+</span>
        <span class="stat-label">Roofs Completed</span>
      </div>
      <div class="stat-counter">
        <span class="stat-number" data-counter="30" data-suffix="+">30+</span>
        <span class="stat-label">Years Experience</span>
      </div>
      <div class="stat-counter">
        <span class="stat-number" data-counter="100" data-suffix="mi">100mi</span>
        <span class="stat-label">Service Radius</span>
      </div>
      <div class="stat-counter">
        <span class="stat-number" data-counter="24" data-suffix="/7">24/7</span>
        <span class="stat-label">Emergency Response</span>
      </div>
    </div>
  </section>

  <!-- ========== PROCESS — SIGNATURE SECTION ========== -->
  <section class="process-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>How a Roof Project Works</h2>
        <p>Four clear steps from the first call to the final walkthrough &mdash; no mystery, no surprise charges.</p>
      </div>
      <div class="process-track" data-animate>
        <div class="process-step">
          <div class="process-num">1</div>
          <h3>Free Inspection</h3>
          <p>We climb, measure, photograph, and document the full roof system &mdash; decking, flashing, ventilation, and drainage.</p>
        </div>
        <div class="process-step">
          <div class="process-num">2</div>
          <h3>Detailed Estimate</h3>
          <p>Written scope of work with itemized materials, labor, and disposal. No verbal guesses.</p>
        </div>
        <div class="process-step">
          <div class="process-num">3</div>
          <h3>Professional Installation</h3>
          <p>Tim&rsquo;s crew installs the roof with proper underlayment, flashing, and ventilation &mdash; hands-on craftsmanship, no shortcuts, every time.</p>
        </div>
        <div class="process-step">
          <div class="process-num">4</div>
          <h3>Final Walkthrough</h3>
          <p>We clean the jobsite, magnet-sweep for nails, and walk the property with you before final sign-off.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WORK GALLERY ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Recent Roofing Projects</h2>
        <p>A look at what we&rsquo;ve been putting down across the Willamette Valley and Oregon Coast.</p>
      </div>
      <div class="gallery-grid" data-animate>
        <div class="gallery-item">
          <img src="https://i.imgur.com/6ACBQtK.jpeg" alt="Tim on the Waterfront Depot restaurant roof in Florence after a completed commercial re-roof" width="1000" height="750" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="https://i.imgur.com/Qi042q3.jpeg" alt="Aerial view of a completed multi-section residential roof in the Willamette Valley" width="1000" height="750" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="https://i.imgur.com/hK1TyUq.jpeg" alt="Rain or Shine roofer on the ridge with TopShield underlayment during a Willamette Valley install" width="1000" height="750" loading="lazy">
        </div>
      </div>
      <div style="text-align:center;margin-top:var(--space-2xl);">
        <a href="/gallery" class="btn-secondary">
          <i data-lucide="images" width="18" height="18" aria-hidden="true"></i>
          See the Full Gallery
        </a>
      </div>
    </div>
  </section>

  <!-- ========== ABOUT SNIPPET ========== -->
  <section class="about-snippet">
    <div class="container">
      <div class="split-reverse" data-animate>
        <div class="about-img">
          <img src="https://i.imgur.com/sfxIMf3.jpeg" alt="Tim, owner and lead roofer at Rain or Shine Roofing, on a roof in Oregon" width="800" height="1000" loading="lazy">
        </div>
        <div>
          <h2 class="section-title">Meet Tim</h2>
          <p class="section-subtitle">The roofer behind Rain or Shine &mdash; on every job, every day.</p>
          <p>A U.S. military veteran, Tim founded Rain or Shine Roofing with a simple idea: treat every roof like it&rsquo;s going on his own house. That means real inspections, honest estimates, and a crew that&rsquo;s in it for the long haul &mdash; not the next up-sell.</p>
          <p>After over 30 years on Oregon roofs, Tim knows the weather here. He knows which underlayments hold up through a wet winter, which shingles handle coastal wind, and which flashing details keep a living room ceiling dry in February. Rain or Shine Roofing brings that experience to every job across the Willamette Valley and Oregon Coast.</p>
          <div class="owner-sig">
            <strong>Tim</strong>
            <span>Owner &amp; Lead Roofer &middot; Oregon State Contractor License #158625</span>
          </div>
          <div style="margin-top: var(--space-xl);">
            <a href="/about" class="btn-primary">
              Meet the Team
              <i data-lucide="arrow-right" width="16" height="16" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header" data-animate>
        <h2>Roofing Questions We Hear Often</h2>
        <p>Straight answers to what homeowners across the Willamette Valley and Oregon Coast actually ask before hiring a roofer.</p>
      </div>
      <div class="faq-list" data-animate>
        <details class="faq-item">
          <summary>How much does a new roof cost in Springfield, OR?</summary>
          <div class="faq-answer">
            Most residential asphalt shingle roof replacements in Springfield range from <strong>$8,000 to $18,000</strong> depending on home square footage, pitch, tear-off requirements, and material grade. Larger homes, steep pitches, and premium architectural shingles sit at the higher end. Rain or Shine Roofing provides free, itemized written estimates so you know exactly what&rsquo;s included before work starts.
          </div>
        </details>
        <details class="faq-item">
          <summary>Do you offer emergency roof repair?</summary>
          <div class="faq-answer">
            Yes. Rain or Shine Roofing is available <strong>24 hours a day Monday through Saturday</strong> and 10 AM to 6 PM on Sunday for emergency roof repair across Springfield, Eugene, and the Oregon Coast. Storm damage, active leaks, and wind damage are top priority &mdash; we tarp and stabilize fast to prevent interior damage.
          </div>
        </details>
        <details class="faq-item">
          <summary>What&rsquo;s the difference between asphalt shingles and TPO roofing?</summary>
          <div class="faq-answer">
            Asphalt shingles are the standard for sloped residential roofs &mdash; affordable, durable in Oregon&rsquo;s wet climate, and available in several colors. TPO (Thermoplastic Polyolefin) is a single-ply membrane used on flat and low-slope roofs, mostly on commercial buildings, shops, and additions. Rain or Shine Roofing installs both and can help you decide which system fits your structure.
          </div>
        </details>
        <details class="faq-item">
          <summary>How long does a full roof replacement take?</summary>
          <div class="faq-answer">
            A typical single-family home tear-off and asphalt shingle replacement in Springfield takes <strong>one to three days</strong>, weather permitting. Larger homes, multi-layer tear-offs, or complex cut-up roofs can take up to a week. We schedule around Oregon&rsquo;s rain windows and protect your property every day work is in progress.
          </div>
        </details>
        <details class="faq-item">
          <summary>Do you provide free estimates?</summary>
          <div class="faq-answer">
            Yes. All estimates from Rain or Shine Roofing are <strong>free and include a full on-site inspection</strong>, written scope of work, material recommendations, and itemized pricing. There&rsquo;s no obligation and no pressure &mdash; just a straight answer on what your roof needs.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Ready to Protect Your Home?</h2>
    <p>Call today and a professional roofer will get back to you right away &mdash; free inspection, written estimate, rain or shine.</p>
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
        Explore All Services
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
