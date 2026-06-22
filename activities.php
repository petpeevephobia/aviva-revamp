<?php
  $currentPage = 'home'; 
  $pageTitle = 'A-Viva Sprachschule - Home';
  $pageDescription = '...';
  
  require __DIR__ . '/includes/head.php';
  require __DIR__ . '/includes/translations.php';
?>

<!doctype html>
<html lang="<?= htmlspecialchars($currentLang) ?>">
  <?php require __DIR__ . '/includes/head.php'; ?>

  <body>
    <!-- START nav -->
    <?php require __DIR__ . '/includes/nav.php'; ?>
    <!-- END nav -->



    <!-- START main -->
    <main class="mx-auto">

      <!-- "languages offered" section -->
      <section class="activities-section">
        <div class="container">
          <div class="row mb-5 text-left">
            <h1 class="w-100"><?= htmlspecialchars($txt['activities_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['activities_text1']) ?></p>
            <p class="w-100"><?= htmlspecialchars($txt['activities_text2']) ?></p>
            <p class="w-100"><?= htmlspecialchars($txt['activities_text3']) ?></p>
          </div>
      </section>



      <section class="activities-list container">
        <div class="row">
            <div class="col mr-sm-5">
                <h2 class="w-100 mb-4"><?= htmlspecialchars($txt['activities_currentEvents_title']) ?></h2>
                <?php require __DIR__ . '/includes/activities-list.php'; ?>
            </div>
            <!-- events newsletter -->
            <div class="col-sm-4">
                <div class="row sticky-top sticky-padding">
                    <h2 class="w-100"><?= htmlspecialchars($txt['activities_currentEvents_stayUpToDate_title']) ?></h2>
                    <p class="w-100"><?= htmlspecialchars($txt['activities_currentEvents_stayUpToDate_text']) ?></p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="name@email.com" aria-label="Recipient's email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button"><?= htmlspecialchars($txt['activities_currentEvents_stayUpToDate_cta']) ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>


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
                    'en' => 'What kind of student activities does A-Viva offer?',
                    'de' => 'Welche studentischen Aktivitäten bietet A-Viva an?'
            ],
                'answer' => [
                    'en' => 'We organize weekly fun activities like city tours, museum visits, cooking nights, movie evenings, and seasonal BBQs. These help students practice German naturally and meet new friends.',
                    'de' => 'Wir organisieren wöchentlich unterhaltsame Aktivitäten wie Stadtrundgänge, Museumsbesuche, Kochabende, Filmabende und saisonale Grillfeste. Diese bieten den Schülern die Möglichkeit, Deutsch auf natürliche Weise zu üben und neue Freunde kennenzulernen.'
                ]
            ],
            'q2'    => [
                'ariacontrols' => 'collapseTwo',
                'datatarget' => '#collapseTwo',
                'id' => 'headerTwo',
                'question' => [
                    'en' => 'Are trips and excursions included in my course?',
                    'de' => 'Sind Ausflüge und Exkursionen in meinem Kurs enthalten?'
                ],
                'answer' => [
                    'en' => 'Many activities, including day trips to Heidelberg, Strasbourg, or local hikes, are offered regularly. Most are included in your course fee or require a small contribution for transport/entry.',
                    'de' => 'Es werden regelmäßig zahlreiche Aktivitäten angeboten, darunter Tagesausflüge nach Heidelberg, Straßburg oder Wanderungen in der Umgebung. Die meisten sind in Ihrer Kursgebühr enthalten oder erfordern einen geringen Beitrag für Transport und Eintrittsgelder.'
                    ]
            ],
            'q3'    => [
                'ariacontrols' => 'collapseThree',
                'datatarget' => '#collapseThree',
                'id' => 'headerThree',
                'question' => [
                    'en' => 'What kinds of activities and trips are included?',
                    'de' => 'Welche Aktivitäten und Ausflüge sind im Preis inbegriffen?'
                ],
                'answer' => [
                    'en' => 'A-Viva offers weekly cultural and social activities such as city tours, museum visits, conversation meetups, cooking evenings, and day trips around Hessen. These activities help students practice German in real life and build community outside the classroom.',
                    'de' => 'A-Viva bietet wöchentliche kulturelle und gesellschaftliche Aktivitäten wie Stadtrundgänge, Museumsbesuche, Konversationstreffen, Kochabende und Tagesausflüge in ganz Hessen an. Diese Aktivitäten helfen den Studierenden, Deutsch im Alltag zu üben und außerhalb des Unterrichts Gemeinschaft aufzubauen.'
                    ]
            ],
            'q4'    => [
                'ariacontrols' => 'collapseFour',
                'datatarget' => '#collapseFour',
                'id' => 'headerFour',
                'question' => [
                    'en' => 'How often are activities held?',
                    'de' => 'Wie oft finden die Aktivitäten statt?'
                ],
                'answer' => [
                    'en' => 'On average, there is one major activity or trip per week, plus smaller events like coffee chats, movie nights, or cooking workshops. Some special events occur monthly or seasonally.',
                    'de' => 'Im Durchschnitt findet pro Woche eine größere Aktivität oder ein Ausflug statt, dazu kommen kleinere Veranstaltungen wie Kaffeerunden, Filmabende oder Kochworkshops. Einige Sonderveranstaltungen finden monatlich oder saisonal statt.'
                    ]
            ],
            'q5'    => [
                'ariacontrols' => 'collapseFive',
                'datatarget' => '#collapseFive',
                'id' => 'headerFive',
                'question' => [
                    'en' => 'Can I join activities even if I’m not in the intensive course?',
                    'de' => 'Kann ich an den Aktivitäten teilnehmen, auch wenn ich nicht am Intensivkurs teilnehme?'
                ],
                'answer' => [
                    'en' => 'Yes! All students can join activities, regardless of course type, including evening or part-time learners. Activities are designed for all language levels.',
                    'de' => 'Ja! Alle Studierenden können an den Aktivitäten teilnehmen, unabhängig von der Art ihres Studiengangs, auch Abend- und Teilzeitstudierende. Die Aktivitäten sind für alle Sprachniveaus konzipiert.'
                    ]
            ],
            'q6'    => [
                'ariacontrols' => 'collapseSix',
                'datatarget' => '#collapseSix',
                'id' => 'headerSix',
                'question' => [
                    'en' => 'Are the activities free?',
                    'de' => 'Sind die Aktivitäten kostenlos?'
                ],
                'answer' => [
                    'en' => 'Many activities are free, such as conversation cafés, city walks, or campus meetups. Others, like museum trips or special excursions, may have a small cost to cover tickets or transport.',
                    'de' => 'Viele Aktivitäten sind kostenlos, wie zum Beispiel Konversationscafés, Stadtrundgänge oder Treffen auf dem Campus. Für andere, wie Museumsbesuche oder besondere Ausflüge, fallen möglicherweise geringe Kosten für Eintrittskarten oder Transport an.'
                    ]
            ],
            'q7'    => [
                'ariacontrols' => 'collapseSeven',
                'datatarget' => '#collapseSeven',
                'id' => 'headerSeven',
                'question' => [
                    'en' => 'Do I need to sign up in advance for activities?',
                    'de' => 'Muss ich mich für die Aktivitäten im Voraus anmelden?'
                ],
                'answer' => [
                    'en' => 'Yes, for larger trips and workshops, we ask students to register so we can organize transport, materials, and guides. Smaller events like coffee chats or movie nights are first-come, first-served.',
                    'de' => 'Ja, bei größeren Ausflügen und Workshops bitten wir die Teilnehmer, sich anzumelden, damit wir Transport, Materialien und Begleiter organisieren können. Bei kleineren Veranstaltungen wie Kaffeerunden oder Filmabenden gilt das Prinzip „Wer zuerst kommt, mahlt zuerst“.'
                    ]
            ],
            'q8'    => [
                'ariacontrols' => 'collapseEight',
                'datatarget' => '#collapseEight',
                'id' => 'headerEight',
                'question' => [
                    'en' => 'Are the activities suitable for beginners?',
                    'de' => 'Sind die Aktivitäten für Anfänger geeignet?'
                ],
                'answer' => [
                    'en' => 'Absolutely. Activities are designed so everyone can participate, even if your German is just starting. Guides and teachers are there to help and explain throughout.',
                    'de' => 'Auf jeden Fall. Die Aktivitäten sind so konzipiert, dass jeder mitmachen kann, auch wenn man gerade erst mit Deutsch anfängt. Die Betreuer und Lehrer stehen die ganze Zeit über mit Rat und Tat zur Seite.'
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