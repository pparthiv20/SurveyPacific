<?php $pageConfig = ['theme' => 'blue']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi-Country Fieldwork &amp; Global Research - Survey Pacific</title>
  <meta name="description" content="Coordinate multi-country research with consistent methods, local field teams, and quality controls across markets.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <style>
    .multi-country-page + footer { margin-top: 0; }
    .multi-country-page #start-research { margin-top: 80px; }
    .multi-country-page .fieldwork-card { min-height: 215px; }
    .multi-country-page .project-card { min-height: 320px; }
    @media (max-width: 767px) {
      .multi-country-page .fieldwork-card, .multi-country-page .project-card { min-height: 0; }
    }
  </style>
</head>
<body class="font-inter text-brand-dark bg-white overflow-x-clip">
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main class="multi-country-page">
    <section class="relative w-full bg-brand-blue overflow-hidden">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 py-[52px] lg:py-[52px] grid grid-cols-1 lg:grid-cols-[1.2fr_0.8fr] gap-8 lg:gap-12 items-center">
        <div>
          <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Data Collection / Multi-Country Fieldwork</p>
          <h1 class="text-[40px] sm:text-[48px] lg:text-[54px] font-bold leading-[1.08] text-white font-helvetica mt-4 max-w-[650px]">Global Research, One Partner</h1>
          <p class="text-[15px] leading-6 text-white/80 max-w-[620px] mt-4">Manage multi-country studies with standardized methods, compliance, and consistent data worldwide.</p>
        </div>
        <div class="flex justify-center lg:justify-end">
          <img src="assets/imgs/hero2.png" alt="Local research participants in an international city" class="w-full max-w-[430px] h-[245px] object-cover rounded-lg hero-image-standard">
        </div>
      </div>
    </section>

    <section class="bg-white py-[60px] lg:py-[74px]">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-14 items-center">
        <div>
          <p class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue">Unified Execution</p>
          <h2 class="text-[30px] lg:text-[38px] font-bold leading-[1.2] text-brand-dark font-helvetica mt-3 max-w-[540px]">Harmonized cross-border research without the operational friction.</h2>
        </div>
        <p class="text-[15px] leading-6 text-brand-muted">Managing fieldwork across different continents often leads to fragmented data, mismatched timelines, and compliance nightmares. Survey Pacific executes multi-market studies using a standardized central operational blueprint. From translations to consistent sampling and local data processing, we ensure perfect comparative alignment.</p>
      </div>
    </section>

    <section class="bg-brand-bggray py-[56px] lg:py-[64px]">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
        <p class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue">Global Capabilities</p>
        <h2 class="text-[30px] lg:text-[38px] font-bold leading-tight text-brand-dark font-helvetica mt-3">How We Coordinate Multi-Country Research</h2>
        <div class="grid md:grid-cols-3 gap-4 mt-8">
          <article class="fieldwork-card rounded-lg border border-brand-blue bg-white p-6">
            <div class="w-10 h-10 rounded-lg bg-blue-50 text-brand-blue flex items-center justify-center" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m-9 0h10a2 2 0 0 1 2 2v10H5V9a2 2 0 0 1 2-2Zm3 0v12m4-12v12"/></svg></div>
            <h3 class="text-[20px] font-bold leading-6 mt-4">Centralized Project Management</h3>
            <p class="text-[14px] leading-5 text-brand-muted mt-2">Single PM coordinating all markets, unified communication flow, and one centralized client dashboard for global progress updates in real time.</p>
          </article>
          <article class="fieldwork-card rounded-lg border border-brand-green bg-white p-6">
            <div class="w-10 h-10 rounded-lg bg-green-50 text-brand-green flex items-center justify-center" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M5 4v6m0 4v6m7-16v2m0 4v10m7-16v9m0 4v3M3 10h4m3-2h4m3 5h4"/></svg></div>
            <h3 class="text-[20px] font-bold leading-6 mt-4">Harmonized Methodology</h3>
            <p class="text-[14px] leading-5 text-brand-muted mt-2">Standardized questionnaire design carefully adapted for cultural nuances and regional terminology, keeping data perfectly comparable.</p>
          </article>
          <article class="fieldwork-card rounded-lg border border-brand-gold bg-white p-6">
            <div class="w-10 h-10 rounded-lg bg-yellow-50 text-brand-gold flex items-center justify-center" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M16 20v-1.5a3.5 3.5 0 0 0-3.5-3.5h-5A3.5 3.5 0 0 0 4 18.5V20m6-8a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm7-7.5a4 4 0 0 1 0 7.7m3 8.3v-1.5a3.5 3.5 0 0 0-2.5-3.35"/></svg></div>
            <h3 class="text-[20px] font-bold leading-6 mt-4">Local Fieldwork Teams</h3>
            <p class="text-[14px] leading-5 text-brand-muted mt-2">Native in-country interviewers with deep regional understanding, strict local regulatory compliance, and language-specific moderation expertise.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="bg-white py-8 lg:py-10 mb-[80px]">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 grid grid-cols-2 lg:grid-cols-4 gap-y-7 gap-x-4 text-center">
        <div><p class="text-[36px] font-bold leading-none text-brand-blue">50+</p><p class="text-[13px] font-semibold mt-2">Countries Served</p><p class="text-[12px] text-brand-muted mt-1">Simultaneous study coverage</p></div>
        <div><p class="text-[36px] font-bold leading-none text-brand-green">125+</p><p class="text-[13px] font-semibold mt-2">Projects Delivered</p><p class="text-[12px] text-brand-muted mt-1">Complex multi-market trackers</p></div>
        <div><p class="text-[36px] font-bold leading-none text-brand-gold">98.2%</p><p class="text-[13px] font-semibold mt-2">Data Consistency</p><p class="text-[12px] text-brand-muted mt-1">Standardized quality controls</p></div>
        <div><p class="text-[36px] font-bold leading-none text-brand-red">72hr</p><p class="text-[13px] font-semibold mt-2">Average Launch Gap</p><p class="text-[12px] text-brand-muted mt-1">Rapid deployment across regions</p></div>
      </div>
    </section>

    <?php include __DIR__ . '/includes/selected-experience.php'; ?>

    <section id="start-research" class="relative overflow-hidden bg-brand-blue py-[68px] lg:py-[76px] text-center">
      <div class="absolute inset-0" aria-hidden="true"><img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover">
      </div>
      <div class="relative max-w-[900px] mx-auto px-6">
        <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica">Ready to launch a multi-country study?</h2>
        <p class="text-[16px] leading-[26px] text-brand-muted mt-6 max-w-[700px] mx-auto">Consult with our native research leads to configure localized questionnaires, select appropriate methodologies, and streamline your international fieldwork.</p>
        <div class="flex flex-wrap justify-center gap-4 mt-6"><a href="contact-us.php" class="bg-brand-blue text-white text-[14px] font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition">Plan Your Multi-Country Study</a><a href="contact-us.php" class="border border-brand-dark text-brand-dark text-[14px] font-semibold px-6 py-3 rounded-lg hover:bg-brand-dark hover:text-white transition">Speak to a Regional Strategist</a></div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="js/main.js"></script>
</body>
</html>
