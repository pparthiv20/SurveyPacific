<?php $pageConfig = ['theme' => 'blue']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case Studies - Survey Pacific</title>
  <meta name="description" content="Explore selected Survey Pacific research assignments across markets, audiences, and data collection methods.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="case-studies-page font-inter text-brand-dark bg-white overflow-x-clip">
  <?php include __DIR__ . '/includes/header.php'; ?>
  <main>
    <section class="relative w-full bg-brand-blue py-[56px] lg:py-[72px]">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 text-center md:text-left">
        <p class="text-center md:text-left text-[12px] font-medium text-white/75 page-breadcrumb">Home / Insights / Case Studies</p>
        <h1 class="mx-auto mt-5 text-center md:text-left text-[52px] font-bold leading-[60px] font-helvetica text-white">Selected Experience</h1>
        <p class="mx-auto md:mx-0 mt-4 max-w-[650px] text-center md:text-left text-[15px] leading-6 text-white/80">See how research, fieldwork, and clear evidence help teams make better decisions.</p>
      </div>
    </section>
    <?php $showCaseStudiesLoadMore = true; include __DIR__ . '/includes/selected-experience.php'; ?>
    <section class="case-studies-cta relative overflow-hidden">
      <div class="absolute inset-0"><img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover"></div>
      <div class="case-studies-cta-content relative max-w-[900px] mx-auto px-6 lg:px-0 text-center">
        <p class="text-[12px] font-semibold uppercase tracking-[1.3px] text-brand-navy">More research stories</p>
        <h2 class="text-[36px] lg:text-[46px] font-bold leading-tight font-helvetica mt-3">Explore more of our experience.</h2>
        <p class="text-[15px] leading-7 text-brand-muted max-w-[600px] mx-auto mt-4">Browse the case studies above or speak with our team about a research challenge like yours.</p>
        <div class="case-studies-cta-actions flex flex-wrap items-center justify-center gap-3 mt-6">
          <a href="contact-us.php" class="rounded-lg border border-brand-dark px-6 py-3 text-[13px] font-semibold text-brand-dark hover:bg-white/70 transition">Discuss a Similar Study</a>
        </div>
      </div>
    </section>
  </main>
  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="js/main.js"></script>
</body>
</html>
