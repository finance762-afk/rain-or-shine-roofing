<?php
/**
 * Contact — Rain or Shine Roofing
 */
$pageTitle       = "Contact Rain or Shine Roofing | Springfield, OR | (541) 606-3306";
$pageDescription = "Contact Rain or Shine Roofing in Springfield, OR for a free roof estimate. Call (541) 606-3306 or request a written quote. Available 24 hours Mon–Sat, 10 AM–6 PM Sunday.";
$canonicalUrl    = "https://rainorshine-roofing.com/contact";
$ogImage         = "https://i.imgur.com/TcjRAxN.png";
$currentPage     = "contact";
$heroImage       = "https://i.imgur.com/TcjRAxN.png";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://rainorshine-roofing.com/" },
        { "@type": "ListItem", "position": 2, "name": "Contact", "item": "https://rainorshine-roofing.com/contact" }
      ]
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
      <img src="https://i.imgur.com/KunCdx5.png" alt="Rain or Shine Roofing logo" style="max-height:80px;width:auto;margin-bottom:var(--space-md);" width="200" height="80" loading="eager">
      <span class="eyebrow-label">Free Estimates. No Pressure.</span>
      <h1>Contact Rain or Shine Roofing</h1>
      <p class="lead">Calling is the fastest way to reach us &mdash; Tim answers his own phone. Call (541) 606-3306 for a free on-site inspection and written proposal, and a professional roofer will get back to you right away.</p>
      <div class="page-hero-ctas">
        <a href="tel:+15416063306" class="btn-primary">
          <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
          Call (541) 606-3306
        </a>
        <a href="mailto:tim@expertroofer.net" class="btn-secondary on-dark">
          <i data-lucide="mail" width="18" height="18" aria-hidden="true"></i>
          Email Tim
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
          <li aria-current="page">Contact</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ========== CONTACT GRID — FORM + INFO ========== -->
  <section>
    <div class="container">
      <div class="grid-2 contact-grid">

        <!-- ---- FORM ---- -->
        <div>
          <span class="eyebrow-label">Request a Free Estimate</span>
          <h2 class="section-title">Tell Us About Your Roof</h2>
          <p class="section-subtitle">Send a quick message with the details and Tim will follow up with scheduling and next steps. Same-day response on weekdays.</p>

          <form action="https://formsubmit.co/tim@expertroofer.net" method="POST" class="contact-form" novalidate>
            <input type="hidden" name="_next" value="https://rainorshine-roofing.com/thank-you">
            <input type="hidden" name="_captcha" value="false">
            <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_subject" value="New Lead from Rain or Shine Roofing Website">
            <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

            <div class="form-group">
              <input type="text" id="name" name="name" placeholder=" " required autocomplete="name">
              <label for="name">Your Name</label>
            </div>

            <div class="form-group">
              <input type="tel" id="phone" name="phone" placeholder=" " required autocomplete="tel">
              <label for="phone">Phone Number</label>
            </div>

            <div class="form-group">
              <input type="email" id="email" name="email" placeholder=" " required autocomplete="email">
              <label for="email">Email Address</label>
            </div>

            <div class="form-group">
              <select id="service" name="service" required>
                <option value="" disabled selected hidden></option>
                <option value="Residential Roofing">Residential Roofing</option>
                <option value="Commercial Roofing">Commercial Roofing</option>
                <option value="Asphalt Shingles">Asphalt Shingles</option>
                <option value="TPO Flat Roofing">TPO Flat Roofing</option>
                <option value="Roof Tear-Off &amp; Replacement">Roof Tear-Off &amp; Replacement</option>
                <option value="Roof Rot Repair">Roof Rot Repair</option>
                <option value="Other">Other</option>
              </select>
              <label for="service">Service Needed</label>
            </div>

            <div class="form-group">
              <textarea id="message" name="message" placeholder=" " rows="5" required></textarea>
              <label for="message">Tell Us About Your Project</label>
            </div>

            <button type="submit" class="btn-primary">
              <i data-lucide="send" width="18" height="18" aria-hidden="true"></i>
              Send My Request
            </button>
          </form>
        </div>

        <!-- ---- CONTACT INFO ---- -->
        <div>
          <span class="eyebrow-label">Reach Us Direct</span>
          <h2 class="section-title">Call, Email, or Stop By</h2>
          <p class="section-subtitle">Rain or Shine Roofing is based in Springfield, Oregon (Oregon State Contractor License #158625) and serves the Eugene-Springfield area, the Willamette Valley, and the Oregon Coast. Every project begins with a thorough inspection and a detailed written proposal &mdash; so you know exactly what to expect before any work starts.</p>

          <ul class="contact-info">
            <li>
              <span class="contact-icon"><i data-lucide="phone" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Phone</h4>
                <a href="tel:+15416063306">(541) 606-3306</a>
              </div>
            </li>
            <li>
              <span class="contact-icon"><i data-lucide="mail" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Email</h4>
                <a href="mailto:tim@expertroofer.net">tim@expertroofer.net</a>
              </div>
            </li>
            <li>
              <span class="contact-icon"><i data-lucide="map-pin" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Location</h4>
                <p>Springfield, OR</p>
              </div>
            </li>
            <li>
              <span class="contact-icon"><i data-lucide="clock" width="22" height="22" aria-hidden="true"></i></span>
              <div>
                <h4>Hours</h4>
                <p>Mon&ndash;Sat: Open 24 Hours<br>Sunday: 10 AM&ndash;6 PM</p>
              </div>
            </li>
          </ul>

          <div class="answer-block">
            <h3>Active leak or storm damage?</h3>
            <p>Call (541) 606-3306 anytime. We answer emergency roofing calls around the clock Monday through Saturday across Springfield, Eugene, and the Oregon Coast.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========== MAP ========== -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-header">
        <span class="eyebrow-label">Find Us</span>
        <h2>Based in Springfield, Oregon</h2>
        <p>Serving homeowners and businesses across a 100-mile radius &mdash; from the Oregon Coast to the I-5 corridor.</p>
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
          title="Map of Springfield, Oregon &mdash; Rain or Shine Roofing service area"></iframe>
      </div>
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta">
    <h2>Rain or Shine, We&rsquo;re Ready</h2>
    <p>Call today and a professional roofer will get back to you right away &mdash; straight answers, a detailed written proposal, and a Springfield roofer who actually shows up.</p>
    <a href="tel:+15416063306" class="cta-phone">
      <i data-lucide="phone" width="28" height="28" aria-hidden="true"></i>
      (541) 606-3306
    </a>
    <div class="cta-buttons">
      <a href="tel:+15416063306" class="btn-primary on-dark">
        <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
        Call Now &mdash; Free Estimates
      </a>
      <a href="/service-area" class="btn-secondary on-dark">
        Service Area
      </a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
