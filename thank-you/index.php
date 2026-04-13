<?php
/**
 * Thank You — Rain or Shine Roofing
 */
$pageTitle       = "Thank You | Rain or Shine Roofing";
$pageDescription = "Thanks for reaching out to Rain or Shine Roofing. Tim will get back to you shortly.";
$canonicalUrl    = "https://rainorshine-roofing.com/thank-you";
$ogImage         = "https://i.imgur.com/TcjRAxN.png";
$currentPage     = "thank-you";
$heroImage       = "";
$noindex         = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <section class="error-section">
    <div class="container">
      <div class="error-inner">
        <img src="https://i.imgur.com/KunCdx5.png" alt="Rain or Shine Roofing logo" style="max-height:80px;width:auto;margin-bottom:var(--space-md);" width="200" height="80" loading="eager">
        <div class="thank-you-icon">
          <i data-lucide="check-circle-2" width="96" height="96" aria-hidden="true"></i>
        </div>
        <h1>Thanks for Reaching Out!</h1>
        <p>Your message is on its way to Tim. He&rsquo;ll get back to you shortly &mdash; usually the same day on weekdays.</p>
        <p>In the meantime, feel free to look around the site or call directly if it&rsquo;s urgent.</p>

        <div class="error-links">
          <a href="/" class="btn-primary">
            <i data-lucide="home" width="18" height="18" aria-hidden="true"></i>
            Back to Home
          </a>
          <a href="/services" class="btn-secondary">
            <i data-lucide="hammer" width="18" height="18" aria-hidden="true"></i>
            Our Services
          </a>
        </div>

        <div class="error-phone">
          <span>Need immediate help?</span>
          <a href="tel:+15416063306">
            <i data-lucide="phone" width="24" height="24" aria-hidden="true"></i>
            (541) 606-3306
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
