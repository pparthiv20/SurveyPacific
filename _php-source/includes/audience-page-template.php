<?php
$audiencePages = require __DIR__ . '/audience-content.php';
$audience = $audiencePages[$audienceKey] ?? $audiencePages['consumers'];
$pageConfig = ['theme' => 'blue'];
$escape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$iconMarkup = static function ($icon) {
  $icons = [
    'phone' => '<rect x="7" y="3" width="10" height="18" rx="2"/><path d="M10 6h4M11 18h2"/>',
    'box' => '<path d="m12 3 8 4.5v9L12 21l-8-4.5v-9L12 3Z"/><path d="m4.5 7.5 7.5 4 7.5-4M12 12v9M8 5.2l8 4.5"/>',
    'people' => '<path d="M16 20v-1.5a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4V20M10 11a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM16 4.3a3.5 3.5 0 0 1 0 6.8M17 14.5a4 4 0 0 1 3 4V20"/>',
    'building' => '<rect x="4" y="3" width="16" height="18" rx="1.5"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2M10 21v-3h4v3"/>',
    'chat' => '<path d="M20 11.5a7.5 7.5 0 0 1-8 7.5 8.5 8.5 0 0 1-3.5-.7L4 20l1.3-3.4A7.1 7.1 0 0 1 4 12c0-4.1 3.6-7.5 8-7.5s8 2.9 8 7Z"/><path d="M8 12h.01M12 12h.01M16 12h.01"/>',
    'medical' => '<path d="M12 21s-8-4.5-8-11a4.5 4.5 0 0 1 8-2.8A4.5 4.5 0 0 1 20 10c0 6.5-8 11-8 11Z"/><path d="M9 12h6M12 9v6"/>',
    'location' => '<path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z"/><circle cx="12" cy="10" r="2.2"/>',
    'search' => '<circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 4.5 4.5M8 10.5h5M10.5 8v5"/>',
    'shield' => '<path d="M12 3 19 6v5c0 4.6-3 7.7-7 10-4-2.3-7-5.4-7-10V6l7-3Z"/><path d="m9 12 2 2 4-4"/>',
    'clipboard' => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1M8 9h8M8 13h8M8 17h5"/>'
  ];
  return $icons[$icon] ?? $icons['people'];
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $escape($audience['title']) ?> - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="audience-page font-inter text-brand-dark bg-white overflow-x-hidden">
<?php include __DIR__ . '/header.php'; ?>
<main>
  <section class="audience-hero">
    <div class="audience-container audience-hero-grid">
      <div class="audience-hero-copy">
        <p class="audience-breadcrumb text-[12px] font-medium text-white/75 page-breadcrumb">Home / Audiences / <?= $escape($audience['title']) ?></p>
        <h1><?= $escape($audience['title']) ?></h1>
        <p class="audience-hero-summary"><?= $escape($audience['summary']) ?></p>
        <div class="audience-hero-actions">
          <button type="button" data-open-study-modal>Discuss Similar Study</button>
          <a href="#pathways">Explore More Experience</a>
        </div>
      </div>
      <div class="audience-proof-card">
        <img src="<?= $escape($audience['image']) ?>" alt="<?= $escape($audience['title']) ?> audience research" loading="eager" class="hero-image-standard">
      </div>
    </div>
  </section>

  <section class="audience-overview">
    <div class="audience-container audience-overview-grid">
      <div><span class="audience-eyebrow"><?= $escape($audience['overviewLabel']) ?></span><h2><?= $escape($audience['overviewTitle']) ?></h2></div>
      <div class="audience-overview-copy"><p><?= $escape($audience['overviewText']) ?></p><strong><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 19 6v5c0 4.6-3 7.7-7 10-4-2.3-7-5.4-7-10V6l7-3Z"/><path d="m9 12 2 2 4-4"/></svg> Full GDPR &amp; ISO 20252 Compliance Safeguards in Place</strong></div>
    </div>
  </section>

  <section class="audience-pathways" id="pathways">
    <div class="audience-container">
      <span class="audience-eyebrow">Methodology &amp; Channels</span>
      <h2><?= $escape($audience['pathwayTitle']) ?></h2>
      <div class="audience-pathway-grid">
        <?php foreach ($audience['pathways'] as $pathway): ?>
          <article class="audience-pathway-card">
            <span class="audience-pathway-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><?= $iconMarkup($pathway['icon']) ?></svg></span>
            <h3><?= $escape($pathway['title']) ?></h3>
            <p><?= $escape($pathway['text']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="audience-metrics" aria-label="Audience research highlights">
    <div class="audience-container audience-metrics-grid">
      <?php foreach ($audience['metrics'] as $metric): ?>
        <div class="audience-metric"><strong><?= $escape($metric['value']) ?></strong><span><?= $escape($metric['label']) ?></span><small><?= $escape($metric['detail']) ?></small></div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="audience-cta">
    <div class="audience-cta-inner">
      <h2><?= $escape($audience['ctaTitle']) ?></h2>
      <p><?= $escape($audience['ctaText']) ?></p>
      <div class="audience-cta-actions">
        <button type="button" data-open-study-modal>Initiate Project Scope</button>
        <a href="contact-us.php">Speak to a Principal Researcher</a>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
