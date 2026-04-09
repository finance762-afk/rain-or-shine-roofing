<?php
/**
 * 404 — Rain or Shine Roofing
 */
http_response_code(404);
$pageTitle       = "Page Not Found | Rain or Shine Roofing";
$pageDescription = "The page you're looking for isn't here. Head back to Rain or Shine Roofing — Springfield, OR roofing contractor.";
$canonicalUrl    = "https://rainorshine-roofing.com/";
$ogImage         = "https://i.imgur.com/TcjRAxN.png";
$currentPage     = "404";
$heroImage       = "";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <section class="error-section">
    <div class="container">
      <div class="error-inner">
        <div class="error-code">404</div>
        <h1>Looks Like This Page Blew Off in an Oregon Windstorm</h1>
        <p>We searched the decking and couldn&rsquo;t find it. The page you&rsquo;re looking for doesn&rsquo;t exist, has moved, or was never up there to begin with.</p>
        <p>Try one of these instead &mdash; or just give Tim a call.</p>

        <div class="error-links">
          <a href="/" class="btn-primary">
            <i data-lucide="home" width="18" height="18" aria-hidden="true"></i>
            Back to Home
          </a>
          <a href="/services" class="btn-secondary">
            <i data-lucide="hammer" width="18" height="18" aria-hidden="true"></i>
            Our Services
          </a>
          <a href="/contact" class="btn-secondary">
            <i data-lucide="phone" width="18" height="18" aria-hidden="true"></i>
            Contact Us
          </a>
        </div>

        <div class="error-phone">
          <span>Or call Tim directly:</span>
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
