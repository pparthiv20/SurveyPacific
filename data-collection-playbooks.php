<?php
$pageConfig = ['theme' => 'blue'];
$handbooks = [
  ['icon' => 'screen', 'title' => 'Online & Digital Panel', 'text' => 'High-integrity panels, mobile CATI integrations, web surveys, and quality checks.', 'count' => '8 Playbooks', 'color' => 'blue'],
  ['icon' => 'clipboard', 'title' => 'Face-to-Face & CAPI', 'text' => 'Household recruitment, Kish grid structures, spatial audits, and offline CAPI execution.', 'count' => '12 Playbooks', 'color' => 'green'],
  ['icon' => 'headset', 'title' => 'Telephone & CATI', 'text' => 'Business respondent dialing, multi-lingual call centers, and dialing logic.', 'count' => '6 Playbooks', 'color' => 'gold']
];
$playbooks = [
  ['type' => 'CAPI & Face-to-Face', 'title' => 'Running Large-Scale CAPI Surveys in Rural India', 'text' => 'Optimal field workflows, household selection logic, off-grid power solutions, and translation validation structures across multiple village tiers.'],
  ['type' => 'Online Panel', 'title' => 'Online Panel Recruitment & Quality Control', 'text' => 'Rigorous digital vetting protocols, automated speed detection, geographic IP matching, and statistical outlier purification.'],
  ['type' => 'Mystery Shopping', 'title' => 'Mystery Shopping Programme Design & Execution', 'text' => 'Evaluator training guidelines, hidden camera protocols, and consistent scoring metrics for large-scale retail environment assessments.'],
  ['type' => 'CATI & Telephone', 'title' => 'Telephone Survey Best Practices for B2B Research', 'text' => 'Connecting with executive-level gatekeepers, time-slot scheduling, respondent incentive balance, and phone-audio verification standards.'],
  ['type' => 'Multi-Country CAPI', 'title' => 'Managing Multi-Language Fieldwork Across APAC', 'text' => 'Handling language nuances, double-back translation guidelines, and interviewer pairing metrics across diverse regional populations.'],
  ['type' => 'Panel Quality', 'title' => 'Respondent Incentive Strategies That Work', 'text' => 'Determining local reward currency equivalents, micro-transaction logistics, compliance logs, and tax audit reporting.']
];
$escape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Collection Playbooks - Survey Pacific</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css"><link rel="stylesheet" href="css/custom.css">
</head>
<body class="playbooks-page font-inter text-brand-dark bg-white overflow-x-hidden">
<?php include __DIR__ . '/includes/header.php'; ?>
<main>
  <section class="design-notes-hero bg-brand-blue"><div class="design-notes-hero-inner px-6">
    <p class="text-[12px] font-medium text-white/75 page-breadcrumb">Home / Insights / Data Collection Playbooks</p>
    <h1 class="mt-5 text-[52px] md:text-[52px] font-bold leading-[60px] font-helvetica text-white">Data Collection Playbooks</h1>
    <p class="mx-auto mt-4 max-w-[620px] text-[13px] leading-[18px] text-white/80">Practical methodologies and step-by-step field operational guidelines. Learn the strict<br class="hidden md:block"> standards we employ to recruit, screen, and collect high-integrity data.</p>
  </div></section>
  <section class="playbooks-content"><div class="playbooks-container">
    <h2 class="playbook-section-heading">Methodology Handbooks</h2>
    <div class="handbook-grid">
      <?php foreach ($handbooks as $handbook): ?>
        <article class="handbook-card handbook-<?= $escape($handbook['color']) ?>">
          <div class="handbook-icon" aria-hidden="true">
            <?php if ($handbook['icon'] === 'screen'): ?>
              <svg viewBox="0 0 24 24"><rect x="3.5" y="4" width="17" height="13" rx="1.5"></rect><path d="M8 21h8M12 17v4"></path></svg>
            <?php elseif ($handbook['icon'] === 'clipboard'): ?>
              <svg viewBox="0 0 24 24"><rect x="5" y="4.5" width="14" height="17" rx="1.5"></rect><path d="M9 4.5V3h6v1.5M9 10h6M9 14h6"></path></svg>
            <?php else: ?>
              <svg viewBox="0 0 24 24"><path d="M4 13v-2a8 8 0 0 1 16 0v2M4 13v4h4v-6H5M20 13v4h-4v-6h3M16 20h-4"></path></svg>
            <?php endif; ?>
          </div>
          <h3><?= $escape($handbook['title']) ?></h3>
          <p><?= $escape($handbook['text']) ?></p>
          <div class="handbook-footer"><span><?= $escape($handbook['count']) ?></span><a href="#operational-guides">Explore <span aria-hidden="true">&#8250;</span></a></div>
        </article>
      <?php endforeach; ?>
    </div>

    <h2 class="playbook-section-heading operational-heading" id="operational-guides">Operational Guides</h2>
    <div class="operational-grid">
      <?php foreach ($playbooks as $index => $playbook): ?>
        <article class="operational-card">
          <span class="operational-number"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
          <div class="operational-copy">
            <span class="operational-tag"><?= $escape($playbook['type']) ?></span>
            <h3><?= $escape($playbook['title']) ?></h3>
            <p><?= $escape($playbook['text']) ?></p>
            <a href="#">Open Playbook <span aria-hidden="true">&#8250;</span></a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div></section>
  <section class="playbooks-contact"><div class="playbooks-contact-inner">
    <h2>Ready to plan your next fieldwork study?</h2>
    <p>Speak directly with our senior methodology architects. We help configure appropriate quotas, local direct translations, and quality checkpoints custom to your parameters.</p>
    <div><a href="contact-us.php" class="playbooks-contact-primary">Talk to Our Team</a><button type="button" data-open-study-modal class="playbooks-contact-secondary">Schedule Consultation</button></div>
  </div></section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
