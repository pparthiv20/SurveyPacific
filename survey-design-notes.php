<?php
$pageConfig = ['theme' => 'blue'];

$featuredNote = [
  'image' => 'assets/imgs/blog-market-research.jpg',
  'category' => 'Methodology Core',
  'title' => 'Mastering the Art of Scale Design in Global Quantitative Studies',
  'text' => 'How semantic differences across Saudi Arabia, India, and Latin America impact 5-point versus 7-point Likert scales, and how to calibrate your questions for accurate cross-market comparisons.',
  'readTime' => '12 min read',
  'href' => '#'
];

$notes = [
  [
    'image' => 'assets/imgs/blog-survey-methods.jpg',
    'category' => 'Questionnaire Design',
    'title' => 'Crafting Effective Open-Ended Questions',
    'text' => 'Open-ended responses offer unmatched depth, but poorly designed prompts lead to low-quality gibberish. Learn to frame prompts that trigger meaningful answers.',
    'readTime' => '6 min read'
  ],
  [
    'image' => 'assets/imgs/blog-data-science.jpg',
    'category' => 'Survey Logic',
    'title' => 'Reducing Survey Fatigue: A Practical Guide',
    'text' => 'Survey length is only half the battle. Discover how clean branching logic, progress indicators, and dynamic phrasing keep respondents fully engaged.',
    'readTime' => '8 min read'
  ],
  [
    'image' => 'assets/imgs/blog-environment.jpg',
    'category' => 'Sampling',
    'title' => 'Sampling Strategies for Hard-to-Reach Populations',
    'text' => 'When targeting niche business leaders or rural communities, standard panels fall short. We explore alternative recruitment and sampling approaches.',
    'readTime' => '10 min read'
  ],
  [
    'image' => 'assets/imgs/blog-global-fieldwork.jpg',
    'category' => 'Response Optimization',
    'title' => 'A/B Testing Subject Lines for Higher Survey CTR',
    'text' => 'The subject line in your invite email determines whether people open your survey. Learn from practical testing of subject lines across markets.',
    'readTime' => '5 min read'
  ],
  [
    'image' => 'assets/imgs/blog-b2b.jpg',
    'category' => 'Bias Reduction',
    'title' => 'Eliminating Social Desirability Bias in Sensitive Studies',
    'text' => 'Respondents may inflate positive behaviors. Learn response framing and question techniques that help people share more authentic opinions.',
    'readTime' => '9 min read'
  ],
  [
    'image' => 'assets/imgs/blog-ai-technology.jpg',
    'category' => 'Scale Design',
    'title' => 'When to Use Unipolar vs. Bipolar Likert Scales',
    'text' => 'Choosing the wrong scale creates artificial variance. Explore which scale types best capture attitudes and perceptions in your study.',
    'readTime' => '7 min read'
  ]
];

$escape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey Design Notes - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="design-notes-page font-inter text-brand-dark bg-white overflow-x-hidden">
<?php include __DIR__ . '/includes/header.php'; ?>
<main>
  <section class="design-notes-hero bg-brand-blue">
    <div class="design-notes-hero-inner px-6">
      <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Insights / Survey Design Notes</p>
      <h1 class="mt-5 text-[52px] md:text-[52px] font-bold leading-[60px] font-helvetica text-white">Survey Design Notes</h1>
      <p class="mx-auto mt-4 max-w-[620px] text-[13px] leading-[18px] text-white/80">Expert guidance on crafting effective questionnaires, mapping robust survey logic, and<br class="hidden md:block"> optimizing methodologies to ensure clean and actionable research data.</p>
    </div>
  </section>

  <section class="design-notes-content">
    <div class="design-notes-container">
      <h2 class="design-section-heading">Featured Design Note</h2>
      <article class="featured-note">
        <div class="featured-note-image">
          <img src="<?= $escape($featuredNote['image']) ?>" alt="Research team reviewing survey data and global measurement scales" loading="eager">
        </div>
        <div class="featured-note-copy">
          <span class="design-note-tag"><?= $escape($featuredNote['category']) ?></span>
          <h3><?= $escape($featuredNote['title']) ?></h3>
          <p><?= $escape($featuredNote['text']) ?></p>
          <div class="design-note-footer">
            <span><?= $escape($featuredNote['readTime']) ?></span>
            <a href="<?= $escape($featuredNote['href']) ?>">Read Full Note <span aria-hidden="true">&#8594;</span></a>
          </div>
        </div>
      </article>

      <h2 class="design-section-heading latest-heading">Latest Best Practices</h2>
      <div class="design-note-grid">
        <?php foreach ($notes as $note): ?>
          <article class="design-note-card">
            <div class="design-note-card-image">
              <img src="<?= $escape($note['image']) ?>" alt="<?= $escape($note['title']) ?>" loading="lazy">
            </div>
            <div class="design-note-card-copy">
              <span class="design-note-tag"><?= $escape($note['category']) ?></span>
              <h3><?= $escape($note['title']) ?></h3>
              <p><?= $escape($note['text']) ?></p>
              <div class="design-note-footer">
                <span><?= $escape($note['readTime']) ?></span>
                <a href="#">Read Note <span aria-hidden="true">&#8594;</span></a>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="design-notes-newsletter">
    <div class="design-notes-newsletter-inner">
      <div>
        <h2>Get Design Notes In Your Inbox</h2>
        <p>Stay updated with monthly research methodologies, whitepapers, and field-tested<br class="hidden md:block"> survey tips.</p>
      </div>
      <form class="design-notes-subscribe" action="#" method="get">
        <label class="sr-only" for="design-notes-email">Your work email</label>
        <input id="design-notes-email" type="email" name="email" placeholder="Enter your work email" required>
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
