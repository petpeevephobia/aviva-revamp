<?php
  

  $currentPage = 'home'; 
  $pageTitle = 'A-Viva Sprachschule - Home';
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

    <section class="hero-section container h-100">
          
      <div class="row text-center p-5">
        <h1 class="w-100"><?= htmlspecialchars($txt['hero_title']) ?></h1>
        <p class="w-100"><?= htmlspecialchars($txt['hero_subtitle']) ?></p>
        <div class="row mx-auto">
          <a href="contact.php"><button type="button" class="btn btn-primary"><?= htmlspecialchars($txt['hero_enquire']) ?></button></a>
          <a href="programs.php"><button type="button" class="btn btn-secondary ml-2"><?= htmlspecialchars($txt['hero_details']) ?></button></a>
        </div>
      </div>
      
      <div class="hero-marquee overflow-hidden w-100 mt-4">
        <div class="d-flex flex-nowrap hero-marquee-track">
          <img class="hero-marquee-img rounded mr-1" src="galeries/avivaconcert/images/1.jpg" alt="">
          <img class="hero-marquee-img rounded mr-1" src="galeries/jpmc/images/1 the victory smile.jpg" alt="">
          <img class="hero-marquee-img rounded mr-1" src="galeries/sushi/images/sushi2.jpg" alt="">
          <img class="hero-marquee-img rounded mr-1" src="galeries/bonfire/images/bonfire+5.jpg" alt="">
      
          <img class="hero-marquee-img rounded mr-1" src="galeries/avivaconcert/images/1.jpg" alt="" aria-hidden="true">
          <img class="hero-marquee-img rounded mr-1" src="galeries/jpmc/images/1 the victory smile.jpg" alt="" aria-hidden="true">
          <img class="hero-marquee-img rounded mr-1" src="galeries/sushi/images/sushi2.jpg" alt="" aria-hidden="true">
          <img class="hero-marquee-img rounded mr-1" src="galeries/bonfire/images/bonfire+5.jpg" alt="" aria-hidden="true">
        </div>
      </div>
            
      <!-- STATS -->
      <div class="container mt-5">
        <div class="row align-items-center">
          <div class="col-sm p-4">
            <div class="d-flex justify-content-center">
              <p class="stats-number font-weight-bold mr-1">4,9</p>
              <img src="pics/vector-star.svg" alt="Star">
            </div>
            <p class="text-center"><?= htmlspecialchars($txt['stats_1']) ?></p>
          </div>
          <div class="red-line d-none d-md-block"></div>
        
          <div class="col-sm p-4">
            <div class="d-flex justify-content-center">
              <p class="stats-number font-weight-bold mr-1">15+</p>
            </div>
            <p class="text-center"><?= htmlspecialchars($txt['stats_2']) ?></p>
          </div>
        
          <div class="red-line d-none d-md-block"></div>
          <div class="col-sm p-4">
            <div class="d-flex justify-content-center">
              <p class="stats-number font-weight-bold mr-1">9+</p>
            </div>
            <p class="text-center"><?= htmlspecialchars($txt['stats_3']) ?></p>
          </div>
        </div>
      </div>
    </section>



    <section class="programs-section grey-bg">
      <div class="container">

        <div class="row mb-5 text-center">
          <h2 class="w-100"><?= htmlspecialchars($txt['program_title']) ?></h2>
          <p class="w-100"><?= htmlspecialchars($txt['program_subtitle']) ?></p>
        </div>

        <!-- Program cards -->
        <div class="row">
          <div class="col-12 col-md-4 mb-2 px-2 d-flex align-items-center justify-content-center">
            <div class="card h-100">
              <img class="card-img-top" src="pics/beginner-german.jpg" alt="In the supermarket">
              <div class="card-body mt-4">
                <h3 class="card-text"><?= htmlspecialchars($txt['program_beginner_title']) ?></h3>
                <p class="card-text"><?= htmlspecialchars($txt['program_beginner_text1']) ?></p>
                <p class="card-text"><?= htmlspecialchars($txt['program_beginner_text2']) ?></p>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-md-4 mb-2 px-2 d-flex align-items-center justify-content-center">
            <div class="card h-100">
              <img class="card-img-top" src="pics/intermediate-german.jpg" alt="In the classroom">
              <div class="card-body mt-4">
                <h3 class="card-text"><?= htmlspecialchars($txt['program_intermediate_title']) ?></h3>
                <p class="card-text"><?= htmlspecialchars($txt['program_intermediate_text1']) ?></p>
                <p class="card-text"><?= htmlspecialchars($txt['program_intermediate_text2']) ?></p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4 mb-2 px-2 d-flex align-items-center justify-content-center">
            <div class="card h-100">
              <img class="card-img-top" src="pics/professional-german.jpg" alt="In the workplace">
              <div class="card-body mt-4">
                <h3 class="card-text"><?= htmlspecialchars($txt['program_professional_title']) ?></h3>
                <p class="card-text"><?= htmlspecialchars($txt['program_professional_text1']) ?></p>
                <p class="card-text"><?= htmlspecialchars($txt['program_professional_text2']) ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mx-auto d-flex justify-content-center align-items-center mt-5">
          <a href="programs.php"><button href type="button" class="btn btn-primary"><?= htmlspecialchars($txt['program_cta']) ?></button></a>
        </div>

      </div>
    </section>


    <!-- "languages offered" section -->
    <section class="language-section">
      <div class="container">
        
        <div class="row mb-5 text-center">
          <h2 class="w-100"><?= htmlspecialchars($txt['language_title']) ?></h2>
          <p class="w-100"><?= htmlspecialchars($txt['language_subtitle']) ?></p>
        </div>
        
        <!-- language box -->
        <?php require __DIR__ . "/includes/languagebox.php" ?>
    </section>



    <!-- "why a-viva is different" section -->
    <section class="different-section grey-bg">
      <div class="container">

        <div class="row">
          <h2 class="text-center w-100"><?= htmlspecialchars($txt['usp_title']) ?></h2>
        </div>
        <div class="row mt-5">
          <div class="col-md mb-5">
            <img class="rounded section-img" src="galeries/mexicanparty/images/1.jpg" alt="Front door of A-Viva Sprachschule with the Mexican flag on the window.">
          </div>
          <div class="col-md">
            <div class="row mb-2">
              <div class="col-2 text-center"><img src="pics/globe-logo.svg" alt="Globe icon"></div>
              <div class="col">
                <h3 class="font-weight-bold"><?= htmlspecialchars($txt['usp_item1_title']) ?></h3>
                <p><?= htmlspecialchars($txt['usp_item1_text1']) ?></p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2 text-center"><img src="pics/people-logo.svg" alt="People icon"></div>
              <div class="col">
                <h3 class="font-weight-bold"><?= htmlspecialchars($txt['usp_item2_title']) ?></h3>
                <p><?= htmlspecialchars($txt['usp_item2_text1']) ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-2 text-center"><img src="pics/clock-logo.svg" alt="Clock icon"></div>
              <div class="col">
                <h3 class="font-weight-bold"><?= htmlspecialchars($txt['usp_item3_title']) ?></h3>
                <p><?= htmlspecialchars($txt['usp_item3_text1']) ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- life section -->
    <section class="life-section">
      <div class="container">
        <div class="row">
          <h2 class="text-center w-100"><?= htmlspecialchars($txt['life_title']) ?></h1>
        </div>
        <div class="row mt-5">
          <div class="col-md mb-5">
            <p class="mb-4"><?= htmlspecialchars($txt['life_text1']) ?></p>
            <ul class="mb-4 checked-ul">
              <li><img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark"><?= htmlspecialchars($txt['life_list1']) ?></li>
              <li><img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark"><?= htmlspecialchars($txt['life_list2']) ?></li>
              <li><img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark"><?= htmlspecialchars($txt['life_list3']) ?></li>
              <li><img class="mr-2" src="pics/red-check.svg" alt="Checkmark"><?= htmlspecialchars($txt['life_list4']) ?></li>
            </ul>
            <button type="button" class="btn btn-secondary ml-2"><?= htmlspecialchars($txt['life_cta']) ?></button>
          </div>
          <div class="col-md">
            <img class="rounded section-img" src="galeries/strasbourg/images/Strasbourg5.jpg" alt="Group of A-Viva enjoying the sun next to a canal in Strasbourg" class="rounded">
          </div>
        </div>
      </div>
    </section>



    <!-- Reviews section -->
    <?php require __DIR__ . '/includes/reviews.php'; ?>


    <!-- CTA section -->
    <?php require __DIR__ . '/includes/cta.php'; ?>
    
    
    
    <!-- FAQ section -->
    <?php require __DIR__ . '/includes/faq.php'; ?>
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