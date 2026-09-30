<?php
$pageConfig = ['theme' => 'blue'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Become a Supplier - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="company-page font-inter text-brand-dark bg-white overflow-x-hidden">
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="bg-brand-blue">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div>
          <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Company / Become a Supplier</p>
          <h1 class="text-[52px] font-bold leading-[60px] text-white font-helvetica mt-4 max-w-[760px]">Let’s deliver better research together.</h1>
          <p class="text-[16px] leading-7 text-white/85 max-w-[650px] mt-6">Partner with Survey Pacific to connect your expertise, audiences and capabilities to meaningful research programs.</p>
        </div>
        <div class="flex justify-center lg:justify-end">
          <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1000&q=80" alt="Business partners working together" class="w-full max-w-[400px] h-[224px] object-cover rounded-2xl hero-image-standard">
        </div>
      </div>
    </section>

    <section class="bg-brand-bggray">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16">
          <div class="max-w-[650px]">
            <p class="text-[12px] font-semibold uppercase tracking-[1.3px] text-brand-navy">How partnership works</p>
            <h2 class="text-[38px] lg:text-[48px] font-bold leading-[1.08] font-helvetica mt-4">A straightforward route to doing great work together.</h2>
          </div>
          <p class="text-[15px] leading-7 text-brand-muted max-w-[470px] lg:text-right">We want partners to know what to expect. We start by understanding your coverage and strengths, then align on the right opportunities, quality expectations and ways of working.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-5 mt-12">
          <div class="rounded-xl bg-white border border-brand-bordergray p-6">
            <span class="text-[12px] font-bold text-brand-blue">01 / TELL US</span>
            <h3 class="text-[21px] font-bold font-helvetica mt-3">Share your capabilities</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-2">Tell us where you operate, who you can reach and what specialist services you provide.</p>
          </div>
          <div class="rounded-xl bg-white border border-brand-bordergray p-6">
            <span class="text-[12px] font-bold text-[#A07600]">02 / ALIGN</span>
            <h3 class="text-[21px] font-bold font-helvetica mt-3">Match on standards</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-2">We discuss compliance, participant care, quality checks, timelines and commercial fit.</p>
          </div>
          <div class="rounded-xl bg-white border border-brand-bordergray p-6">
            <span class="text-[12px] font-bold text-brand-green">03 / DELIVER</span>
            <h3 class="text-[21px] font-bold font-helvetica mt-3">Build a trusted relationship</h3>
            <p class="text-[14px] leading-6 text-brand-muted mt-2">Start with the right brief and grow through reliable communication and delivery.</p>
          </div>
        </div>

        <div class="mt-12 rounded-xl border border-brand-blue/20 bg-brand-lightblue/50 p-7">
          <h3 class="text-[22px] font-bold font-helvetica">We are especially interested in</h3>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5 text-[14px] text-brand-muted">
            <p><strong class="block text-brand-dark">Sample &amp; panels</strong>Consumer, B2B and specialist audiences.</p>
            <p><strong class="block text-brand-dark">Field agencies</strong>Face-to-face, CATI and local execution.</p>
            <p><strong class="block text-brand-dark">Language services</strong>Translation, moderation and transcription.</p>
            <p><strong class="block text-brand-dark">Specialists</strong>Hard-to-reach communities and niche expertise.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="relative overflow-hidden">
      <div class="absolute inset-0">
        <img src="assets/imgs/gradient-bg.png" alt="" class="w-full h-full object-cover">
      </div>
      <div class="relative max-w-[1240px] mx-auto px-6 lg:px-0 text-center">
        <h2 class="text-[34px] lg:text-[40px] font-bold font-helvetica">Ready to work together?</h2>
        <p class="text-[15px] leading-7 text-brand-muted max-w-[560px] mx-auto mt-4">Tell us about your organisation, coverage and specialist capabilities.</p>
        <a href="contact-us.php" class="inline-flex mt-7 border border-brand-blue text-brand-blue text-[13px] font-semibold px-6 py-3 rounded-lg hover:bg-brand-blue hover:text-white transition">Contact partnerships</a>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="js/main.js"></script>
</body>
</html>
