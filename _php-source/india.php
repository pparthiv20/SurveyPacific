<?php
$marketRegion = [
  'metaTitle' => 'India Market Research', 'metaDescription' => 'Understand Indian consumers, businesses, and communities through locally designed research and fieldwork across markets.',
  'breadcrumb' => 'India', 'heroTitle' => 'Local Insight Across India’s Diverse Markets', 'heroSummary' => 'Reach the right people across India with language-aware research, thoughtful sampling, and coordinated field execution.',
  'image' => 'assets/imgs/exp1.png', 'imageAlt' => 'Modern retail setting representing India consumer markets',
  'introLabel' => 'India Market Expertise', 'introTitle' => 'Understand India at the level your decisions require.', 'introText' => 'India’s markets vary by region, language, city tier, income, and category behavior. We help turn those differences into a clear sample design, adapt research materials for the intended audience, and coordinate data collection with consistent quality oversight.',
  'capabilityLabel' => 'Our India Approach', 'capabilityTitle' => 'Fieldwork shaped around India’s diversity',
  'features' => [
    ['title' => 'Regional Sample Design', 'text' => 'Define the cities, communities, consumer groups, and business profiles that fit your study objectives and available sample.', 'icon' => 'M12 3 19 6v5c0 4.6-3 7.7-7 10-4-2.3-7-5.4-7-10V6l7-3ZM9 12l2 2 4-4'],
    ['title' => 'Language-Sensitive Research', 'text' => 'Prepare clear local-language survey and discussion materials, with review focused on meaning and respondent comprehension.', 'icon' => 'M4 5h16M12 3v2m-5 4 5 5 5-5M7 21l5-5 5 5'],
    ['title' => 'Flexible Data Collection', 'text' => 'Use online, telephone, or face-to-face approaches according to audience access, geography, and research needs.', 'icon' => 'M5 4v6m0 4v6m7-16v2m0 4v10m7-16v8m0 4v4M3 10h4m3-2h4m3 5h4']
  ],
  'statsLabel' => 'India research capabilities',
  'stats' => [
    ['value' => '3', 'label' => 'Core Research Modes', 'detail' => 'Online, telephone, and in-person'], ['value' => '50+', 'label' => 'Languages Handled', 'detail' => 'Local language adaptation available'], ['value' => '1', 'label' => 'Coordinated Study Plan', 'detail' => 'Sample, fieldwork, and quality aligned'], ['value' => '24/7', 'label' => 'Project Coordination', 'detail' => 'Clear progress oversight']
  ],
  'storiesLabel' => 'Research Applications', 'storiesTitle' => 'Questions we help answer in India',
  'stories' => [
    ['title' => 'Consumer Needs Across Cities', 'region' => 'Consumer Research', 'text' => 'Compare category needs and purchase behavior across selected cities and consumer segments.', 'image' => 'assets/imgs/exp1.png', 'alt' => 'Retail environment illustrating consumer market research'],
    ['title' => 'Service Experience Assessment', 'region' => 'Customer Research', 'text' => 'Identify points of friction and service expectations across customer groups and channels.', 'image' => 'assets/imgs/customer-expereince.png', 'alt' => 'Customer experience research in a service environment'],
    ['title' => 'Business Decision-Maker Study', 'region' => 'B2B Research', 'text' => 'Understand supplier criteria, operational priorities, and emerging needs among Indian businesses.', 'image' => 'assets/imgs/blog-b2b.jpg', 'alt' => 'Business professionals representing B2B research']
  ],
  'ctaLabel' => 'Plan Research in India', 'ctaTitle' => 'Make your next decision with local evidence.', 'ctaText' => 'Share your target audience, locations, and research goals. We can help define a suitable sample and fieldwork approach for India.', 'primaryCta' => 'Discuss an India Study', 'secondaryCta' => 'Speak to a Research Lead'
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
