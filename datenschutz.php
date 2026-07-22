<?php
  

  $currentPage = 'datenschutz'; 
  $pageTitle = 'A-Viva Sprachschule - Datenschutz';
  $pageDescription = '...';
  
  require __DIR__ . '/includes/head.php';
  require __DIR__ . '/includes/translations.php';
?>


<!doctype html>
<html lang="<?= htmlspecialchars($currentLang) ?>">

  <body>
    <!-- START nav -->
    <?php require __DIR__ . '/includes/nav.php'; ?>
    <!-- END nav -->



    
    <!-- START main -->
    <main class="mx-auto">

    <section class="container impressum">
        <h1 class="w-100"><?= htmlspecialchars($txt['datenschutz_title']) ?></h1>

        <h2 class="w-100"><?= htmlspecialchars($txt['datenschutz_title2']) ?></h2>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title2_text1']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title2_text2']) ?></p>

        <h2 class="w-100"><?= htmlspecialchars($txt['datenschutz_title3']) ?></h2>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title3_text1']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title3_text2']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title3_text3']) ?></p>

        <h2 class="w-100"><?= htmlspecialchars($txt['datenschutz_title4']) ?></h2>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title4_text']) ?></p>

        <h2 class="w-100"><?= htmlspecialchars($txt['datenschutz_title5']) ?></h2>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title5_text']) ?></p>

        <h2 class="w-100"><?= htmlspecialchars($txt['datenschutz_title6']) ?></h2>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title6_text1']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title6_text2']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title6_text3']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title6_text4']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title6_text5']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title6_text6']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title6_text7']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title6_text8']) ?></p>

        <h2 class="w-100"><?= htmlspecialchars($txt['datenschutz_title7']) ?></h2>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title7_text1']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['datenschutz_title7_text2']) ?></p>
    </section>
    
    </main>
    <!-- END main -->




    <!-- footer -->
    <?php require __DIR__ . '/includes/footer.php'; ?>





    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>





</html>