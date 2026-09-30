<?php $pageConfig = ['theme' => 'gold']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diary Studies &amp; Longitudinal Tracking - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-inter text-brand-dark bg-white overflow-x-clip">

  <!-- ==================== HEADER / NAVBAR ==================== -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <!-- ==================== HERO SECTION ==================== -->
  <section class="relative w-full bg-brand-gold overflow-hidden">
    <div class="max-w-[1240px] mx-auto py-[72px] px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <div>
        <div class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Data Collection / Diary Studies</div>
        <h1 class="text-[52px] lg:text-[52px] font-bold leading-[60px] text-white font-helvetica mt-4">Diary Studies</h1>
        <p class="text-[14px] leading-[22px] text-white/80 max-w-[641px] mt-4">
          Capturing longitudinal behaviors, daily routines, habits and in-the-moment consumer reflections through structured mobile and digital journal entries over days or weeks.
        </p>
        <div class="flex flex-wrap items-center gap-4 mt-9">
          <a href="contact-us.php" class="bg-white text-brand-gold text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-yellow-50 transition inline-block">
            Start Your Research
          </a>
          <a href="contact-us.php" class="border border-white/70 text-white text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-white hover:text-brand-gold transition inline-block">
            Speak to a Longitudinal Expert
          </a>
        </div>
      </div>
      <div class="flex justify-center lg:justify-end">
        <img src="assets/imgs/marekt-researchpage.png" alt="Participant capturing daily diary study logs on mobile phone" class="w-full max-w-[520px] object-contain hero-image-standard">
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH METHODS BAR ==================== -->
  <div class="sticky-methods-bar sticky top-0 z-40 w-full bg-white border-b border-brand-bordergray shadow-[0_1px_4px_rgba(0,0,0,0.04)]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0 flex items-center justify-start lg:justify-center h-[68px] gap-8 overflow-x-auto tabs-scroll">
      <a href="online-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-gold transition">Online Survey</a>
      <a href="face-to-face-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-gold transition">Face to Face Survey</a>
      <a href="telephone-cati-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-gold transition">Telephone/CATI Survey</a>
      <a href="depth-interviews.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-gold transition">Depth Interviews</a>
      <a href="focus-groups.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-gold transition">Focus Groups</a>
      <a href="product-testing.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-gold transition">Product Testing</a>
      <a href="mystery-shop.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-gold transition">Mystery Shop</a>
      <a href="diary-studies.php" class="text-[13px] font-semibold text-brand-gold whitespace-nowrap border-b-2 border-brand-gold pb-1">Diary Studies</a>
    </div>
  </div>

  <main class="market-research-sections">

  <!-- ==================== METHODOLOGY SECTION ==================== -->
  <section class="market-section methodology-section relative bg-white overflow-hidden py-[50px]">
    <div class="absolute inset-0" aria-hidden="true">
      <img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-[1240px] mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-[80px] items-end">
      <!-- Left: Methodology text -->
      <div>
        <div class="flex justify-between items-end mb-[40px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-gold">Methodology</span>
        </div>
        <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica">Observing habits in real-time<br>as life naturally unfolds.</h2>
        <p class="text-[16px] leading-[26px] text-brand-muted mt-6 max-w-[600px]">
          Traditional surveys suffer from recall bias—people forget micro-decisions made three days ago. Diary studies capture moments in-situ: the instant a snack craving hits, the friction felt while submitting an online loan, or how family media habits change over weekends.
        </p>
        <div class="mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Techniques we use</b>
          <div class="flex flex-wrap gap-3 mt-4 max-w-[560px]">
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Mobile Journaling Apps</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Photo &amp; Video In-Situ Logs</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Time &amp; Event-Triggered Prompts</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Consumption Occasion Auditing</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Mid-Study Moderator Probes</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Longitudinal Habit Curves</span>
          </div>
        </div>
      </div>

      <!-- Right: Best suited card -->
      <div class="w-fit max-w-full justify-self-end bg-white rounded-xl border border-brand-bordergray shadow-[0_2px_16px_rgba(16,38,51,0.08)] p-8">
        <!-- Segmented control -->
        <div class="inline-flex items-center rounded-lg bg-brand-bggray p-1 border border-brand-bordergray">
          <button class="seg-btn active bg-brand-gold text-white text-[12px] font-semibold px-4 py-2 rounded-md transition" data-panel="consumption">Consumption &amp; Habits</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="productadoption">Product Onboarding</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="mediajourney">Media &amp; Digital</button>
        </div>

        <!-- Panel: Consumption -->
        <div id="panel-consumption" class="best-fit-panel mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Tracking daily snacking and beverage occasions</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Understanding cooking and meal preparation routines</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Mapping OTC medication consumption triggers</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Eliminating retrospective memory distortions</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-gold group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Product Onboarding -->
        <div id="panel-productadoption" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Tracking day-1 to day-30 new device adoption</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Diagnosing early drop-offs and feature abandonment</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Capturing unboxing excitement versus long-term utility</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Discovering creative customer workarounds</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-gold group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Media & Digital -->
        <div id="panel-mediajourney" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Multi-device media consumption timelines</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Streaming service switching and binge habits</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Daily commute app usage logs</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-gold/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Social media feed browsing and shopping discovery</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-gold group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== COVERAGE SECTION ==================== -->
  <section class="market-section coverage-section bg-white py-[50px]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-[50px] gap-6">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-gold">Coverage</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">High-compliance mobile logging across global participant pools.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Maintaining participant engagement across 14 or 30 days requires strategic gamification, intelligent notifications, and continuous researcher moderation. We consistently maintain 90%+ diary completion rates.
        </p>
      </div>

      <!-- Coverage Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-[24px]">
        <div class="bg-white rounded-xl border border-brand-gold overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-gold"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-gold/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Native Smartphone Logging</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Lightweight mobile tools allowing fast entry submission in seconds with photo, audio snippet, and barcode scanning.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-green overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-green"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-green/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Smart Contextual Push Prompts</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Scheduled reminders tailored to wake-up, lunch, evening commute, and weekend intervals ensuring entries are never delayed.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-blue overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-blue"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-blue/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">92% Average Completion Rate</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Milestone incentive ladders and personalized researcher nudges ensure high respondent retention from start to finish.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH SOLUTIONS SECTION ==================== -->
  <section class="market-section solutions-section bg-white py-[50px]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-[50px] gap-6">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-gold">Research solutions</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Questions resolved through longitudinal journaling.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Uncover the authentic rhythms of consumer life. Discover how products survive the transition from initial trial to ingrained daily habit.
        </p>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.12)] font-helvetica">01</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What micro-moments trigger spontaneous beverage consumption?</h3>
        </div>

        <div class="bg-[rgba(30,158,107,0.10)] rounded-xl p-4 border border-brand-green relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(30,158,107,0.12)] font-helvetica">02</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Where do users stumble between day 3 and day 14 of app usage?</h3>
        </div>

        <div class="bg-[rgba(29,86,212,0.10)] rounded-xl p-4 border border-brand-blue relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(29,86,212,0.12)] font-helvetica">03</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">How do multi-screen families share entertainment devices?</h3>
        </div>

        <div class="bg-[rgba(217,59,59,0.10)] rounded-xl p-4 border border-brand-red relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(217,59,59,0.12)] font-helvetica">04</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What workarounds do cooks invent when ingredients fall short?</h3>
        </div>

        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.12)] font-helvetica">05</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">How does consumer sentiment shift over a 4-week service trial?</h3>
        </div>

        <div class="bg-[rgba(30,158,107,0.10)] rounded-xl p-4 border border-brand-green relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(30,158,107,0.12)] font-helvetica">06</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[90%]">What contextual pain points prompt users to open delivery apps?</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH CAPABILITIES SECTION ==================== -->
  <section class="market-section capabilities-section relative w-full bg-white py-[50px]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-[50px] gap-6">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-gold">Research Capabilities</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Longitudinal capabilities engineered for rich context.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Our longitudinal toolkit turns hundreds of diary logs into visual habit maps, timeline matrices, and quote reels that clarify product strategy.
        </p>
      </div>

      <!-- Capabilities Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Multimedia Journal Entries</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Participants upload kitchen photos, bathroom selfies, screenshot clips, and short voice memos to illustrate real behavior.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Photo logs</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Audio memos</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Visual proof</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-green p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Active Researcher Interventions</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Dedicated qualitative researchers monitor live entry feeds, posting asynchronous follow-up questions within hours of submission.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Live probing</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Asynchronous chat</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Deeper context</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-blue p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Longitudinal Timeline Mapping</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Chronological heatmaps displaying daily highs and lows, revealing the exact day fatigue or enthusiasm sets in.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Emotion curves</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Timeline charts</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Habit formation</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-red p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Contextual Trigger Audits</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Quantitative cross-tabulation of emotional states, physical location, companions present, and product choice.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Trigger factors</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Contextual factors</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Occasion share</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Milestone-Based Gamification</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Tiered reward mechanisms unlocking bonuses at day 3, day 7, day 14, and completion to stop respondent fatigue.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Milestone rewards</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">High retention</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Quality checks</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-green p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Executive Photo / Video Reels</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Synthesized visual presentations showing authentic, unvarnished consumer homes, pantries, and daily living environments.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Pantry photos</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Living context</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Authentic evidence</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/selected-experience.php'; ?>

  </main>

  <!-- ==================== CTA SECTION ==================== -->
  <section id="start-research" class="relative w-full py-[80px]">
    <div class="absolute inset-0">
      <img src="assets/imgs/gradient-bg.png" alt="CTA Background" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-[1240px] mx-auto px-6 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-10">
        <!-- Left Content -->
        <div class="max-w-[608px]">
          <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white/72 shadow-[0_2px_16px_rgba(16,38,51,0.08)] border border-white/55 backdrop-blur-[12px] mb-4">
            <div class="w-2 h-2 rounded-full bg-brand-gold"></div>
            <span class="text-[12px] font-semibold uppercase tracking-[0.3px] text-brand-dark">Track real-time behaviors</span>
          </div>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Discover how customer routines evolve over days and weeks.</h2>
          <p class="text-[16px] leading-[26px] text-brand-muted mt-6">Design mobile diary prompts, set sampling windows, and receive in-situ photo logs and longitudinal analysis that capture life as it happens.</p>
          <div class="flex flex-wrap items-center gap-4 mt-6">
            <a href="contact-us.php" class="bg-brand-gold text-white text-[14px] font-semibold px-6 py-3 rounded-lg hover:bg-yellow-600 transition inline-block">
              Start your diary study brief
            </a>
            <a href="contact-us.php" class="px-6 py-3 border border-brand-dark text-brand-dark text-[14px] font-semibold rounded-lg hover:bg-brand-dark hover:text-white transition inline-block">
              Speak to a longitudinal specialist
            </a>
          </div>
        </div>

        <!-- Right Diagram -->
        <div class="w-full lg:w-[608px] h-[340px] lg:h-[421px] relative overflow-hidden flex items-center justify-center">
          <svg width="100%" height="100%" viewBox="0 0 608 421" xmlns="http://www.w3.org/2000/svg">
            <g>
              <line x1="84" y1="149" x2="170" y2="106" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="170" y1="106" x2="339" y2="85" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="170" y1="106" x2="120" y2="234" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="120" y1="234" x2="267" y2="213" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="120" y1="234" x2="73" y2="363" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="267" y1="213" x2="339" y2="85" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="267" y1="213" x2="206" y2="320" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="267" y1="213" x2="437" y2="256" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="339" y1="85" x2="413" y2="43" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="339" y1="85" x2="486" y2="128" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="486" y1="128" x2="437" y2="256" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
              <line x1="437" y1="256" x2="547" y2="298" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"></line>
            </g>
            <circle cx="413" cy="43" r="8" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="413" cy="43" r="14" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="170" cy="106" r="10" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="170" cy="106" r="16" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="84" cy="149" r="8" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="84" cy="149" r="13" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="120" cy="234" r="8" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="120" cy="234" r="14" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="267" cy="213" r="12" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="267" cy="213" r="18" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="339" cy="85" r="11" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="339" cy="85" r="17" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="486" cy="128" r="9" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="486" cy="128" r="14" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="206" cy="320" r="9" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="206" cy="320" r="14" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="437" cy="256" r="10" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="437" cy="256" r="16" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="547" cy="298" r="8" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="547" cy="298" r="14" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FOOTER ==================== -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script>
    document.querySelectorAll('.seg-btn').forEach(function(btn) {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.seg-btn').forEach(function(b) {
          b.classList.remove('active', 'bg-brand-gold', 'text-white');
          b.classList.add('text-brand-muted');
        });
        this.classList.add('active', 'bg-brand-gold', 'text-white');
        this.classList.remove('text-brand-muted');

        document.querySelectorAll('.best-fit-panel').forEach(function(p) {
          p.classList.add('hidden');
        });
        document.getElementById('panel-' + this.dataset.panel).classList.remove('hidden');
      });
    });
  </script>
  <script src="js/main.js"></script>
</body>
</html>
