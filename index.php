<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey Pacific - Global Research Execution Partner</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="homepage font-inter text-brand-dark bg-white overflow-x-hidden">

  <!-- ==================== HEADER / NAVBAR ==================== -->
  <?php include __DIR__ . '/includes/header.php'; if (false): ?>
  <header class="relative w-full bg-white/35 backdrop-blur-[16px] shadow-[0_1px_6.7px_rgba(0,0,0,0.06)] border border-white/60 h-[68px]">
    <div class="max-w-[1240px] h-full mx-auto flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center gap-[10.54px]">
        <img src="assets/imgs/logo.svg" alt="Survey Pacific" class="h-[28.21px] ml-[8px] object-contain">
      </div>

      <!-- Nav Links -->
      <nav class="hidden lg:flex items-center gap-4">
        <div class="nav-dropdown">
          <a href="market-research.php" class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition">
            Market Research
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </a>
        </div>
        <div class="nav-dropdown">
          <button class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition">
            Social Research
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
        </div>
        <div class="nav-dropdown">
          <a href="qualitative-research.php" class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition w-[166px]">
            User Experience Research
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </a>
        </div>
        <div class="nav-dropdown">
          <button class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition">
            Environment Research
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
        </div>
        <div class="nav-dropdown">
          <a href="retail-market.php" class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-blue transition">
            Resources
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </a>
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

  <!-- ==================== SERVICES BAR ==================== -->
  <div id="servicesBar" class="absolute top-[672px] left-0 w-full h-[68px] bg-brand-lightblue shadow-[0_0_4.3px_rgba(0,0,0,0.25)] rounded-bl-[12px] z-40">
    <div class="max-w-[1240px] h-full mx-auto px-4 flex items-center justify-center gap-7 overflow-x-auto tabs-scroll">
      <a href="online-survey.php" class="text-[14px] font-medium whitespace-nowrap text-brand-dark hover:text-brand-blue transition">Online Survey</a>
      <a href="face-to-face-survey.php" class="text-[14px] font-medium whitespace-nowrap text-brand-dark hover:text-brand-blue transition">Face to Face Survey</a>
      <a href="telephone-cati-survey.php" class="text-[14px] font-medium whitespace-nowrap text-brand-dark hover:text-brand-blue transition">Telephone/CATI Survey</a>
      <a href="depth-interviews.php" class="text-[14px] font-medium whitespace-nowrap text-brand-dark hover:text-brand-blue transition">Depth Interviews</a>
      <a href="focus-groups.php" class="text-[14px] font-medium whitespace-nowrap text-brand-dark hover:text-brand-blue transition">Focus Groups</a>
      <a href="product-testing.php" class="text-[14px] font-medium whitespace-nowrap text-brand-dark hover:text-brand-blue transition">Product Testing</a>
      <a href="mystery-shop.php" class="text-[14px] font-medium whitespace-nowrap text-brand-dark hover:text-brand-blue transition">Mystery Shop</a>
      <a href="diary-studies.php" class="text-[14px] font-medium whitespace-nowrap text-brand-dark hover:text-brand-blue transition">Diary Studies</a>
    </div>
  </div>

  <!-- ==================== HERO SECTION ==================== -->
  <section class="relative w-full h-[610px]">
    <!-- Background Image -->
    <div class="absolute inset-0">
      <img src="assets/imgs/gradient-bg.png" alt="Hero Background" class="w-full h-full object-cover opacity-90">
    </div>

    <div class="relative max-w-[1240px] h-full mx-auto pt-[89px] pb-[80px]">
      <!-- Left Content -->
      <div class="max-w-[737px] flex flex-col gap-6">
        <!-- Badge -->
        <div>
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[rgba(49,88,255,0.08)] shadow-[0_4px_4px_rgba(142,163,174,0.1)_inset] border border-[rgba(49,88,255,0.2)]">
            <div class="w-[6px] h-[6px] bg-[#00C337] rounded-sm"></div>
            <span class="text-[12px] font-bold uppercase text-[rgba(0,0,0,0.67)]">Global Research Execution Partner</span>
          </div>
        </div>

        <!-- Heading -->
        <div>
          <p class="text-[24px] font-normal leading-[30px] text-brand-dark font-helvetica">Welcome to</p>
          <h1 class="text-[64px] font-bold leading-[70px] text-brand-dark font-helvetica">Survey Pacific</h1>
        </div>

        <!-- Description -->
        <p class="text-[14px] leading-[22px] text-[#464646] max-w-[641px]">
          From markets and users to society, the environment and beyond, we design research, collect evidence and deliver insights that drive decisions.
        </p>

        <!-- Stats Card -->
        <div class="bg-white/20 backdrop-blur-[18px] shadow-[inset_0_1px_1px_rgba(255,255,255,0.4),0_8px_32px_rgba(16,38,51,0.15)] rounded-sm w-[537px] h-[95px] p-4 border border-white/30">
          <div class="flex items-center h-full">
            <div class="w-[160px] flex flex-col items-center gap-0 border-r border-[rgba(81.93,108.62,122.60,0.44)]">
              <span class="text-[30px] font-bold helvetica text-brand-blue">50+</span>
              <span class="text-[12px] font-semibold text-[#111318] opacity-70 text-center">Countries Served</span>
            </div>
            <div class="w-[193px] flex flex-col items-center gap-0 border-r border-[#868F95]">
              <span class="text-[30px] font-bold font-helvetica text-brand-red">4M+</span>
              <span class="text-[12px] font-semibold text-[#111318] opacity-70 text-center">Respondents Accessed</span>
            </div>
            <div class="w-[140px] flex flex-col items-center gap-0">
              <span class="text-[30px] font-bold font-helvetica text-brand-gold">24/7</span>
              <span class="text-[12px] font-semibold text-[#111318] opacity-70 text-center">Global<br> Support </span></span>
            </div>
          </div>
        </div>

        <!-- CTA Button -->
        <a href="contact-us.php" class="bg-brand-blue text-white text-[14px] font-semibold px-[34px] py-2.5 rounded-lg w-fit hover:bg-blue-700 transition inline-block">
          Start Your Research
        </a>
      </div>

      <!-- Right Side Images -->
      <div class="absolute right-[0px] top-[95px] flex flex-col gap-4">
        <img src="assets/imgs/hero3.png" alt="Research" class="w-[234px] h-[211px] rounded-lg border border-[rgba(0,0,0,0.21)] object-cover">
        <img src="assets/imgs/hero2.png" alt="Research" class="w-[234px] h-[249px] rounded-lg border border-[rgba(0,0,0,0.21)] object-cover">
      </div>

      <!-- Beige Card -->
      <div class="absolute right-[258px] top-[222px] w-[220px] h-[222px] bg-[#F2EFE8] rounded-lg border border-[rgba(0,0,0,0.21)] overflow-hidden">
        <img src="assets/imgs/hero1.png" alt="Data" class="w-full h-full object-cover opacity-80">
      </div>

      <!-- Rating Card -->
      <div class="absolute right-[258px] top-[450px] w-[220px] h-[68px] bg-brand-dark rounded-lg p-2.5">
        <div class="flex items-center gap-[18px]">
          <div class="w-12 h-12 bg-[rgba(146.69,180.28,197.87,0.48)] rounded-full flex items-center justify-center">
            <span class="text-white text-[20px] font-extrabold font-helvetica leading-[21px]">4.7</span>
          </div>
          <div class="flex flex-col">
            <span class="text-white text-[16px] font-semibold leading-[24px]">Overall rating</span>
            <span class="text-white text-[10px] font-normal leading-[10px] opacity-63">200+ reviews</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RESEARCH SOLUTIONS ==================== -->
  <section class="homepage-research-section py-[100px] relative"> 
    <div class="max-w-[1240px] mx-auto">
      <!-- Section Header -->
      <div class="flex justify-between items-end mb-[50px]">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-navy">Research solutions</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-2">Research built around the questions that matter.</h2>
        </div>
        <p class="max-w-[604px] text-right text-[16px] leading-[26px] text-brand-muted">
          Different questions require different evidence. Our research solutions combine the right methodology, people and expertise to move decisions forward with confidence.
        </p>
      </div>

      <!-- Research Cards Grid -->
      <div class="grid grid-cols-3 gap-[24px] max-w-[1240px]">
        <!-- Card 01 - Market Research -->
        <a href="market-research.php" class="research-card-wrapper w-[397px] max-w-full bg-[rgba(29,86,212,0.10)] rounded-xl px-4 py-[10px] border border-brand-blue relative group hover:shadow-lg transition h-[208px] flex flex-col justify-between hover:!bg-[#1D56D4] hover:!border-[#1D56D4]">
          <div>
            <span class="research-card-number block text-[66px] leading-[66px] font-bold text-[rgba(29,86,212,0.10)] font-helvetica transition-colors duration-300">01</span>
            <h3 class="research-card-title text-[20px] font-bold leading-7 text-brand-dark font-helvetica mt-1 transition-colors duration-300">Market Research</h3>
            <p class="research-card-desc text-[14px] italic leading-5 text-[rgba(0,0,0,0.80)] mt-[8px] transition-colors duration-300">Commercial teams use this route to size demand, test positioning and decide where to invest.</p>
            <div class="research-tag absolute bottom-[10px] left-4 inline-flex items-center px-2.5 py-[5px] rounded-2xl transition-colors duration-300 bg-[rgba(29,86,212,0.20)] border border-[rgba(29,86,212,0.25)]">
              <span class="research-tag-text text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)] transition-colors duration-300">Growth, Launch &amp; Investment</span>
            </div>
          </div>
          <svg class="research-arrow absolute bottom-[10px] right-4 w-[16px] h-[20px] text-brand-blue" fill="none" viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>

        <!-- Card 02 - Social Research -->
        <a href="social-research.php" class="research-card-wrapper w-[397px] max-w-full bg-[rgba(232,184,48,0.10)] rounded-xl px-4 py-[10px] border border-brand-gold relative group hover:shadow-lg transition h-[208px] flex flex-col justify-between hover:!bg-[#E8B830] hover:!border-[#E8B830]">
          <div>
            <span class="research-card-number block text-[66px] leading-[66px] font-bold text-[rgba(232,184,48,0.10)] font-helvetica transition-colors duration-300">02</span>
            <h3 class="research-card-title text-[20px] font-bold leading-7 text-brand-dark font-helvetica mt-1 transition-colors duration-300">Social Research</h3>
            <p class="research-card-desc text-[14px] italic font-medium leading-5 text-[rgba(0,0,0,0.80)] mt-[8px] transition-colors duration-300">Policy, development and social teams rely on it to understand people, communities and clear results.</p>
            <div class="research-tag absolute bottom-[10px] left-4 inline-flex items-center px-2.5 py-[5px] rounded-2xl transition-colors duration-300 bg-[rgba(232,184,48,0.20)] border border-[rgba(232,184,48,0.25)]">
              <span class="research-tag-text text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)] transition-colors duration-300">Policy, Public &amp; Development Work</span>
            </div>
          </div>
          <svg class="research-arrow absolute bottom-[10px] right-4 w-[16px] h-[20px] text-brand-gold" fill="none" viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>

        <!-- Card 03 - Environment Research -->
        <a href="environment-research.php" class="research-card-wrapper w-[397px] max-w-full bg-[rgba(30,158,107,0.10)] rounded-xl px-4 py-[10px] border border-brand-green relative group hover:shadow-lg transition h-[208px] flex flex-col justify-between hover:!bg-[#1E9E6B] hover:!border-[#1E9E6B]">
          <div>
            <span class="research-card-number block text-[66px] leading-[66px] font-bold text-[rgba(30,158,107,0.10)] font-helvetica transition-colors duration-300">03</span>
            <h3 class="research-card-title text-[20px] font-bold leading-7 text-brand-dark font-helvetica mt-1 transition-colors duration-300">Environment Research</h3>
            <p class="research-card-desc text-[14px] italic font-medium leading-5 text-[rgba(0,0,0,0.80)] mt-[8px] transition-colors duration-300">Use this route when decisions depend on place, climate, resilience and field-ready evidence.</p>
            <div class="research-tag absolute bottom-[10px] left-4 inline-flex items-center px-2.5 py-[5px] rounded-2xl transition-colors duration-300 bg-[rgba(30,158,107,0.20)] border border-[rgba(30,158,107,0.25)]">
              <span class="research-tag-text text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)] transition-colors duration-300">Planning, Climate &amp; Place</span>
            </div>
          </div>
          <svg class="research-arrow absolute bottom-[10px] right-4 w-[16px] h-[20px] text-brand-green" fill="none" viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>

        <!-- Card 04 - Data & Surveys -->
        <a href="data-surveys.php" class="research-card-wrapper w-[397px] max-w-full bg-[rgba(217,59,59,0.10)] rounded-xl px-4 py-[10px] border border-brand-red relative group hover:shadow-lg transition h-[208px] flex flex-col justify-between hover:!bg-[#D93B3B] hover:!border-[#D93B3B]">
          <div>
            <span class="research-card-number block text-[66px] leading-[66px] font-bold text-[rgba(217,59,59,0.10)] font-helvetica transition-colors duration-300">04</span>
            <h3 class="research-card-title text-[20px] font-bold leading-7 text-brand-dark font-helvetica mt-1 transition-colors duration-300">Data &amp; Surveys</h3>
            <p class="research-card-desc text-[14px] italic font-medium leading-5 text-[rgba(0,0,0,0.80)] mt-[8px] transition-colors duration-300">Need structured field or survey data? We run the route across markets, audiences with control.</p>
            <div class="research-tag absolute bottom-[10px] left-4 inline-flex items-center px-2.5 py-[5px] rounded-2xl transition-colors duration-300 bg-[rgba(217,59,59,0.20)] border border-[rgba(217,59,59,0.25)]">
              <span class="research-tag-text text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)] transition-colors duration-300">Survey Delivery &amp; Fieldwork</span>
            </div>
          </div>
          <svg class="research-arrow absolute bottom-[10px] right-4 w-[16px] h-[20px] text-brand-red" fill="none" viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>

        <!-- Card 05 - User Research -->
        <a href="user-research.php" class="research-card-wrapper w-[397px] max-w-full bg-[rgba(29,86,212,0.10)] rounded-xl px-4 py-[10px] border border-brand-blue relative group hover:shadow-lg transition h-[208px] flex flex-col justify-between hover:!bg-[#1D56D4] hover:!border-[#1D56D4]">
          <div>
            <span class="research-card-number block text-[66px] leading-[66px] font-bold text-[rgba(29,86,212,0.10)] font-helvetica transition-colors duration-300">05</span>
            <h3 class="research-card-title text-[20px] font-bold leading-7 text-brand-dark font-helvetica mt-1 transition-colors duration-300">User Research</h3>
            <p class="research-card-desc text-[14px] italic font-medium leading-5 text-[rgba(0,0,0,0.80)] mt-[8px] transition-colors duration-300">Understand how people experience your products, services and digital journeys.</p>
            <div class="research-tag absolute bottom-[10px] left-4 inline-flex items-center px-2.5 py-[5px] rounded-2xl transition-colors duration-300 bg-[rgba(29,86,212,0.20)] border border-[rgba(29,86,212,0.25)]">
              <span class="research-tag-text text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)] transition-colors duration-300">User Insights · Usability · User Journeys</span>
            </div>
          </div>
          <svg class="research-arrow absolute bottom-[10px] right-4 w-[16px] h-[20px] text-brand-blue" fill="none" viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>

        <!-- Card 06 - Analytics & Reports -->
        <a href="analytics-reports.php" class="research-card-wrapper w-[397px] max-w-full bg-[rgba(232,184,48,0.10)] rounded-xl px-4 py-[10px] border border-brand-gold relative group hover:shadow-lg transition h-[208px] flex flex-col justify-between hover:!bg-[#E8B830] hover:!border-[#E8B830]">
          <div>
            <span class="research-card-number block text-[66px] leading-[66px] font-bold text-[rgba(232,184,48,0.10)] font-helvetica transition-colors duration-300">06</span>
            <h3 class="research-card-title text-[20px] font-bold leading-7 text-brand-dark font-helvetica mt-1 transition-colors duration-300">Analytics &amp; Reports</h3>
            <p class="research-card-desc text-[14px] italic font-medium leading-5 text-[rgba(0,0,0,0.80)] mt-[8px] transition-colors duration-300">Understand how people experience your products, services and digital journeys.</p>
            <div class="research-tag absolute bottom-[10px] left-4 inline-flex items-center px-2.5 py-[5px] rounded-2xl transition-colors duration-300 bg-[rgba(232,184,48,0.20)] border border-[rgba(232,184,48,0.25)]">
              <span class="research-tag-text text-[10px] font-semibold uppercase text-[rgba(0,0,0,0.86)] transition-colors duration-300">Data Analysis · Insights · Reporting</span>
            </div>
          </div>
          <svg class="research-arrow absolute bottom-[10px] right-4 w-[16px] h-[20px] text-brand-gold" fill="none" viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>

      <!-- Subtext -->
      <p class="text-center text-[14px] font-medium leading-[20px] text-[#565B5F] mt-[24px]">
        Work with us end-to-end, or bring us in where you need us most.
      </p>
    </div>
  </section>

  <!-- ==================== CAPABILITIES SECTION ==================== -->
  <section class="capabilities-home-section relative w-full">
    <div class="absolute inset-0 overflow-hidden">
      <img src="assets/imgs/gradient-bg.png" alt="Capabilities Background" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-[1240px] mx-auto pt-[50px]">
      <!-- Section Header -->
      <div class="flex justify-between items-end mb-[50px]">
        <div class="max-w-[604px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-navy">Capabilities</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-2">From questions to clearer decisions.</h2>
        </div>
        <p class="max-w-[605px] text-right text-[16px] leading-[26px] text-brand-muted">
          Every research brief starts with uncertainty. We help organisations connect the right people, questions and evidence to understand what is happening and decide what to do next.
        </p>
      </div>

      <!-- Capabilities Grid -->
      <div class="grid grid-cols-3 max-w-[1240px]" style="column-gap: 24px; row-gap: 24px;">
        <!-- Card 1 - Market & Opportunity Research -->
        <a href="market-research.php" class="cap-card relative w-[397px] max-w-full h-[215px] rounded-xl overflow-hidden group cursor-pointer block">
          <img src="assets/imgs/market experience research.png" alt="Market Research" class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(102,102,102,0.32)] to-[rgba(0,0,0,0.28)] group-hover:from-[rgba(0,0,0,0.52)] group-hover:to-[rgba(0,0,0,0.38)] transition-all duration-300"></div>
          <div class="absolute bottom-[16px] left-4 right-4">
            <h3 class="cap-title text-[20px] font-bold leading-7 text-white font-helvetica transition-transform duration-[400ms] ease-out group-hover:-translate-y-[48px]">Market & Opportunity Research</h3>
            <p class="cap-desc absolute bottom-0 left-0 right-0 text-[14px] leading-[20px] text-[rgba(255,255,255,0.8)] translate-y-[55px] transition-transform duration-[400ms] ease-out group-hover:translate-y-0">Size demand, competition and whitespace before you commit.</p>
          </div>
        </a>

        <!-- Card 2 - Brand & Consumer Research -->
        <a href="brand-consumer-research.php" class="cap-card relative w-[397px] max-w-full h-[215px] rounded-xl overflow-hidden group cursor-pointer block">
          <img src="assets/imgs/brand-consumer.png" alt="Brand Research" class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(102,102,102,0.28)] to-[rgba(0,0,0,0.24)] group-hover:from-[rgba(0,0,0,0.5)] group-hover:to-[rgba(0,0,0,0.35)] transition-all duration-300"></div>
          <div class="absolute bottom-[16px] left-4 right-4">
            <h3 class="cap-title text-[20px] font-bold leading-7 text-white font-helvetica transition-transform duration-[400ms] ease-out group-hover:-translate-y-[48px]">Brand & Consumer Research</h3>
            <p class="cap-desc absolute bottom-0 left-0 right-0 text-[14px] leading-[20px] text-[rgba(255,255,255,0.8)] translate-y-[55px] transition-transform duration-[400ms] ease-out group-hover:translate-y-0">Track awareness, perception and the reasons people choose a brand.</p>
          </div>
        </a>

        <!-- Card 3 - Product & Innovation Research -->
        <a href="product-innovation-research.php" class="cap-card relative w-[397px] max-w-full h-[215px] rounded-xl overflow-hidden group cursor-pointer block">
          <img src="assets/imgs/prod & innovation research.png" alt="Product Research" class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(102,102,102,0.28)] to-[rgba(0,0,0,0.24)] group-hover:from-[rgba(0,0,0,0.5)] group-hover:to-[rgba(0,0,0,0.35)] transition-all duration-300"></div>
          <div class="absolute bottom-[16px] left-4 right-4">
            <h3 class="cap-title text-[20px] font-bold leading-7 text-white font-helvetica transition-transform duration-[400ms] ease-out group-hover:-translate-y-[48px]">Product & Innovation Research</h3>
            <p class="cap-desc absolute bottom-0 left-0 right-0 text-[14px] leading-[20px] text-[rgba(255,255,255,0.8)] translate-y-[55px] transition-transform duration-[400ms] ease-out group-hover:translate-y-0">Test ideas, concepts, propositions and products before launch.</p>
          </div>
        </a>

        <!-- Card 4 - Customer Experience Research -->
        <a href="customer-experience-research.php" class="cap-card relative w-[397px] max-w-full h-[215px] rounded-xl overflow-hidden group cursor-pointer block">
          <img src="assets/imgs/customer-expereince.png" alt="Customer Experience" class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(102,102,102,0.28)] to-[rgba(0,0,0,0.24)] group-hover:from-[rgba(0,0,0,0.5)] group-hover:to-[rgba(0,0,0,0.35)] transition-all duration-300"></div>
          <div class="absolute bottom-[16px] left-4 right-4">
            <h3 class="cap-title text-[20px] font-bold leading-7 text-white font-helvetica transition-transform duration-[400ms] ease-out group-hover:-translate-y-[48px]">Customer Experience Research</h3>
            <p class="cap-desc absolute bottom-0 left-0 right-0 text-[14px] leading-[20px] text-[rgba(255,255,255,0.8)] translate-y-[55px] transition-transform duration-[400ms] ease-out group-hover:translate-y-0">Map journeys, satisfaction and the moments that shape loyalty.</p>
          </div>
        </a>

        <!-- Card 5 - B2B Research -->
        <a href="b2b-research.php" class="cap-card relative w-[397px] max-w-full h-[215px] rounded-xl overflow-hidden group cursor-pointer block">
          <img src="assets/imgs/b2b research.png" alt="B2B Research" class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(102,102,102,0.28)] to-[rgba(0,0,0,0.24)] group-hover:from-[rgba(0,0,0,0.5)] group-hover:to-[rgba(0,0,0,0.35)] transition-all duration-300"></div>
          <div class="absolute bottom-[16px] left-4 right-4">
            <h3 class="cap-title text-[20px] font-bold leading-7 text-white font-helvetica transition-transform duration-[400ms] ease-out group-hover:-translate-y-[48px]">B2B Research</h3>
            <p class="cap-desc absolute bottom-0 left-0 right-0 text-[14px] leading-[20px] text-[rgba(255,255,255,0.8)] translate-y-[55px] transition-transform duration-[400ms] ease-out group-hover:translate-y-0">Map decision-makers, buying processes and business-market dynamics.</p>
          </div>
        </a>

        <!-- Card 6 - Social & Public Research -->
        <a href="social-research.php" class="cap-card relative w-[397px] max-w-full h-[215px] rounded-xl overflow-hidden group cursor-pointer block">
          <img src="assets/imgs/social & public research.png" alt="Social Research" class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(102,102,102,0.28)] to-[rgba(0,0,0,0.24)] group-hover:from-[rgba(0,0,0,0.5)] group-hover:to-[rgba(0,0,0,0.35)] transition-all duration-300"></div>
          <div class="absolute bottom-[16px] left-4 right-4">
            <h3 class="cap-title text-[20px] font-bold leading-7 text-white font-helvetica transition-transform duration-[400ms] ease-out group-hover:-translate-y-[48px]">Social & Public Research</h3>
            <p class="cap-desc absolute bottom-0 left-0 right-0 text-[14px] leading-[20px] text-[rgba(255,255,255,0.8)] translate-y-[55px] transition-transform duration-[400ms] ease-out group-hover:translate-y-0">Generate evidence for policies, programmes and public outcomes.</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- ==================== DATA COLLECTION SECTION ==================== -->
  <section class="py-[100px] bg-white">
    <div class="max-w-[1240px] mx-auto">
      <!-- Section Header -->
      <div class="flex justify-between items-end mb-[80px]">
        <div class="max-w-[608px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-navy">Data Collection</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-2">Reach the right people.<br>Collect the right evidence.</h2>
        </div>
        <p class="max-w-[608px] text-right text-[16px] leading-[26px] text-brand-muted">
          Survey Pacific plans and manages qualitative, quantitative, AI-ready and specialist collection across India and partner markets with one accountable team, clear controls and delivery ready for analysis and reporting.
        </p>
      </div>

      <!-- Collection Types -->
      <div class="grid grid-cols-2 gap-[24px] max-w-[1240px]">
        <!-- Qualitative -->
        <a href="qualitative-research.php" class="group w-[608px] max-w-full h-[176px] bg-brand-bggray shadow-[0_2px_14px_rgba(0,0,0,0.08)] border border-brand-blue p-6 flex items-center justify-between transition-colors duration-300 ease-in hover:bg-[#1D56D4] hover:border-[#1D56D4]">
          <div>
            <h3 class="text-[26px] font-bold leading-8 text-brand-textdark font-helvetica transition-colors duration-300 ease-in group-hover:text-white">Qualitative data collection</h3>
            <p class="text-[18px] font-medium leading-[22px] text-brand-muted mt-[14px] transition-colors duration-300 ease-in group-hover:text-white/85">In-depth interviews, focus groups, moderation-led studies and diary work.</p>
          </div>
          <div class="w-10 h-10 rounded-full border border-brand-blue text-brand-blue flex items-center justify-center flex-shrink-0 transition-colors duration-300 ease-in group-hover:text-white group-hover:border-white/60">
            <svg class="w-[12px] h-[10px]" viewBox="0 0 22 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739"/></svg>
          </div>
        </a>

        <!-- Quantitative -->
        <a href="quantitative-research.php" class="group w-[608px] max-w-full h-[176px] bg-brand-bggray shadow-[0_2px_14px_rgba(0,0,0,0.08)] border border-brand-gold p-6 flex items-center justify-between transition-colors duration-300 ease-in hover:bg-[#E8B830] hover:border-[#E8B830]">
          <div>
            <h3 class="text-[26px] font-bold leading-8 text-brand-textdark font-helvetica transition-colors duration-300 ease-in group-hover:text-white">Quantitative data collection</h3>
            <p class="text-[18px] font-medium leading-[22px] text-brand-muted mt-[14px] transition-colors duration-300 ease-in group-hover:text-white/85">Structured surveys across online, mobile, telephone and face-to-face channels.</p>
          </div>
          <div class="w-10 h-10 rounded-full border border-brand-gold text-brand-gold flex items-center justify-center flex-shrink-0 transition-colors duration-300 ease-in group-hover:text-white group-hover:border-white/60">
            <svg class="w-[12px] h-[10px]" viewBox="0 0 22 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739"/></svg>
          </div>
        </a>

        <!-- AI Data Collection -->
        <a href="ai-data-collection.php" class="group w-[608px] max-w-full h-[176px] bg-brand-bggray shadow-[0_2px_14px_rgba(0,0,0,0.08)] border border-brand-green p-6 flex items-center justify-between transition-colors duration-300 ease-in hover:bg-[#1E9E6B] hover:border-[#1E9E6B]">
          <div>
            <h3 class="text-[26px] font-bold leading-8 text-brand-textdark font-helvetica transition-colors duration-300 ease-in group-hover:text-white">Data collection for AI</h3>
            <p class="text-[18px] font-medium leading-[22px] text-brand-muted mt-[14px] transition-colors duration-300 ease-in group-hover:text-white/85">Human-reviewed inputs, labels and evaluation sets for AI workflows.</p>
          </div>
          <div class="w-10 h-10 rounded-full border border-brand-green text-brand-green flex items-center justify-center flex-shrink-0 transition-colors duration-300 ease-in group-hover:text-white group-hover:border-white/60">
            <svg class="w-[12px] h-[10px]" viewBox="0 0 22 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739"/></svg>
          </div>
        </a>

        <!-- Specialist Collection -->
        <a href="specialist-data-collection.php" class="group w-[608px] max-w-full h-[176px] bg-brand-bggray shadow-[0_2px_14px_rgba(0,0,0,0.08)] border border-brand-red p-6 flex items-center justify-between transition-colors duration-300 ease-in hover:bg-[#D93B3B] hover:border-[#D93B3B]">
          <div>
            <h3 class="text-[26px] font-bold leading-8 text-brand-textdark font-helvetica transition-colors duration-300 ease-in group-hover:text-white">Specialist Collection</h3>
            <p class="text-[18px] font-medium leading-[22px] text-brand-muted mt-[14px] transition-colors duration-300 ease-in group-hover:text-white/85">Recruitment, product testing, mystery shopping and observational routes.</p>
          </div>
          <div class="w-10 h-10 rounded-full border border-brand-red text-brand-red flex items-center justify-center flex-shrink-0 transition-colors duration-300 ease-in group-hover:text-white group-hover:border-white/60">
            <svg class="w-[12px] h-[10px]" viewBox="0 0 22 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.0486 8.70278L1 9.26477M11.8775 1.00003L20.0486 8.70278L12.3458 16.8739"/></svg>
          </div>
        </a>
      </div>
      </div>
  </section>

  <!-- ==================== SELECTED ORGANISATIONS ==================== -->
  <section class="relative overflow-hidden py-[80px]">
    <div class="absolute inset-0">
      <img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-[1240px] mx-auto">
      <!-- Section Header -->
      <div class="flex justify-between items-end mb-[50px]">
        <div class="max-w-[605px]">
          <span class="text-[12px] font-semibold uppercase tracking-[1.2px] text-brand-navy">Selected Organisations</span>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Experience across sectors and markets.</h2>
        </div>
        <p class="max-w-[607px] text-right text-[16px] leading-[26px] text-brand-muted">
          A selection of organisations supported through direct and partner-led research engagements.
        </p>
      </div>

      <!-- Filter Tabs -->
      <div class="drag-scroll flex gap-2 mb-8 overflow-x-auto pb-2 tabs-scroll">
        <button data-filter="financial" class="filter-tab px-5 py-3 rounded-full bg-brand-blue text-white text-[14px] font-medium whitespace-nowrap">Financial Services</button>
        <button data-filter="consultancy" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">Consultancy</button>
        <button data-filter="market" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">Market Research</button>
        <button data-filter="healthcare" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">Healthcare</button>
        <button data-filter="retail" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">Retail</button>
        <button data-filter="realestate" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">Real Estate</button>
        <button data-filter="household" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">Household interviews</button>
        <button data-filter="programme" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">Programme & message testing</button>
        <button data-filter="cati" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">CATI / Telephone interviews</button>
        <button data-filter="online" class="filter-tab px-5 py-3 rounded-full border border-brand-bordergray text-brand-dark text-[14px] font-medium whitespace-nowrap hover:bg-gray-100 transition">Online surveys</button>
      </div>

      <!-- Client Logo Cards -->
      <div id="clientsGrid" class="grid grid-cols-4 gap-[24px]"></div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/selected-experience.php'; ?>
  
  <!-- ==================== GLOBAL REACH SECTION ==================== -->
  <section class="relative w-full py-[100px]">
    <div class="absolute inset-0">
      <img src="assets/imgs/gradient-bg.png" alt="Global Reach Background" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-[1240px] mx-auto">
      <div class="flex justify-between items-end">
        <!-- Left Content -->
        <div class="max-w-[608px]">
          <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white/72 shadow-[0_2px_16px_rgba(16,38,51,0.08)] border border-white/55 backdrop-blur-[12px] mb-4">
            <div class="w-2 h-2 rounded-full bg-gradient-to-br from-brand-red via-brand-blue to-brand-gold"></div>
            <span class="text-[12px] font-semibold uppercase tracking-[0.3px] text-brand-dark">Global market research execution</span>
          </div>
          <h2 class="text-[40px] font-bold leading-[48px] text-brand-dark font-helvetica mt-4">Research wherever your questions take you.</h2>
          <p class="text-[16px] leading-[26px] text-brand-muted mt-6">Local understanding matters. Our research execution connects markets, audiences and fieldwork expertise to help teams generate consistent evidence across regions.</p>
          <a href="contact-us.php" class="mt-6 px-6 py-3 border border-brand-dark text-brand-dark text-[14px] font-semibold rounded-lg hover:bg-brand-dark hover:text-white transition inline-block">
            Talk to our research team
          </a>
        </div>

        <!-- Right Diagram -->
        <div class="w-[608px] h-[421px] relative overflow-hidden">
          <svg width="608" height="421" viewBox="0 0 608 421" xmlns="http://www.w3.org/2000/svg">
            <!-- CONNECTIONS -->
            <g>
              <line x1="84" y1="149" x2="170" y2="106" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="170" y1="106" x2="339" y2="85" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="170" y1="106" x2="120" y2="234" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="120" y1="234" x2="267" y2="213" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="120" y1="234" x2="73" y2="363" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="267" y1="213" x2="339" y2="85" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="267" y1="213" x2="206" y2="320" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="267" y1="213" x2="437" y2="256" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="339" y1="85" x2="413" y2="43" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="339" y1="85" x2="486" y2="128" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="486" y1="128" x2="437" y2="256" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
              <line x1="437" y1="256" x2="547" y2="298" stroke="#D4DAE0" stroke-width="1" stroke-linecap="round" opacity="0.75"/>
            </g>

            <!-- NODES -->
            <circle cx="413" cy="43" r="8" fill="#1E56D5" opacity="0.92"/>
            <circle cx="413" cy="43" r="14" fill="none" stroke="#1E56D5" stroke-width="1.2" opacity="0.35"/>
            <circle cx="170" cy="106" r="10" fill="#D94141" opacity="0.92"/>
            <circle cx="170" cy="106" r="16" fill="none" stroke="#D94141" stroke-width="1.2" opacity="0.35"/>
            <circle cx="84" cy="149" r="8" fill="#23A06D" opacity="0.92"/>
            <circle cx="84" cy="149" r="13" fill="none" stroke="#23A06D" stroke-width="1.2" opacity="0.35"/>
            <circle cx="120" cy="234" r="8" fill="#1E56D5" opacity="0.92"/>
            <circle cx="120" cy="234" r="14" fill="none" stroke="#1E56D5" stroke-width="1.2" opacity="0.35"/>
            <circle cx="267" cy="213" r="12" fill="#E8B830" opacity="0.92"/>
            <circle cx="267" cy="213" r="18" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"/>
            <circle cx="339" cy="85" r="11" fill="#1E56D5" opacity="0.92"/>
            <circle cx="339" cy="85" r="17" fill="none" stroke="#1E56D5" stroke-width="1.2" opacity="0.35"/>
            <circle cx="486" cy="128" r="9" fill="#23A06D" opacity="0.92"/>
            <circle cx="486" cy="128" r="14" fill="none" stroke="#23A06D" stroke-width="1.2" opacity="0.35"/>
            <circle cx="583" cy="170" r="9" fill="#D94141" opacity="0.92"/>
            <circle cx="583" cy="170" r="15" fill="none" stroke="#D94141" stroke-width="1.2" opacity="0.35"/>
            <circle cx="206" cy="320" r="9" fill="#23A06D" opacity="0.92"/>
            <circle cx="206" cy="320" r="14" fill="none" stroke="#23A06D" stroke-width="1.2" opacity="0.35"/>
            <circle cx="437" cy="256" r="10" fill="#D94141" opacity="0.92"/>
            <circle cx="437" cy="256" r="16" fill="none" stroke="#D94141" stroke-width="1.2" opacity="0.35"/>
            <circle cx="547" cy="298" r="8" fill="#E8B830" opacity="0.92"/>
            <circle cx="547" cy="298" r="14" fill="none" stroke="#E8B830" stroke-width="1.2" opacity="0.35"/>
            <circle cx="73" cy="363" r="9" fill="#D94141" opacity="0.92"/>
            <circle cx="73" cy="363" r="14" fill="none" stroke="#D94141" stroke-width="1.2" opacity="0.35"/>
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
            <img src="assets/imgs/logo.svg" alt="Survey Pacific" class="h-[35.26px] object-contain">
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
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Market Research</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">User Research</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Social & Public Research</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Brand & Consumer Insights</a></li>
            </ul>
          </div>

          <!-- Data Collection -->
          <div class="w-[171.6px]">
            <h4 class="text-[12px] font-bold uppercase tracking-[1.2px] text-[rgba(16,38,51,0.79)] font-helvetica">Data Collection</h4>
            <ul class="mt-5 space-y-3">
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Online Surveys</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">CATI & Telephone</a></li>
              <li><a href="#" class="text-[14px] text-[#1E354A] hover:text-brand-blue transition">Face-to-Face & CAPI</a></li>
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
            <h4 class="text-[12px] font-bold uppercase tracking-[1.2px] text-[rgba(16,38,51,0.79)] font-helvetica">Participants & Partners</h4>
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

  <script src="js/main.js"></script>
</body>
</html>
