<?php
$qualityPage = [
  'title' => 'Fraud Prevention', 'hero' => 'Protect Research from Fraudulent Responses',
  'description' => 'Discover layered controls that help detect and manage suspicious research participation.',
  'intro' => 'Survey fraud prevention combines thoughtful survey design, respondent screening, and fieldwork monitoring to help identify suspicious patterns while preserving a fair experience for genuine participants.',
  'scoreTitle' => 'Fraud Review Signals', 'score' => [['Automated response patterns', 'Screened'], ['Duplicate participation signals', 'Reviewed'], ['Quality flags', 'Escalated as needed']],
  'eyebrow' => 'Detection Shield', 'sectionTitle' => 'Three Layers of Fraud Prevention', 'sectionIntro' => 'No single signal tells the whole story. Multiple checks help teams assess suspicious activity in the context of the study.',
  'cards' => [
    ['title' => 'Bot & Automated Traffic Detection', 'body' => 'Survey controls and response-pattern reviews help flag automated activity, implausible completion behavior, and other anomalies.', 'icon' => '<rect x="5" y="5" width="14" height="14" rx="2" stroke-width="1.8"/><path stroke-width="1.8" stroke-linecap="round" d="M9 9h6v6H9zM9 2v3m6-3v3M9 19v3m6-3v3M2 9h3m-3 6h3m14-6h3m-3 6h3"/>' ],
    ['title' => 'Network & Session Review', 'body' => 'Where appropriate, network and session signals can help identify unusual access patterns and repeated or coordinated activity.', 'icon' => '<circle cx="12" cy="12" r="9" stroke-width="1.8"/><path stroke-width="1.8" stroke-linecap="round" d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18"/>' ],
    ['title' => 'Duplicate Participation Checks', 'body' => 'Profile, device, and response comparisons help surface potential duplicate entries for a reasoned quality review.', 'icon' => '<rect x="8" y="8" width="12" height="12" rx="2" stroke-width="1.8"/><path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M16 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2"/>' ]
  ],
  'metricsLabel' => 'Fraud prevention controls', 'metrics' => [['Layered', 'Detection Controls', 'Signals reviewed together'], ['Contextual', 'Quality Decisions', 'Study-specific thresholds'], ['Ongoing', 'Fieldwork Review', 'Checks through collection'], ['Auditable', 'Action Records', 'Consistent review process']],
  'stepsEyebrow' => 'Active Mitigation', 'stepsTitle' => 'Fraud Review Protocol', 'steps' => [['DETECT', 'Flag Unusual Activity', 'Automated checks and monitoring surface response patterns that merit further attention.'], ['REVIEW', 'Assess in Context', 'Quality teams consider multiple signals, study rules, and the likely impact before acting.'], ['RESOLVE', 'Apply Study Rules', 'Responses are retained, reviewed, or excluded according to documented project criteria.']],
  'ctaTitle' => 'Strengthen fraud controls for your next study', 'ctaText' => 'Work with our team to select practical screening and review measures for your sample and research design.', 'ctaPrimary' => 'Discuss Fraud Controls', 'ctaSecondary' => 'Plan a Quality Review'
];

$qualityTheme = 'blue';
$qualityCards = $qualityPage['cards'];
$qualityMetrics = $qualityPage['metrics'];
$qualitySteps = $qualityPage['steps'];
$qualityColors = ['blue', 'green', 'gold', 'red'];
$qualityPale = ['blue' => 'blue-50/40', 'green' => 'green-50/40', 'gold' => 'yellow-50/40', 'red' => 'red-50/40'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($qualityPage['title']) ?> - Survey Pacific</title>
  <meta name="description" content="<?= htmlspecialchars($qualityPage['description']) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-inter text-brand-dark bg-white overflow-x-clip">
  <?php include __DIR__ . '/includes/header.php'; ?>
  <main>
    <section class="w-full bg-brand-blue">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 py-[52px] grid grid-cols-1 lg:grid-cols-[1.2fr_0.8fr] gap-8 lg:gap-12 items-center">
        <div><p class="page-breadcrumb text-[12px] font-medium text-white/75">Home / Quality / <?= htmlspecialchars($qualityPage['title']) ?></p><h1 class="text-[52px] leading-[60px] font-bold text-white font-helvetica mt-4 max-w-[700px]"><?= htmlspecialchars($qualityPage['hero']) ?></h1><p class="text-[14px] leading-[22px] text-white/80 max-w-[620px] mt-4"><?= htmlspecialchars($qualityPage['intro']) ?></p></div>
        <div class="lg:justify-self-end w-full max-w-[400px] rounded-xl bg-white p-6 shadow-lg"><h2 class="text-[20px] leading-6 font-bold text-brand-dark font-helvetica"><?= htmlspecialchars($qualityPage['scoreTitle']) ?></h2><div class="mt-4 divide-y divide-slate-200">
          <?php foreach ($qualityPage['score'] as $i => $row): $color = $qualityColors[$i % count($qualityColors)]; ?>
            <div class="flex justify-between gap-3 py-3 text-[13px]"><span class="text-brand-muted"><?= htmlspecialchars($row[0]) ?></span><strong class="text-brand-<?= $color ?> text-right"><?= htmlspecialchars($row[1]) ?></strong></div>
          <?php endforeach; ?>
        </div></div>
      </div>
    </section>

    <section class="bg-white py-[56px] lg:py-[64px]">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0"><p class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue"><?= htmlspecialchars($qualityPage['eyebrow']) ?></p><h2 class="text-[30px] lg:text-[38px] font-bold leading-tight text-brand-dark font-helvetica mt-3"><?= htmlspecialchars($qualityPage['sectionTitle']) ?></h2><p class="text-[14px] leading-[22px] text-brand-muted mt-4 max-w-[850px]"><?= htmlspecialchars($qualityPage['sectionIntro']) ?></p>
        <div class="grid md:grid-cols-3 gap-4 mt-8">
          <?php foreach ($qualityCards as $i => $card): $color = $qualityColors[$i % count($qualityColors)]; $pale = $qualityPale[$color]; ?>
            <article class="rounded-lg border border-brand-<?= $color ?> bg-white p-6 min-h-[205px]"><div class="w-10 h-10 rounded-full bg-<?= $pale ?> text-brand-<?= $color ?> flex items-center justify-center" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><?= $card['icon'] ?></svg></div><h3 class="text-[20px] font-bold leading-6 mt-4"><?= htmlspecialchars($card['title']) ?></h3><p class="text-[14px] leading-5 text-brand-muted mt-2"><?= htmlspecialchars($card['body']) ?></p></article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="bg-brand-bggray py-8 lg:py-10" aria-label="<?= htmlspecialchars($qualityPage['metricsLabel']) ?>"><div class="max-w-[1240px] mx-auto px-6 lg:px-0 grid grid-cols-2 lg:grid-cols-4 gap-y-7 gap-x-4 text-center">
      <?php foreach ($qualityMetrics as $i => $metric): $color = $qualityColors[$i % count($qualityColors)]; ?><div><p class="text-[32px] lg:text-[36px] font-bold leading-none text-brand-<?= $color ?>"><?= htmlspecialchars($metric[0]) ?></p><p class="text-[13px] font-semibold mt-2"><?= htmlspecialchars($metric[1]) ?></p><p class="text-[12px] text-brand-muted mt-1"><?= htmlspecialchars($metric[2]) ?></p></div><?php endforeach; ?>
    </div></section>

    <section class="bg-white py-[56px] lg:py-[64px]"><div class="max-w-[1240px] mx-auto px-6 lg:px-0"><p class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue"><?= htmlspecialchars($qualityPage['stepsEyebrow']) ?></p><h2 class="text-[30px] lg:text-[38px] font-bold leading-tight text-brand-dark font-helvetica mt-3"><?= htmlspecialchars($qualityPage['stepsTitle']) ?></h2><div class="grid md:grid-cols-3 gap-4 mt-8">
      <?php foreach ($qualitySteps as $i => $step): $stepBorderColors = ['blue', 'gold', 'green']; $color = $stepBorderColors[$i % count($stepBorderColors)]; ?><article class="rounded-lg border border-brand-<?= $color ?> bg-white p-6 min-h-[190px]"><div class="flex justify-between gap-2 text-[11px] font-semibold text-brand-<?= $color ?>"><span>STAGE 0<?= $i + 1 ?></span><span class="text-slate-300"><?= htmlspecialchars($step[0]) ?></span></div><h3 class="text-[18px] font-bold mt-4"><?= htmlspecialchars($step[1]) ?></h3><p class="text-[13px] leading-5 text-brand-muted mt-2"><?= htmlspecialchars($step[2]) ?></p></article><?php endforeach; ?>
    </div></div></section>

    <section id="start-research" class="relative overflow-hidden mt-8 lg:mt-10 py-[68px] lg:py-[76px] text-center"><div class="absolute inset-0" aria-hidden="true"><img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover"></div><div class="relative max-w-[900px] mx-auto px-6"><p class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue">Quality you can build on</p><h2 class="text-[32px] lg:text-[40px] font-bold leading-[1.2] text-brand-dark font-helvetica mt-3"><?= htmlspecialchars($qualityPage['ctaTitle']) ?></h2><p class="text-[14px] leading-[22px] text-brand-muted mt-5 max-w-[700px] mx-auto"><?= htmlspecialchars($qualityPage['ctaText']) ?></p><div class="flex flex-wrap justify-center gap-4 mt-6"><a href="contact-us.php" class="bg-brand-blue text-white text-[12px] font-semibold px-6 py-2.5 rounded-lg"><?= htmlspecialchars($qualityPage['ctaPrimary']) ?></a><a href="contact-us.php" class="border border-brand-dark text-brand-dark text-[12px] font-semibold px-6 py-2.5 rounded-lg"><?= htmlspecialchars($qualityPage['ctaSecondary']) ?></a></div></div></section>
  </main>
  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="js/main.js"></script>
</body>
</html>
