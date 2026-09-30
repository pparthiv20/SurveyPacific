<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Research - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="research-needs-page font-inter text-brand-dark bg-white overflow-x-hidden">

  <!-- ==================== HEADER / NAVBAR ==================== -->
  <?php include __DIR__ . '/includes/header.php'; if (false): ?>
  <header class="relative w-full bg-white/35 backdrop-blur-[16px] shadow-[0_1px_6.7px_rgba(0,0,0,0.06)] border border-white/60 h-[68px]">
    <div class="max-w-[1240px] h-full mx-auto flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center gap-[10.54px]">
        <a href="index.php"><img src="assets/imgs/logo.svg" alt="Survey Pacific" class="h-[28.21px] ml-[8px] object-contain"></a>
      </div>

      <!-- Nav Links -->
      <nav class="hidden lg:flex items-center gap-4">
        <div class="nav-dropdown">
          <button class="flex items-center gap-[2px] text-[12px] font-medium text-brand-blue">
            Customer Research
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
        </div>
        <div class="nav-dropdown">
          <button class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition">
            Social Research
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
        </div>
        <div class="nav-dropdown">
          <button class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition w-[166px]">
            User Experience Research
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
        </div>
        <div class="nav-dropdown">
          <button class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition">
            Environment Research
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
        </div>
        <div class="nav-dropdown">
          <button class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition">
            Resources
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
        </div>
        <div class="nav-dropdown">
          <button class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition">
            Company
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
        </div>
      </nav>

      <!-- CTA Button -->
      <button class="border border-brand-blue text-brand-blue text-[12px] font-semibold px-[34px] py-[10px] rounded-lg hover:bg-brand-blue hover:text-white transition">
        Explore Our Solutions
      </button>

      <!-- Mobile Menu Toggle -->
      <button id="mobileMenuBtn" class="lg:hidden text-brand-dark text-2xl">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
  </header>
  <?php endif; ?>

  <!-- ==================== HERO SECTION ==================== -->
  <section class="relative w-full bg-brand-blue overflow-hidden">
    <div class="max-w-[1240px] mx-auto py-[72px] grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <div>
        <div class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Research Needs / Customer Research</div>
        <h1 class="text-[52px] font-bold leading-[60px] text-white font-helvetica mt-4">Customer Research</h1>
        <p class="text-[14px] leading-[22px] text-white/80 max-w-[641px] mt-4">
          Understand customer needs, experiences and choices with evidence that helps your team improve relationships, services and products.
        </p>
        <div class="flex items-center gap-4 mt-9">
          <a href="contact-us.php" class="bg-white text-brand-blue text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-blue-50 transition inline-block">
            Start Your Research
          </a>
          <a href="contact-us.php" class="border border-white/70 text-white text-[14px] font-semibold px-[34px] py-2.5 rounded-lg hover:bg-white hover:text-brand-blue transition inline-block">
            Speak to a Research Expert
          </a>
        </div>
      </div>
      <div class="flex justify-center lg:justify-end">
        <img src="assets/imgs/customer-expereince.png" alt="Customer experience research and journey mapping" class="w-full max-w-[520px] object-cover hero-image-standard">
      </div>
    </div>
  </section>

  <main class="market-research-sections">

  <!-- ==================== METHODOLOGY SECTION ==================== -->
  <section id="methodology" class="market-section methodology-section relative bg-white overflow-hidden py-[50px]">
    <div class="absolute inset-0" aria-hidden="true">
      <img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-[1240px] mx-auto grid grid-cols-2 gap-[80px] items-end">
      <!-- Left: Methodology text -->
      <div>
        <div class="flex justify-between items-end mb-[40px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-navy">Customer Understanding</span>
        </div>
        <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica">Understand what customers need<br>and what shapes their choices.</h2>
        <p class="text-[16px] leading-[26px] text-brand-muted mt-6 max-w-[600px]">
          Customer research brings together what people say, feel and do. It helps uncover needs, expectations and moments of friction so teams can improve the experiences that matter.
        </p>
        <div class="mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Techniques we use</b>
          <div class="flex flex-wrap gap-3 mt-4 max-w-[560px]">
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">In-depth interviews</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Focus groups</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Customer journey mapping</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Customer satisfaction tracking</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">Segmentation studies</span>
            <span class="px-4 py-2 rounded-full border border-brand-bordergray bg-brand-bggray text-[13px] font-medium text-brand-dark">In-context observation</span>
          </div>
        </div>
      </div>

      <!-- Right: Best suited card -->
      <div class="w-fit max-w-full justify-self-end bg-white rounded-xl border border-brand-bordergray shadow-[0_2px_16px_rgba(16,38,51,0.08)] p-8">
        <!-- Segmented control -->
        <div class="inline-flex items-center rounded-lg bg-brand-bggray p-1 border border-brand-bordergray">
          <button class="seg-btn active bg-brand-blue text-white text-[12px] font-semibold px-4 py-2 rounded-md transition" data-panel="qual">Qualitative</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="quant">Quantitative</button>
          <button class="seg-btn text-brand-muted text-[12px] font-semibold px-4 py-2 rounded-md transition hover:text-brand-dark" data-panel="mixed">Mixed Method</button>
        </div>

        <!-- Panel: Qualitative -->
        <div id="panel-qual" class="best-fit-panel mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Exploring new territory</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Testing early concepts</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Understanding barriers</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Building empathy</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-blue group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Quantitative -->
        <div id="panel-quant" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Measuring prevalence</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Testing at scale</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Tracking change over time</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Comparing segments</span>
            </li>
          </ul>
          <a href="contact-us.php" class="inline-flex items-center gap-2 mt-8 text-[14px] font-bold text-brand-blue group">
            Discuss this approach
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Panel: Mixed Method -->
        <div id="panel-mixed" class="best-fit-panel hidden mt-8">
          <b class="text-[14px] font-bold uppercase tracking-[0.3px] text-brand-textdark">Best suited for</b>
          <ul class="mt-5 space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Triangulating evidence</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Explaining the why</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Validating hypotheses</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-blue/10 flex items-center justify-center">
                <svg class="w-3.5 h-3.5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[15px] font-medium text-brand-dark">Balancing depth and breadth</span>
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
  <section id="coverage" class="market-section coverage-section bg-white">
    <div class="max-w-[1240px] mx-auto">
      <!-- Section Header -->
      <div class="flex justify-between items-end mb-[50px]">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-navy">Customer Insight Coverage</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Customer insight across audiences and experiences.</h2>
        </div>
        <p class="max-w-[605px] text-right text-[16px] leading-[26px] text-brand-muted">
          We combine customer interviews, surveys and observation to understand experiences across relevant groups, regions and service contexts.
        </p>
      </div>

      <!-- Coverage Cards -->
      <div class="grid grid-cols-3 gap-[24px] max-w-[1240px]">
        <!-- Card 1 - India -->
        <div class="bg-white rounded-xl border border-brand-blue overflow-hidden group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <div class="h-2 bg-brand-blue"></div>
          <div class="p-0">
            <div class="w-12 h-12 rounded-lg bg-brand-blue/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21s7-5.5 7-11a7 7 0 10-14 0c0 5.5 7 11 7 11zm0-8.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Customer needs and segments</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">We recruit relevant customers and prospective customers, using careful screening to understand needs across priority groups.</p>
          </div>
        </div>

        <!-- Card 2 - International -->
        <div class="bg-white rounded-xl border border-brand-gold overflow-hidden group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <div class="h-2 bg-brand-gold"></div>
          <div class="p-0">
            <div class="w-12 h-12 rounded-lg bg-brand-gold/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 12h16.5M12 3.75a16.5 16.5 0 010 16.5M12 3.75c2.6 2 4 5 4 8.25s-1.4 6.25-4 8.25M12 3.75c-2.6 2-4 5-4 8.25s1.4 6.25 4 8.25"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Customer experience research</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Interviews, surveys and observation reveal the moments that build satisfaction, trust and loyalty.</p>
          </div>
        </div>

        <!-- Card 3 - Actionable customer evidence -->
        <div class="bg-white rounded-xl border border-brand-green overflow-hidden group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <div class="h-2 bg-brand-green"></div>
          <div class="p-0">
            <div class="w-12 h-12 rounded-lg bg-brand-green/10 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0 0c-2.5-2-4-5-4-9s1.5-7 4-9c2.5 2 4 5 4 9s-1.5 7-4 9z"/></svg>
            </div>
            <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Actionable customer evidence</h3>
            <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">We connect customer feedback to practical opportunities for improving services, products and customer relationships.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH SOLUTIONS SECTION ==================== -->
  <section id="solutions" class="market-section solutions-section bg-white">
    <div class="max-w-[1240px] mx-auto">
      <!-- Section Header -->
      <div class="flex justify-between items-end mb-[50px]">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-navy">Research solutions</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Questions worth answering about your customers.</h2>
        </div>
        <p class="max-w-[605px] text-right text-[16px] leading-[26px] text-brand-muted">
          Strong research starts before the questionnaire. It begins by defining the decision, the people who can answer it and the evidence needed to move with confidence.
        </p>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-3 gap-[25px]">
        <!-- Card 01 -->
        <div class="bg-[rgba(29,86,212,0.10)] rounded-xl p-4 border border-brand-blue relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(29,86,212,0.10)] font-helvetica">01</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What matters most to our customers?</h3>
        </div>

        <!-- Card 02 -->
        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.10)] font-helvetica">02</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Which customer groups have different needs?</h3>
        </div>

        <!-- Card 03 -->
        <div class="bg-[rgba(30,158,107,0.10)] rounded-xl p-4 border border-brand-green relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(30,158,107,0.10)] font-helvetica">03</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Where do customers experience friction?</h3>
        </div>

        <!-- Card 04 -->
        <div class="bg-[rgba(217,59,59,0.10)] rounded-xl p-4 border border-brand-red relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(217,59,59,0.10)] font-helvetica">04</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">What shapes satisfaction, trust and repeat use?</h3>
        </div>

        <!-- Card 05 -->
        <div class="bg-[rgba(29,86,212,0.10)] rounded-xl p-4 border border-brand-blue relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(29,86,212,0.10)] font-helvetica">05</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[88%]">Which improvements will make the biggest difference?</h3>
        </div>

        <!-- Card 06 -->
        <div class="bg-[rgba(232,184,48,0.10)] rounded-xl p-4 border border-brand-gold relative group hover:shadow-lg transition h-[180px] flex flex-col justify-between">
          <span class="absolute top-2 left-6 text-[56px] font-bold text-[rgba(232,184,48,0.10)] font-helvetica">06</span>
          <h3 class="text-[20px] font-bold leading-7 text-brand-textdark font-helvetica mt-[66px] ml-3 max-w-[90%]">How can customer insight guide our next decision?</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH CAPABILITIES SECTION ==================== -->
  <section id="capabilities" class="market-section capabilities-section relative w-full bg-white">
    <div class="max-w-[1240px] py-[100px] mx-auto">
      <!-- Section Header -->
      <div class="flex justify-between items-end mb-[50px]">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-navy">Research Capabilities</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Customer research shaped around your decisions.</h2>
        </div>
        <p class="max-w-[605px] text-right text-[16px] leading-[26px] text-brand-muted">
          Each research brief calls for a different approach. We select method, audience and fieldwork based on what the decision actually requires — not what is convenient.
        </p>
      </div>

      <!-- Capabilities Grid -->
      <div class="grid grid-cols-3 gap-[25px]">
        <!-- Card 1 - Mixed-Method -->
        <div class="bg-white rounded-xl border border-brand-blue p-6 group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Customer Needs &amp; Segmentation</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Explore motivations, expectations and unmet needs across customer groups.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Needs exploration</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Customer profiles</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Segmentation</span>
          </div>
        </div>

        <!-- Card 2 - B2B & Specialist -->
        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Customer Experience Research</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Map customer journeys, identify friction and understand the interactions that shape experience.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Journey mapping</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Touchpoints</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Service experience</span>
          </div>
        </div>

        <!-- Card 3 - Qualitative -->
        <div class="bg-white rounded-xl border border-brand-green p-6 group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Customer Satisfaction &amp; Loyalty</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Measure satisfaction, understand loyalty drivers and identify reasons customers may leave.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Satisfaction</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Retention</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(30,158,107,0.12)] border border-[rgba(30,158,107,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Loyalty drivers</span>
          </div>
        </div>

        <!-- Card 4 - Customer Journey Research -->
        <div class="bg-white rounded-xl border border-brand-red p-6 group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Customer Journey Research</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Understand customer journeys, identify unmet needs and prioritize improvement opportunities.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Journey mapping</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Pain points</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(217,59,59,0.12)] border border-[rgba(217,59,59,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Priorities</span>
          </div>
        </div>

        <!-- Card 5 - Quantitative -->
        <div class="bg-white rounded-xl border border-brand-blue p-6 group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Customer Surveys &amp; Tracking</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Use structured customer surveys to measure needs, experience and change over time.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Online surveys</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">CATI</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">CAPI</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(29,86,212,0.12)] border border-[rgba(29,86,212,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Customer tracking</span>
          </div>
        </div>

        <!-- Card 6 - Brand & Consumer -->
        <div class="bg-white rounded-xl border border-brand-gold p-6 group hover:shadow-xl transition-all duration-200 [transition-timing-function:cubic-bezier(0.42,0,1,1)]">
          <h3 class="text-[22px] font-bold leading-7 text-brand-textdark font-helvetica">Brand &amp; Customer Perception</h3>
          <p class="text-[14px] font-medium leading-[22px] text-[rgba(0,0,0,0.65)] tracking-[0.3px] mt-3">Understand how customers see your brand, evaluate alternatives and make choices.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Brand perception</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Customer choice</span>
            <span class="px-3 py-1 rounded-2xl bg-[rgba(232,184,48,0.12)] border border-[rgba(232,184,48,0.2)] text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)]">Consideration</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/selected-experience.php'; ?>

  </main>

  <!-- ==================== CTA SECTION ==================== -->
  <section id="start-research" class="relative w-full">
    <div class="absolute inset-0">
      <img src="assets/imgs/gradient-bg.png" alt="CTA Background" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-[1240px] mx-auto">
      <div class="flex justify-between items-end">
        <!-- Left Content -->
        <div class="max-w-[608px]">
          <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white/72 shadow-[0_2px_16px_rgba(16,38,51,0.08)] border border-white/55 backdrop-blur-[12px] mb-4">
            <div class="w-2 h-2 rounded-full bg-gradient-to-br from-brand-red via-brand-blue to-brand-gold"></div>
            <span class="text-[12px] font-semibold uppercase tracking-[0.3px] text-brand-dark">Ready to start?</span>
          </div>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Tell us what you need to understand about your customers.</h2>
          <p class="text-[16px] leading-[26px] text-brand-muted mt-6">We'll help shape a research approach that fits the decision — before you commit to a methodology or budget.</p>
          <div class="flex items-center gap-4 mt-6">
            <a href="contact-us.php" class="bg-brand-blue text-white text-[14px] font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition inline-block">
              Discuss your customer research
            </a>
            <a href="contact-us.php" class="px-6 py-3 border border-brand-dark text-brand-dark text-[14px] font-semibold rounded-lg hover:bg-brand-dark hover:text-white transition inline-block">
              Speak to a researcher
            </a>
          </div>
        </div>

        <!-- Right Diagram -->
        <div class="w-[608px] h-[421px] relative overflow-hidden">
          <svg width="608" height="421" viewBox="0 0 608 421" xmlns="http://www.w3.org/2000/svg">
            <!-- CONNECTIONS -->
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

            <!-- NODES -->
            <circle cx="413" cy="43" r="8" fill="#1E56D5" opacity="0.92"></circle>
            <circle cx="413" cy="43" r="14" fill="none" stroke="#1E56D5" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="170" cy="106" r="10" fill="#D94141" opacity="0.92"></circle>
            <circle cx="170" cy="106" r="16" fill="none" stroke="#D94141" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="84" cy="149" r="8" fill="#23A06D" opacity="0.92"></circle>
            <circle cx="84" cy="149" r="13" fill="none" stroke="#23A06D" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="120" cy="234" r="8" fill="#1E56D5" opacity="0.92"></circle>
            <circle cx="120" cy="234" r="14" fill="none" stroke="#1E56D5" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="267" cy="213" r="12" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="267" cy="213" r="18" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="339" cy="85" r="11" fill="#1E56D5" opacity="0.92"></circle>
            <circle cx="339" cy="85" r="17" fill="none" stroke="#1E56D5" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="486" cy="128" r="9" fill="#23A06D" opacity="0.92"></circle>
            <circle cx="486" cy="128" r="14" fill="none" stroke="#23A06D" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="583" cy="170" r="9" fill="#D94141" opacity="0.92"></circle>
            <circle cx="583" cy="170" r="15" fill="none" stroke="#D94141" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="206" cy="320" r="9" fill="#23A06D" opacity="0.92"></circle>
            <circle cx="206" cy="320" r="14" fill="none" stroke="#23A06D" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="437" cy="256" r="10" fill="#D94141" opacity="0.92"></circle>
            <circle cx="437" cy="256" r="16" fill="none" stroke="#D94141" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="547" cy="298" r="8" fill="#E8B830" opacity="0.92"></circle>
            <circle cx="547" cy="298" r="14" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"></circle>
            <circle cx="73" cy="363" r="9" fill="#D94141" opacity="0.92"></circle>
            <circle cx="73" cy="363" r="14" fill="none" stroke="#D94141" stroke-width="1.2" opacity="0.35"></circle>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FOOTER ==================== -->
  <?php if (false): ?><footer class="relative bg-white overflow-hidden" style="height:469px">
    <!-- Footer background vector -->
    <div class="absolute inset-0">
      <img src="assets/imgs/svg footer.svg" alt="" class="w-full h-full object-contain object-bottom">
    </div>

    <div class="relative h-full px-[101px] pt-[62px]">
      <div class="flex justify-between">
        <!-- Logo & Tagline -->
        <div class="max-w-[316px]">
          <!-- Logo -->
          <div class="flex items-center gap-[10.54px] mb-6">
            <a href="index.php"><img src="assets/imgs/logo.svg" alt="Survey Pacific" class="h-[35.26px] object-contain"></a>
          </div>
          <h3 class="text-[30px] font-bold leading-9 text-brand-textdark font-helvetica">People make markets.</h3>
          <p class="text-[14px] leading-[22.75px] text-[#656363] mt-2 max-w-[300px]">Independent research and data collection for better decisions.</p>

          <!-- Social Icons -->
          <div class="flex gap-[46px] mt-[30px]">
            <img src="assets/imgs/instaicon.png" alt="Instagram" class="w-[30px] h-[30px] object-contain">
            <img src="assets/imgs/linkedin.png" alt="LinkedIn" class="w-[30px] h-[30px] object-contain">
          </div>
        </div>

        <!-- Footer Links -->
        <div class="grid grid-cols-4 gap-[32px]">
          <!-- Research -->
          <div class="w-[171.6px]">
            <h4 class="text-[12px] font-bold uppercase tracking-[1.2px] text-[rgba(16,38,51,0.79)] font-helvetica">Research</h4>
            <ul class="mt-5 space-y-3">
              <li><a href="market-research.php" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Market Research</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">User Research</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Social &amp; Public Research</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Brand &amp; Consumer Insights</a></li>
            </ul>
          </div>

          <!-- Data Collection -->
          <div class="w-[171.6px]">
            <h4 class="text-[12px] font-bold uppercase tracking-[1.2px] text-[rgba(16,38,51,0.79)] font-helvetica">Data Collection</h4>
            <ul class="mt-5 space-y-3">
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Online Surveys</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">CATI &amp; Telephone</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Face-to-Face &amp; CAPI</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Qualitative Research</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Respondent Recruitment</a></li>
            </ul>
          </div>

          <!-- Company -->
          <div class="w-[171.6px]">
            <h4 class="text-[12px] font-bold uppercase tracking-[1.2px] text-[rgba(16,38,51,0.79)] font-helvetica">Company</h4>
            <ul class="mt-5 space-y-3">
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">About Survey Pacific</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Leadership</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Global Reach</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Careers</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Research Ethics</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Contact</a></li>
            </ul>
          </div>

          <!-- Participants & Partners -->
          <div class="w-[171.6px]">
            <h4 class="text-[12px] font-bold uppercase tracking-[1.2px] text-[rgba(16,38,51,0.79)] font-helvetica">Participants &amp; Partners</h4>
            <ul class="mt-5 space-y-3">
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Join WeSample</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Become a Supplier</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Back to Top Button -->
      <button id="backToTop" class="fixed bottom-[30px] right-[30px] z-50 w-[52px] h-[52px] bg-brand-blue rounded-full shadow-[0_5.76px_5.76px_rgba(0,0,0,0.15)] flex items-center justify-center hover:bg-blue-700 transition opacity-0 invisible">
        <svg class="w-6 h-6 text-white transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
      </button>

      <!-- Copyright -->
      <div class="absolute inset-x-[101px] bottom-[28px] flex justify-between items-center">
        <p class="text-[12px] text-white font-normal leading-4">&copy; 2026 Survey Pacific Private Limited. All rights reserved.</p>
        <div class="flex gap-6">
          <a href="#" class="text-[12px] text-[#D4DAE0] hover:text-white transition">Privacy Policy</a>
          <a href="#" class="text-[12px] text-[#D4DAE0] hover:text-white transition">Terms of Use</a>
          <a href="#" class="text-[12px] text-[#D4DAE0] hover:text-white transition">Cookie Policy</a>
          <a href="#" class="text-[12px] text-[#D4DAE0] hover:text-white transition">Sitemap</a>
        </div>
      </div>
    </div>
  </footer><?php endif; include __DIR__ . '/includes/footer.php'; ?>

  <script>
    // Best suited for toggle
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
