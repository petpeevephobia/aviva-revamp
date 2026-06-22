<?php
// 3. Define the $navItems structural data matching your translations
if ($currentLang === 'de') {
    $navItems = [
        'home'       => ['url' => 'index.php', 'label' => 'Startseite'],
        'programs'   => ['url' => 'programs.php', 'label' => 'Programme'],
        'activities' => ['url' => 'activities.php', 'label' => 'Aktivitäten'],
        'registration' => ['url' => 'register.php', 'label' => 'Anmeldung'],
        'contact'    => ['url' => 'contact.php', 'label' => 'Kontakt']
    ];
} else {
    $navItems = [
        'home'       => ['url' => 'index.php', 'label' => 'Home'],
        'programs'   => ['url' => 'programs.php', 'label' => 'Programs'],
        'activities' => ['url' => 'activities.php', 'label' => 'Activities'],
        'registration' => ['url' => 'register.php', 'label' => 'Register'],
        'contact'    => ['url' => 'contact.php', 'label' => 'Contact']
    ];
}

// 4. Capture current script filename so flag toggles don't break routing context
$currentFile = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-custom sticky-top">
  <a class="navbar-brand" href="index.php">
    <img class="logo" src="pics/new-logo.png" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <?php foreach ($navItems as $key => $item): ?>
        <a class="nav-item nav-link <?= $currentPage === $key ? 'active' : '' ?>"
           href="<?= htmlspecialchars($item['url']) ?>">
          <?= htmlspecialchars($item['label']) ?>
        </a>
      <?php endforeach; ?>
    </div>
    <div>
      <!-- <a href="<?= $currentFile; ?>?lang=en"><img src="pics/en.gif" alt="English"></a> -->
      <!-- <a href="<?= $currentFile; ?>?lang=de"><img src="pics/de.gif" alt="German"></a> -->
      <a href="#" class="lang-selector" data-lang="en"><img src="pics/en.gif" alt="English"></a>
      <a href="#" class="lang-selector" data-lang="de"><img src="pics/de.gif" alt="German"></a>
    </div>
  </div>
</nav>