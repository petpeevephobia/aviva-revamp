<?php
$ctaTitle = $ctaTitle ?? 'Ready to Begin Your Life in Germany?';
$ctaText  = $ctaText  ?? 'Join 100+ successful students who have transformed their lives in Germany with A-Viva.';
$ctaHeading = $ctaHeading ?? 'We Support Your Every Step';
$ctaBullets = $ctaBullets ?? [
  'Visa application support',
  'Housing assistance',
  'Flexible payment plans',
  'Exam preparation',
];
$ctaPrimaryLabel = $ctaPrimaryLabel ?? 'Apply now';
$ctaPrimaryUrl   = $ctaPrimaryUrl   ?? 'contact.php';
$ctaSecondaryLabel = $ctaSecondaryLabel ?? 'Get course details';
$ctaSecondaryUrl   = $ctaSecondaryUrl   ?? 'programs.php';
$ctaCaption = $ctaCaption ?? 'Classes fill quickly. Secure your spot today!';
?>
<section class="cta-section">
  <div class="container">

    <div class="row mb-5 text-center">
      <h2 class="w-100"><?= htmlspecialchars($ctaTitle) ?></h2>
      <p class="w-100"><?= htmlspecialchars($ctaText) ?></p>
    </div>

    <div class="row shadow p-4 cta-box mx-auto">
      <div class="col-md">
        <h3><?= htmlspecialchars($ctaHeading) ?></h3>

        <ul class="checked-ul mt-4">
          <?php foreach ($ctaBullets as $bullet): ?>
            <li>
              <img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark">
              <?= htmlspecialchars($bullet) ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-md">
        <a href="<?= htmlspecialchars($ctaPrimaryUrl) ?>" class="btn btn-primary d-block w-100">
          <?= htmlspecialchars($ctaPrimaryLabel) ?>
        </a>
        <a href="<?= htmlspecialchars($ctaSecondaryUrl) ?>" class="btn btn-secondary d-block w-100 mt-2">
          <?= htmlspecialchars($ctaSecondaryLabel) ?>
        </a>
        <p class="caption text-center mt-2"><?= htmlspecialchars($ctaCaption) ?></p>
      </div>
    </div>

  </div>
</section>