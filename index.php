<!doctype html>
<html lang="en">
  <?php require __DIR__ . '/includes/head.php'; ?>




  <?php
  // Dictionary mapping strings to keys
  if ($currentLang === 'de') {
      $txt = [
        // HERO
        'hero_title'    => 'Sprechen Sie selbstbewusst Deutsch',
        'hero_subtitle' => 'Tauchen Sie ein in die lebendige Kultur Frankfurts, während Sie Deutsch oder andere Sprachen meistern.',
        'hero_enquire'  => 'Jetzt anfragen',
        'hero_details'  => 'Kursdetails anzeigen',

        // STATS
        'stats_1' => 'Google-Bewertung',
        'stats_2' => 'Jahre Lehrtätigkeit',
        'stats_3' => 'Sprachen',

        // PROGRAM
        'program_title' => 'Finden Sie Ihr passendes Programm',
        'program_subtitle'  => 'Alle Programme finden das ganze Jahr über statt, einschließlich Ferienkursen in den Sommer-, Winter- und Frühlingsferien sowie in anderen Ferienzeiten.',
        'program_beginner_title'  => 'Deutsch für Anfänger',
        'program_beginner_text1' => 'Lernen Sie die wichtigsten Deutschkenntnisse für den Alltag. Ideal für Neuzugezogene in Deutschland, die praktische Sprachkenntnisse für alltägliche Situationen benötigen.',
        'program_beginner_text2' => 'A1- und A2-Niveau.',
        'program_intermediate_title'  => 'Deutsch für Fortgeschrittene',
        'program_intermediate_text1' => 'Erwerben Sie Sprachkompetenz für Ihren akademischen und beruflichen Erfolg in Deutschland. Ideal für Studienbewerber, Arbeitssuchende und Auswanderer, die sich besser integrieren möchten.',
        'program_intermediate_text2' => 'B1- und B2-Niveau',
        'program_professional_title'  => 'Deutsch für Profesioneller',
        'program_professional_text1' => 'Erreichen Sie nahezu muttersprachliche Sprachkenntnisse für die Kommunikation auf Führungsebene. Konzipiert für Führungskräfte, Antragsteller auf die deutsche Staatsbürgerschaft und Studierende in Masterstudiengängen.',
        'program_professional_text2' => 'C1- und C2-Niveau',
        'program_cta' => 'Entdecken Sie alle angebotenen Programme',

        // LANGUAGE
        'language_title' => 'Eine reichte nicht aus, also haben wir weitere Sprachen hinzugefügt',
        'language_subtitle' => 'Eine Schule, vielfältige Möglichkeiten, gleichbleibende Qualität in allen Sprachprogrammen.',

        // USP
        'usp_title' => 'Warum A-Viva anders ist',
        'usp_item1_title' => 'Lernen durch praxisnahe Aktivitäten',
        'usp_item1_text1' => 'Vergessen Sie die herkömmlichen Übungen im Klassenzimmer. Unser CLASS-Konzept (Kultur, Sprache, Kunst, Sport, gesellschaftliche Veranstaltungen) verbindet interaktive Spiele, Rollenspiele und authentische kulturelle Erlebnisse mit Begegnungen vor Ort.',
        'usp_item2_title' => 'Maximal 8 Schüler pro Klasse',
        'usp_item2_text1' => 'Du bist Teil einer eng verbundenen, multikulturellen Gemeinschaft, in der Lehrer und Schüler eine echte Verbindung zueinander aufbauen. Erlebe die Herzlichkeit einer familiären Atmosphäre und erhalte gleichzeitig die individuelle Betreuung, die du für deinen Erfolg brauchst.',
        'usp_item3_title' => 'Jederzeit beginnen',
        'usp_item3_text1' => 'Ganz gleich, ob Sie einen zweiwöchigen Intensivkurs oder ein ganzes Jahr Sprachimmersion benötigen – wir passen uns Ihrem Zeitplan an. Dank ganzjähriger Verfügbarkeit, Ferienprogrammen und durchgehend stattfindenden Kursen können Sie Ihre Deutschreise genau dann beginnen, wenn Sie bereit sind.',

        // LIFE
        'life_title' => 'Wir sind mehr als nur Sprachkurse',
        'life_text1' => 'Bei A-Viva geht Ihr Erlebnis über den Unterricht hinaus. Werden Sie Teil unserer lebendigen Gemeinschaft und profitieren Sie von:',
        'life_list1' => 'Wochenendausflüge in deutsche Städte und auf das Land',
        'life_list2' => 'Kulturelle Workshops',
        'life_list3' => 'Sprachaustausch-Treffen mit anderen Studierenden',
        'life_list4' => 'Unterstützung bei der Wohnungssuche und bei Visumsangelegenheiten',
        'life_cta' => 'Entdecke die Vorteile für Studierende',

      ]; 
  } else {
      $txt = [
        // HERO
        'hero_title'    => 'Speak Confident German',
        'hero_subtitle' => 'Immerse yourself in Frankfurt\'s vibrant culture while mastering German or other languages.',
        'hero_enquire'  => 'Enquire now',
        'hero_details'  => 'Get course details',

        // STATS
        'stats_1' => 'Google ratings',
        'stats_2' => 'years of teaching',
        'stats_3' => 'languages',

        // PROGRAM
        'program_title' => 'Find Your Perfect Program',
        'program_subtitle'  => 'All programs run year-round, including vacation courses for summer, winter, spring break and other holiday periods.',
        'program_beginner_title'  => 'Beginner German',
        'program_beginner_text1' => 'Master essential German for daily life. Perfect for newcomers to Germany who need practical language skills for everyday situations.',
        'program_beginner_text2' => 'A1 and A2 levels.',
        'program_intermediate_title'  => 'Intermediate German',
        'program_intermediate_text1' => 'Develop fluency for academic and professional success in Germany. Ideal for university applicants, job seekers, and expatriates wanting deeper integration.',
        'program_intermediate_text2' => 'B1 and B2 levels.',
        'program_professional_title'  => 'Professional German',
        'program_professional_text1' => 'Achieve near-native proficiency for executive-level communication. Designed for senior professionals, German citizenship applicants, and advanced degree students.',
        'program_professional_text2' => 'C1 and C2 levels.',
        'program_cta' => 'Explore all offered programs',

        // LANGUAGE
        'language_title' => 'One Wasn\'t Enough, So We Added More Languages',
        'language_subtitle' => 'One school, multiple opportunities, consistent quality across every language program.',

        // USP
        'usp_title' => 'Why A-Viva is Different',
        'usp_item1_title' => 'Learn Through Real-World Activities',
        'usp_item1_text1' => 'Forget traditional classroom drills. Our CLASS concept (Culture, Language, Arts, Sports, Social events) combines interactive games, role plays, and real cultural experiences with local interactions.',
        'usp_item2_title' => 'Maximum 8 Students Per Class',
        'usp_item2_text1' => 'You\'re part of a tight-knit multicultural community where teachers and students genuinely connect. Experience the warmth of a family environment while getting the personalized attention you need to succeed.',
        'usp_item3_title' => 'Start Anytime',
        'usp_item3_text1' => 'Whether you need a 2-week crash course or a full year of immersion, we adapt to your timeline. With year-round availability, vacation programs, and courses running continuously, you can start your German journey exactly when you\'re ready.',

        // LIFE
        'life_title' => 'We\'re More Than Just Language Classes',
        'life_text1' => 'At A-Viva, your experience extends beyond the classroom. Join our vibrant community for:',
        'life_list1' => 'Weekend trips to German cities and countryside',
        'life_list2' => 'Cultural workshops',
        'life_list3' => 'Language exchange meetups with other students',
        'life_list4' => 'Housing and visa support',
        'life_cta' => 'Explore student perks',

      ];
  }
  ?>




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