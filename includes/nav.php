<?php
// Set before include: $currentPage = 'home';
$navItems = [
  'home'   => ['label' => 'Home',   'url' => 'index.php'],
  'programs'   => ['label' => 'Programs',   'url' => 'programs.php'],
  'activities' => ['label' => 'Activities', 'url' => 'activities.php'],
  'register'   => ['label' => 'Register',   'url' => 'register.php'],
  'contact'    => ['label' => 'Contact',    'url' => 'contact.php'],
];
$currentPage = $currentPage ?? '';
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
      <!-- Language selector -->
      <a href="?lang=en"><img src="pics/en.gif" alt="English"></a>
      <a href="?lang=de"><img src="pics/de.gif" alt="German"></a>
    </div>
  </div>
</nav>