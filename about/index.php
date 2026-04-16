<?php
/**
 * About — Rain or Shine Roofing
 */
$pageTitle       = "About Rain or Shine Roofing | Tim, Owner | Springfield, OR";
$pageDescription = "Meet Tim, owner of Rain or Shine Roofing in Springfield, OR. Licensed, insured, and owner-operated roofing contractor serving Oregon's I-5 corridor and coast 24/6. Free estimates.";
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
        "name": "Tim"
      },
      "description": "Owner-operated roofing contractor based in Springfield, Oregon (Oregon State Contractor License #158625), serving a 100-mile radius across the Eugene-Springfield area, the Willamette Valley, and the Oregon Coast. Residential and commercial roofing, tear-offs, and rot repair. Veteran-owned and operated.",
      "license": "OR #158625"
    },
    {
      "@type": "Person",
      "@id": "https://rainorshine-roofing.com/about#tim",
      "name": "Tim",
      "jobTitle": "Founder & Lead Roofer",
      "worksFor": { "@id": "https://rainorshine-roofing.com/#organization" },
      "image": "https://i.imgur.com/bq3osMY.png",
      "description": "Owner and lead roofer at Rain or Shine Roofing in Springfield, Oregon. Over 30 years of residential and commercial roofing experience, specializing in low-slope roofing and architectural fiberglass installation across the Pacific Northwest."
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
      "license": "OR #158625",
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
      <img src="https://i.imgur.com/KunCdx5.png" alt="Rain or Shine Roofing logo" style="max-height:80px;width:auto;margin-bottom:var(--space-md);" width="200" height="80" loading="eager">
      <span class="eyebrow-label">Owner-Operated Since Day One</span>
      <h1>About Rain or Shine Roofing</h1>
      <p class="lead">Tim runs Rain or Shine Roofing out of Springfield, Oregon &mdash; an owner-operated roofing contractor covering the Eugene-Springfield area, the Willamette Valley, and the Oregon Coast, 24 hours a day, six days a week.</p>
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
        <p>Rain or Shine Roofing is a licensed and insured roofing company based in Springfield, Oregon (Oregon State Contractor License #158625), founded and operated by Tim. Tim and his crew install, replace, and repair residential and commercial roofs across the Eugene-Springfield area, the Willamette Valley from Albany to Roseburg, and Oregon Coast communities from Florence to Coos Bay &mdash; all within a 100-mile radius of Springfield.</p>
        <p>Every project starts with a free on-site inspection and a written estimate. No pressure, no sales pitch, no surprise line items after the job starts. Just a roofer who shows up when he says he will, does the work he wrote down, and stands behind it when the weather turns.</p>
      </div>
    </div>
  </section>

  <!-- ========== SPLIT — TIM'S STORY ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="img-reveal">
          <img src="https://i.imgur.com/QqH4mn0.jpeg" alt="Tim, owner of Rain or Shine Roofing, Springfield Oregon" width="900" height="700" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label">Meet the Owner</span>
          <h2 class="section-title">Tim &mdash; On Every Job, Every Day</h2>
          <p class="section-subtitle">Over 30 years on Oregon roofs, and the same rule on day one as today: treat every roof like it&rsquo;s going on my own house.</p>
          <p>A U.S. military veteran, Tim founded Rain or Shine Roofing with a simple idea: homeowners and business owners deserve a roofer who actually shows up on the roof. Veteran-owned and operated from day one. Not a salesperson in a polo shirt, not a project manager you&rsquo;ll never meet twice &mdash; the owner, with his tools, climbing the same ladder as his crew.</p>
          <p>That&rsquo;s how Rain or Shine has operated from the first job to the most recent. Tim inspects every roof, writes every estimate, and runs every installation. When you call (541) 606-3306, you&rsquo;re talking to the person who will be standing on your roof &mdash; not a call center.</p>
          <div class="owner-sig">
            <strong>Tim</strong>
            <span>Owner &amp; Lead Roofer &middot; Oregon State Contractor License #158625</span>
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
          <p class="section-subtitle">With over 30 years specializing in low-slope roofing and all-pitch architectural fiberglass installation, Tim&rsquo;s crew handles the full range &mdash; from 4/12 ranch-style builds to 12/12 Craftsman cut-ups to commercial TPO flat systems.</p>
          <p>Residential roofing makes up most of the work. Tim&rsquo;s crew installs Malarkey architectural laminated fiberglass shingles on every pitch Oregon throws at them, including the steep, complex, multi-plane roofs that most crews charge extra for and still get wrong. On the commercial side, Rain or Shine installs TPO single-ply membrane systems for flat and low-slope buildings &mdash; shops, warehouses, additions, and multi-unit properties.</p>
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
          <span class="card-icon"><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/flag-icon.php'; ?></span>
          <h3>Veteran-Owned Business</h3>
          <p>Tim is a U.S. military veteran. Rain or Shine Roofing is veteran-owned and operated &mdash; bringing the same discipline, reliability, and commitment to every job.</p>
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
          <img src="https://i.imgur.com/sfxIMf3.jpeg" alt="Tim standing on a roof mid-install during a Willamette Valley project" width="900" height="1100" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label">The Rain or Shine Standard</span>
          <h2 class="section-title">Finished the Right Way &mdash; Every Time</h2>
          <p class="section-subtitle">Oregon weather is unforgiving. A roof that looks finished isn&rsquo;t the same as a roof that performs in February.</p>
          <p>Every Rain or Shine install follows the same standard: synthetic underlayment, ice-and-water shield at eaves and penetrations, proper drip edge and flashing, ridge ventilation to match the soffit intake, and manufacturer-approved fasteners. The details that water finds in a Pacific Northwest winter are the ones we get right on the dry days.</p>
          <p>Cleanup is the same story. Magnetic nail sweeps, a final property walk-through, and a face-to-face handoff at the end of the job &mdash; so the last thing you see is the same roofer who walked the property on day one.</p>
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
    <p>Call today and a professional roofer will get back to you right away. Free estimates across the Eugene-Springfield area, the Willamette Valley, and the Oregon Coast &mdash; rain or shine.</p>
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
        Explore Our Services
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
