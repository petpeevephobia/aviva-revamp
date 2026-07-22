<?php
  

  $currentPage = 'impressum'; 
  $pageTitle = 'A-Viva Sprachschule - Impressum';
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
        <h1 class="w-100"><?= htmlspecialchars($txt['impressum_title']) ?></h1>
        <p class="w-100"><?= htmlspecialchars($txt['impressum_title_text1']) ?></p>
        
        <p class="w-100">
            Darryl Wayne<br>
            Rotlintstraße 64<br>
            60316 Frankfurt am Main<br>
            Email: info@a-viva.net
        </p>

        <p class="w-100"><?=  htmlspecialchars($txt['impressum_title_text2']) ?></p>

        <h2 class="w-100"><?= htmlspecialchars($txt['impressum_title2']) ?></h2>
        <p class="w-100"><?= htmlspecialchars($txt['impressum_title2_text1']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['impressum_title2_text2']) ?></p>
        <p class="w-100"><?= htmlspecialchars($txt['impressum_title2_text3']) ?></p>

        <h2 class="w-100"><?= htmlspecialchars($txt['impressum_title3']) ?></h2>
        <p class="w-100"><?= htmlspecialchars($txt['impressum_title3_text1']) ?></p>
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