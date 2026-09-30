<?php
$pageConfig = ['theme' => 'blue'];
$featuredGuide = [
  'image' => 'assets/imgs/blog-market-research.jpg',
  'category' => 'Research Planning',
  'title' => 'The Essential Guide to Building a Research Plan',
  'text' => 'Turn a business challenge into a practical research plan. Learn to define the decision, choose the right audiences and methods, and connect findings to action.',
  'readTime' => '14 min read'
];
$guides = [
  ['image' => 'assets/imgs/blog-survey-methods.jpg', 'category' => 'Survey Design', 'title' => 'Writing Clear Questions That Get Useful Answers', 'text' => 'A practical guide to wording, order and response options that make questionnaires easier to understand and answer.', 'readTime' => '8 min read'],
  ['image' => 'assets/imgs/blog-data-science.jpg', 'category' => 'Data Quality', 'title' => 'A Guide to Reliable Survey Data', 'text' => 'Build quality checks into every stage, from sample design and respondent screening to field monitoring and validation.', 'readTime' => '10 min read'],
  ['image' => 'assets/imgs/blog-user-insights.jpg', 'category' => 'Customer Research', 'title' => 'Planning Research Around the Customer Journey', 'text' => 'Map the moments that matter and learn where customer feedback can reveal the clearest opportunities to improve.', 'readTime' => '7 min read'],
  ['image' => 'assets/imgs/blog-b2b.jpg', 'category' => 'B2B Research', 'title' => 'Reaching the Right Business Decision Makers', 'text' => 'Plan a focused B2B study with clear audience definitions, realistic recruitment criteria and thoughtful interview design.', 'readTime' => '9 min read'],
  ['image' => 'assets/imgs/blog-environment.jpg', 'category' => 'Fieldwork', 'title' => 'A Practical Guide to Multi-Country Fieldwork', 'text' => 'Coordinate local expertise, shared standards and consistent quality checks across markets and languages.', 'readTime' => '12 min read'],
  ['image' => 'assets/imgs/blog-ai-technology.jpg', 'category' => 'Research Methods', 'title' => 'Choosing Qualitative and Quantitative Methods', 'text' => 'Understand what each approach can answer and how mixed-method research can provide both depth and scale.', 'readTime' => '11 min read']
];
$escape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Guides - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css"><link rel="stylesheet" href="css/custom.css">
</head>
<body class="design-notes-page font-inter text-brand-dark bg-white overflow-x-hidden">
<?php include __DIR__ . '/includes/header.php'; ?>
<main>
  <section class="design-notes-hero bg-brand-blue"><div class="design-notes-hero-inner px-6">
    <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Insights / Research Guides</p>
    <h1 class="mt-5 text-[52px] md:text-[52px] font-bold leading-[60px] font-helvetica text-white">Research Guides</h1>
    <p class="mx-auto mt-4 max-w-[620px] text-[13px] leading-[18px] text-white/80">Practical resources to help you plan stronger studies, reach the right audiences,<br class="hidden md:block"> and turn research findings into confident decisions.</p>
  </div></section>
  <section class="design-notes-content"><div class="design-notes-container">
    <h2 class="design-section-heading">Featured Research Guide</h2>
    <article class="featured-note">
      <div class="featured-note-image"><img src="<?= $escape($featuredGuide['image']) ?>" alt="Research team planning a study" loading="eager"></div>
      <div class="featured-note-copy"><span class="design-note-tag"><?= $escape($featuredGuide['category']) ?></span>
        <h3><?= $escape($featuredGuide['title']) ?></h3><p><?= $escape($featuredGuide['text']) ?></p>
        <div class="design-note-footer"><span><?= $escape($featuredGuide['readTime']) ?></span><a href="#">Read Full Guide <span aria-hidden="true">&#8594;</span></a></div>
      </div>
    </article>
    <h2 class="design-section-heading latest-heading">Latest Research Guides</h2>
    <div class="design-note-grid">
      <?php foreach ($guides as $guide): ?>
        <article class="design-note-card">
          <div class="design-note-card-image"><img src="<?= $escape($guide['image']) ?>" alt="<?= $escape($guide['title']) ?>" loading="lazy"></div>
          <div class="design-note-card-copy"><span class="design-note-tag"><?= $escape($guide['category']) ?></span>
            <h3><?= $escape($guide['title']) ?></h3><p><?= $escape($guide['text']) ?></p>
            <div class="design-note-footer"><span><?= $escape($guide['readTime']) ?></span><a href="#">Read Guide <span aria-hidden="true">&#8594;</span></a></div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div></section>
  <section class="design-notes-newsletter"><div class="design-notes-newsletter-inner">
    <div><h2>Get Research Guides In Your Inbox</h2><p>Get practical research resources and new field-tested guides delivered monthly.</p></div>
    <form class="design-notes-subscribe" action="#" method="get"><label for="research-guide-email">Your work email</label><input id="research-guide-email" type="email" name="email" placeholder="Enter your work email" required><button type="submit">Subscribe</button></form>
  </div></section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?><script src="js/main.js"></script>
</body>
</html>
