<?php
// Dictionary mapping strings to keys
if ($currentLang === 'de') {
    $ctaTxt = [
        // CTA
        'cta_title' => 'Sind Sie bereit, Ihr Leben in Deutschland zu beginnen?',
        'cta_subtitle' => 'Schließe dich den über 100 erfolgreichen Studierenden an, die mit A-Viva ihr Leben in Deutschland verändert haben.',
        'cta_title2' => 'Wir begleiten Sie auf jedem Schritt Ihres Weges',
        'cta_item1' => 'Unterstützung bei der Beantragung eines Visums',
        'cta_item2' => 'Wohnungsbeihilfe',
        'cta_item3' => 'Flexible Zahlungspläne',
        'cta_item4' => 'Prüfungsvorbereitung',
        'cta_cta1' => 'Jetzt bewerben',
        'cta_cta2' => 'Kursdetails anzeigen',
        'cta_subtitle2' => 'Die Kurse sind schnell ausgebucht. Sichern Sie sich noch heute Ihren Platz!',

    ]; 
} else {
    $ctaTxt = [
        // CTA
        'cta_title' => 'Ready to Begin Your Life in Germany?',
        'cta_subtitle' => 'Join 100+ successful students who have transformed their lives in Germany with A-Viva.',
        'cta_title2' => 'We Support Your Every Step',
        'cta_item1' => 'Visa application support',
        'cta_item2' => 'Housing assistance',
        'cta_item3' => 'Flexible payment plans',
        'cta_item4' => 'Exam preparation',
        'cta_cta1' => 'Apply now',
        'cta_cta2' => 'Get course details',
        'cta_subtitle2' => 'Classes fill quickly. Secure your spot today!',

    ];
}
?>



<section class="cta-section">
  <div class="container">

    <div class="row mb-5 text-center">
      <h2 class="w-100"><?= htmlspecialchars($ctaTxt['cta_title']) ?></h2>
      <p class="w-100"><?= htmlspecialchars($ctaTxt['cta_subtitle']) ?></p>
    </div>

    <div class="row shadow p-4 cta-box mx-auto">
      <div class="col-md">
        <h3><?= htmlspecialchars($ctaTxt['cta_title2']) ?></h3>

        <ul class="checked-ul mt-4">
            <li>
              <img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark">
              <?= htmlspecialchars($ctaTxt['cta_item1']) ?>
            </li>
            <li>
              <img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark">
              <?= htmlspecialchars($ctaTxt['cta_item2']) ?>
            </li>
            <li>
              <img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark">
              <?= htmlspecialchars($ctaTxt['cta_item3']) ?>
            </li>
            <li>
              <img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark">
              <?= htmlspecialchars($ctaTxt['cta_item4']) ?>
            </li>
        </ul>
      </div>

      <div class="col-md">
        <a href="contact.php" class="btn btn-primary d-block w-100">
          <?= htmlspecialchars($ctaTxt['cta_cta1']) ?>
        </a>
        <a href="programs.php" class="btn btn-secondary d-block w-100 mt-2">
          <?= htmlspecialchars($ctaTxt['cta_cta2']) ?>
        </a>
        <p class="caption text-center mt-2"><?= htmlspecialchars($ctaTxt['cta_subtitle2']) ?></p>
      </div>
    </div>

  </div>
</section>