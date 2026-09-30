<?php
$marketRegion = [
  'metaTitle' => 'Asia Pacific Market Research', 'metaDescription' => 'Plan market research across Asia Pacific with locally adapted instruments, regional fieldwork, and comparable results.',
  'breadcrumb' => 'Asia Pacific', 'heroTitle' => 'Regional Insight for Asia Pacific Markets', 'heroSummary' => 'Reach audiences across diverse Asia Pacific markets with local language expertise, consistent methods, and coordinated fieldwork.',
  'image' => 'assets/imgs/blog-environment.jpg', 'imageAlt' => 'Aerial city view representing the diversity of Asia Pacific markets',
  'introLabel' => 'Regional Understanding', 'introTitle' => 'One regional plan. Local market understanding.', 'introText' => 'Asia Pacific brings together distinct languages, cultures, consumer expectations, and business environments. We help you set a comparable research framework, adapt materials to each market, and coordinate local data collection with clear shared oversight.',
  'capabilityLabel' => 'Our Regional Approach', 'capabilityTitle' => 'Research designed for Asia Pacific complexity',
  'features' => [
    ['title' => 'Local Language Adaptation', 'text' => 'Translate and review questionnaires for local meaning, terminology, and response styles while protecting the intent of the original measures.', 'icon' => 'M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18ZM3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18'],
    ['title' => 'Coordinated Fieldwork', 'text' => 'Align sample plans, interviewer guidance, fieldwork schedules, and progress reporting across participating markets.', 'icon' => 'M4 5h16M4 12h16M4 19h16M8 3v4m8 3v4m-8 3v4'],
    ['title' => 'Comparable Quality Controls', 'text' => 'Use shared screening, monitoring, and data review standards with room for market-specific requirements.', 'icon' => 'M12 3 19 6v5c0 4.6-3 7.7-7 10-4-2.3-7-5.4-7-10V6l7-3Z']
  ],
  'statsLabel' => 'Asia Pacific research capabilities',
  'stats' => [
    ['value' => '50+', 'label' => 'Languages Handled', 'detail' => 'Across our global network'], ['value' => '3', 'label' => 'Core Research Modes', 'detail' => 'Online, telephone, and in-person'], ['value' => '1', 'label' => 'Shared Study Framework', 'detail' => 'Locally adapted across markets'], ['value' => '24/7', 'label' => 'Project Coordination', 'detail' => 'For multi-market fieldwork']
  ],
  'storiesLabel' => 'Regional Research Applications', 'storiesTitle' => 'Ways to understand Asia Pacific markets',
  'stories' => [
    ['title' => 'Cross-Market Consumer Tracker', 'region' => 'Consumer Research', 'text' => 'Measure changing needs and category behavior with a consistent survey adapted to each market.', 'image' => 'assets/imgs/exp2.png', 'alt' => 'Busy retail environment for a consumer research example'],
    ['title' => 'Regional Brand Perception', 'region' => 'Brand & Insights', 'text' => 'Compare awareness, consideration, and brand associations while accounting for local context.', 'image' => 'assets/imgs/blog-environment.jpg', 'alt' => 'Regional city market representing brand research'],
    ['title' => 'B2B Technology Adoption', 'region' => 'Business Research', 'text' => 'Explore adoption barriers and priorities among business decision makers in selected markets.', 'image' => 'assets/imgs/blog-ai-technology.jpg', 'alt' => 'Technology illustration for business adoption research']
  ],
  'ctaLabel' => 'Plan Your Regional Study', 'ctaTitle' => 'Build a clear view of Asia Pacific.', 'ctaText' => 'Tell us which markets, audiences, and decisions matter. We will help shape a practical research plan for the region.', 'primaryCta' => 'Plan an Asia Pacific Study', 'secondaryCta' => 'Talk to a Regional Strategist'
];

?>
<?php
$pageConfig = ['theme' => 'blue'];
$escape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $escape($marketRegion['metaTitle']) ?> - Survey Pacific</title>
  <meta name="description" content="<?= $escape($marketRegion['metaDescription']) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <style>.market-region-page #start-research { margin-top: 80px; }</style>
</head>
<body class="font-inter text-brand-dark bg-white overflow-x-clip">
  <?php include __DIR__ . '/includes/header.php'; ?>
  <main class="market-region-page">
    <section class="relative w-full bg-brand-blue overflow-hidden">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 py-[52px] grid grid-cols-1 lg:grid-cols-[1.2fr_0.8fr] gap-8 lg:gap-12 items-center">
        <div>
          <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Markets / <?= $escape($marketRegion['breadcrumb']) ?></p>
          <h1 class="text-[52px] font-bold leading-[60px] text-white font-helvetica mt-4 max-w-[700px]"><?= $escape($marketRegion['heroTitle']) ?></h1>
          <p class="text-[14px] leading-[22px] text-white/80 max-w-[620px] mt-4"><?= $escape($marketRegion['heroSummary']) ?></p>
        </div>
        <div class="flex justify-center lg:justify-end">
          <img src="<?= $escape($marketRegion['image']) ?>" alt="<?= $escape($marketRegion['imageAlt']) ?>" class="w-full max-w-[400px] h-[225px] object-cover rounded-lg hero-image-standard">
        </div>
      </div>
    </section>

    <section class="bg-white py-[60px] lg:py-[74px]">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-14 items-center">
        <div>
          <p class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue"><?= $escape($marketRegion['introLabel']) ?></p>
          <h2 class="text-[30px] lg:text-[38px] font-bold leading-[1.2] text-brand-dark font-helvetica mt-3 max-w-[540px]"><?= $escape($marketRegion['introTitle']) ?></h2>
        </div>
        <p class="text-[14px] leading-[22px] text-brand-muted"><?= $escape($marketRegion['introText']) ?></p>
      </div>
    </section>

    <section class="bg-brand-bggray py-[56px] lg:py-[64px]">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
        <p class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue"><?= $escape($marketRegion['capabilityLabel']) ?></p>
        <h2 class="text-[30px] lg:text-[38px] font-bold leading-tight text-brand-dark font-helvetica mt-3"><?= $escape($marketRegion['capabilityTitle']) ?></h2>
        <div class="grid md:grid-cols-3 gap-4 mt-8">
          <?php foreach ($marketRegion['features'] as $index => $feature): ?>
            <?php $accent = ['blue', 'green', 'gold'][$index % 3]; ?>
            <article class="rounded-lg border border-brand-<?= $accent ?> bg-white p-6 min-h-[215px]">
              <div class="w-10 h-10 rounded-lg bg-brand-lightblue text-brand-<?= $accent ?> flex items-center justify-center" aria-hidden="true">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="<?= $escape($feature['icon']) ?>"/></svg>
              </div>
              <h3 class="text-[20px] font-bold leading-6 mt-4"><?= $escape($feature['title']) ?></h3>
              <p class="text-[14px] leading-5 text-brand-muted mt-2"><?= $escape($feature['text']) ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="bg-white py-8 lg:py-10 mb-[80px]" aria-label="<?= $escape($marketRegion['statsLabel']) ?>">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 grid grid-cols-2 lg:grid-cols-4 gap-y-7 gap-x-4 text-center">
        <?php foreach ($marketRegion['stats'] as $index => $stat): ?>
          <?php $accent = ['blue', 'green', 'gold', 'red'][$index % 4]; ?>
          <div><p class="text-[36px] font-bold leading-none text-brand-<?= $accent ?>"><?= $escape($stat['value']) ?></p><p class="text-[13px] font-semibold mt-2"><?= $escape($stat['label']) ?></p><p class="text-[12px] text-brand-muted mt-1"><?= $escape($stat['detail']) ?></p></div>
        <?php endforeach; ?>
      </div>
    </section>

    <?php include __DIR__ . '/includes/selected-experience.php'; ?>

    <section id="start-research" class="relative overflow-hidden bg-brand-blue py-[68px] lg:py-[76px] text-center">
      <div class="absolute inset-0" aria-hidden="true"><img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover"></div>
      <div class="relative max-w-[900px] mx-auto px-6">
        <p class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-gold"><?= $escape($marketRegion['ctaLabel']) ?></p>
        <h2 class="text-[32px] lg:text-[40px] font-bold leading-[1.2] text-brand-dark font-helvetica mt-3"><?= $escape($marketRegion['ctaTitle']) ?></h2>
        <p class="text-[14px] leading-[22px] text-brand-muted mt-5 max-w-[700px] mx-auto"><?= $escape($marketRegion['ctaText']) ?></p>
        <div class="flex flex-wrap justify-center gap-4 mt-6"><a href="contact-us.php" class="bg-brand-blue text-white text-[12px] font-semibold px-6 py-2.5 rounded-lg hover:bg-blue-700 transition"><?= $escape($marketRegion['primaryCta']) ?></a><a href="contact-us.php" class="border border-brand-dark text-brand-dark text-[12px] font-semibold px-6 py-2.5 rounded-lg hover:bg-brand-dark hover:text-white transition"><?= $escape($marketRegion['secondaryCta']) ?></a></div>
      </div>
    </section>
  </main>
  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="js/main.js"></script>
</body>
</html>
