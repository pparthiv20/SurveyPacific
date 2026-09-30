<?php
$pageConfig = ['theme' => 'blue'];
$posts = [
  ['image' => 'assets/imgs/blog-market-research.jpg', 'category' => 'Market Research', 'title' => 'How to Design Face-to-Face Household Surveys in 2026', 'date' => 'Feb 12, 2026', 'text' => 'Household research requires a blend of geographic precision, rigorous sampling, and high interviewer empathy. Discover best practices for multi-city campaigns.'],
  ['image' => 'assets/imgs/blog-data-science.jpg', 'category' => 'Data Science', 'title' => 'Synthesizing CATI and Online Survey Portals for Deeper Insight', 'date' => 'Jan 28, 2026', 'text' => 'Mixed-mode surveys produce the highest response rates. Here is how we merged telephone interviews with direct online panels across emerging markets.'],
  ['image' => 'assets/imgs/blog-user-insights.jpg', 'category' => 'User Insights', 'title' => 'Concept Validation: Testing Brand Packaging with Real Audiences', 'date' => 'Jan 15, 2026', 'text' => 'What triggers package selection? We used moderated packaging discussions to map buyer triggers in real-world retail environments.'],
  ['image' => 'assets/imgs/blog-b2b.jpg', 'category' => 'B2B', 'title' => 'Mapping Decision Makers: B2B Buying Process Deep-Dive', 'date' => 'Dec 10, 2025', 'text' => 'B2B buying behavior is shifting away from direct procurement. Learn how to locate hidden influencers and stakeholders within complex accounts.'],
  ['image' => 'assets/imgs/blog-ai-technology.jpg', 'category' => 'AI & Technology', 'title' => 'High-Quality Data Annotation: Fueling the Next Generation of Machine Learning', 'date' => 'Nov 22, 2025', 'text' => 'AI is only as smart as its training sets. Explore how human-in-the-loop quality reviews build safer and cleaner foundational models.'],
  ['image' => 'assets/imgs/blog-environment.jpg', 'category' => 'Environmental', 'title' => 'Climate Resilience: Researching Urban Spaces and Citizen Perspectives', 'date' => 'Nov 05, 2025', 'text' => 'As sustainability becomes critical, find out how cities use public-opinion mapping to design resilient infrastructure projects.'],
  ['image' => 'assets/imgs/blog-brand-research.jpg', 'category' => 'User Insights', 'title' => 'A Better Way to Think About Brand Health', 'date' => 'Oct 18, 2025', 'text' => 'Move beyond single measures. Combine awareness, consideration, and lived customer experience to understand the whole picture.'],
  ['image' => 'assets/imgs/blog-survey-methods.jpg', 'category' => 'Market Research', 'title' => 'Choosing the Right Mix of Research Methods', 'date' => 'Sep 11, 2025', 'text' => 'Learn when qualitative and quantitative evidence work best together, and how to connect findings into a clear decision.'],
  ['image' => 'assets/imgs/blog-global-fieldwork.jpg', 'category' => 'Data Science', 'title' => 'Keeping Multi-Market Projects Connected', 'date' => 'Aug 29, 2025', 'text' => 'Practical principles for consistent sampling, local context, and quality control across countries and fieldwork teams.']
];
$escape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="font-inter text-brand-dark bg-white overflow-x-hidden">
<?php include __DIR__ . '/includes/header.php'; ?>
<main>
  <section class="blog-hero bg-brand-blue">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
      <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Insights / Blog</p>
      <h1 class="mt-6 text-[52px] md:text-[52px] font-bold leading-[60px] font-helvetica text-white">Insights &amp; Updates</h1>
      <p class="mx-auto mt-4 max-w-[650px] text-[15px] leading-5 text-white/80">Thought leadership, tactical guides, and execution breakthroughs from our global fieldwork<br class="hidden md:block"> and statistical research teams.</p>
    </div>
  </section>
  <section class="py-12 lg:py-16">
    <div class="max-w-[1240px] mx-auto px-6 lg:px-0">
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($posts as $index => $post): ?>
          <article data-category="<?= $escape($post['category']) ?>" class="<?= $index >= 6 ? 'hidden ' : '' ?>blog-card group flex flex-col overflow-hidden rounded-xl border border-brand-bordergray bg-white transition duration-200 hover:shadow-lg">
            <div class="blog-card-image relative w-full overflow-hidden"><img src="<?= $escape($post['image']) ?>" alt="<?= $escape($post['title']) ?>" loading="lazy"><span class="blog-category"><?= $escape($post['category']) ?></span></div>
            <div class="blog-card-body flex flex-1 flex-col p-4">
              <h2 class="blog-card-title mt-3 text-[20px] font-bold leading-[26px] font-helvetica group-hover:text-brand-blue transition"><?= $escape($post['title']) ?></h2>
              <p class="blog-card-summary mt-2 flex-1 text-[14px] leading-[21px] text-[#555]"><?= $escape($post['text']) ?></p>
            </div>
            <div class="blog-card-footer flex items-center justify-between border-t border-[#e8e8e8] px-4 py-[11px]"><time class="text-[12px] text-brand-muted"><?= $escape($post['date']) ?></time><a href="#" class="inline-flex items-center gap-2 text-[13px] font-semibold text-brand-blue" aria-label="Read more: <?= $escape($post['title']) ?>">Read more <span aria-hidden="true">&#8250;</span></a></div>
          </article>
        <?php endforeach; ?>
      </div>
      <p data-empty-state class="hidden py-12 text-center text-brand-muted">No articles found in this category.</p>
      <button type="button" data-show-more class="blog-load-more mt-6 mx-auto block rounded-lg border border-brand-blue px-7 py-[10px] text-[13px] font-semibold text-brand-blue transition hover:bg-brand-blue hover:text-white">Load More Articles</button>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
var visibleLimit = 6;
var blogCards = Array.from(document.querySelectorAll('[data-category]'));
var moreButton = document.querySelector('[data-show-more]');
function updateBlogCards() {
  var matched = 0;
  var shown = 0;
  blogCards.forEach(function(card) {
    matched++;
    var show = shown < visibleLimit;
    card.classList.toggle('hidden', !show);
    if (show) shown++;
  });
  document.querySelector('[data-empty-state]').classList.toggle('hidden', matched > 0);
  moreButton.classList.toggle('hidden', shown >= matched);
}
moreButton.addEventListener('click', function() { visibleLimit += 6; updateBlogCards(); });
updateBlogCards();
</script>
<script src="js/main.js"></script>
</body>
</html>

