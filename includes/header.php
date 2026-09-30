<?php $headerTheme = $pageConfig['theme'] ?? 'blue'; ?>
<header class="site-header relative z-20 w-full bg-white/35 backdrop-blur-[16px] shadow-[0_1px_6.7px_rgba(0,0,0,0.06)] border border-white/60 h-[68px]">
  <div class="max-w-[1240px] h-full mx-auto px-6 lg:px-0 flex items-center justify-between">
    <a href="index.php" aria-label="Survey Pacific home">
      <img src="assets/imgs/logo-sp.png" alt="Survey Pacific" class="h-[42.21px] object-contain">
    </a>
    <nav class="hidden lg:flex items-center gap-4" aria-label="Primary navigation">
      <?php
      $megaMenus = [
        ['label' => 'Research Needs', 'href' => 'market-research.php', 'heading' => 'What do you need to understand?', 'items' => ['Understand a Market', 'Test a Product or Concept', 'Measure Brand Health', 'Know Your Customers', 'Track Public Opinion', 'Improve User Experience', 'Validate Business Decisions', 'Not Sure? Describe Your Need']],
        ['label' => 'Data Collection', 'href' => 'social-research.php', 'heading' => 'How we collect reliable evidence', 'items' => ['Online Surveys', 'CATI / Telephone Surveys', 'Face-to-Face & CAPI', 'Focus Groups', 'Depth Interviews', 'Mystery Shopping', 'Product Testing', 'Respondent Recruitment', 'Multi-Country Fieldwork']],
        ['label' => 'Audiences', 'href' => 'consumers.php', 'heading' => 'Who we can reach', 'items' => ['Consumers', 'B2B Decision Makers', 'Healthcare Professionals', 'MSME Owners', 'Enterprise Leaders', 'Citizens & Public Audiences', 'Niche / Hard-to-Reach Groups', 'Custom Audience Recruitment']],
        ['label' => 'Markets', 'href' => 'environment-research.php', 'heading' => 'Where we execute research', 'items' => ['Global Coverage', 'India', 'Asia Pacific', 'Middle East', 'Europe', 'North America', 'Africa', 'Country Feasibility']],
        ['label' => 'Quality', 'href' => 'analytics-reports.php', 'heading' => 'How we protect data quality', 'items' => ['Data Quality Framework', 'Respondent Verification', 'Fraud Prevention', 'Fieldwork Monitoring', 'Privacy & Compliance', 'Research Ethics', 'Sample Management', 'Quality Dashboard']],
        ['label' => 'Insights', 'href' => 'case-studies.php', 'heading' => 'Proof, thinking, and guidance', 'items' => ['Case Studies', 'Research Guides', 'Industry Reports', 'Survey Design Notes', 'Data Collection Playbooks', 'Blog', 'FAQs']],
        ['label' => 'Company', 'href' => 'about-us.php', 'heading' => 'About Survey Pacific', 'items' => ['About Us', 'Global Network', 'Leadership', 'Careers', 'Become a Supplier', 'Contact']]
      ];
      foreach ($megaMenus as $menu): ?>
        <div class="group relative" data-dropdown>
          <button type="button" class="flex items-center gap-[2px] text-[12px] font-medium hover:text-brand-<?= $headerTheme ?> transition" aria-haspopup="true" aria-expanded="false" data-dropdown-toggle>
            <?= $menu['label'] ?>
            <svg aria-hidden="true" class="w-3 h-3 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="mega-menu pointer-events-none invisible absolute left-1/2 top-full z-50 w-[682px] -translate-x-1/2 translate-y-2 pt-5 opacity-0 transition-all duration-200 ease-out" aria-hidden="true">
            <div class="rounded-xl border border-white/70 bg-white p-7 shadow-[0_16px_45px_rgba(16,38,51,0.16)]">
              <p class="text-[11px] font-semibold uppercase tracking-[1.2px] text-brand-<?= $headerTheme ?>"><?= $menu['heading'] ?></p>
              <div class="mt-4 grid grid-cols-3 gap-x-8 gap-y-3">
                <?php 
                $itemRoutes = [
                  'About Us' => 'about-us.php',
                  'Consumers' => 'consumers.php',
                  'B2B Decision Makers' => 'b2b-decision-makers.php',
                  'Healthcare Professionals' => 'healthcare-professionals.php',
                  'MSME Owners' => 'msme-owners.php',
                  'Enterprise Leaders' => 'enterprise-leaders.php',
                  'Citizens & Public Audiences' => 'citizens-public-audiences.php',
                  'Niche / Hard-to-Reach Groups' => 'hard-to-reach-audiences.php',
                  'Custom Audience Recruitment' => 'custom-audience-recruitment.php',
                  'Global Coverage' => 'global-coverage.php',
                  'India' => 'india.php',
                  'Asia Pacific' => 'asia-pacific.php',
                  'Europe' => 'europe.php',
                  'Middle East' => 'middle-east.php',
                  'North America' => 'north-america.php',
                  'Africa' => 'africa.php',
                  'Country Feasibility' => 'country-feasibility.php',
                  'Data Quality Framework' => 'data-quality-framework.php',
                  'Respondent Verification' => 'respondent-verification.php',
                  'Fraud Prevention' => 'fraud-prevention.php',
                  'Fieldwork Monitoring' => 'fieldwork-monitoring.php',
                  'Privacy & Compliance' => 'privacy-compliance.php',
                  'Research Ethics' => 'research-ethics.php',
                  'Sample Management' => 'sample-management.php',
                  'Quality Dashboard' => 'quality-dashboard.php',
                  'Global Network' => 'global-network.php',
                  'Leadership' => 'leadership.php',
                  'Careers' => 'careers.php',
                  'Become a Supplier' => 'become-supplier.php',
                  'Online Surveys' => 'online-survey.php',
                  'CATI / Telephone Surveys' => 'telephone-cati-survey.php',
                  'Face-to-Face & CAPI' => 'face-to-face-survey.php',
                  'Focus Groups' => 'focus-groups.php',
                  'Depth Interviews' => 'depth-interviews.php',
                  'Mystery Shopping' => 'mystery-shop.php',
                  'Product Testing' => 'product-testing.php',
                  'Diary Studies' => 'diary-studies.php',
                  'Multi-Country Fieldwork' => 'multi-country-fieldwork.php',
                  'Understand a Market' => 'market-research.php',
                  'Test a Product or Concept' => 'product-research.php',
                  'Know Your Customers' => 'customer-research.php',
                  'Not Sure? Describe Your Need' => 'contact-us.php',
                  'Improve User Experience' => 'user-research.php',
                  'Track Public Opinion' => 'social-research.php',
                  'Measure Brand Health' => 'brand-consumer-research.php',
                  'Validate Business Decisions' => 'b2b-research.php',
                  'Contact' => 'contact-us.php'
                  ,'Case Studies' => 'case-studies.php'
                  ,'Blog' => 'blogs.php'
                  ,'Research Guides' => 'research-guides.php'
                  ,'Industry Reports' => 'industry-reports.php'
                  ,'Survey Design Notes' => 'survey-design-notes.php'
                  ,'Data Collection Playbooks' => 'data-collection-playbooks.php'
                  ,'FAQs' => 'faqs.php'
                ];
                foreach ($menu['items'] as $item): 
                  $linkUrl = $itemRoutes[$item] ?? '#';
                ?>
                  <a href="<?= $linkUrl ?>" class="text-[12px] leading-5 transition hover:text-brand-<?= $headerTheme ?> <?= $item === 'Not Sure? Describe Your Need' ? 'text-brand-blue underline whitespace-nowrap' : ($item === 'Niche / Hard-to-Reach Groups' ? 'text-brand-dark whitespace-nowrap col-span-2' : 'text-brand-dark') ?>"><?= $item ?></a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </nav>
    <button type="button" data-open-study-modal class="border border-brand-<?= $headerTheme ?> text-brand-<?= $headerTheme ?> text-[12px] font-semibold px-[24px] lg:px-[34px] py-[10px] rounded-lg hover:bg-brand-<?= $headerTheme ?> hover:text-white transition whitespace-nowrap bg-transparent cursor-pointer">Start a Study</button>
    <button id="mobileMenuBtn" class="lg:hidden text-brand-dark text-2xl" aria-label="Open navigation" aria-controls="mobileMenu" aria-expanded="false">
      <svg class="mobile-menu-icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path class="menu-line menu-line-top" stroke-linecap="round" stroke-width="2" d="M4 6h16"/><path class="menu-line menu-line-middle" stroke-linecap="round" stroke-width="2" d="M4 12h16"/><path class="menu-line menu-line-bottom" stroke-linecap="round" stroke-width="2" d="M4 18h16"/></svg>
    </button>
  </div>
  <nav id="mobileMenu" class="lg:hidden absolute top-full left-0 z-50 w-full overflow-y-auto border-t border-brand-bordergray bg-white shadow-lg" aria-label="Mobile navigation" aria-hidden="true">
    <div class="flex flex-col px-5 py-3">
      <details class="mobile-nav-group">
        <summary>Research Needs</summary>
        <div class="mobile-nav-submenu"><a href="market-research.php">Market Research</a><a href="product-research.php">Product &amp; Concept Testing</a><a href="brand-consumer-research.php">Brand Health</a><a href="customer-research.php">Customer Research</a><a href="user-research.php">User Experience</a><a href="social-research.php">Public Opinion</a></div>
      </details>
      <a href="about-us.php">About Us</a>
      <a href="careers.php">Careers</a>
      <a href="case-studies.php">Case Studies</a>
      <a href="contact-us.php">Contact Us</a>
    </div>
  </nav>
</header>
