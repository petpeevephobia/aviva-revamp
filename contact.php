<?php
  

  $currentPage = 'contact'; 
  $pageTitle = 'A-Viva Sprachschule - Contact';
  $pageDescription = '...';
  
  require __DIR__ . '/includes/head.php';
  require __DIR__ . '/includes/translations.php';
?>

<!doctype html>
<html lang="<?= htmlspecialchars($currentLang) ?>">
  <?php require __DIR__ . '/includes/contact-handler.php'; ?>

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

          <!-- Form -->
          <div class="row">
            <div class="col-md-8 col-lg-6">
              <?php if ($formSuccess): ?>
                <div class="alert alert-success" role="alert">
                  <?= htmlspecialchars($txt['thankyou_text']) ?>
                </div>
              <?php endif; ?>

              <?php if ($formError !== ''): ?>
                <div class="alert alert-danger" role="alert">
                  <?= htmlspecialchars($formError) ?>
                </div>
              <?php endif; ?>

              <?php if (!empty($contactRequiresWebServer)): ?>
                <div class="alert alert-warning" role="alert">
                  The contact form must be opened through a web server (for example XAMPP or <code>php -S localhost:8000</code> in the project folder, then visit <code>http://localhost:8000/contact.php</code>). Running the PHP file directly in the editor cannot send enquiries.
                </div>
              <?php endif; ?>

              <form method="post" action="contact.php">
                <fieldset<?= !empty($contactRequiresWebServer) ? ' disabled' : '' ?>>
                <div class="form-group">
                  <label for="contactName"><?= htmlspecialchars($txt['name']) ?></label>
                  <input type="text" class="form-control" id="contactName" name="name" placeholder="<?= htmlspecialchars($txt['name_placeholder']) ?>" value="<?= htmlspecialchars($contactName) ?>" required>
                </div>
                <div class="form-group">
                  <label for="contactEmail"><?= htmlspecialchars($txt['email']) ?></label>
                  <input type="email" class="form-control" id="contactEmail" name="email" placeholder="<?= htmlspecialchars($txt['email_placeholder']) ?>" value="<?= htmlspecialchars($contactEmail) ?>" required>
                </div>
                <div class="form-group">
                  <label for="contactPhone"><?= htmlspecialchars($txt['phone_number']) ?></label>
                  <input type="tel" class="form-control" id="contactPhone" name="phone" placeholder="<?= htmlspecialchars($txt['phone_number_placeholder']) ?>" value="<?= htmlspecialchars($contactPhone) ?>">
                </div>
                <div class="form-group">
                  <label for="contactMessage"><?= htmlspecialchars($txt['message']) ?></label>
                  <textarea class="form-control" id="contactMessage" name="message" rows="5" placeholder="<?= htmlspecialchars($txt['message_placeholder']) ?>" required><?= htmlspecialchars($contactMessage) ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?= htmlspecialchars($txt['contact_cta']) ?></button>
                </fieldset>
              </form>
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