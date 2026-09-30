<?php $pageConfig = ['theme' => 'blue']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telephone &amp; CATI Survey Research - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-inter text-brand-dark bg-white overflow-x-clip">

  <!-- ==================== HEADER / NAVBAR ==================== -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <!-- ==================== HERO SECTION ==================== -->
  <section class="relative w-full bg-brand-blue overflow-hidden">
    <div class="max-w-[1240px] mx-auto py-[72px] px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <div>
        <div class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Data Collection / Telephone/CATI Survey</div>
        <h1 class="text-[52px] lg:text-[52px] font-bold leading-[60px] text-white font-helvetica mt-4">Telephone/CATI Survey</h1>
        <p class="text-[14px] leading-[22px] text-white/80 max-w-[641px] mt-4">
          High-yield Computer-Assisted Telephone Interviewing (CATI) delivering swift, structured, and audited dialogue with consumer and professional B2B targets.
        </p>
        <div class="flex flex-wrap items-center gap-4 mt-9">
          <a href="contact-us.php" class="bg-white text-brand-blue text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-blue-50 transition inline-block">
            Start Your Research
          </a>
          <a href="contact-us.php" class="border border-white/70 text-white text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-white hover:text-brand-blue transition inline-block">
            Speak to a CATI Specialist
          </a>
        </div>
      </div>
      <div class="flex justify-center lg:justify-end">
        <img src="assets/imgs/marekt-researchpage.png" alt="CATI interview center supervisor and call monitoring" class="w-full max-w-[520px] object-contain hero-image-standard">
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH METHODS BAR ==================== -->
  <div class="sticky-methods-bar sticky top-0 z-40 w-full bg-white border-b border-brand-bordergray shadow-[0_1px_4px_rgba(0,0,0,0.04)]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0 flex items-center justify-start lg:justify-center h-[68px] gap-8 overflow-x-auto tabs-scroll">
      <a href="online-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-blue transition">Online Survey</a>
      <a href="face-to-face-survey.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-blue transition">Face to Face Survey</a>
      <a href="telephone-cati-survey.php" class="text-[13px] font-semibold text-brand-blue whitespace-nowrap border-b-2 border-brand-blue pb-1">Telephone/CATI Survey</a>
      <a href="depth-interviews.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-blue transition">Depth Interviews</a>
      <a href="focus-groups.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-blue transition">Focus Groups</a>
      <a href="product-testing.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-blue transition">Product Testing</a>
      <a href="mystery-shop.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-blue transition">Mystery Shop</a>
      <a href="diary-studies.php" class="text-[13px] font-medium text-brand-muted whitespace-nowrap hover:text-brand-blue transition">Diary Studies</a>
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
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue">Methodology</span>
        </div>
        <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica">Conversational speed paired with<br>centralized quality controls.</h2>
        <p class="text-[16px] leading-[26px] text-brand-muted mt-6 max-w-[600px]">
          CATI delivers the perfect synthesis of quantitative scale and personal interaction. Our centralized dialing floors run automated sample dispositioning, real-time call whispering, and 100% audio recording for airtight quality assurance.
        </p>
        <div class="mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Techniques we use</b>
          <div class="flex flex-wrap gap-3 mt-4 max-w-[560px]">
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Predictive &amp; Preview Dialing</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Random Digit Dialing (RDD)</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">B2B List-Based Screening</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Live Call Audio Audits</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Multilingual Tele-Interviews</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Dynamic Disposition Routing</span>
          </div>
        </div>
      </div>

      <!-- Right: Best suited card -->
      <div class="w-fit max-w-full justify-self-end bg-white rounded-xl border border-brand-bordergray shadow-[0_2px_16px_rgba(16,38,51,0.08)] p-8">
        <!-- Segmented control -->
        <div class="inline-flex items-center rounded-lg bg-brand-bggray p-1 border border-brand-bordergray">
          <button class="seg-btn active bg-brand-blue text-white text-[12px] font-semibold px-4 py-2 rounded-md transition" data-panel="b2bcati">B2B Executives</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="customercati">Customer Feedback</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="opinioncati">Public Opinion</button>
        </div>

        <!-- Panel: B2B -->
        <div id="panel-b2bcati" class="best-fit-panel mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Reaching busy corporate directors &amp; managers</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Navigating receptionist and EA gatekeepers</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Securing high response from niche suppliers</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Bespoke scheduling &amp; calendar appointments</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-blue group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Customer Feedback -->
        <div id="panel-customercati" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Immediate post-transaction CSAT checks</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Understanding root causes of service churn</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Probing Net Promoter Score (NPS) detractors</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Capturing verbatim customer feedback</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-blue group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Public Opinion -->
        <div id="panel-opinioncati" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Rapid overnight sentiment polling</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">High-representation random digit dialing (RDD)</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Tracking policy awareness across regions</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Neutral, standardized interviewer moderation</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-blue group">
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
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue">Coverage</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Centralized call infrastructure with global dialing capability.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Our CATI operations leverage state-of-the-art telephonic platforms, featuring localized caller IDs, dynamic retry logic, and strict compliance with national Do-Not-Call (DNC) registries.
        </p>
      </div>

      <!-- Coverage Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-[24px]">
        <div class="bg-white rounded-xl border border-brand-blue overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-blue"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-blue/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">200+ Multilingual CATI Seats</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Native-speaking interviewers proficient in 14 Indian languages and key international business tongues.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-gold"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-gold/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Live Supervisory QA Dashboard</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Real-time listening, call-barge capability, duration anomaly alerts, and dynamic disposition monitoring.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-green overflow-hidden group hover:shadow-xl transition-all duration-200">
          <div class="h-2 bg-brand-green"></div>
          <div class="p-6">
            <div class="w-12 h-12 rounded-lg bg-brand-green/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Data Security &amp; Compliance</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Strict GDPR, ISO 27001, and TRAI compliance with automated number masking to safeguard respondent privacy.</p>
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
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue">Research solutions</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Questions best answered through telephone surveys.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Telephone surveys allow direct question clarification, gentle probing, and rapid recruitment of low-incidence decision makers who ignore online forms.
        </p>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div class="bg-[rgba(29,86,212,0.10)] rounded-xl p-4 border border-brand-blue relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(29,86,212,0.12)] font-helvetica">01</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Why did key B2B accounts decide not to renew their contracts?</h3>
        </div>

        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.12)] font-helvetica">02</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What is the national sentiment following a policy announcement?</h3>
        </div>

        <div class="bg-[rgba(30,158,107,0.10)] rounded-xl p-4 border border-brand-green relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(30,158,107,0.12)] font-helvetica">03</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">How do distributor partners rate supply chain transparency?</h3>
        </div>

        <div class="bg-[rgba(217,59,59,0.10)] rounded-xl p-4 border border-brand-red relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(217,59,59,0.12)] font-helvetica">04</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What software features do enterprise architects prioritize?</h3>
        </div>

        <div class="bg-[rgba(29,86,212,0.10)] rounded-xl p-4 border border-brand-blue relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(29,86,212,0.12)] font-helvetica">05</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What drives medical specialists to prescribe specific therapies?</h3>
        </div>

        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.12)] font-helvetica">06</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[90%]">How satisfied are high-net-worth banking customers with wealth managers?</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH CAPABILITIES SECTION ==================== -->
  <section class="market-section capabilities-section relative w-full bg-white py-[50px]">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-[50px] gap-6">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-blue">Research Capabilities</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Enterprise CATI capabilities built for conversion.</h2>
        </div>
        <p class="max-w-[605px] lg:text-right text-[16px] leading-[26px] text-brand-muted">
          Our phone research infrastructure guarantees high completion rates, respectful engagement, and rigorous compliance tracking.
        </p>
      </div>

      <!-- Capabilities Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div class="bg-white rounded-xl border border-brand-blue p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Predictive &amp; Preview Dialing</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Smart pacing engines that optimize agent connect time while honoring callback preferences and strict maximum attempts.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Predictive engine</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Scheduled callbacks</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">High connection</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Executive Gatekeeper Navigation</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Seasoned B2B tele-researchers adept at presenting credentialed studies to Executive Assistants and securing calendar holds.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Executive outreach</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">B2B protocols</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">High completion</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-green p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">100% Audio Recording &amp; QA</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Full audio capture stored on secure cloud servers with dual supervisor sign-off on open-ended response accuracy.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Full audio QA</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Verbatim checks</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Dual sign-off</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-red p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Random Digit Dialing (RDD)</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">True probability dialing across active national telecom series to build unweighted, representative public sample frames.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">RDD Frames</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Mobile &amp; Landline</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Unbiased sample</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-blue p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Automated Quota Routing</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Live system routing that stops calls to over-represented strata instantly, channeling calling power to open targets.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Dynamic quotas</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Zero over-sample</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Real-time stats</span>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Mixed-Mode CATI + Online Sync</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Push-to-web capability allowing tele-interviewers to send secure SMS stimulus links during active phone conversations.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Push-to-web</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">SMS stimulus</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Hybrid surveys</span>
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
            <div class="w-2 h-2 rounded-full bg-brand-blue"></div>
            <span class="text-[12px] font-semibold uppercase tracking-[0.3px] text-brand-dark">Launch your CATI campaign</span>
          </div>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Connect with targeted respondents over verified telephone lines.</h2>
          <p class="text-[16px] leading-[26px] text-brand-muted mt-6">Whether reaching specialized B2B professionals or conducting national public polling, our calling floors ensure speed, representative quotas, and compliant data.</p>
          <div class="flex flex-wrap items-center gap-4 mt-6">
            <a href="contact-us.php" class="bg-brand-blue text-white text-[14px] font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition inline-block">
              Start your CATI brief
            </a>
            <a href="contact-us.php" class="px-6 py-3 border border-brand-dark text-brand-dark text-[14px] font-semibold rounded-lg hover:bg-brand-dark hover:text-white transition inline-block">
              Consult a CATI supervisor
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
            <circle cx="413" cy="43" r="8" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="413" cy="43" r="14" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="170" cy="106" r="10" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="170" cy="106" r="16" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="84" cy="149" r="8" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="84" cy="149" r="13" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="120" cy="234" r="8" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="120" cy="234" r="14" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="267" cy="213" r="12" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="267" cy="213" r="18" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="339" cy="85" r="11" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="339" cy="85" r="17" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="486" cy="128" r="9" fill="#1E9E6B" opacity="0.92"></circle>
            <circle cx="486" cy="128" r="14" fill="none" stroke="#1E9E6B" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="206" cy="320" r="9" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="206" cy="320" r="14" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="437" cy="256" r="10" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="437" cy="256" r="16" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="547" cy="298" r="8" fill="#1D56D4" opacity="0.92"></circle>
            <circle cx="547" cy="298" r="14" fill="none" stroke="#1D56D4" stroke-width="1.2" opacity="0.35"></circle>
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
          b.classList.remove('active', 'bg-brand-blue', 'text-white');
          b.classList.add('text-brand-muted');
        });
        this.classList.add('active', 'bg-brand-blue', 'text-white');
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
