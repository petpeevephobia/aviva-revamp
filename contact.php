<?php
  

  $currentPage = 'contact'; 
  $pageTitle = 'A-Viva Sprachschule - Contact';
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

      <!-- hero section -->
      <section class="form-section">
        <div class="container">
          
          <div class="row mb-4 text-left">
            <h1 class="w-100"><?= htmlspecialchars($txt['contact_title']) ?></h2>
            <p class="w-100">	              	
              <?= htmlspecialchars($txt['contact_text']) ?>
            </p>
          </div>

          <div class="row mt-4">
            <div class="col mb-2">
              <div class="card h-100">
                <div class="card-body">
                  <h2><?= htmlspecialchars($txt['contact_email_title']) ?></h2>
                  <p><?= htmlspecialchars($txt['contact_email_text']) ?></p>
                  <a href="mailto:info@a-viva.net"><button type="button" class="btn btn-primary"><?= htmlspecialchars($txt['contact_email_cta']) ?></button></a>
                </div>
              </div>
            </div>
            <div class="col mb-2">
              <div class="card h-100">
                <div class="card-body">
                  <h2><?= htmlspecialchars($txt['contact_mobile_title']) ?></h2>
                  <p><?= htmlspecialchars($txt['contact_mobile_text']) ?></p>
                  <a href="tel:496994340963"><button type="button" class="btn btn-primary"><?= htmlspecialchars($txt['contact_mobile_cta']) ?></button></a>
                </div>
              </div>
            </div>
          </div>
            
          </div>
        </div>
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