<?php
$pageTitle = $pageTitle ?? 'A-Viva Sprachschule';
$pageDescription = $pageDescription ?? '';
$extraCss = $extraCss ?? []; // optional per-page stylesheets

// Language selector
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Check if a language change was requested via URL string (?lang=de)
if (isset($_GET['lang'])) {
  $_SESSION['lang'] = ($_GET['lang'] === 'de') ? 'de' : 'en';
} else {
  // Default language fallback if no session is set yet
  $_SESSION['lang'] = $_SESSION['lang'] ?? 'en'; 
}
?>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if ($pageDescription): ?>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <?php endif; ?>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

  <?php foreach ($extraCss as $href): ?>
    <link rel="stylesheet" href="<?= htmlspecialchars($href) ?>">
  <?php endforeach; ?>

  <title><?= htmlspecialchars($pageTitle) ?></title>
</head>