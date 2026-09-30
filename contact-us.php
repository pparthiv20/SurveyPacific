<?php
$pageConfig = ['theme' => 'blue'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="contact-page font-inter text-brand-dark bg-white overflow-x-hidden">
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Hero -->
    <section class="relative w-full bg-brand-blue overflow-hidden">
      <div class="max-w-[1240px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center py-[72px] px-6 lg:px-0">
        <div>
          <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Company / Contact Us</p>
          <h1 class="text-[52px] font-bold leading-[60px] text-white font-helvetica mt-4 max-w-[760px]">We’d love to hear from you.</h1>
          <p class="max-w-[640px] text-[16px] leading-7 text-white/85 mt-7">Have a question about a study, need a quote, or want to discuss a research challenge? Reach out and we will get back to you shortly.</p>
        </div>
        <div class="flex justify-center lg:justify-end">
          <img src="assets/imgs/handshake.jpg" alt="Customer support representative" class="w-full max-w-[400px] h-[224px] object-cover rounded-2xl hero-image-standard">
        </div>
        </div>
      </div>
    </section>

    <!-- Contact Info + Form -->
    <section class="py-[70px] lg:py-[90px]">
      <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-stretch">

          <!-- Left: Info -->
          <div class="contact-details flex flex-col h-full rounded-2xl border border-brand-bordergray bg-white p-7 lg:p-10">
            <h2 class="text-[34px] lg:text-[40px] font-bold leading-[1.1] text-brand-dark font-helvetica">Get in touch</h2>
            <p class="text-[15px] leading-7 text-brand-muted mt-4">We respond to every enquiry. Choose the most convenient way to reach us.</p>

            <img src="assets/imgs/survey-cont.jpg" alt="Modern office workspace" class="w-full h-[220px] object-cover rounded-xl mt-8">

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-auto pt-8">
              <!-- Location -->
              <div class="text-center">
                <div class="w-10 h-10 rounded-lg bg-brand-blue/10 flex items-center justify-center mx-auto">
                  <svg class="w-5 h-5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h4 class="text-[14px] font-semibold text-brand-dark mt-3">Location</h4>
                <p class="text-[13px] leading-5 text-brand-muted mt-1">Ahmedabad<br>Gujarat, India</p>
              </div>

              <!-- Email -->
              <div class="text-center">
                <div class="w-10 h-10 rounded-lg bg-brand-gold/10 flex items-center justify-center mx-auto">
                  <svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/></svg>
                </div>
                <h4 class="text-[14px] font-semibold text-brand-dark mt-3">Email</h4>
                <p class="text-[13px] leading-5 text-brand-muted mt-1 break-words">biz@surveypacific.com</p>
              </div>

              <!-- Phone -->
              <div class="text-center">
                <div class="w-10 h-10 rounded-lg bg-brand-green/10 flex items-center justify-center mx-auto">
                  <svg class="w-5 h-5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <h4 class="text-[14px] font-semibold text-brand-dark mt-3">Phone</h4>
                <p class="text-[13px] leading-5 text-brand-muted mt-1">079-2640 8404 <br> +91-94273 91940</p>
              </div>
            </div>
          </div>

          <!-- Right: Form -->
          <div class="contact-form-panel bg-brand-bggray rounded-2xl p-8 lg:p-10 border border-brand-bordergray h-full">
            <h3 class="text-[22px] font-bold font-helvetica text-brand-dark">Send us a message</h3>
            <p class="text-[14px] text-brand-muted mt-1">Fill in the details below and we will be in touch.</p>

            <form id="contactForm" class="mt-7 space-y-5" novalidate>
              <!-- Name + Email -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                  <label for="name" class="text-[13px] font-medium text-brand-dark">Your Name</label>
                  <input type="text" id="name" placeholder="John Doe" class="mt-1.5 w-full px-4 py-3 rounded-lg border border-brand-bordergray text-[14px] text-brand-dark placeholder:text-brand-muted/50 outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition">
                  <p class="text-[12px] text-brand-red mt-1 hidden" id="nameError">Please enter your name</p>
                </div>
                <div>
                  <label for="email" class="text-[13px] font-medium text-brand-dark">Email Address</label>
                  <input type="email" id="email" placeholder="john@example.com" class="mt-1.5 w-full px-4 py-3 rounded-lg border border-brand-bordergray text-[14px] text-brand-dark placeholder:text-brand-muted/50 outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition">
                  <p class="text-[12px] text-brand-red mt-1 hidden" id="emailError">Please enter a valid email</p>
                </div>
              </div>

              <!-- Topic -->
              <div>
                <label for="topic" class="text-[13px] font-medium text-brand-dark">Topic</label>
                <select id="topic" class="mt-1.5 w-full px-4 py-3 rounded-lg border border-brand-bordergray text-[14px] text-brand-dark outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition bg-white">
                  <option value="" disabled selected>Select a topic</option>
                  <option value="Market Research">Market Research</option>
                  <option value="Data Collection">Data Collection</option>
                  <option value="General Enquiry">General Enquiry</option>
                  <option value="Partnership">Partnership</option>
                  <option value="Support">Support</option>
                </select>
                <p class="text-[12px] text-brand-red mt-1 hidden" id="topicError">Please select a topic</p>
              </div>

              <!-- Description -->
              <div>
                <label for="description" class="text-[13px] font-medium text-brand-dark">Description</label>
                <textarea id="description" rows="4" placeholder="Tell us about your project or question..." class="mt-1.5 w-full px-4 py-3 rounded-lg border border-brand-bordergray text-[14px] text-brand-dark placeholder:text-brand-muted/50 outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition resize-none"></textarea>
                <p class="text-[12px] text-brand-red mt-1 hidden" id="descriptionError">Please enter a description</p>
              </div>

              <button type="submit" class="w-full bg-brand-blue text-white text-[14px] font-semibold py-3 rounded-lg hover:bg-blue-700 transition">Submit</button>
            </form>
          </div>

        </div>
      </div>
    </section>

  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="js/main.js"></script>
  <script>
    (function(){
      const form = document.getElementById('contactForm');
      const fields = [
        { id: 'name',   errorId: 'nameError',   validate: v => v.trim().length > 0 },
        { id: 'email',  errorId: 'emailError',  validate: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()) },
        { id: 'topic',  errorId: 'topicError',  validate: v => v !== '' },
        { id: 'description', errorId: 'descriptionError', validate: v => v.trim().length > 0 }
      ];

      fields.forEach(f => {
        const el = document.getElementById(f.id);
        const err = document.getElementById(f.errorId);
        el.addEventListener('input', () => {
          if (f.validate(el.value)) err.classList.add('hidden');
        });
        el.addEventListener('blur', () => {
          if (!f.validate(el.value)) err.classList.remove('hidden');
        });
      });

      form.addEventListener('submit', function(e){
        e.preventDefault();
        let valid = true;
        fields.forEach(f => {
          const el = document.getElementById(f.id);
          const err = document.getElementById(f.errorId);
          if (!f.validate(el.value)) { err.classList.remove('hidden'); valid = false; }
        });
        if (valid) {
          form.reset();
          window.showStudyThankYou();
        }
      });
    })();
  </script>
</body>
</html>
