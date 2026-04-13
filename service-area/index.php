<?php
/**
 * Service Area — Rain or Shine Roofing
 */
$pageTitle       = "Roofing Service Area | Willamette Valley & Oregon Coast | Rain or Shine";
$pageDescription = "Rain or Shine Roofing serves the Eugene-Springfield area, the Willamette Valley, and the Oregon Coast within a 100-mile radius. Residential & commercial roofing. Call (541) 606-3306.";
$canonicalUrl    = "https://rainorshine-roofing.com/service-area";
$ogImage         = "https://i.imgur.com/TcjRAxN.png";
$currentPage     = "service-area";
$heroImage       = "https://i.imgur.com/TcjRAxN.png";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "Service Area", "item": "https://rainorshine-roofing.com/service-area" }
      ]
    },
    {
      "@type": "RoofingContractor",
      "@id": "https://rainorshine-roofing.com/service-area#business",
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
  <section class="page-hero" style="background-image: linear-gradient(135deg, rgba(11,23,52,0.88) 0%, rgba(0,45,122,0.74) 60%, rgba(0,71,187,0.62) 100%), url('https://i.imgur.com/TcjRAxN.png');">
    <div class="page-hero-inner">
      <span class="eyebrow-label">Willamette Valley &middot; Oregon Coast &middot; 100-Mile Radius</span>
      <h1>Roofing Service Area &mdash; Willamette Valley &amp; Oregon Coast</h1>
      <p class="lead">Rain or Shine Roofing serves the Eugene-Springfield area, the Willamette Valley from Albany to Roseburg, and the Oregon Coast within a 100-mile radius of Springfield.</p>
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
          <li aria-current="page">Service Area</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== ANSWER-FIRST INTRO ========== -->
  <section>
    <div class="container">
      <div class="prose-centered">
        <h2>Where We Roof</h2>
        <p>Rain or Shine Roofing provides residential and commercial roofing services in Springfield, Oregon and a <strong>100-mile radius</strong> that covers Eugene, Cottage Grove, Roseburg, Albany, Corvallis, Lebanon, Sweet Home, and Oregon Coast communities including Florence, Reedsport, Newport, Lincoln City, and Coos Bay. From our Springfield yard, our crew reaches the entire southern Willamette Valley, the I-5 corridor, and the Central Oregon Coast in a single workday.</p>
        <p>Tim founded Rain or Shine Roofing to give Oregon homeowners and business owners access to a real local contractor &mdash; one who knows coastal wind patterns, Cascade foothill snow loads, and valley moss problems. Every job in our service area gets the same treatment: on-site inspection, written estimate, and a crew that shows up rain or shine.</p>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — OREGON COVERAGE ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/yX4DOpF.png" alt="Rain or Shine Roofing completed roof project in the Oregon Willamette Valley" width="900" height="700" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label">From the I-5 Corridor to the Coast</span>
          <h2 class="section-title">One Crew, Three Regions</h2>
          <p class="section-subtitle">Rain or Shine Roofing covers three distinct Oregon climates &mdash; and each one puts different demands on a roof.</p>
          <p>In the <strong>southern Willamette Valley</strong>, we handle moss-heavy roofs, long wet stretches, and the complex cut-up rooflines that make up so many Eugene and Springfield homes. Along the <strong>I-5 corridor</strong> from Albany to Roseburg, we work on everything from mid-century ranches to modern two-story builds and commercial flat-roof warehouses. And on the <strong>Oregon Coast</strong>, we build for salt air, sustained wind, and horizontal rain &mdash; using fasteners, underlayments, and flashing details made for the punishment coastal roofs actually take.</p>
          <p>Every project starts with a drive out, a free inspection, and a written estimate. No travel surcharges for coastal jobs, no &ldquo;we don&rsquo;t go that far&rdquo; runaround. If you&rsquo;re inside the 100-mile radius, you&rsquo;re on the route.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CITIES GRID ========== -->
  <section>
    <div class="container">
      <div class="section-header">
        <span class="eyebrow-label">Cities &amp; Communities</span>
        <h2>Oregon Cities We Serve</h2>
        <p>A complete list of the cities and communities inside Rain or Shine&rsquo;s 100-mile Springfield service radius.</p>
      </div>
      <div class="grid-3" data-animate>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Springfield, OR</h3>
          <p>Home base. Residential and commercial roofing across every Springfield neighborhood &mdash; from Thurston to Gateway to Mohawk.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Eugene, OR</h3>
          <p>The second-biggest chunk of our work. Asphalt shingle re-roofs, steep-pitch specialty builds, and flat TPO commercial systems throughout Eugene.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Cottage Grove, OR</h3>
          <p>South-Lane County roofing for homes and small businesses along the I-5 corridor between Eugene and Roseburg.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Roseburg, OR</h3>
          <p>Douglas County roof work on single-family homes, multi-unit rentals, and commercial buildings throughout the Umpqua Valley.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Albany, OR</h3>
          <p>Linn County residential and commercial roof installations, including historic home re-roofs and flat-roof commercial updates.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Corvallis, OR</h3>
          <p>Benton County residential roofing, including the steep cut-ups around the Oregon State University area and rural outlying homes.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Lebanon, OR</h3>
          <p>Full-service roofing throughout Lebanon and the surrounding foothill communities &mdash; shingles, tear-offs, and rot repair.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Sweet Home, OR</h3>
          <p>Cascade foothill roofing on homes built for snow loads, heavy rain runoff, and tree-canopy moss pressure.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Florence, OR</h3>
          <p>Coastal roofing built for salt air and sustained ocean winds. Upgraded fasteners and coastal-rated underlayment standard.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Reedsport, OR</h3>
          <p>Southern Oregon Coast roofing for homes and businesses in Reedsport and the lower Umpqua region &mdash; coastal-rated materials and fasteners standard.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Newport, OR</h3>
          <p>Lincoln County residential and commercial roofing in one of the wettest stretches of the Oregon Coast.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Lincoln City, OR</h3>
          <p>Vacation homes, rentals, and full-time coastal residences &mdash; we roof them all with materials built to handle the salt and the wind.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="26" height="26" aria-hidden="true"></i></span>
          <h3>Coos Bay, OR</h3>
          <p>South Coast residential and commercial roofing within the 100-mile Rain or Shine service radius.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SERVICES IN AREA ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-header">
        <span class="eyebrow-label">All Services Available Area-Wide</span>
        <h2>Every Rain or Shine Service, Throughout the Service Area</h2>
        <p>The same full scope of roofing work is available in every city we cover &mdash; no reduced menu for outlying jobs.</p>
      </div>
      <div class="related-grid">
        <a href="/services/residential-roofing" class="related-card">
          <span class="related-icon"><i data-lucide="home" width="22" height="22" aria-hidden="true"></i></span>
          <div>
            <h3>Residential Roofing</h3>
            <span>View Details &rarr;</span>
          </div>
        </a>
        <a href="/services/commercial-roofing" class="related-card">
          <span class="related-icon"><i data-lucide="building-2" width="22" height="22" aria-hidden="true"></i></span>
          <div>
            <h3>Commercial Roofing</h3>
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
        <a href="/services/tpo-flat-roofing" class="related-card">
          <span class="related-icon"><i data-lucide="square" width="22" height="22" aria-hidden="true"></i></span>
          <div>
            <h3>TPO Flat Roofing</h3>
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
    </div>
  </section>

  <!-- ========== MAP ========== -->
  <section>
    <div class="container">
      <div class="section-header">
        <span class="eyebrow-label">Coverage Map</span>
        <h2>Centered on Springfield, Oregon</h2>
        <p>Our base of operations in Springfield puts the entire southern Willamette Valley, I-5 corridor, and Central Oregon Coast inside a single workday&rsquo;s drive.</p>
      </div>
      <div class="map-embed">
        <iframe
          src="https://www.google.com/maps?q=Springfield,+OR&output=embed"
          width="100%"
          height="450"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Map of Rain or Shine Roofing service area centered on Springfield, Oregon"></iframe>
      </div>
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Inside the 100-Mile Radius? We&rsquo;re Ready.</h2>
    <p>Call today and a professional roofer will get back to you right away &mdash; detailed written proposal, and a crew that shows up rain or shine.</p>
    <a href="tel:+15416063306" class="cta-phone">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
    <div class="cta-buttons">
      <a href="tel:+15416063306" class="btn-primary on-dark">
        <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
        Call Now &mdash; Free Estimates
      </a>
      <a href="/about" class="btn-secondary on-dark">
        Meet Tim
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
