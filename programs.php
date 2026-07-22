<?php
  

  $currentPage = 'programs'; 
  $pageTitle = 'A-Viva Sprachschule - Programs';
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


      <!-- "languages offered" section -->
      <section class="language-section">
        <div class="container">
          
          <div class="row mb-5 text-left">
            <h1 class="w-100"><?= htmlspecialchars($txt['programs_hero_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['programs_hero_text']) ?></p>
          </div>
          
          <!-- language box -->
          <?php require __DIR__ . "/includes/languagebox.php" ?>
      </section>



      <!-- intensive courses offered -->
      <section class="intensive-section grey-bg">
        <div class="container">

          <!-- first row -->
          <div class="row mb-5 text-left">
            <h2 class="w-100"><?= htmlspecialchars($txt['programs_intensive_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['programs_intensive_subtitle']) ?></p>
          </div>

          <!-- second row -->
          <div class="row">
            <div class="col-sm-6">
              <!-- second row -->
              <div class="row d-flex justify-content-center h-100">
                <!-- course 1 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body intensive-card">
                    <h3><?= htmlspecialchars($txt['programs_intensive_a_title']) ?></h3>
                    <ul class="card-text mt-3">
                      <li><?= htmlspecialchars($txt['programs_intensive_a_item1']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_intensive_a_item2']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_intensive_a_item3']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_intensive_a_item4']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_intensive_a_item5']) ?></li>
                    </ul>
                    <p class="no-spacing"><?= htmlspecialchars($txt['programs_intensive_a_text']) ?></p>
                    <a href="contact.php"><button class="btn btn-primary w-100 mt-3"><?= htmlspecialchars($txt['programs_intensive_a_cta']) ?></button></a>
                  </div>
                </div>

                <!-- course 2 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body intensive-card">
                    <h3><?= htmlspecialchars($txt['programs_intensive_b_title']) ?></h3>
                    <ul class="card-text mt-3">
                      <li><?= htmlspecialchars($txt['programs_intensive_b_item1']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_intensive_b_item2']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_intensive_b_item3']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_intensive_b_item4']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_intensive_b_item5']) ?></li>
                    </ul>
                    <p class="no-spacing"><?= htmlspecialchars($txt['programs_intensive_b_text']) ?></p>
                    <a href="contact.php"><button class="btn btn-primary w-100 mt-3"><?= htmlspecialchars($txt['programs_intensive_b_cta']) ?></button></a>
                  </div>
                </div>

              </div>
          </div>


        <!-- pricing table -->
        <?php
        $tableLabels = [
          'en' => [
            'duration' => 'Duration',
            'intensive' => 'Intensive',
            'day_programs' => 'Day Programs',
            'weeks' => 'weeks',
            'months' => 'months',
            'extra' => 'Per extra week',

            // EVENING PROGRAMS
            'evening' => 'Evening Programs',
            'evening_desc' => '(do not qualify for housing)',
          ],
          'de' => [
            'duration' => 'Kursdauer',
            'intensive' => 'Intensiv',
            'day_programs' => 'Tagesprogramme',
            'weeks' => 'Wochen',
            'months' => 'Monate',
            'extra' => 'Pro zusätzliche Woche',

            // EVENING PROGRAMS
            'evening' => 'Abendprogramme',
            'evening_desc' => '(haben keinen Anspruch auf Wohnraum)',
          ]
        ];
        // this is text in the table based on the language selected (en/de)
        $l = $tableLabels[$currentLang];

        $intensivePricingRows = [
            // format: [value, week/month, price_a, price_d]
            ['2', 'w', '400 €', '800 €'],
            ['3', 'w', '500 €', '1000 €'],
            ['4', 'w', '600 €', '1200 €'],
            ['2', 'm', '1200 €', '2400 €'],
            ['3', 'm', '1800 €', '3600 €'],
            ['4', 'm', '2400 €', '4800 €'],
            ['5', 'm', '3000 €', '6000 €'],
            ['6', 'm', '3600 €', '7200 €'],
            ['7', 'm', '4200 €', ''],
            ['8', 'm', '4800 €', ''],
            ['9', 'm', '5400 €', ''],
            ['10', 'm', '6000 €', ''],
            ['11', 'm', '6600 €', ''],
            ['12', 'm', '7200 €', ''],
            ['', '', '150 €', '300 €'],      // row: per extra week
          ];
        ?>

          <div class="col-md-6 justify-content-center">
            <div class="col-12 no-spacing">
              <table class="programs-pricing-table">
                <thead>
                  <tr>
                    <th rowspan="3" scope="col" class="programs-pricing-duration"><?= htmlspecialchars($l['duration']) ?></th>
                    <th colspan="2" scope="colgroup"><?= htmlspecialchars($l['intensive']) ?></th>
                  </tr>
                  <tr>
                    <th colspan="2" scope="colgroup"><?= htmlspecialchars($l['day_programs']) ?></th>
                  </tr>
                  <tr>
                    <th scope="col">A</th>
                    <th scope="col">D</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($intensivePricingRows as $row):
                    $num = $row[0];
                    $type = $row[1];

                    if ($type === 'w') {
                      $displayDuration = $num . ' ' . $l['weeks'];
                    } elseif ($type === 'm') {
                      $displayDuration = $num . ' ' . $l['months'];
                    } else {
                      $displayDuration = $l['extra'];
                    }
                    ?>
                  <tr>
                    <th scope="row" class="programs-pricing-duration"><?= htmlspecialchars($displayDuration) ?></th>
                    <td><?= htmlspecialchars($row[2]) ?></td>
                    <td><?= htmlspecialchars($row[3]) ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>

          <!-- housing box -->
          <div class="card row w-100 p-4 rounded housing-box mt-5 ">
            <div class="card-body housing-box">
              <div class="col">
                <h3><?= htmlspecialchars($txt['programs_intensive_stay_title']) ?></h3>
                <p><?= htmlspecialchars($txt['programs_intensive_stay_subtitle']) ?></p>
              </div>
              <div class="col d-flex align-items-center">
                <a href="register.php"><button type="button" class="btn btn-secondary"><?= htmlspecialchars($txt['programs_intensive_stay_cta']) ?></button></a>
              </div>
            </div>
          </div>

        </div>
      </section>



      <!-- evening courses offered -->
      <section class="evening-section">
        <div class="container">

          <!-- first row -->
          <div class="row mb-5 text-left">
            <h2 class="w-100"><?= htmlspecialchars($txt['programs_evening_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['programs_evening_subtitle']) ?></p>
          </div>

          <!-- second row -->
          <div class="row">
            <div class="col-sm-6">
              <div class="row d-flex justify-content-center h-100">
                <!-- course 1 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body evening-card">
                    <h3><?= htmlspecialchars($txt['programs_evening_e1_title']) ?></h3>
                    <ul class="card-text mt-3">
                      <li><?= htmlspecialchars($txt['programs_evening_e1_item1']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_evening_e1_item2']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_evening_e1_item3']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_evening_e1_item4']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_evening_e1_item5']) ?></li>
                    </ul>
                    <p class="no-spacing"><?= htmlspecialchars($txt['programs_evening_e1_text']) ?></p>
                    <a href="contact.php"><button class="btn btn-primary w-100 mt-3"><?= htmlspecialchars($txt['programs_evening_e1_cta']) ?></button></a>
                  </div>
                </div>

                <!-- course 2 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body evening-card">
                    <h3><?= htmlspecialchars($txt['programs_evening_e2_title']) ?></h3>
                    <ul class="card-text mt-3">
                      <li><?= htmlspecialchars($txt['programs_evening_e2_item1']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_evening_e2_item2']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_evening_e2_item3']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_evening_e2_item4']) ?></li>
                      <li><?= htmlspecialchars($txt['programs_evening_e2_item5']) ?></li>
                    </ul>
                    <p class="no-spacing"><?= htmlspecialchars($txt['programs_evening_e2_text']) ?></p>
                    <a href="contact.php"><button class="btn btn-primary w-100 mt-3"><?= htmlspecialchars($txt['programs_evening_e2_cta']) ?></button></a>
                  </div>
                </div>
              </div>
            </div>
        <?php
        $eveningPricingRows = [
            // format: [value, week/month, price_a, price_d]
            ['2', 'w', '', ''],
            ['3', 'w', '', ''],
            ['4', 'w', '120 €', '200 €'],
            ['2', 'm', '240 €', '400 €'],
            ['3', 'm', '360 €', '600 €'],
            ['4', 'm', '480 €', '800 €'],
            ['5', 'm', '600 €', '1000 €'],
            ['6', 'm', '720 €', '1200 €'],
            ['7', 'm', '840 €', '1400 €'],
            ['8', 'm', '960 €', '1600 €'],
            ['9', 'm', '1080 €', '1800 €'],
            ['10', 'm', '1200 €', '2000 €'],
            ['11', 'm', '1320 €', '2200 €'],
            ['12', 'm', '1440 €', '2400 €'],
            ['', '', '30 €', '50 €'],      // row: per extra week
        ];
        ?>
          <div class="col-md-6 justify-content-center">
            <div class="col-12 no-spacing">
              <table class="programs-pricing-table">
                <thead>
                  <tr>
                    <th rowspan="3" scope="col" class="programs-pricing-duration"><?= htmlspecialchars($l['duration']) ?></th>
                    <th colspan="2" scope="colgroup"><?= htmlspecialchars($l['evening']) ?></th>
                  </tr>
                  <tr>
                    <th colspan="2" scope="colgroup" class="programs-pricing-note"><?= htmlspecialchars($l['evening_desc']) ?></th>
                  </tr>
                  <tr>
                    <th scope="col">E1</th>
                    <th scope="col">E2</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($eveningPricingRows as $row2):
                    $num2 = $row2[0];
                    $type2 = $row2[1];

                    if ($type2 === 'w') {
                      $displayDuration2 = $num2 . ' ' . $l['weeks'];
                    } elseif ($type2 === 'm') {
                      $displayDuration2 = $num2 . ' ' . $l['months'];
                    } else {
                      $displayDuration2 = $l['extra'];
                    }
                    ?>
                  <tr>
                    <th scope="row" class="programs-pricing-duration"><?= htmlspecialchars($displayDuration2) ?></th>
                    <td><?= htmlspecialchars($row2[2]) ?></td>
                    <td><?= htmlspecialchars($row2[3]) ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>



      <section class="exam-section grey-bg">
        <div class="container">
          <div class="row">
            <h2><?= htmlspecialchars($txt['programs_exams_title']) ?></h2>
            <p><?= htmlspecialchars($txt['programs_exams_subtitle']) ?></p>
          </div>

          <div class="row">

            <div class="col mb-2">
              <div class="card no-spacing">
                <div class="card-body">
                  <h3><?= htmlspecialchars($txt['programs_exams_a_title']) ?></h3>
                  <div class="card-text">
                    <p><?= htmlspecialchars($txt['programs_exams_a_subtitle']) ?></p>
                    <a href="contact.php"><button class="btn btn-primary w-100"><?= htmlspecialchars($txt['programs_exams_a_cta']) ?></button></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card no-spacing">
                <div class="card-body">
                  <h3><?= htmlspecialchars($txt['programs_exams_b_title']) ?></h3>
                  <div class="card-text">
                    <p><?= htmlspecialchars($txt['programs_exams_b_subtitle']) ?></p>
                    <a href="contact.php"><button class="btn btn-primary w-100"><?= htmlspecialchars($txt['programs_exams_b_cta']) ?></button></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>



      <!-- "boring section -->
      <section class="boring-section">
        <div class="container">
          <div class="row">
            <h2 class="text-center w-100"><?= htmlspecialchars($txt['programs_boring_title']) ?></h1>
          </div>
          <div class="row mt-5">
            
            <div class="col-md mb-5">
              <div class="row mb-2">
                <div class="col-2 text-center"><img src="pics/globe-logo.svg" alt="Globe icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold"><?= htmlspecialchars($txt['programs_boring_item1_title']) ?></h3>
                  <p><?= htmlspecialchars($txt['programs_boring_item1_text']) ?></p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-2 text-center"><img src="pics/book-logo.svg" alt="Book icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold"><?= htmlspecialchars($txt['programs_boring_item2_title']) ?></h3>
                  <p><?= htmlspecialchars($txt['programs_boring_item2_text']) ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-2 text-center"><img src="pics/teach-logo.svg" alt="Teaching icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold"><?= htmlspecialchars($txt['programs_boring_item3_title']) ?></h3>
                  <p><?= htmlspecialchars($txt['programs_boring_item3_text']) ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-2 text-center"><img src="pics/smile-logo.svg" alt="Smile icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold"><?= htmlspecialchars($txt['programs_boring_item4_title']) ?></h3>
                  <p><?= htmlspecialchars($txt['programs_boring_item4_text']) ?></p>
                </div>
              </div>
            </div>

            <div class="col-md mb-5">
              <img class="rounded section-img" src="pics/classroom.jpg" alt="Rustic classroom of the world map on the wall, sourced from Unsplash.">
            </div>
          </div>
        </div>
      </section>



      <!-- Reviews section -->
      <?php require __DIR__ . '/includes/reviews.php'; ?>


      <!-- CTA section -->
      <?php require __DIR__ . '/includes/cta.php'; ?>
      
      
      
      <!-- FAQ section -->
      <?php
      $faqItems = [
          'q1'    => [
              'ariacontrols' => 'collapseOne',
              'datatarget' => '#collapseOne',
              'id' => 'headerOne',
              'question' => [
                  'en' => 'What languages can I study at A-Viva?',
                  'de' => 'Welche Sprachen kann ich bei A-Viva lernen?'
          ],
              'answer' => [
                  'en' => 'We offer German, Chinese, English, French, Greek, Italian, Spanish, Russian, and Japanese. Other languages are available on request, depending on demand and availability.',
                  'de' => 'Wir bieten Deutsch, Chinesisch, Englisch, Französisch, Griechisch, Italienisch, Spanisch, Russisch und Japanisch an. Weitere Sprachen sind auf Anfrage erhältlich, je nach Bedarf und Verfügbarkeit.'
              ]
          ],
          'q2'    => [
              'ariacontrols' => 'collapseTwo',
              'datatarget' => '#collapseTwo',
              'id' => 'headerTwo',
              'question' => [
                  'en' => 'Do courses run all year or only during semesters?',
                  'de' => 'Finden die Kurse das ganze Jahr über statt oder nur während der Semester?'
              ],
              'answer' => [
                  'en' => 'All programs run year-round, including summer, winter, spring break, and holiday courses. You can start at multiple points throughout the year.',
                  'de' => 'Alle Programme finden das ganze Jahr über statt, einschließlich Sommer-, Winter-, Frühjahrsferien- und Feiertagskursen. Sie können zu verschiedenen Zeitpunkten im Laufe des Jahres einsteigen.'
                  ]
          ],
          'q3'    => [
              'ariacontrols' => 'collapseThree',
              'datatarget' => '#collapseThree',
              'id' => 'headerThree',
              'question' => [
                  'en' => 'What is the A-Viva CLASS concept?',
                  'de' => 'Was ist das A-Viva CLASS-Konzept?'
              ],
              'answer' => [
                  'en' => 'CLASS stands for Culture, Language, Arts, Sports, and Social events. Learning happens inside the classroom and through real-life experiences, so students stay motivated and actually use the language instead of memorizing it.',
                  'de' => 'CLASS steht für Kultur, Sprache, Kunst, Sport und gesellschaftliche Veranstaltungen. Das Lernen findet sowohl im Unterricht als auch durch Erfahrungen im Alltag statt, sodass die Schüler motiviert bleiben und die Sprache tatsächlich anwenden, anstatt sie nur auswendig zu lernen.'
                  ]
          ],
          'q4'    => [
              'ariacontrols' => 'collapseFour',
              'datatarget' => '#collapseFour',
              'id' => 'headerFour',
              'question' => [
                  'en' => 'What are classes like at A-Viva?',
                  'de' => 'Wie läuft der Unterricht bei A-Viva ab?'
              ],
              'answer' => [
                  'en' => 'Classes are interactive and creative, using games, role plays, quizzes, humor, and discussions. Some lessons take place outside the school in cafés, parks, museums, or libraries, turning the city into a living classroom.',
                  'de' => 'Der Unterricht ist interaktiv und kreativ und nutzt Spiele, Rollenspiele, Quizfragen, Humor und Diskussionen. Einige Unterrichtsstunden finden außerhalb der Schule in Cafés, Parks, Museen oder Bibliotheken statt, wodurch die Stadt zu einem lebendigen Klassenzimmer wird.'
                  ]
          ],
          'q5'    => [
              'ariacontrols' => 'collapseFive',
              'datatarget' => '#collapseFive',
              'id' => 'headerFive',
              'question' => [
                  'en' => 'How much homework is there?',
                  'de' => 'Wie viel Hausaufgaben gibt es?'
              ],
              'answer' => [
                  'en' => 'Homework combines grammar and vocabulary practice with creative tasks. Students often analyze daily news or complete optional assignments like interviews, city research, or cultural exploration. Homework supports learning without feeling like busywork.',
                  'de' => 'Die Hausaufgaben verbinden Grammatik- und Vokabelübungen mit kreativen Aufgaben. Die Schüler analysieren häufig aktuelle Nachrichten oder bearbeiten freiwillige Aufgaben wie Interviews, Recherchen über ihre Stadt oder kulturelle Erkundungen. Die Hausaufgaben fördern das Lernen, ohne dass sie sich wie reine Fleißarbeit anfühlen.'
                  ]
          ],
          'q6'    => [
              'ariacontrols' => 'collapseSix',
              'datatarget' => '#collapseSix',
              'id' => 'headerSix',
              'question' => [
                  'en' => 'Is extra help available if I struggle?',
                  'de' => 'Gibt es zusätzliche Unterstützung, wenn ich Schwierigkeiten habe?'
              ],
              'answer' => [
                  'en' => 'Yes. Free afternoon tutoring is available with teaching assistants for students who want extra support. No additional fees, no pressure.',
                  'de' => 'Ja. Für Schüler, die zusätzliche Unterstützung wünschen, wird nachmittags kostenloser Nachhilfeunterricht mit Lehrassistenten angeboten. Keine zusätzlichen Kosten, kein Druck..'
                  ]
          ],
          'q7'    => [
              'ariacontrols' => 'collapseSeven',
              'datatarget' => '#collapseSeven',
              'id' => 'headerSeven',
              'question' => [
                  'en' => 'Which programs qualify for a German visa?',
                  'de' => 'Welche Studiengänge berechtigen zum Erhalt eines deutschen Visums?'
              ],
              'answer' => [
                  'en' => 'The Intensive Program A (20 lessons/week) and Intensive Program D (30 lessons/week) qualify for German visa purposes. Evening programs are designed for students who already live and work in Germany.',
                  'de' => 'Das Intensivprogramm A (20 Unterrichtsstunden pro Woche) und das Intensivprogramm D (30 Unterrichtsstunden pro Woche) sind für die Beantragung eines deutschen Visums anerkannt. Die Abendkurse richten sich an Teilnehmer, die bereits in Deutschland leben und arbeiten.'
                  ]
          ],
          'q8'    => [
              'ariacontrols' => 'collapseEight',
              'datatarget' => '#collapseEight',
              'id' => 'headerEight',
              'question' => [
                  'en' => 'Are exams and certificates included in the price?',
                  'de' => 'Sind Prüfungen und Zertifikate im Preis inbegriffen?'
              ],
              'answer' => [
                  'en' => 'Yes. Exams and certificates from A1 to C2 are included, with a 95% pass rate for enrolled students. Exams are free when taken at the scheduled time. Retakes or external exam candidates pay a separate fee.',
                  'de' => 'Ja. Prüfungen und Zertifikate von A1 bis C2 sind im Kurs enthalten, wobei die Erfolgsquote der eingeschriebenen Teilnehmer bei 95 % liegt. Die Prüfungen sind kostenlos, wenn sie zum festgelegten Termin abgelegt werden. Für Wiederholungsprüfungen oder externe Prüfungsteilnehmer fällt eine separate Gebühr an.'
                  ]
          ]
      ];
    require __DIR__ . '/includes/faq.php'; ?>
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