<?php
$pageTitle   = 'A-Viva Sprachschule - Programs';
$currentPage = 'programs';
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


      <!-- "languages offered" section -->
      <section class="language-section">
        <div class="container">
          
          <div class="row mb-5 text-left">
            <h1 class="w-100">Face-to-Face Programs</h2>
            <p class="w-100">We offer programs in German, Chinese, English, French, Greek, Italian, Spanish, Portuguese, Japanese and other languages on request. All programs run year-round, including vacation courses for summer, winter, spring break and other holiday periods. The A-viva CLASS concept (Culture. Language. Arts. Sports. Social events) is based on the principles of “learning by having fun” – when learning is fun, students are motivated, and learning becomes effective.</p>
          </div>
          
          <!-- language box -->
          <?php require __DIR__ . "/includes/languagebox.php" ?>
      </section>



      <!-- intensive courses offered -->
      <section class="intensive-section grey-bg">
        <div class="container">

          <!-- first row -->
          <div class="row mb-5 text-left">
            <h2 class="w-100">Intensive Courses</h2>
            <p class="w-100">At least 18 hours of instruction per week with daily lessons aimed at comprehensive language acquisition. Prices include registration, taxes, exams and certificates. If anyone misses the scheduled exam for any reason, a fee of 100€ to 150€ will be charged to take the exam on another date.</p>
          </div>

          <!-- second row -->
          <div class="row">
            <div class="col-sm-6">
              <!-- second row -->
              <div class="row d-flex justify-content-center h-100">
                <!-- course 1 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body intensive-card">
                    <h3>Intensive Program A</h3>
                    <ul class="card-text mt-3">
                      <li><span class="font-weight-bold">20 lessons</span> per week</li>
                      <li>Qualifies for visa in Germany</li>
                      <li>Up to 8 students per class</li>
                      <li>Offered levels based on availability: A1, A2, B1, B2, C1, C2</li>
                      <li>Housing accommodation is optional</li>
                    </ul>
                    <p class="no-spacing">Fee starts at <span class="font-weight-bold">600€ per month</span>.</p>
                    <button class="btn btn-primary w-100 mt-3">Enquire</button>
                  </div>
                </div>

                <!-- course 2 -->
                <div class="card p-4" style="width: 100%;">
                  <div class="card-body intensive-card">
                    <h3>Intensive Program B</h3>
                    <ul class="card-text mt-3">
                      <li><span class="font-weight-bold">30 lessons</span> per week</li>
                      <li>Qualifies for visa in Germany</li>
                      <li>Up to 8 students per class</li>
                      <li>Offered levels based on availability: A1, A2, B1, B2, C1, C2</li>
                      <li>Housing accommodation is optional</li>
                    </ul>
                    <p class="no-spacing">Fee starts at <span class="font-weight-bold">1000€ per month</span>.</p>
                    <button class="btn btn-primary w-100 mt-3">Enquire</button>
                  </div>
                </div>
              </div>
          </div>
        <!-- pricing table -->
        <?php
        $intensivePricingRows = [
            ['duration' => '2 weeks',    'a' => '400 €',  'd' => '800 €'],
            ['duration' => '3 weeks',    'a' => '500 €',  'd' => '1000 €'],
            ['duration' => '4 weeks',    'a' => '600 €',  'd' => '1200 €'],
            ['duration' => '2 months',   'a' => '1200 €', 'd' => '2400 €'],
            ['duration' => '3 months',   'a' => '1800 €', 'd' => '3600 €'],
            ['duration' => '4 months',   'a' => '2400 €', 'd' => '4800 €'],
            ['duration' => '5 months',   'a' => '3000 €', 'd' => '6000 €'],
            ['duration' => '6 months',   'a' => '3600 €', 'd' => '7200 €'],
            ['duration' => '7 months',   'a' => '4200 €', 'd' => ''],
            ['duration' => '8 months',   'a' => '4800 €', 'd' => ''],
            ['duration' => '9 months',   'a' => '5400 €', 'd' => ''],
            ['duration' => '10 months',  'a' => '6000 €', 'd' => ''],
            ['duration' => '11 months',  'a' => '6600 €', 'd' => ''],
            ['duration' => '12 months',  'a' => '7200 €', 'd' => ''],
            ['duration' => 'Per extra week', 'a' => '150 €',  'd' => '300 €'],
        ];
        ?>
          <div class="col-md-6 justify-content-center mt-4">
            <div class="col-12 no-spacing">
              <table class="programs-pricing-table">
                <thead>
                  <tr>
                    <th rowspan="3" scope="col" class="programs-pricing-duration">Duration</th>
                    <th colspan="2" scope="colgroup">Intensive</th>
                  </tr>
                  <tr>
                    <th colspan="2" scope="colgroup">Day Programs</th>
                  </tr>
                  <tr>
                    <th scope="col">A</th>
                    <th scope="col">D</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($intensivePricingRows as $row): ?>
                  <tr>
                    <th scope="row" class="programs-pricing-duration"><?= htmlspecialchars($row['duration']) ?></th>
                    <td><?= htmlspecialchars($row['a']) ?></td>
                    <td><?= htmlspecialchars($row['d']) ?></td>
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
                <h3>Need a Place to Stay During Your Course?</h3>
                <p>We offer apartments, host families, and youth hostels. Only for students enrolled in an intensive program.</p>
              </div>
              <div class="col d-flex align-items-center">
                <button type="button" class="btn btn-secondary">Explore housing</button>
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
            <h2 class="w-100">Evening And Weekend Courses</h2>
            <p class="w-100">A flexible option for working professionals or students to improve their language skills without disrupting primary daytime commitments. Prices include registration, taxes, exams and certificates. If anyone misses the scheduled exam for any reason, a fee of 100€ to 150€ will be charged to take the exam on another date.</p>
          </div>

          <!-- second row -->
          <div class="row">
            <div class="col-sm-6">
              <div class="row d-flex justify-content-center h-100">
                <!-- course 1 -->
                <div class="card p-4 mb-2" style="width: 100%;">
                  <div class="card-body evening-card">
                    <h3>Evening Program E1</h3>
                    <ul class="card-text mt-3">
                      <li><span class="font-weight-bold">2 lessons</span> per week</li>
                      <li><span class="font-weight-bold">One evening</span> per week</li>
                      <li>Up to 8 students per class</li>
                      <li>Offered levels based on availability: A1, A2, B1, B2, C1, C2</li>
                      <li>Housing accommodation is not offered</li>
                    </ul>
                    <p class="no-spacing">Fee starts at <span class="font-weight-bold">80€ per month</span>.</p>
                    <button class="btn btn-primary w-100 mt-3">Enquire</button>
                  </div>
                </div>

                <!-- course 2 -->
                <div class="card p-4" style="width: 100%;">
                  <div class="card-body evening-card">
                    <h3>Evening Program E2</h3>
                    <ul class="card-text mt-3">
                      <li><span class="font-weight-bold">4 lessons</span> per week</li>
                      <li><span class="font-weight-bold">Two evenings</span> per week</li>
                      <li>Up to 8 students per class</li>
                      <li>Offered levels based on availability: A1, A2, B1, B2, C1, C2</li>
                      <li>Housing accommodation is not offered</li>
                    </ul>
                    <p class="no-spacing">Fee starts at <span class="font-weight-bold">160€ per month</span>.</p>
                    <button class="btn btn-primary w-100 mt-3">Enquire</button>
                  </div>
                </div>
              </div>
            </div>
        <?php
        $eveningPricingRows = [
            ['duration' => '2 weeks',    'e1' => '',    'e2' => ''],
            ['duration' => '3 weeks',    'e1' => '',    'e2' => ''],
            ['duration' => '4 weeks',    'e1' => '120 €', 'e2' => '200 €'],
            ['duration' => '2 months',   'e1' => '240 €', 'e2' => '400 €'],
            ['duration' => '3 months',   'e1' => '360 €', 'e2' => '600 €'],
            ['duration' => '4 months',   'e1' => '480 €', 'e2' => '800 €'],
            ['duration' => '5 months',   'e1' => '600 €', 'e2' => '1000 €'],
            ['duration' => '6 months',   'e1' => '720 €', 'e2' => '1200 €'],
            ['duration' => '7 months',   'e1' => '720 €', 'e2' => '1200 €'],
            ['duration' => '8 months',   'e1' => '960 €', 'e2' => '1600 €'],
            ['duration' => '9 months',   'e1' => '1080 €', 'e2' => '1800 €'],
            ['duration' => '10 months',  'e1' => '1200 €', 'e2' => '2000 €'],
            ['duration' => '11 months',  'e1' => '1320 €', 'e2' => '2200 €'],
            ['duration' => '12 months',  'e1' => '1440 €', 'e2' => '2400 €'],
            ['duration' => 'Per extra week', 'e1' => '30 €',  'e2' => '50 €'],
        ];
        ?>
          <div class="col-md-6 justify-content-center mt-4">
            <div class="col-12 no-spacing">
              <table class="programs-pricing-table">
                <thead>
                  <tr>
                    <th rowspan="3" scope="col" class="programs-pricing-duration">Duration</th>
                    <th colspan="2" scope="colgroup">Evening Programs</th>
                  </tr>
                  <tr>
                    <th colspan="2" scope="colgroup" class="programs-pricing-note">(do not qualify for housing)</th>
                  </tr>
                  <tr>
                    <th scope="col">E1</th>
                    <th scope="col">E2</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($eveningPricingRows as $row): ?>
                  <tr>
                    <th scope="row" class="programs-pricing-duration"><?= htmlspecialchars($row['duration']) ?></th>
                    <td><?= htmlspecialchars($row['e1']) ?></td>
                    <td><?= htmlspecialchars($row['e2']) ?></td>
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
            <h2>Exams for German Language Certification</h2>
            <p>Exams and certificates given at the end of each level, from A1 to C2, are free of charge for students enrolled in the corresponding course. For external students from other schools who wish to take exams at A-viva, do refer to the information below.</p>
          </div>

          <div class="row">

            <div class="col mb-2">
              <div class="card no-spacing">
                <div class="card-body">
                  <h3>A1 - A2 Exams</h3>
                  <div class="card-text">
                    <p>One-time fee of <span class="font-weight-bold">200€</span> per attempt</p>
                    <button class="btn btn-primary w-100">Enquire</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card no-spacing">
                <div class="card-body">
                  <h3>B1 - C2 Exams</h3>
                  <div class="card-text">
                    <p>One-time fee of <span class="font-weight-bold">300€</span> per attempt</p>
                    <button class="btn btn-primary w-100">Enquire</button>
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
            <h2 class="text-center w-100">Boring Classes Are Not Allowed!</h1>
          </div>
          <div class="row mt-5">
            
            <div class="col-md mb-5">
              <div class="row mb-2">
                <div class="col-2 text-center"><img src="pics/globe-logo.svg" alt="Globe icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold">Immersive Classroom Scenes</h3>
                  <p>To add a touch of relevance and spontaneity, we take advantage of the whole city as a ‘living’ classroom and occasionally conduct some classes outside of school, such as in a café, in the park, in a museum, or in the library.</p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-2 text-center"><img src="pics/book-logo.svg" alt="Book icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold">Homework Is Not ‘Just Homework’</h3>
                  <p>In addition to regular grammar and vocabulary exercises, students execute daily news analysis and report it in their own words to the class the next day. Optional assignments include hunting for a historical object in the city, interviewing pedestrians in the neighborhood, or visiting the city hall for a research project.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-2 text-center"><img src="pics/teach-logo.svg" alt="Teaching icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold">Free Tutoring</h3>
                  <p>For those who wish to benefit from some extra help, our teaching assistants are at your service for free tutoring in the afternoon.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-2 text-center"><img src="pics/smile-logo.svg" alt="Smile icon"></div>
                <div class="col">
                  <h3 class="font-weight-bold">Individual Attention</h3>
                  <p>Following the written placement test, the student is interviewed one-on-one by an instructor for listening and verbal assessment before being placed in an appropriate class level. During the course of the study period, the student’s performance progress is closely monitored and recorded in a customized report.</p>
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
          'q1' => [
              'ariacontrols' => 'collapseOne',
              'datatarget'     => '#collapseOne',
              'id'             => 'headerOne',
              'question'       => 'What languages can I study at A-Viva?',
              'answer'         => 'We offer German, Chinese, English, French, Greek, Italian, Spanish, Portuguese, and Japanese. Other languages are available on request, depending on demand and availability.',
          ],
          'q2' => [
              'ariacontrols' => 'collapseTwo',
              'datatarget'     => '#collapseTwo',
              'id'             => 'headerTwo',
              'question'       => 'Do courses run all year or only during semesters?',
              'answer'         => 'All programs run year-round, including summer, winter, spring break, and holiday courses. You can start at multiple points throughout the year.',
          ],
          'q3' => [
              'ariacontrols' => 'collapsThreee',
              'datatarget'     => '#collapseThree',
              'id'             => 'headerThree',
              'question'       => 'What is the A-Viva CLASS concept?',
              'answer'         => 'CLASS stands for Culture, Language, Arts, Sports, and Social events. Learning happens inside the classroom and through real-life experiences, so students stay motivated and actually use the language instead of memorizing it.',
          ],
          'q4' => [
              'ariacontrols' => 'collapseFour',
              'datatarget'     => '#collapseFour',
              'id'             => 'headerFour',
              'question'       => 'What are classes like at A-Viva?',
              'answer'         => 'Classes are interactive and creative, using games, role plays, quizzes, humor, and discussions. Some lessons take place outside the school in cafés, parks, museums, or libraries, turning the city into a living classroom.',
          ],
          'q5' => [
              'ariacontrols' => 'collapseFive',
              'datatarget'     => '#collapseFive',
              'id'             => 'headerFive',
              'question'       => 'How much homework is there?',
              'answer'         => 'Homework combines grammar and vocabulary practice with creative tasks. Students often analyze daily news or complete optional assignments like interviews, city research, or cultural exploration. Homework supports learning without feeling like busywork.',
          ],
          'q6' => [
              'ariacontrols' => 'collapseSix',
              'datatarget'     => '#collapseSix',
              'id'             => 'headerSix',
              'question'       => 'Is extra help available if I struggle?',
              'answer'         => 'Yes. Free afternoon tutoring is available with teaching assistants for students who want extra support. No additional fees, no pressure.',
          ],
          'q7' => [
              'ariacontrols' => 'collapseSeven',
              'datatarget'     => '#collapseSeven',
              'id'             => 'headerSeven',
              'question'       => 'Which programs qualify for a German visa?',
              'answer'         => 'The Intensive Program A (20 lessons/week) and Intensive Program D (30 lessons/week) qualify for German visa purposes. Evening programs are designed for students who already live and work in Germany.',
          ],
          'q8' => [
              'ariacontrols' => 'collapseEight',
              'datatarget'     => '#collapseEight',
              'id'             => 'headerEight',
              'question'       => 'Are exams and certificates included in the price?',
              'answer'         => 'Yes. Exams and certificates from A1 to C2 are included, with a 95% pass rate for enrolled students. Exams are free when taken at the scheduled time. Retakes or external exam candidates pay a separate fee.',
          ],
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