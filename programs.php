<!doctype html>
<html lang="en">
  <?php require __DIR__ . '/includes/head.php'; ?>



  <?php
  if ($currentLang === 'de') {
    $txt = [
      // HERO
      'hero_title' => 'Präsenzprogramme',
      'hero_text' => 'Wir bieten Programme auf Deutsch, Chinesisch, Englisch, Französisch, Griechisch, Italienisch, Spanisch, Portugiesisch, Japanisch und auf Anfrage auch in weiteren Sprachen an. Alle Programme finden das ganze Jahr über statt, einschließlich Ferienkursen in den Sommer-, Winter- und Frühjahrsferien sowie in anderen Ferienzeiten. Das A-viva CLASS-Konzept (Kultur. Sprache. Kunst. Sport. Gesellschaftliche Veranstaltungen) basiert auf dem Prinzip „Lernen mit Spaß“ – wenn das Lernen Spaß macht, sind die Schüler motiviert, und das Lernen wird effektiv. Übersetzt mit DeepL.com (kostenlose Version)',

      // INTENSIVE COURSES
      'intensive_title' => 'Intensivkurse',
      'intensive_subtitle' => 'Mindestens 18 Unterrichtsstunden pro Woche mit täglichem Unterricht, der auf einen umfassenden Spracherwerb ausgerichtet ist. Die Preise beinhalten die Anmeldegebühr, Steuern, Prüfungen und Zertifikate. Sollte jemand aus irgendeinem Grund die geplante Prüfung versäumen, wird eine Gebühr von 100 € bis 150 € erhoben, um die Prüfung zu einem anderen Termin abzulegen.',
      // PROGRAM A
      'intensive_a_title' => 'Intensivprogramm A',
      'intensive_a_item1' => '20 Unterrichtsstunden pro Woche',
      'intensive_a_item2' => 'Berechtigt zum Erhalt eines Visums in Deutschland',
      'intensive_a_item3' => 'Bis zu 8 Schüler pro Klasse',
      'intensive_a_item4' => 'Angebotene Niveaustufen je nach Verfügbarkeit: A1, A2, B1, B2, C1, C2',
      'intensive_a_item5' => 'Die Unterbringung ist optional',
      'intensive_a_text' => 'Die Gebühr beginnt bei 600 € pro Monat',
      'intensive_a_cta' => 'Anfragen',
      // PROGRAM B
      'intensive_b_title' => 'Intensivprogramm B',
      'intensive_b_item1' => '30 Unterrichtsstunden pro Woche',
      'intensive_b_item2' => 'Berechtigt zum Erhalt eines Visums in Deutschland',
      'intensive_b_item3' => 'Bis zu 8 Schüler pro Klasse',
      'intensive_b_item4' => 'Angebotene Niveaustufen je nach Verfügbarkeit: A1, A2, B1, B2, C1, C2',
      'intensive_b_item5' => 'Die Unterbringung ist optional',
      'intensive_b_text' => 'Die Gebühr beginnt bei 1000 € pro Monat',
      'intensive_b_cta' => 'Anfragen',
      // NEED A PLACE TO STAY
      'intensive_stay_title' => 'Brauchst du eine Unterkunft während deines Kurses?',
      'intensive_stay_subtitle' => 'Wir bieten Wohnungen, Gastfamilien und Jugendherbergen an. Nur für Teilnehmer an einem Intensivkurs.',
      'intensive_stay_cta' => 'Wohnmöglichkeiten entdecken',

      // EVENING COURSES
      'evening_title' => 'Abend- und Wochenendkurse',
      'evening_subtitle' => 'Eine flexible Möglichkeit für Berufstätige oder Studierende, ihre Sprachkenntnisse zu verbessern, ohne ihre primären Verpflichtungen tagsüber zu beeinträchtigen. Die Preise beinhalten die Anmeldung, Steuern, Prüfungen und Zertifikate. Sollte jemand aus irgendeinem Grund den geplanten Prüfungstermin verpassen, wird eine Gebühr von 100 € bis 150 € erhoben, um die Prüfung zu einem anderen Termin abzulegen.',
      // PROGRAM A
      'evening_e1_title' => 'Abendkurs E1',
      'evening_e1_item1' => '2 Unterrichtsstunden pro Woche',
      'evening_e1_item2' => 'Ein Abend pro Woche',
      'evening_e1_item3' => 'Bis zu 8 Schüler pro Klasse',
      'evening_e1_item4' => 'Angebotene Niveaustufen je nach Verfügbarkeit: A1, A2, B1, B2, C1, C2',
      'evening_e1_item5' => 'Eine Unterkunft wird nicht angeboten',
      'evening_e1_text' => 'Die Gebühr beginnt bei 80 € pro Monat',
      'evening_e1_cta' => 'Anfragen',
      // PROGRAM B
      'evening_e2_title' => 'Abendkurs E2',
      'evening_e2_item1' => '4 Unterrichtsstunden pro Woche',
      'evening_e2_item2' => 'Zwei Abende pro Woche',
      'evening_e2_item3' => 'Bis zu 8 Schüler pro Klasse',
      'evening_e2_item4' => 'OfAngebotene Niveaustufen je nach Verfügbarkeit: A1, A2, B1, B2, C1, C2',
      'evening_e2_item5' => 'Eine Unterkunft wird nicht angeboten',
      'evening_e2_text' => 'Die Gebühr beginnt bei 160 € pro Monat',
      'evening_e2_cta' => 'Anfragen',

      // EXAMS
      'exams_title' => 'Prüfungen zum Nachweis deutscher Sprachkenntnisse',
      'exams_subtitle' => 'Die Prüfungen und Zertifikate, die am Ende jeder Stufe (von A1 bis C2) ausgestellt werden, sind für Teilnehmer des entsprechenden Kurses kostenlos. Externe Teilnehmer anderer Schulen, die Prüfungen bei A-viva ablegen möchten, finden weitere Informationen weiter unten.',
      // A1 - A2
      'exams_a_title' => 'A1- und A2-Prüfungen',
      'exams_a_subtitle' => 'Einmalige Gebühr von 200 € pro Versuch',
      'exams_a_cta' => 'Anfragen',
      // B1 - C2
      'exams_b_title' => 'B1- und C2-Prüfungen',
      'exams_b_subtitle' => 'Einmalige Gebühr von 300 € pro Versuch',
      'exams_b_cta' => 'Anfragen',

      // BORING CLASSES
      'boring_title' => 'Langweilige Unterrichtsstunden sind nicht erlaubt!',
      'boring_item1_title' => 'Eindringliche Szenen aus dem Unterricht',
      'boring_item1_text' => 'Um den Unterricht noch relevanter und spontaner zu gestalten, nutzen wir die ganze Stadt als „lebendigen“ Unterrichtsraum und halten den Unterricht gelegentlich auch außerhalb der Schule ab, beispielsweise in einem Café, im Park, in einem Museum oder in der Bibliothek.',
      'boring_item2_title' => 'Hausaufgaben sind nicht „nur Hausaufgaben“',
      'boring_item2_text' => 'Neben regelmäßigen Grammatik- und Vokabelübungen analysieren die Schüler täglich Nachrichten und berichten am nächsten Tag in eigenen Worten vor der Klasse darüber. Zu den optionalen Aufgaben gehören die Suche nach einem historischen Objekt in der Stadt, die Befragung von Passanten in der Nachbarschaft oder ein Besuch im Rathaus im Rahmen eines Forschungsprojekts.',
      'boring_item3_title' => 'Kostenloser Nachhilfeunterricht',
      'boring_item3_text' => 'Für alle, die zusätzliche Unterstützung wünschen, stehen unsere Lehrassistenten am Nachmittag für kostenlosen Nachhilfeunterricht zur Verfügung.',
      'boring_item4_title' => 'Individuelle Betreuung',
      'boring_item4_text' => 'Im Anschluss an den schriftlichen Einstufungstest wird der Teilnehmer von einem Kursleiter in einem Einzelgespräch hinsichtlich seiner Hör- und Sprechfähigkeiten beurteilt, bevor er in eine geeignete Kursstufe eingestuft wird. Während der gesamten Kursdauer werden die Leistungsfortschritte des Teilnehmers genau beobachtet und in einem individuellen Bericht festgehalten.',
    ];
  } else {
    $txt = [
      // HERO
      'hero_title' => 'Face-to-Face Programs',
      'hero_text' => 'We offer programs in German, Chinese, English, French, Greek, Italian, Spanish, Portuguese, Japanese and other languages on request. All programs run year-round, including vacation courses for summer, winter, spring break and other holiday periods. The A-viva CLASS concept (Culture. Language. Arts. Sports. Social events) is based on the principles of “learning by having fun” – when learning is fun, students are motivated, and learning becomes effective.',

      // INTENSIVE COURSES
      'intensive_title' => 'Intensive Courses',
      'intensive_subtitle' => 'At least 18 hours of instruction per week with daily lessons aimed at comprehensive language acquisition. Prices include registration, taxes, exams and certificates. If anyone misses the scheduled exam for any reason, a fee of 100€ to 150€ will be charged to take the exam on another date.',
      // PROGRAM A
      'intensive_a_title' => 'Intensive Program A',
      'intensive_a_item1' => '20 lessons per week',
      'intensive_a_item2' => 'Qualifies for visa in Germany',
      'intensive_a_item3' => 'Up to 8 students per class',
      'intensive_a_item4' => 'Offered levels based on availability: A1, A2, B1, B2, C1, C2',
      'intensive_a_item5' => 'Housing accommodation is optional',
      'intensive_a_text' => 'Fee starts at 600€ per month',
      'intensive_a_cta' => 'Enquire',
      // PROGRAM B
      'intensive_b_title' => 'Intensive Program B',
      'intensive_b_item1' => '30 lessons per week',
      'intensive_b_item2' => 'Qualifies for visa in Germany',
      'intensive_b_item3' => 'Up to 8 students per class',
      'intensive_b_item4' => 'Offered levels based on availability: A1, A2, B1, B2, C1, C2',
      'intensive_b_item5' => 'Housing accommodation is optional',
      'intensive_b_text' => 'Fee starts at 1000€ per month.',
      'intensive_b_cta' => 'Enquire',
      // NEED A PLACE TO STAY
      'intensive_stay_title' => 'Need a Place to Stay During Your Course?',
      'intensive_stay_subtitle' => 'We offer apartments, host families, and youth hostels. Only for students enrolled in an intensive program.',
      'intensive_stay_cta' => 'Explore housing',

      // EVENING COURSES
      'evening_title' => 'Evening And Weekend Courses',
      'evening_subtitle' => 'A flexible option for working professionals or students to improve their language skills without disrupting primary daytime commitments. Prices include registration, taxes, exams and certificates. If anyone misses the scheduled exam for any reason, a fee of 100€ to 150€ will be charged to take the exam on another date.',
      // PROGRAM A
      'evening_e1_title' => 'Evening Program E1',
      'evening_e1_item1' => '2 lessons per week',
      'evening_e1_item2' => 'One evening per week',
      'evening_e1_item3' => 'Up to 8 students per class',
      'evening_e1_item4' => 'Offered levels based on availability: A1, A2, B1, B2, C1, C2',
      'evening_e1_item5' => 'Housing accommodation is not offered',
      'evening_e1_text' => 'Fee starts at 80€ per month.',
      'evening_e1_cta' => 'Enquire',
      // PROGRAM B
      'evening_e2_title' => 'Evening Program E2',
      'evening_e2_item1' => '4 lessons per week',
      'evening_e2_item2' => 'Two evenings per week',
      'evening_e2_item3' => 'Up to 8 students per class',
      'evening_e2_item4' => 'Offered levels based on availability: A1, A2, B1, B2, C1, C2',
      'evening_e2_item5' => 'Housing accommodation is not offered',
      'evening_e2_text' => 'Fee starts at 160€ per month.',
      'evening_e2_cta' => 'Enquire',

      // EXAMS
      'exams_title' => 'Exams for German Language Certification',
      'exams_subtitle' => 'Exams and certificates given at the end of each level, from A1 to C2, are free of charge for students enrolled in the corresponding course. For external students from other schools who wish to take exams at A-viva, do refer to the information below.',
      // A1 - A2
      'exams_a_title' => 'A1 - A2 Exams',
      'exams_a_subtitle' => 'One-time fee of 200€ per attempt',
      'exams_a_cta' => 'Enquire',
      // B1 - C2
      'exams_b_title' => 'B1 - C2 Exams',
      'exams_b_subtitle' => 'One-time fee of 300€ per attempt',
      'exams_b_cta' => 'Enquire',

      // BORING CLASSES
      'boring_title' => 'Boring Classes Are Not Allowed!',
      'boring_item1_title' => 'Immersive Classroom Scenes',
      'boring_item1_text' => 'To add a touch of relevance and spontaneity, we take advantage of the whole city as a ‘living’ classroom and occasionally conduct some classes outside of school, such as in a café, in the park, in a museum, or in the library.',
      'boring_item2_title' => 'Homework Is Not \'Just Homework\'',
      'boring_item2_text' => 'In addition to regular grammar and vocabulary exercises, students execute daily news analysis and report it in their own words to the class the next day. Optional assignments include hunting for a historical object in the city, interviewing pedestrians in the neighborhood, or visiting the city hall for a research project.',
      'boring_item3_title' => 'Free Tutoring',
      'boring_item3_text' => 'For those who wish to benefit from some extra help, our teaching assistants are at your service for free tutoring in the afternoon.',
      'boring_item4_title' => 'Individual Attention',
      'boring_item4_text' => 'Following the written placement test, the student is interviewed one-on-one by an instructor for listening and verbal assessment before being placed in an appropriate class level. During the course of the study period, the student\'s performance progress is closely monitored and recorded in a customized report.',
    ];
  }
  ?>





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
            <h1 class="w-100"><?= htmlspecialchars($txt['hero_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['hero_text']) ?></p>
          </div>
          
          <!-- language box -->
          <?php require __DIR__ . "/includes/languagebox.php" ?>
      </section>



      <!-- intensive courses offered -->
      <section class="intensive-section grey-bg">
        <div class="container">

          <!-- first row -->
          <div class="row mb-5 text-left">
            <h2 class="w-100"><?= htmlspecialchars($txt['intensive_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['intensive_subtitle']) ?></p>
          </div>

          <!-- second row -->
          <div class="row">
            <div class="col-sm-6">
              <!-- second row -->
              <div class="row d-flex justify-content-center h-100">
                <!-- course 1 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body intensive-card">
                    <h3><?= htmlspecialchars($txt['intensive_a_title']) ?></h3>
                    <ul class="card-text mt-3">
                      <li><?= htmlspecialchars($txt['intensive_a_item1']) ?></li>
                      <li><?= htmlspecialchars($txt['intensive_a_item2']) ?></li>
                      <li><?= htmlspecialchars($txt['intensive_a_item3']) ?></li>
                      <li><?= htmlspecialchars($txt['intensive_a_item4']) ?></li>
                      <li><?= htmlspecialchars($txt['intensive_a_item5']) ?></li>
                    </ul>
                    <p class="no-spacing"><?= htmlspecialchars($txt['intensive_a_text']) ?></p>
                    <button class="btn btn-primary w-100 mt-3"><?= htmlspecialchars($txt['intensive_a_cta']) ?></button>
                  </div>
                </div>

                <!-- course 2 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body intensive-card">
                    <h3><?= htmlspecialchars($txt['intensive_b_title']) ?></h3>
                    <ul class="card-text mt-3">
                      <li><?= htmlspecialchars($txt['intensive_b_item1']) ?></li>
                      <li><?= htmlspecialchars($txt['intensive_b_item2']) ?></li>
                      <li><?= htmlspecialchars($txt['intensive_b_item3']) ?></li>
                      <li><?= htmlspecialchars($txt['intensive_b_item4']) ?></li>
                      <li><?= htmlspecialchars($txt['intensive_b_item5']) ?></li>
                    </ul>
                    <p class="no-spacing"><?= htmlspecialchars($txt['intensive_b_text']) ?></p>
                    <button class="btn btn-primary w-100 mt-3"><?= htmlspecialchars($txt['intensive_b_cta']) ?></button>
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

          <div class="col-md-6 justify-content-center mt-4">
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
                <h3><?= htmlspecialchars($txt['intensive_stay_title']) ?></h3>
                <p><?= htmlspecialchars($txt['intensive_stay_subtitle']) ?></p>
              </div>
              <div class="col d-flex align-items-center">
                <a href="register.php"><button type="button" class="btn btn-secondary"><?= htmlspecialchars($txt['intensive_stay_cta']) ?></button></a>
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
            <h2 class="w-100"><?= htmlspecialchars($txt['evening_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['evening_subtitle']) ?></p>
          </div>

          <!-- second row -->
          <div class="row">
            <div class="col-sm-6">
              <div class="row d-flex justify-content-center h-100">
                <!-- course 1 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body evening-card">
                    <h3><?= htmlspecialchars($txt['evening_e1_title']) ?></h3>
                    <ul class="card-text mt-3">
                      <li><?= htmlspecialchars($txt['evening_e1_item1']) ?></li>
                      <li><?= htmlspecialchars($txt['evening_e1_item2']) ?></li>
                      <li><?= htmlspecialchars($txt['evening_e1_item3']) ?></li>
                      <li><?= htmlspecialchars($txt['evening_e1_item4']) ?></li>
                      <li><?= htmlspecialchars($txt['evening_e1_item5']) ?></li>
                    </ul>
                    <p class="no-spacing"><?= htmlspecialchars($txt['evening_e1_text']) ?></p>
                    <button class="btn btn-primary w-100 mt-3"><?= htmlspecialchars($txt['evening_e1_cta']) ?></button>
                  </div>
                </div>

                <!-- course 2 -->
                <div class="card p-4" style="width: 100%;">
                  <div class="card-body evening-card">
                    <h3><?= htmlspecialchars($txt['evening_e2_title']) ?></h3>
                    <ul class="card-text mt-3">
                      <li><?= htmlspecialchars($txt['evening_e2_item1']) ?></li>
                      <li><?= htmlspecialchars($txt['evening_e2_item2']) ?></li>
                      <li><?= htmlspecialchars($txt['evening_e2_item3']) ?></li>
                      <li><?= htmlspecialchars($txt['evening_e2_item4']) ?></li>
                      <li><?= htmlspecialchars($txt['evening_e2_item5']) ?></li>
                    </ul>
                    <p class="no-spacing"><?= htmlspecialchars($txt['evening_e2_text']) ?></p>
                    <button class="btn btn-primary w-100 mt-3"><?= htmlspecialchars($txt['evening_e2_cta']) ?></button>
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
          <div class="col-md-6 justify-content-center mt-4">
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
            <h2><?= htmlspecialchars($txt['exams_title']) ?></h2>
            <p><?= htmlspecialchars($txt['exams_subtitle']) ?></p>
          </div>

          <div class="row">

            <div class="col mb-2">
              <div class="card no-spacing">
                <div class="card-body">
                  <h3><?= htmlspecialchars($txt['exams_a_title']) ?></h3>
                  <div class="card-text">
                    <p><?= htmlspecialchars($txt['exams_a_subtitle']) ?></p>
                    <button class="btn btn-primary w-100"><?= htmlspecialchars($txt['exams_a_cta']) ?></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card no-spacing">
                <div class="card-body">
                  <h3><?= htmlspecialchars($txt['exams_b_title']) ?></h3>
                  <div class="card-text">
                    <p><?= htmlspecialchars($txt['exams_b_subtitle']) ?></p>
                    <button class="btn btn-primary w-100"><?= htmlspecialchars($txt['exams_b_cta']) ?></button>
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
            <h2 class="text-center w-100"><?= htmlspecialchars($txt['boring_title']) ?></h1>
          </div>
          <div class="row mt-5">
            
            <div class="col-md mb-5">
              <div class="row mb-2">
                <div class="col-2 text-center"><img src="pics/globe-logo.svg" alt="Globe icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold"><?= htmlspecialchars($txt['boring_item1_title']) ?></h3>
                  <p><?= htmlspecialchars($txt['boring_item1_text']) ?></p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-2 text-center"><img src="pics/book-logo.svg" alt="Book icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold"><?= htmlspecialchars($txt['boring_item2_title']) ?></h3>
                  <p><?= htmlspecialchars($txt['boring_item2_text']) ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-2 text-center"><img src="pics/teach-logo.svg" alt="Teaching icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold"><?= htmlspecialchars($txt['boring_item3_title']) ?></h3>
                  <p><?= htmlspecialchars($txt['boring_item3_text']) ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-2 text-center"><img src="pics/smile-logo.svg" alt="Smile icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold"><?= htmlspecialchars($txt['boring_item4_title']) ?></h3>
                  <p><?= htmlspecialchars($txt['boring_item4_text']) ?></p>
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
                  'en' => 'We offer German, Chinese, English, French, Greek, Italian, Spanish, Portuguese, and Japanese. Other languages are available on request, depending on demand and availability.',
                  'de' => 'Wir bieten Deutsch, Chinesisch, Englisch, Französisch, Griechisch, Italienisch, Spanisch, Portugiesisch und Japanisch an. Weitere Sprachen sind auf Anfrage erhältlich, je nach Bedarf und Verfügbarkeit.'
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