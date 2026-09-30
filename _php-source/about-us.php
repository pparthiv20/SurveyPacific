<?php $pageConfig = ['theme' => 'blue']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>

<body class="company-page about-us-page font-inter text-brand-dark bg-white overflow-x-hidden">
  <?php include __DIR__ . '/includes/header.php'; ?>
  <main>
    <section class="relative overflow-hidden bg-brand-blue">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div>
          <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Company / About Us</p>
          <h1 class="max-w-[820px] text-[52px] font-bold leading-[60px] text-white font-helvetica mt-5">People, evidence and decisions connected.</h1>
          <p class="max-w-[650px] text-[16px] leading-7 text-white/85 mt-7">We are an independent research and data collection partner helping organisations understand what people need, what markets are doing and what change could look like.</p>
        </div>
        <div class="flex justify-center lg:justify-end">
          <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1000&q=85" alt="Research team collaborating around a table" class="mobile-hide-image w-full max-w-[400px] h-[224px] object-cover rounded-2xl hero-image-standard">
        </div>
      </div>
    </section>

    <section class="bg-brand-bggray">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
        <div class="max-w-[690px]">
          <p class="text-[12px] font-semibold uppercase tracking-[1.3px] text-brand-navy">What guides us</p>
          <h2 class="text-[38px] lg:text-[48px] font-bold leading-[1.08] font-helvetica mt-4">A clear standard for work that matters.</h2>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 mt-12">
          <article class="rounded-xl bg-white border-t-4 border-brand-blue p-7 shadow-sm"><span class="text-[12px] font-bold text-brand-blue">01</span>
            <h3 class="text-[22px] font-bold font-helvetica mt-8">Curiosity</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-3">We ask better questions before we reach for easy answers.</p>
          </article>
          <article class="rounded-xl bg-white border-t-4 border-brand-gold p-7 shadow-sm"><span class="text-[12px] font-bold text-brand-gold">02</span>
            <h3 class="text-[22px] font-bold font-helvetica mt-8">Care</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-3">We treat participants, partners and client teams with respect.</p>
          </article>
          <article class="rounded-xl bg-white border-t-4 border-brand-green p-7 shadow-sm"><span class="text-[12px] font-bold text-brand-green">03</span>
            <h3 class="text-[22px] font-bold font-helvetica mt-8">Rigor</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-3">We protect quality through thoughtful methods and visible checks.</p>
          </article>
          <article class="rounded-xl bg-white border-t-4 border-brand-red p-7 shadow-sm"><span class="text-[12px] font-bold text-brand-red">04</span>
            <h3 class="text-[22px] font-bold font-helvetica mt-8">Usefulness</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-3">We turn findings into direction people can act on.</p>
          </article>
        </div>
      </div>
    </section>

    <section>
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
        <div class="grid lg:grid-cols-2 gap-12 items-end">
          <div>
            <p class="text-[12px] font-semibold uppercase tracking-[1.3px] text-brand-blue">How we help</p>
            <h2 class="text-[38px] lg:text-[48px] font-bold leading-[1.08] font-helvetica mt-4">From first question to confident next step.</h2>
          </div>
          <p class="text-[15px] leading-7 text-brand-muted max-w-[470px]">Our teams can support the full journey, or join exactly where you need specialist depth.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-5 mt-12">
          <div class="rounded-xl bg-brand-lightblue/60 p-7">
            <p class="text-[12px] font-bold text-brand-blue">01 / FRAME</p>
            <h3 class="text-[23px] font-bold font-helvetica mt-5">Design the right study</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-3">Clarify the decision, audience, method and measures that will make the work useful.</p>
          </div>
          <div class="rounded-xl bg-brand-gold/10 p-7">
            <p class="text-[12px] font-bold text-[#A07600]">02 / DELIVER</p>
            <h3 class="text-[23px] font-bold font-helvetica mt-5">Collect reliable evidence</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-3">Reach the right people with careful fieldwork, quality controls and local context.</p>
          </div>
          <div class="rounded-xl bg-brand-green/10 p-7">
            <p class="text-[12px] font-bold text-brand-green">03 / ACT</p>
            <h3 class="text-[23px] font-bold font-helvetica mt-5">Make insight move</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-3">Translate results into clear stories, choices and action for stakeholders.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="relative overflow-hidden">
      <div class="absolute inset-0"><img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover"></div>
      <div class="relative max-w-[1240px] mx-auto px-6 lg:px-0 flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
        <div>
          <p class="text-[12px] font-semibold uppercase tracking-[1.3px] text-brand-navy">Meet the people behind the work</p>
          <h2 class="text-[36px] lg:text-[46px] font-bold font-helvetica mt-3">Experience matters. So does character.</h2>
          <p class="text-[15px] leading-7 text-brand-muted max-w-[560px] mt-4">Get to know the leadership team guiding our standards, partnerships and growth.</p>
        </div><a href="leadership.php" class="shrink-0 rounded-lg bg-brand-blue px-7 py-3 text-[13px] font-semibold text-white hover:bg-brand-navy transition">Meet our leadership</a>
      </div>
    </section>
  </main>
  <?php include __DIR__ . '/includes/footer.php'; ?><script src="js/main.js"></script>
</body>

</html>
