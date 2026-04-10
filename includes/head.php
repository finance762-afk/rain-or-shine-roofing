<?php
/**
 * head.php — shared <head> for all pages
 *
 * Expected variables (set in each page before including):
 *   $pageTitle       (required)
 *   $pageDescription (required)
 *   $canonicalUrl    (required)
 *   $ogImage         (required)
 *   $currentPage     (required)
 *   $schemaMarkup    (optional — raw JSON-LD string)
 *   $heroImage       (optional — preloaded if present)
 *   $useSwiper       (optional bool — loads Swiper CSS)
 *   $useTilt         (optional bool — for footer decision later)
 *   $useTyped        (optional bool — for footer decision later)
 */
$siteName = 'Rain or Shine Roofing';
$siteUrl  = 'https://rainorshine-roofing.com';
$pageTitle       = $pageTitle       ?? $siteName;
$pageDescription = $pageDescription ?? '';
$canonicalUrl    = $canonicalUrl    ?? $siteUrl;
$ogImage         = $ogImage         ?? $siteUrl . '/assets/images/og-default.jpg';
$currentPage     = $currentPage     ?? '';
$schemaMarkup    = $schemaMarkup    ?? '';
$heroImage       = $heroImage       ?? '';
$useSwiper       = $useSwiper       ?? false;
$noindex         = $noindex         ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<?php if ($noindex): ?>
<meta name="robots" content="noindex, nofollow">
<?php else: ?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
<?php endif; ?>

<!-- Open Graph -->
<meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
<meta property="og:locale" content="en_US">

<!-- Favicon placeholder (replace with real assets in Phase 2) -->
<link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">

<!-- Preconnect / DNS-prefetch -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://unpkg.com">
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
<link rel="dns-prefetch" href="https://www.google-analytics.com">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">

<!-- Google Fonts — Oswald (industrial heading) + Source Sans 3 (readable body) -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Heading font preload — Oswald 700 -->
<link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fz8Ghe4.woff2" crossorigin>

<!-- Lucide Icons are loaded via footer script (UMD) -->

<?php if ($useSwiper): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<?php endif; ?>

<!-- Site stylesheet (cache-busted) -->
<link rel="stylesheet" href="/assets/css/styles.css?v=7">

<?php if (!empty($heroImage)): ?>
<link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImage); ?>">
<?php endif; ?>

<!-- GA4 placeholder — replace G-XXXXXXXXXX with real ID after deploy -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXXXX');
</script>

<?php if ($currentPage === 'home'): ?>
<!-- Google Search Console verification (homepage only) — replace token after deploy -->
<meta name="google-site-verification" content="REPLACE_WITH_GSC_TOKEN">
<?php endif; ?>

<?php if (!empty($schemaMarkup)): ?>
<script type="application/ld+json">
<?php echo $schemaMarkup; ?>
</script>
<?php endif; ?>
</head>
<body>
<a class="skip-link" href="#main-content">Skip to main content</a>
