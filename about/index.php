<?php
/**
 * About — Rain or Shine Roofing
 */
$pageTitle       = "About Rain or Shine Roofing | Tim Davis, Owner | Springfield, OR";
$pageDescription = "Meet Tim Davis, owner of Rain or Shine Roofing in Springfield, OR. Licensed, insured, and owner-operated roofing contractor serving Oregon's I-5 corridor and coast 24/6. Free estimates.";
$canonicalUrl    = "https://rainorshine-roofing.com/about";
$ogImage         = "https://i.imgur.com/bq3osMY.png";
$currentPage     = "about";
$heroImage       = "https://i.imgur.com/bq3osMY.png";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "About", "item": "https://rainorshine-roofing.com/about" }
      ]
    },
    {
      "@type": "Organization",
      "@id": "https://rainorshine-roofing.com/#organization",
      "name": "Rain or Shine Roofing",
      "url": "https://rainorshine-roofing.com/",
      "logo": "https://i.imgur.com/KunCdx5.png",
      "telephone": "+1-541-606-3306",
      "email": "tim@expertroofer.net",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Springfield",
        "addressRegion": "OR",
        "addressCountry": "US"
      },
      "founder": {
        "@type": "Person",
        "name": "Tim Davis"
      },
      "description": "Owner-operated roofing contractor based in Springfield, Oregon, serving a 100-mile radius across the I-5 corridor and Oregon Coast. Residential and commercial roofing, tear-offs, rot repair, and seamless gutters."
    },
    {
      "@type": "Person",
      "@id": "https://rainorshine-roofing.com/about#tim-davis",
      "name": "Tim Davis",
      "jobTitle": "Founder & Lead Roofer",
      "worksFor": { "@id": "https://rainorshine-roofing.com/#organization" },
      "image": "https://i.imgur.com/bq3osMY.png",
      "description": "Owner and lead roofer at Rain or Shine Roofing in Springfield, Oregon. Nearly two decades of residential and commercial roofing experience across the Pacific Northwest."
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
  <section class="page-hero" style="background-image: linear-gradient(135deg, rgba(11,23,52,0.88) 0%, rgba(0,45,122,0.74) 60%, rgba(0,71,187,0.62) 100%), url('https://i.imgur.com/bq3osMY.png');">
    <div class="page-hero-inner">
      <span class="eyebrow-label">Owner-Operated Since Day One</span>
      <h1>About Rain or Shine Roofing</h1>
      <p class="lead">Tim Davis runs Rain or Shine Roofing out of Springfield, Oregon &mdash; an owner-operated roofing contractor covering a 100-mile radius of the I-5 corridor and the Oregon Coast, 24 hours a day, six days a week.</p>
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
          <li aria-current="page">About</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== IDENTITY SENTENCE / INTRO ========== -->
  <section>
    <div class="container">
      <div class="prose-centered">
        <h2>A Local Oregon Roofer with a 100-Mile Reach</h2>
        <p>Rain or Shine Roofing is a licensed and insured roofing company based in Springfield, Oregon, founded and operated by Tim Davis. Tim and his crew install, replace, and repair residential and commercial roofs across Eugene, the I-5 corridor from Albany to Roseburg, and Oregon Coast communities from Florence to Coos Bay &mdash; all within a 100-mile radius of Springfield.</p>
        <p>Every project starts with a free on-site inspection and a written estimate. No pressure, no sales pitch, no surprise line items after the job starts. Just a roofer who shows up when he says he will, does the work he wrote down, and stands behind it when the weather turns.</p>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — TIM'S STORY ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/bq3osMY.png" alt="Tim Davis, owner of Rain or Shine Roofing, working on a residential roof in Springfield Oregon" width="900" height="700" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label">Meet the Owner</span>
          <h2 class="section-title">Tim Davis &mdash; On Every Job, Every Day</h2>
          <p class="section-subtitle">Nearly two decades on Oregon roofs, and the same rule on day one as today: treat every roof like it&rsquo;s going on my own house.</p>
          <p>Tim Davis founded Rain or Shine Roofing with a simple idea: homeowners and business owners deserve a roofer who actually shows up on the roof. Not a salesperson in a polo shirt, not a project manager you&rsquo;ll never meet twice &mdash; the owner, with his tools, climbing the same ladder as his crew.</p>
          <p>That&rsquo;s how Rain or Shine has operated from the first job to the most recent. Tim inspects every roof, writes every estimate, and runs every installation. When you call (541) 606-3306, you&rsquo;re talking to the person who will be standing on your roof &mdash; not a call center.</p>
          <div class="owner-sig">
            <strong>Tim Davis</strong>
            <span>Owner &amp; Lead Roofer &middot; CCB #198825</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT REVERSE — THE WORK ========== -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div class="img-reveal">
          <img src="https://i.imgur.com/yX4DOpF.png" alt="Completed residential roof replacement by Rain or Shine Roofing in Lane County Oregon" width="900" height="700" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label">The Work We Do</span>
          <h2 class="section-title">Steep Pitch, Flat Roof, and Everything in Between</h2>
          <p class="section-subtitle">From 4/12 ranch-style shingle roofs to 12/12 Craftsman cut-ups to commercial TPO flat systems &mdash; Tim&rsquo;s crew handles the full range.</p>
          <p>Residential roofing makes up most of the work. Tim&rsquo;s crew installs asphalt shingles on every pitch Oregon throws at them, including the steep, complex, multi-plane roofs that most crews charge extra for and still get wrong. On the commercial side, Rain or Shine installs TPO single-ply membrane systems for flat and low-slope buildings &mdash; shops, warehouses, additions, and multi-unit properties.</p>
          <p>And when a roof has rot? Tim&rsquo;s crew doesn&rsquo;t slap shingles over damaged decking and hope for the best. They tear out the rotted sheathing, fix the moisture source &mdash; whether that&rsquo;s a flashing failure, a ventilation gap, or a leaking penetration &mdash; and rebuild the assembly the right way so it doesn&rsquo;t come back.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WHAT SETS US APART ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-header">
        <span class="eyebrow-label">What Sets Rain or Shine Apart</span>
        <h2>Five Reasons Homeowners Keep Calling Back</h2>
      </div>
      <div class="grid-3" data-animate>
        <div class="card">
          <span class="card-icon"><i data-lucide="clock" width="28" height="28" aria-hidden="true"></i></span>
          <h3>24-Hour Emergency Response</h3>
          <p>Monday through Saturday, open 24 hours. Active leak, storm damage, or wind-lifted shingles? We tarp, stabilize, and secure the roof before interior damage spreads.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="mountain" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Steep and Flat Pitch Expertise</h3>
          <p>Residential shingle roofs from 4/12 to 12/12 and beyond. Commercial TPO flat and low-slope systems. One crew, two disciplines, zero subcontracting out the hard parts.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="wrench" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Roof Rot Specialists</h3>
          <p>When decking is rotten, we tear it out, fix the moisture source, and rebuild. No patch-and-pray, no covering the problem so it surfaces again in two winters.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="droplets" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Seamless Gutters On-Site</h3>
          <p>Aluminum gutters fabricated in your driveway in 36 color options. Custom-cut to the exact run, sloped for Oregon rainfall, hung with hidden hangers.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="map-pin" width="28" height="28" aria-hidden="true"></i></span>
          <h3>100-Mile Service Radius</h3>
          <p>Springfield to the coast, Albany to Roseburg. We cover the I-5 corridor and Oregon Coast from one Springfield yard &mdash; no franchise, no markup for travel.</p>
        </div>
        <div class="card">
          <span class="card-icon"><i data-lucide="badge-check" width="28" height="28" aria-hidden="true"></i></span>
          <h3>Free Written Estimates</h3>
          <p>Every project, every time. On-site inspection, itemized scope, material recommendations, and a clear written number &mdash; before a hammer comes out of the truck.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FINISHED WORK — SPLIT ========== -->
  <section>
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/dbzzO8P.png" alt="Completed Rain or Shine Roofing project showing new asphalt shingle roof on Oregon home" width="900" height="700" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label">The Rain or Shine Standard</span>
          <h2 class="section-title">Finished the Right Way &mdash; Every Time</h2>
          <p class="section-subtitle">Oregon weather is unforgiving. A roof that looks finished isn&rsquo;t the same as a roof that performs in February.</p>
          <p>Every Rain or Shine install follows the same standard: synthetic underlayment, ice-and-water shield at eaves and penetrations, proper drip edge and flashing, ridge ventilation to match the soffit intake, and manufacturer-approved fasteners. The details that water finds in a Pacific Northwest winter are the ones we get right on the dry days.</p>
          <p>Cleanup is the same story. Magnetic nail sweeps, gutter checks, property walk-throughs, and warranty paperwork handed over in person at the end of the job. The kitchen is the last place we stand before we leave.</p>
          <p><a href="/service-area" class="btn-secondary" style="margin-top: var(--space-md);">
            <i data-lucide="map" width="16" height="16" aria-hidden="true"></i>
            View Our Service Area
          </a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Put a Local Roofer on the Job</h2>
    <p>Springfield, Eugene, the I-5 corridor, and the Oregon Coast. Free estimates, honest answers, and a crew that stands behind the work when the weather turns.</p>
    <a href="tel:+15416063306" class="cta-phone">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
    <div class="cta-buttons">
      <a href="/contact" class="btn-primary on-dark">
        <i data-lucide="clipboard-check" width="18" height="18" aria-hidden="true"></i>
        Request a Free Estimate
      </a>
      <a href="/services" class="btn-secondary on-dark">
        Explore Our Services
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
