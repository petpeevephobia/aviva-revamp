<?php
// 1. Start session 
session_start();


if (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = 'en'; 
}

// 4. Set global variable
$currentLang = $_SESSION['lang'];

$pageTitle = $pageTitle ?? 'A-Viva Sprachschule';
$pageDescription = $pageDescription ?? '';
$extraCss = $extraCss ?? []; // optional per-page stylesheets
?>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if ($pageDescription): ?>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <?php endif; ?>

  <link rel="icon" type="image/x-icon" href="/pics/favicon.ico">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

  <script src="main.js" defer></script>

  <title><?= htmlspecialchars($pageTitle) ?></title>
</head>