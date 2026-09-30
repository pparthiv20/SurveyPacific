<?php
$marketRegion = [
  'metaTitle' => 'Middle East Market Research', 'metaDescription' => 'Understand Middle East markets through locally informed sampling, language-aware research, and coordinated fieldwork.',
  'breadcrumb' => 'Middle East', 'heroTitle' => 'Local Understanding for Middle East Markets', 'heroSummary' => 'Build market insight with culturally informed research, appropriate language choices, and reliable local execution.',
  'image' => 'assets/imgs/blog-environment.jpg', 'imageAlt' => 'City landscape representing Middle East market research',
  'introLabel' => 'Local Market Understanding', 'introTitle' => 'Research that respects local context.', 'introText' => 'Markets across the Middle East differ in language, consumer expectations, business practices, and access conditions. We help define the right audience and method for each location, adapt research materials thoughtfully, and coordinate fieldwork with clear quality and compliance oversight.',
  'capabilityLabel' => 'Our Regional Approach', 'capabilityTitle' => 'Thoughtful research across Middle East markets',
  'features' => [
    ['title' => 'Culturally Informed Design', 'text' => 'Shape questionnaires, discussion guides, and recruitment criteria around local language, terminology, and relevant social context.', 'icon' => 'M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18ZM3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18'],
    ['title' => 'Local Audience Access', 'text' => 'Plan recruitment and sample criteria around the consumer, professional, or business groups your study needs to reach.', 'icon' => 'M16 20v-1.5a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4V20M10 11a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM16 4.3a3.5 3.5 0 0 1 0 6.8M17 14.5a4 4 0 0 1 3 4V20'],
    ['title' => 'Market-Specific Compliance', 'text' => 'Review privacy, consent, and local operating requirements for each market before fieldwork begins.', 'icon' => 'M12 3 19 6v5c0 4.6-3 7.7-7 10-4-2.3-7-5.4-7-10V6l7-3Z']
  ],
  'statsLabel' => 'Middle East research capabilities',
  'stats' => [
    ['value' => '3', 'label' => 'Core Research Modes', 'detail' => 'Online, telephone, and in-person'], ['value' => '50+', 'label' => 'Languages Handled', 'detail' => 'Global language network'], ['value' => '1', 'label' => 'Local Fieldwork Plan', 'detail' => 'Adapted to each market brief'], ['value' => '24/7', 'label' => 'Project Coordination', 'detail' => 'Clear oversight across timelines']
  ],
  'storiesLabel' => 'Research Applications', 'storiesTitle' => 'Questions we help answer in the Middle East',
  'stories' => [
    ['title' => 'Regional Consumer Priorities', 'region' => 'Consumer Research', 'text' => 'Understand category needs, purchase drivers, and expectations across selected consumer groups.', 'image' => 'assets/imgs/blog-environment.jpg', 'alt' => 'Urban market representing consumer research'],
    ['title' => 'Financial Services Experience', 'region' => 'Customer Research', 'text' => 'Explore service expectations and customer journeys across financial products and channels.', 'image' => 'assets/imgs/blog-market-research.jpg', 'alt' => 'Research team discussing financial services insight'],
    ['title' => 'Digital Adoption Among Businesses', 'region' => 'B2B Research', 'text' => 'Assess technology needs, adoption barriers, and investment priorities among business audiences.', 'image' => 'assets/imgs/blog-ai-technology.jpg', 'alt' => 'Digital technology concept for business research']
  ],
  'ctaLabel' => 'Plan Research in the Middle East', 'ctaTitle' => 'Find the right approach for your markets.', 'ctaText' => 'Share your locations, audience, and questions. We will help assess the local requirements and shape your fieldwork plan.', 'primaryCta' => 'Discuss a Regional Study', 'secondaryCta' => 'Speak to a Market Lead'
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
