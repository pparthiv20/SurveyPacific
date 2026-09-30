<?php $pageConfig = ['theme' => 'green']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mystery Shopping &amp; Customer Experience Audits - Survey Pacific</title>
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
        <div class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Data Collection / Mystery Shop</div>
        <h1 class="text-[52px] lg:text-[52px] font-bold leading-[60px] text-white font-helvetica mt-4">Mystery Shop</h1>
        <p class="text-[14px] leading-[22px] text-white/80 max-w-[641px] mt-4">
          Objective, undercover evaluations of frontline customer service, retail compliance, omnichannel journeys, and competitor benchmarking across thousands of locations.
        </p>
        <div class="flex flex-wrap items-center gap-4 mt-9">
          <a href="contact-us.php" class="bg-white text-brand-green text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-green-50 transition inline-block">
            Start Your Research
          </a>
          <a href="contact-us.php" class="border border-white/70 text-white text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-white hover:text-brand-green transition inline-block">
            Speak to an Audit Director
          </a>
        </div>
      </div>
      <div class="flex justify-center lg:justify-end">
        <img src="assets/imgs/marekt-researchpage.png" alt="Mystery shopper evaluating customer experience in retail store" class="w-full max-w-[520px] object-contain hero-image-standard">
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH METHODS BAR ==================== -->
  <div class="sticky-methods-bar sticky top-0 z-40 w-full bg-white border-b border-brand-bordergray shadow-[0_1px_4px_rgba(0,0,0,0.04)]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0 flex items-center justify-start lg:justify-center h-[68px] gap-8 overflow-x-auto tabs-scroll">
      <a href="online-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Online Survey</a>
      <a href="face-to-face-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Face to Face Survey</a>
      <a href="telephone-cati-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Telephone/CATI Survey</a>
      <a href="depth-interviews.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Depth Interviews</a>
      <a href="focus-groups.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Focus Groups</a>
      <a href="product-testing.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-green transition">Product Testing</a>
      <a href="mystery-shop.php" class="text-[13px] font-semibold text-brand-green whitespace-nowrap border-b-2 border-brand-green pb-1">Mystery Shop</a>
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
        <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica">Auditing customer touchpoints<br>with verifiable factual proof.</h2>
        <p class="text-[16px] leading-[26px] text-brand-muted mt-6 max-w-[600px]">
          Executive intentions often get lost at the counter. Mystery shopping replaces internal assumptions with factual, standardized evidence collected by undercover evaluators trained in detailed retail, hospitality, banking, and digital journey scenarios.
        </p>
        <div class="mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Techniques we use</b>
          <div class="flex flex-wrap gap-3 mt-4 max-w-[560px]">
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">In-Store Undercover Audits</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Omnichannel Journey Testing</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Competitor Mystery Benchmarking</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Call Center &amp; Chat Mystery Audits</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Geotagged Photographic Proof</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Real-Time Scorecard Dashboards</span>
          </div>
        </div>
      </div>

      <!-- Right: Best suited card -->
      <div class="w-fit max-w-full justify-self-end bg-white rounded-xl border border-brand-bordergray shadow-[0_2px_16px_rgba(16,38,51,0.08)] p-8">
        <!-- Segmented control -->
        <div class="inline-flex items-center rounded-lg bg-brand-bggray p-1 border border-brand-bordergray">
          <button class="seg-btn active bg-brand-green text-white text-[12px] font-semibold px-4 py-2 rounded-md transition" data-panel="retail">Physical Retail</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="digital">Digital &amp; App</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="compliance">Compliance &amp; SOP</button>
        </div>

        <!-- Panel: Retail -->
        <div id="panel-retail" class="best-fit-panel mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Auditing greeting, upsell and checkout etiquette</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Measuring store cleanliness &amp; visual merchandising</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Verifying promotional poster mounting &amp; pricing tags</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Evaluating associate product knowledge accuracy</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-green group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Digital -->
        <div id="panel-digital" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">E-commerce order fulfillment &amp; unboxing audits</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Testing customer service chat bot &amp; live agent handoffs</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Evaluating return, replacement and refund turnaround</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">App onboarding speed &amp; OTP delivery verification</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-green group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Compliance -->
        <div id="panel-compliance" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Franchise agreement compliance enforcement</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Financial &amp; insurance advisory disclosure audits</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Age verification compliance (tobacco, alcohol, gaming)</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-green/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Data protection and customer confidentiality checks</span>
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
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Auditors active across 15,000+ retail and commercial pins.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Our mystery shopper community is screened, trained, and certified in customized brand evaluation rubrics. Every visit is corroborated with geotagged receipt proof and timestamped photo evidence.
        </p>
      </div>

      <!-- Coverage Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-[24px]">
        <div class="bg-white rounded-xl border border-brand-green overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-green"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-green/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">25,000+ Certified Shoppers</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Evaluators matching specific consumer profiles (luxury, youth, automotive, banking) across Tier-1 to Tier-3 towns.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-gold"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-gold/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Geotagged Proof &amp; Receipts</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Compulsory proof-of-visit documentation including store exterior photos, cash receipts, and time-stamped mobile GPS check-ins.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-blue overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-blue"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-blue/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Live Scorecard Dashboard</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Interactive management portal comparing branch scores, regional benchmarks, and historical compliance progress in real time.</p>
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
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Questions resolved through mystery shopping.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Measure frontline operational consistency across hundreds or thousands of retail branches and digital support touchpoints.
        </p>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div class="bg-[rgba(30,158,107,0.10)] rounded-xl p-4 border border-brand-green relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(30,158,107,0.12)] font-helvetica">01</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Are store associates actively upselling premium warranties?</h3>
        </div>

        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.12)] font-helvetica">02</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">How do franchise locations compare to corporate stores on SOPs?</h3>
        </div>

        <div class="bg-[rgba(29,86,212,0.10)] rounded-xl p-4 border border-brand-blue relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(29,86,212,0.12)] font-helvetica">03</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Is customer return and refund handling courteous and compliant?</h3>
        </div>

        <div class="bg-[rgba(217,59,59,0.10)] rounded-xl p-4 border border-brand-red relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(217,59,59,0.12)] font-helvetica">04</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">How do competitors handle pricing objections at the point of sale?</h3>
        </div>

        <div class="bg-[rgba(30,158,107,0.10)] rounded-xl p-4 border border-brand-green relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(30,158,107,0.12)] font-helvetica">05</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Are promotional displays placed in prime visibility locations?</h3>
        </div>

        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.12)] font-helvetica">06</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[90%]">What is actual call wait time and resolution speed across phone support?</h3>
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
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Auditing precision at nationwide scale.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Our technology and quality control teams ensure every mystery visit is objective, factual, and backed by verifiable audit evidence.
        </p>
      </div>

      <!-- Capabilities Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div class="bg-white rounded-xl border border-brand-green p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Scenario-Trained Shoppers</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Custom evaluator briefings covering realistic buyer personas, specific objection scripts, and precise evaluation checklists.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Pre-tested</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Custom persona</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Zero bias</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Automated Integrity Auditing</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Double-blind review by central QA editors verifying photo EXIF metadata, cashier receipts, and time spent on premise.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">EXIF checks</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Receipt match</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">100% verified</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-blue p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Omnichannel Journey Mapping</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Evaluating hybrid touchpoints: online store browsing, phone query, store visit for trial, home delivery, and after-sales support.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Omnichannel</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Cross-channel</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Full cycle</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-red p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Competitor Benchmarking</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Simultaneous mystery audits of adjacent competitor storefronts comparing customer greeting speed, discounting, and store energy.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Competitive index</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Parallel audits</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Market ranking</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-green p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Franchise Compliance Scorecards</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Legally sound auditing reports quantifying brand compliance scores, enabling fair incentive allocation or remedial training.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Franchise QA</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">SOP adherence</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Objective ranking</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Real-Time Mobile Reporting</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Evaluators complete scorecards within 2 hours of departure, populating online client executive summaries within 24 hours.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">24h turnaround</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Mobile scorecard</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Live notifications</span>
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
            <span class="text-[12px] font-semibold uppercase tracking-[0.3px] text-brand-dark">Audit your experience</span>
          </div>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Gain clear visibility into customer-facing operations.</h2>
          <p class="text-[16px] leading-[26px] text-brand-muted mt-6">Design custom mystery evaluation scorecards, set wave schedules, and receive objective evidence on your frontline execution.</p>
          <div class="flex flex-wrap items-center gap-4 mt-6">
            <a href="contact-us.php" class="bg-brand-green text-white text-[14px] font-semibold px-6 py-3 rounded-lg hover:bg-green-700 transition inline-block">
              Start your audit brief
            </a>
            <a href="contact-us.php" class="px-6 py-3 border border-brand-dark text-brand-dark text-[14px] font-semibold rounded-lg hover:bg-brand-dark hover:text-white transition inline-block">
              Speak to an audit director
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
