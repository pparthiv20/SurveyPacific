<?php $pageConfig = ['theme' => 'green']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>In-Depth Interviews (IDIs) - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-inter text-brand-dark bg-white overflow-x-clip">

  <!-- ==================== HEADER / NAVBAR ==================== -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <!-- ==================== HERO SECTION ==================== -->
  <section class="relative w-full bg-brand-green overflow-hidden">
    <div class="max-w-[1240px] mx-auto py-[72px] px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <div>
        <div class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Data Collection / Depth Interviews</div>
        <h1 class="text-[52px] lg:text-[52px] font-bold leading-[60px] text-white font-helvetica mt-4">Depth Interviews</h1>
        <p class="text-[14px] leading-[22px] text-white/80 max-w-[641px] mt-4">
          One-on-one qualitative investigations led by veteran moderators to unearth deep motivations, underlying emotions, unvoiced pain points and complex customer decision journeys.
        </p>
        <div class="flex flex-wrap items-center gap-4 mt-9">
          <a href="contact-us.php" class="bg-white text-brand-green text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-green-50 transition inline-block">
            Start Your Research
          </a>
          <a href="contact-us.php" class="border border-white/70 text-white text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-white hover:text-brand-green transition inline-block">
            Speak to a Qualitative Director
          </a>
        </div>
      </div>
      <div class="flex justify-center lg:justify-end">
        <img src="assets/imgs/marekt-researchpage.png" alt="In-depth executive interview session in progress" class="w-full max-w-[520px] object-contain hero-image-standard">
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH METHODS BAR ==================== -->
  <div class="sticky-methods-bar sticky top-0 z-40 w-full bg-white border-b border-brand-bordergray shadow-[0_1px_4px_rgba(0,0,0,0.04)]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0 flex items-center justify-start lg:justify-center h-[68px] gap-8 overflow-x-auto tabs-scroll">
      <a href="online-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Online Survey</a>
      <a href="face-to-face-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Face to Face Survey</a>
      <a href="telephone-cati-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Telephone/CATI Survey</a>
      <a href="depth-interviews.php" class="text-[13px] font-semibold text-brand-green whitespace-nowrap border-b-2 border-brand-green pb-1">Depth Interviews</a>
      <a href="focus-groups.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Focus Groups</a>
      <a href="product-testing.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Product Testing</a>
      <a href="mystery-shop.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Mystery Shop</a>
      <a href="diary-studies.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Diary Studies</a>
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
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-green">Methodology</span>
        </div>
        <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica">Probing beneath the surface<br>to discover the unspoken 'Why'.</h2>
        <p class="text-[16px] leading-[26px] text-brand-muted mt-6 max-w-[600px]">
          Surveys tell you what people do; depth interviews tell you why they do it. Through expert conversational facilitation, projective exercises, and cognitive journey mapping, we elicit candid revelations that survey checkboxes miss completely.
        </p>
        <div class="mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Techniques we use</b>
          <div class="flex flex-wrap gap-3 mt-4 max-w-[560px]">
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Executive IDIs (60-90 min)</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Laddering &amp; Empathy Probing</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Cognitive Walkthroughs</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Projective Techniques</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Customer Journey Mapping</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Full Thematic Coding</span>
          </div>
        </div>
      </div>

      <!-- Right: Best suited card -->
      <div class="w-fit max-w-full justify-self-end bg-white rounded-xl border border-brand-bordergray shadow-[0_2px_16px_rgba(16,38,51,0.08)] p-8">
        <!-- Segmented control -->
        <div class="inline-flex items-center rounded-lg bg-brand-bggray p-1 border border-brand-bordergray">
          <button class="seg-btn active bg-brand-green text-white text-[12px] font-semibold px-4 py-2 rounded-md transition" data-panel="csuite">C-Suite &amp; B2B</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="consumeridi">Consumer Exploratory</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="uxconcept">Concept &amp; UX</button>
        </div>

        <!-- Panel: C-Suite -->
        <div id="panel-csuite" class="best-fit-panel mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Enterprise software procurement committees</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Understanding internal political dynamics</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">High-stakes M&amp;A commercial due diligence</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Confidential regulatory feedback interviews</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-green group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Consumer Exploratory -->
        <div id="panel-consumeridi" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Sensitive healthcare &amp; personal finance topics</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Uncovering subconscious brand affinities</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Mapping end-to-end customer lifecycle pain points</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Exploring high-involvement luxury purchase journeys</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-green group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Concept & UX -->
        <div id="panel-uxconcept" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Clickable prototype &amp; usability evaluation</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Observing spontaneous mental friction points</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Validating value propositions prior to code build</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Iterative sprint testing with product teams</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-green group">
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
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-green">Coverage</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Elite moderator network across global commercial hubs.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Depth interviews succeed or fail based on the moderator. Survey Pacific pairs senior industry specialists with verified high-caliber respondents in physical interview suites and secure virtual streaming rooms.
        </p>
      </div>

      <!-- Coverage Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-[24px]">
        <div class="bg-white rounded-xl border border-brand-green overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-green"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-green/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Senior Moderator Roster</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Experienced interviewers averaging 12+ years across tech, healthcare, BFSI, industrial and luxury consumer domains.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-gold"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-gold/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Secure Virtual Observation</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Private observer virtual backrooms with simultaneous translation, timestamped bookmarks, and live researcher chat.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-blue overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-blue"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-blue/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Full Thematic Synthesis</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Verbatim transcripts, audio/video showreels, and actionable strategic reports mapping themes, archetypes, and friction points.</p>
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
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-green">Research solutions</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Questions unlocked through depth interviews.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Unpack the psychological drivers, emotional triggers, and unstated criteria that dictate choices in both consumer and enterprise buying situations.
        </p>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div class="bg-[rgba(30,158,107,0.10)] rounded-xl p-4 border border-brand-green relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(30,158,107,0.12)] font-helvetica">01</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What unconscious factors stop users from switching to our brand?</h3>
        </div>

        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.12)] font-helvetica">02</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">How do enterprise buying groups negotiate software trade-offs?</h3>
        </div>

        <div class="bg-[rgba(29,86,212,0.10)] rounded-xl p-4 border border-brand-blue relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(29,86,212,0.12)] font-helvetica">03</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Where do customers experience anxiety during digital onboarding?</h3>
        </div>

        <div class="bg-[rgba(217,59,59,0.10)] rounded-xl p-4 border border-brand-red relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(217,59,59,0.12)] font-helvetica">04</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What deep unmet needs exist in chronic patient journeys?</h3>
        </div>

        <div class="bg-[rgba(30,158,107,0.10)] rounded-xl p-4 border border-brand-green relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(30,158,107,0.12)] font-helvetica">05</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">How do wealth managers build enduring advisory trust?</h3>
        </div>

        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.12)] font-helvetica">06</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[90%]">What are the psychological triggers behind luxury purchases?</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH CAPABILITIES SECTION ==================== -->
  <section class="market-section capabilities-section relative w-full bg-white py-[50px]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-[50px] gap-6">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-green">Research Capabilities</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Qualitative capabilities that uncover profound insights.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          From recruiting hard-to-reach executives to extracting high-impact video reels, our qualitative stack delivers boardroom-ready clarity.
        </p>
      </div>

      <!-- Capabilities Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div class="bg-white rounded-xl border border-brand-green p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Bespoke Expert Recruitment</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Tailored custom sourcing of high-caliber professionals, doctors, founders, and specialized consumers with verified screening.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Executive search</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Healthcare specialists</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Rigorous vetting</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Projective &amp; Cognitive Probing</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Metaphor elicitation, card sorting, word associations and brand personification to bypass conscious cognitive defenses.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Projective tools</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Card sorting</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Emotional roots</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-blue p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Multi-Language Moderation</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Native-speaker qualitative moderators operating across English, Hindi, Tamil, Mandarin, Arabic, Spanish and French.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Global tongues</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Local empathy</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Simultaneous audio</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-red p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Journey &amp; Persona Mapping</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Translating dozens of qualitative dialogues into actionable user personas, visual touchpoint matrices, and emotion curves.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Archetypes</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Friction matrices</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Journey maps</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-green p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Automated Transcription &amp; AI Coding</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Fast-turnaround verbatim transcripts coupled with human-verified semantic theme coding for quantitative support.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Verbatim transcripts</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Semantic coding</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Theme frequency</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Video Showreels &amp; Highlight Clips</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Professionally edited 2-3 minute video summaries delivering direct, undeniable customer quotes directly to executive stakeholders.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Video reels</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Boardroom impact</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Customer voice</span>
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
            <div class="w-2 h-2 rounded-full bg-brand-green"></div>
            <span class="text-[12px] font-semibold uppercase tracking-[0.3px] text-brand-dark">Schedule your interviews</span>
          </div>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Listen directly to the voices shaping your market.</h2>
          <p class="text-[16px] leading-[26px] text-brand-muted mt-6">Share your interview criteria or discussion guide concepts. Our qualitative strategists review feasibility, recruit vetted participants, and facilitate rich conversations.</p>
          <div class="flex flex-wrap items-center gap-4 mt-6">
            <a href="contact-us.php" class="bg-brand-green text-white text-[14px] font-semibold px-6 py-3 rounded-lg hover:bg-green-700 transition inline-block">
              Start your interview brief
            </a>
            <a href="contact-us.php" class="px-6 py-3 border border-brand-dark text-brand-dark text-[14px] font-semibold rounded-lg hover:bg-brand-dark hover:text-white transition inline-block">
              Speak to a qualitative director
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
            <circle cx="413" cy="43" r="8" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="413" cy="43" r="14" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="170" cy="106" r="10" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="170" cy="106" r="16" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="84" cy="149" r="8" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="84" cy="149" r="13" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="120" cy="234" r="8" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="120" cy="234" r="14" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="267" cy="213" r="12" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="267" cy="213" r="18" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="339" cy="85" r="11" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="339" cy="85" r="17" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="486" cy="128" r="9" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="486" cy="128" r="14" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="206" cy="320" r="9" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="206" cy="320" r="14" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="437" cy="256" r="10" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="437" cy="256" r="16" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="547" cy="298" r="8" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="547" cy="298" r="14" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
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
          b.classList.remove('active', 'bg-brand-green', 'text-white');
          b.classList.add('text-brand-muted');
        });
        this.classList.add('active', 'bg-brand-green', 'text-white');
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
