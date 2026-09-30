<?php
$marketRegion = [
  'metaTitle' => 'Country Feasibility & Sample Assessment', 'metaDescription' => 'Assess country, audience, sample, language, method, compliance, and timing requirements before committing to international fieldwork.',
  'breadcrumb' => 'Country Feasibility', 'heroTitle' => 'Know What’s Possible Before Fieldwork Begins', 'heroSummary' => 'Get a clear view of audience access, sample requirements, local constraints, and realistic timelines for each target country.',
  'image' => 'assets/imgs/blog-market-research.jpg', 'imageAlt' => 'Research team assessing market feasibility and study scope',
  'introLabel' => 'Feasibility Before Fieldwork', 'introTitle' => 'Turn an ambitious market list into a workable study plan.', 'introText' => 'International plans can change quickly when audience incidence, local language, collection modes, or compliance requirements differ by country. We assess the practical conditions early, flag constraints, and help you decide where to proceed, adapt, or refine the scope.',
  'capabilityLabel' => 'Our Feasibility Review', 'capabilityTitle' => 'The checks behind a confident country plan',
  'features' => [
    ['title' => 'Audience & Sample Access', 'text' => 'Review target profiles, incidence, quotas, screening needs, and the likely sample sources for each market.', 'icon' => 'M10.5 3.5a7 7 0 1 0 0 14 7 7 0 0 0 0-14ZM16 16l5 5M8 10.5h5M10.5 8v5'],
    ['title' => 'Method & Language Fit', 'text' => 'Check whether online, telephone, or in-person collection is suitable and identify translation or moderation needs.', 'icon' => 'M4 5h16M12 3v2m-5 4 5 5 5-5M7 21l5-5 5 5'],
    ['title' => 'Timing & Local Requirements', 'text' => 'Identify fieldwork dependencies, local operating requirements, and schedule risks before launch commitments are made.', 'icon' => 'M12 8v4l3 2m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z']
  ],
  'statsLabel' => 'Country feasibility review',
  'stats' => [
    ['value' => '4', 'label' => 'Core Feasibility Checks', 'detail' => 'Sample, method, language, and timing'], ['value' => '3', 'label' => 'Research Modes Reviewed', 'detail' => 'Online, telephone, and in-person'], ['value' => '1', 'label' => 'Country Recommendation', 'detail' => 'Clear next step for each market'], ['value' => '100+', 'label' => 'Countries Supported', 'detail' => 'Scope selected markets to your brief']
  ],
  'storiesLabel' => 'Feasibility Planning', 'storiesTitle' => 'What a country assessment can clarify',
  'stories' => [
    ['title' => 'Audience Incidence & Reach', 'region' => 'Sample Assessment', 'text' => 'Clarify whether the intended profiles and quotas appear attainable in each target market.', 'image' => 'assets/imgs/blog-market-research.jpg', 'alt' => 'Researchers assessing target audiences and market access'],
    ['title' => 'Language & Mode Requirements', 'region' => 'Method Review', 'text' => 'Identify translation, moderation, and collection-mode needs before instruments are finalized.', 'image' => 'assets/imgs/blog-environment.jpg', 'alt' => 'International city context for language and mode assessment'],
    ['title' => 'Timeline & Launch Dependencies', 'region' => 'Fieldwork Planning', 'text' => 'Surface market-specific dependencies and sequence work around realistic launch requirements.', 'image' => 'assets/imgs/blog-ai-technology.jpg', 'alt' => 'Planning visual for international fieldwork timing']
  ],
  'ctaLabel' => 'Assess Your Market Plan', 'ctaTitle' => 'Make the unknowns clear before you launch.', 'ctaText' => 'Send us your country list, audience definition, and timing. We will help identify what is feasible and where the plan may need adjustment.', 'primaryCta' => 'Request a Feasibility Review', 'secondaryCta' => 'Speak to a Global Strategist'
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
