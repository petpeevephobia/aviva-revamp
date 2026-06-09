<?php
$pageTitle   = 'A-Viva Sprachschule - Home';
$currentPage = 'home';
// $pageDescription = 'German courses in Frankfurt...';
?>

<!doctype html>
<html lang="en">
  <?php require __DIR__ . '/includes/head.php'; ?>





  <body>
    <!-- START nav -->
    <?php require __DIR__ . '/includes/nav.php'; ?>
    <!-- END nav -->



    
    <!-- START main -->
    <main class="mx-auto">

      <section class="hero-section container h-100">
          
          <!-- first row -->
          <div class="row text-center p-5">
            <h1 class="w-100">Speak Confident German</h1>
            <p class="w-100">Immerse yourself in Frankfurt's vibrant culture while mastering German or other languages.</p>
            <div class="row mx-auto">
              <button type="button" class="btn btn-primary">Enquire now</button>
              <a href="programs.php"><button type="button" class="btn btn-secondary ml-2">Get course details</button></a>
            </div>
          </div>
          
          <!-- second row: infinite horizonital scroll for images -->
          <div class="hero-marquee overflow-hidden w-100 mt-4">
            <div class="d-flex flex-nowrap hero-marquee-track">
              <img class="hero-marquee-img rounded mr-1" src="galeries/avivaconcert/images/1.jpg" alt="">
              <img class="hero-marquee-img rounded mr-1" src="galeries/jpmc/images/1 the victory smile.jpg" alt="">
              <img class="hero-marquee-img rounded mr-1" src="galeries/sushi/images/sushi2.jpg" alt="">
              <img class="hero-marquee-img rounded mr-1" src="galeries/bonfire/images/bonfire+5.jpg" alt="">
          
              <!-- duplicate set for seamless loop -->
              <img class="hero-marquee-img rounded mr-1" src="galeries/avivaconcert/images/1.jpg" alt="" aria-hidden="true">
              <img class="hero-marquee-img rounded mr-1" src="galeries/jpmc/images/1 the victory smile.jpg" alt="" aria-hidden="true">
              <img class="hero-marquee-img rounded mr-1" src="galeries/sushi/images/sushi2.jpg" alt="" aria-hidden="true">
              <img class="hero-marquee-img rounded mr-1" src="galeries/bonfire/images/bonfire+5.jpg" alt="" aria-hidden="true">
            </div>
          </div>
            
      </section>


        <!-- stats section -->
      <section class="stats-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm p-4">
              <div class="d-flex justify-content-center">
                <p class="stats-number font-weight-bold mr-1">4,9</p>
                <img src="pics/vector-star.svg" alt="Star">
              </div>
              <p class="text-center">Google rating</p>
            </div>
            <div class="red-line d-none d-md-block"></div>
          
            <div class="col-sm p-4">
              <div class="d-flex justify-content-center">
                <p class="stats-number font-weight-bold mr-1">15+</p>
              </div>
              <p class="text-center">years of teaching</p>
            </div>
          
            <div class="red-line d-none d-md-block"></div>
            <div class="col-sm p-4">
              <div class="d-flex justify-content-center">
                <p class="stats-number font-weight-bold mr-1">9+</p>
              </div>
              <p class="text-center">languages taught</p>
            </div>
          </div>
        </div>
      </section>



      <section class="programs-section grey-bg">
        <div class="container">

          <div class="row mb-5 text-center">
            <h2 class="w-100">Find Your Perfect Program</h2>
            <p class="w-100">All programs run year-round, including vacation courses for summer, winter, spring break and other holiday periods.</p>
          </div>

          <!-- Program cards -->
          <div class="row">
            <div class="col-12 col-md-4 mb-2 px-2 d-flex align-items-center justify-content-center">
              <div class="card h-100">
                <img class="card-img-top" src="pics/beginner-german.jpg" alt="In the supermarket">
                <div class="card-body mt-4">
                  <h3 class="card-text">Beginner German</h3>
                  <p class="card-text">Master essential German for daily life. Perfect for newcomers to Germany who need practical language skills for everyday situations.</p>
                  <p class="card-text">A1 and A2 levels.</p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-4 mb-2 px-2 d-flex align-items-center justify-content-center">
              <div class="card h-100">
                <img class="card-img-top" src="pics/intermediate-german.jpg" alt="In the classroom">
                <div class="card-body mt-4">
                  <h3 class="card-text">Intermediate German</h3>
                  <p class="card-text">Develop fluency for academic and professional success in Germany. Ideal for university applicants, job seekers, and expatriates wanting deeper integration.</p>
                  <p class="card-text">B1 and B2 levels.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 mb-2 px-2 d-flex align-items-center justify-content-center">
              <div class="card h-100">
                <img class="card-img-top" src="pics/professional-german.jpg" alt="In the workplace">
                <div class="card-body mt-4">
                  <h3 class="card-text">Professional German</h3>
                  <p class="card-text">Achieve near-native proficiency for executive-level communication. Designed for senior professionals, German citizenship applicants, and advanced degree students.</p>
                  <p class="card-text">C1 and C2 levels.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mx-auto d-flex justify-content-center align-items-center mt-5">
            <a href="programs.php"><button href type="button" class="btn btn-primary">Explore all offered programs</button></a>
          </div>

        </div>
      </section>


      <!-- "languages offered" section -->
      <section class="language-section">
        <div class="container">
          
          <div class="row mb-5 text-center">
            <h2 class="w-100">One Wasn't Enough, So We Added More Languages</h2>
            <p class="w-100">One school, multiple opportunities, consistent quality across every language program.</p>
          </div>
          
          <!-- language box -->
          <?php require __DIR__ . "/includes/languagebox.php" ?>
      </section>



      <!-- "why a-viva is different" section -->
      <section class="different-section grey-bg">
        <div class="container">
          <div class="row">
            <h2 class="text-center w-100">Why A-Viva is Different</h1>
          </div>
          <div class="row mt-5">
            <div class="col-md mb-5">
              <img class="rounded section-img" src="galeries/mexicanparty/images/1.jpg" alt="Front door of A-Viva Sprachschule with the Mexican flag on the window.">
            </div>
            <div class="col-md">
              <div class="row mb-2">
                <div class="col-2 text-center"><img src="pics/globe-logo.svg" alt="Globe icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold">Learn Through Real-World Activities</h3>
                  <p>Forget traditional classroom drills. Our CLASS concept (Culture, Language, Arts, Sports, Social events) combines interactive games, role plays, and real cultural experiences with local interactions.</p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-2 text-center"><img src="pics/people-logo.svg" alt="People icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold">Maximum 8 Students Per Class</h3>
                  <p>You're part of a tight-knit multicultural community where teachers and students genuinely connect. Experience the warmth of a family environment while getting the personalized attention you need to succeed.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-2 text-center"><img src="pics/clock-logo.svg" alt="Clock icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold">Start Anytime</h3>
                  <p>Whether you need a 2-week crash course or a full year of immersion, we adapt to your timeline. With year-round availability, vacation programs, and courses running continuously, you can start your German journey exactly when you're ready.</p>
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
            <h2 class="text-center w-100">We’re More Than Just Language Classes</h1>
          </div>
          <div class="row mt-5">
            <div class="col-md mb-5">
              <p class="mb-4">At A-Viva, your experience extends beyond the classroom. Join our vibrant community for:</p>
              <ul class="mb-4 checked-ul">
                <li><img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark">Weekend trips to German cities and countryside</li>
                <li><img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark">Cultural workshops</li>
                <li><img class="mr-2 mb-2" src="pics/red-check.svg" alt="Checkmark">Language exchange meetups with other students</li>
                <li><img class="mr-2" src="pics/red-check.svg" alt="Checkmark">Housing and visa support</li>
              </ul>
              <button type="button" class="btn btn-secondary ml-2">Explore student perks</button>
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