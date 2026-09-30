<?php
$pageConfig = ['theme' => 'blue'];
$featuredReport = [
  'image' => 'assets/imgs/blog-user-insights.jpg',
  'category' => 'FMCG & Retail',
  'title' => 'India FMCG Consumer Sentiment Report 2026',
  'published' => 'Published: January 2026 · Authoritative Field Study',
  'text' => 'A comprehensive analysis of evolving purchase triggers, premiumization trends, and brand loyalty shifts in urban and rural markets across 24 states.'
];
$reports = [
  ['image' => 'assets/imgs/customer-expereince.png', 'category' => 'Healthcare', 'date' => 'Dec 2025', 'title' => 'Digital Health Adoption Across Tier 2 & 3 Cities', 'text' => 'Investigating patient and provider attitudes toward telemedicine and digital prescriptions inside emerging urban centers.'],
  ['image' => 'assets/imgs/blog-environment.jpg', 'category' => 'Financial Services', 'date' => 'Nov 2025', 'title' => 'Financial Services Brand Trust Index', 'text' => 'Tracing trust, security perceptions, and brand health parameters among digital banking users and traditional account holders.'],
  ['image' => 'assets/imgs/blog-data-science.jpg', 'category' => 'Technology', 'date' => 'Oct 2025', 'title' => 'Technology Trends in Workplace Automation', 'text' => 'How enterprises deploy automation and remote collaboration tools while balancing productivity, usability and security.'],
  ['image' => 'assets/imgs/blog-ai-technology.jpg', 'category' => 'Media & Entertainment', 'date' => 'Sep 2025', 'title' => 'Media & Entertainment Consumption Outlook', 'text' => 'Mapping subscriber churn, regional language preferences and ad-tolerance levels across streaming networks.'],
  ['image' => 'assets/imgs/exp2.png', 'category' => 'Real Estate', 'date' => 'Aug 2025', 'title' => 'Real Estate Market Recovery & Buyer Intent', 'text' => 'Measuring home-ownership motivations and spatial preferences of first-time buyers within major metropolitan zones.'],
  ['image' => 'assets/imgs/blog-global-fieldwork.jpg', 'category' => 'FMCG & Retail', 'date' => 'Jul 2025', 'title' => 'E-Commerce Logistics & Consumer Expectations', 'text' => 'Understanding delivery speed trade-offs, package tracking confidence and sustainable container preferences among shoppers.']
];
$industries = ['FMCG & Retail', 'Healthcare', 'Financial Services', 'Technology', 'Media & Entertainment', 'Real Estate'];
$escape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Industry Reports - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css"><link rel="stylesheet" href="css/custom.css">
</head>
<body class="industry-reports-page font-inter text-brand-dark bg-white overflow-x-hidden">
<?php include __DIR__ . '/includes/header.php'; ?>
<main>
  <section class="design-notes-hero bg-brand-blue"><div class="design-notes-hero-inner px-6">
    <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Insights / Industry Reports</p>
    <h1 class="mt-5 text-[52px] md:text-[52px] font-bold leading-[60px] font-helvetica text-white">Industry Reports</h1>
    <p class="mx-auto mt-4 max-w-[620px] text-[13px] leading-[18px] text-white/80">Evidence-backed sector analysis and strategic data. Get deeper context on market<br class="hidden md:block"> movements, consumer trends, and geographic insights.</p>
  </div></section>
  <section class="industry-reports-content"><div class="industry-reports-container">
    <h2 class="industry-section-heading">Featured Report</h2>
    <article class="industry-featured-report">
      <div class="industry-featured-image"><img src="<?= $escape($featuredReport['image']) ?>" alt="Consumer shopping in a retail market" loading="eager"></div>
      <div class="industry-featured-copy">
        <span class="industry-tag"><?= $escape($featuredReport['category']) ?></span>
        <h2><?= $escape($featuredReport['title']) ?></h2>
        <p class="industry-report-meta"><?= $escape($featuredReport['published']) ?></p>
        <p class="industry-featured-summary"><?= $escape($featuredReport['text']) ?></p>
        <a class="industry-download-primary" href="#">Download Full Report </a>
      </div>
    </article>

    <div class="industry-browse-heading"><h2 class="industry-section-heading">Browse by Industry</h2></div>
    <div class="industry-filters tabs-scroll flex gap-2 overflow-x-auto pb-2" role="group" aria-label="Filter reports by industry">
      <button type="button" data-industry-filter="all" aria-pressed="true" class="industry-filter is-active">All</button>
      <?php foreach ($industries as $industry): ?>
        <button type="button" data-industry-filter="<?= $escape($industry) ?>" aria-pressed="false" class="industry-filter"><?= $escape($industry) ?></button>
      <?php endforeach; ?>
    </div>
    <div class="industry-report-grid">
      <?php foreach ($reports as $report): ?>
        <article class="industry-report-card" data-report-industry="<?= $escape($report['category']) ?>">
          <div class="industry-report-image"><img src="<?= $escape($report['image']) ?>" alt="<?= $escape($report['title']) ?>" loading="lazy"></div>
          <div class="industry-report-copy">
            <div class="industry-report-card-meta"><span class="industry-tag"><?= $escape($report['category']) ?></span><time><?= $escape($report['date']) ?></time></div>
            <h3><?= $escape($report['title']) ?></h3><p><?= $escape($report['text']) ?></p>
            <a href="#" class="industry-report-link">Download Report <span aria-hidden="true">&#8250;</span></a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div></section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
(function () {
  var buttons = document.querySelectorAll('[data-industry-filter]');
  var reports = document.querySelectorAll('[data-report-industry]');
  buttons.forEach(function (button) {
    button.addEventListener('click', function () {
      var category = button.dataset.industryFilter;
      buttons.forEach(function (item) { item.classList.toggle('is-active', item === button); item.setAttribute('aria-pressed', item === button ? 'true' : 'false'); });
      reports.forEach(function (report) { report.classList.toggle('hidden', category !== 'all' && report.dataset.reportIndustry !== category); });
    });
  });
})();
</script>
<script src="js/main.js"></script>
</body>
</html>
