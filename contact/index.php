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

          <form action="https://db.pageone.cloud/functions/v1/leads/rain-or-shine-roofing" method="POST" class="contact-form" novalidate>
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

            <!-- spam shield: signed render timestamp + JS interaction signal -->
            <?php $__ft_ts = (string) time(); ?>
            <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'); ?>">
            <input type="hidden" name="_js" value="" class="js-shield-field">
            <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
            <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
            <?php } ?>
            <?php if (empty($GLOBALS['__p1_consent_css'])) { $GLOBALS['__p1_consent_css'] = 1; ?>
            <style>
            .p1-consent{margin:14px 0;text-align:left}
            .p1-consent-set{border:0;margin:0;padding:0}
            .p1-consent-legend{font-size:13px;font-weight:600;padding:0;margin-bottom:6px}
            .p1-consent-item{display:flex;gap:8px;align-items:flex-start;margin-bottom:8px;font-size:12px;line-height:1.5;cursor:pointer}
            .p1-consent-item input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
            .p1-consent-line{display:flex;gap:8px;align-items:flex-start;font-size:12px;line-height:1.45;cursor:pointer}
            .p1-consent-line input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
            .p1-consent a{text-decoration:underline}
            </style>
            <?php } ?>
            <!-- TCPA 2025/2026 consent — terms_accepted is REQUIRED by the leads endpoint -->
            <div class="p1-consent">
              <fieldset class="p1-consent-set">
                <legend class="p1-consent-legend">Communication Consent</legend>
                <label class="p1-consent-item">
                  <input type="checkbox" name="email_opt_in" value="yes">
                  <span><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName ?? ($site['name'] ?? 'us')); ?>
                  about my inquiry, services, and promotions. I can unsubscribe at any time.</span>
                </label>
                <label class="p1-consent-item">
                  <input type="checkbox" name="sms_opt_in" value="yes">
                  <span><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                  <?php echo htmlspecialchars($siteName ?? ($site['name'] ?? 'us')); ?> at the number provided (appointment reminders, service updates, offers).
                  Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe,
                  HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                </label>
                <label class="p1-consent-item">
                  <input type="checkbox" name="terms_accepted" value="yes" required>
                  <span>I have read and agree to the Terms of Service and Privacy Policy *</span>
                </label>
              </fieldset>
            </div>
            <input type="hidden" name="_consent_version" value="v2.1">
            <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? ''); ?>">
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
