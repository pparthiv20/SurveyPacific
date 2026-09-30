<?php
$pageConfig = ['theme' => 'blue'];

$faqs = [
  [
    'category' => 'Research Services',
    'question' => 'What types of research does Survey Pacific offer?',
    'answer' => 'We deliver market, consumer, brand, customer experience, social and public research. Our teams support projects from research design and sampling through fieldwork, analysis and reporting.',
    'open' => false
  ],
  [
    'category' => 'Quality & Compliance',
    'question' => 'How do you ensure data quality across multi-country studies?',
    'answer' => 'We use a multi-stage quality framework that includes interviewer training, respondent validation, fieldwork monitoring, logic and consistency checks, and review of completed interviews. Local teams follow a shared protocol so results remain comparable across markets.',
    'open' => false
  ],
  [
    'category' => 'Research Services',
    'question' => 'What markets and countries do you currently cover?',
    'answer' => 'We coordinate research across more than 50 countries, with experience in India, the Gulf region, Southeast Asia, Africa and Latin America. We can reach connected audiences as well as rural and harder-to-reach populations.',
    'open' => false
  ],
  [
    'category' => 'Pricing & Timelines',
    'question' => 'How long does a typical research project take?',
    'answer' => 'Timing depends on the audience, markets, sample size and method. Once we understand your objectives, we provide a project schedule covering design, set-up, fieldwork, analysis and delivery.',
    'open' => false
  ],
  [
    'category' => 'Pricing & Timelines',
    'question' => 'What is your pricing model for fieldwork execution?',
    'answer' => 'Project costs are scoped to the work required, including market coverage, sample and audience needs, interview length, methodology, translation and reporting. We share a clear proposal with assumptions and deliverables before work begins.',
    'open' => false
  ],
  [
    'category' => 'Data Collection',
    'question' => 'Do you handle respondent recruitment and incentives?',
    'answer' => 'Yes. We can recruit and screen participants for consumer, business and specialist audiences, and manage locally appropriate incentives where required by the study design.',
    'open' => false
  ],
  [
    'category' => 'Methodologies',
    'question' => 'What qualitative methodologies do you support?',
    'answer' => 'Our qualitative work includes focus groups, depth interviews, in-home and in-context interviews, usability sessions, online discussions and expert interviews. We can combine these with quantitative research when a project needs both depth and scale.',
    'open' => false
  ],
  [
    'category' => 'Quality & Compliance',
    'question' => 'How do you ensure compliance with data privacy regulations?',
    'answer' => 'We build privacy requirements into project planning, participant communications, data handling and retention. Our teams follow applicable local requirements and client protocols, with access to project information limited to authorized personnel.',
    'open' => false
  ]
];

$categories = ['All', 'Research Services', 'Data Collection', 'Methodologies', 'Pricing & Timelines', 'Quality & Compliance'];
$escape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frequently Asked Questions - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="faq-page font-inter text-brand-dark bg-white overflow-x-hidden">
<?php include __DIR__ . '/includes/header.php'; ?>
<main>
  <section class="faq-hero bg-brand-blue">
    <div class="faq-hero-inner px-6">
      <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Insights / FAQs</p>
      <h1 class="mt-6 text-[52px] md:text-[52px] font-bold leading-[60px] font-helvetica text-white">Frequently Asked Questions</h1>
      <p class="mt-4 text-[15px] leading-5 text-white/80">Find direct answers about Survey Pacific's global research services.</p>
    </div>
  </section>

  <section class="faq-content">
    <div class="faq-container">
      <div class="faq-filters tabs-scroll flex gap-2 overflow-x-auto pb-2" role="group" aria-label="Filter FAQs by topic">
        <?php foreach ($categories as $index => $category): ?>
          <button type="button" data-faq-filter="<?= $index === 0 ? 'all' : $escape($category) ?>" aria-pressed="<?= $index === 0 ? 'true' : 'false' ?>" class="faq-filter<?= $index === 0 ? ' is-active' : '' ?>"><?= $escape($category) ?></button>
        <?php endforeach; ?>
      </div>

      <div class="faq-list">
        <?php foreach ($faqs as $index => $faq): ?>
          <article class="faq-item<?= $faq['open'] ? ' is-open' : '' ?>" data-faq-category="<?= $escape($faq['category']) ?>">
            <h2 class="faq-question-heading">
              <button type="button" class="faq-question" aria-expanded="<?= $faq['open'] ? 'true' : 'false' ?>" aria-controls="faq-answer-<?= $index ?>" id="faq-question-<?= $index ?>">
                <span><?= $escape($faq['question']) ?></span>
                <span class="faq-toggle" aria-hidden="true"><?= $faq['open'] ? '&minus;' : '+' ?></span>
              </button>
            </h2>
            <div class="faq-answer" id="faq-answer-<?= $index ?>" role="region" aria-labelledby="faq-question-<?= $index ?>" aria-hidden="true">
              <p><?= $escape($faq['answer']) ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="faq-contact">
    <div class="faq-contact-inner">
      <h2>Still have questions?</h2>
      <p>If you didn't find the answer you were looking for, feel free to reach out directly.<br class="hidden sm:block"> Our global research support team is available to help.</p>
      <div class="faq-contact-actions">
        <a href="contact-us.php" class="faq-contact-primary">Contact Us <span aria-hidden="true">&#8594;</span></a>
        <button type="button" data-open-study-modal class="faq-contact-secondary">Talk to our research team</button>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
(function () {
  var filterButtons = Array.from(document.querySelectorAll('[data-faq-filter]'));
  var faqItems = Array.from(document.querySelectorAll('[data-faq-category]'));

  filterButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var selectedCategory = button.dataset.faqFilter;
      filterButtons.forEach(function (filter) {
        var active = filter === button;
        filter.classList.toggle('is-active', active);
        filter.setAttribute('aria-pressed', active ? 'true' : 'false');
      });
      faqItems.forEach(function (item) {
        var visible = selectedCategory === 'all' || item.dataset.faqCategory === selectedCategory;
        item.classList.toggle('hidden', !visible);
      });
    });
  });

  document.querySelectorAll('.faq-question').forEach(function (button) {
    button.addEventListener('click', function () {
      var expanded = button.getAttribute('aria-expanded') === 'true';
      var answer = document.getElementById(button.getAttribute('aria-controls'));
      button.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      answer.setAttribute('aria-hidden', expanded ? 'true' : 'false');
      button.closest('.faq-item').classList.toggle('is-open', !expanded);
      button.querySelector('.faq-toggle').textContent = expanded ? '+' : '\u2212';
    });
  });
})();
</script>
<script src="js/main.js"></script>
</body>
</html>
