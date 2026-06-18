<!doctype html>
<html lang="en">
  <?php require __DIR__ . '/includes/head.php'; ?>



  <?php
  $pageTitle   = 'A-Viva Sprachschule - Register';
  $currentPage = 'register';
  // $pageDescription = 'German courses in Frankfurt...';

  if ($currentLang === 'de') {
    $txt = [
      'register_title' => 'Anmeldung',
      'register_text' => 'Der Einstieg bei A-Viva ist ganz einfach. Befolgen Sie diese Schritte, um Ihr Interesse zu bekunden und sich Ihren Platz zu sichern:',
      'register_item1' => 'Schreiben Sie uns eine E-Mail über den untenstehenden Link „Jetzt bewerben“ – stellen Sie sich vor und bekunden Sie Ihr Interesse an Ihrem Wunschprogramm.',
      'register_item2' => 'Bitte legen Sie die erforderlichen Unterlagen vor – für deutsche Studierende: Personalausweis oder Reisepass. Für internationale Studierende: Reisepass, Visum (falls erforderlich) und gegebenenfalls Nachweis über Vorkenntnisse in der Sprache.',
      'register_item3' => 'Einstufungstest – Absolvieren Sie einen schriftlichen und mündlichen Einstufungstest, um sicherzustellen, dass Sie in das richtige Niveau eingestuft werden.',
      'register_item4' => 'Bestätigung – Sobald Ihre Anmeldung angenommen wurde, erhalten Sie eine Kursbestätigung und eine Rechnung.',
      
      // ACCOMMODATION
      'register_accommodation_title' => 'Unterkunftsmöglichkeiten',
      'register_accommodation_text' => 'Wir sorgen dafür, dass sich Studierende wohlfühlen – ganz gleich, wie hoch ihr Budget ist oder welche Vorlieben sie haben. Alle Unterkünfte liegen in unmittelbarer Nähe von A-Viva oder sind gut an den öffentlichen Nahverkehr angebunden.',
      'register_accommodation_item1_title' => 'Studentenwohnung',
      'register_accommodation_item1_text' => 'Moderne, komplett möblierte Wohnungen in Frankfurt – ideal für ein unabhängiges Leben.',
      'register_accommodation_item2_title' => 'Gastfamilie',
      'register_accommodation_item2_text' => 'Wohne bei einer Gastfamilie vor Ort und tauche in die deutsche Kultur und die Alltagssprache ein.',
      'register_accommodation_item3_title' => 'Jugendherberge',
      'register_accommodation_item3_text' => 'Preisgünstige Optionen für Kurzaufenthalte oder Studierende, die ein geselliges Umfeld bevorzugen.',
      'register_accommodation_cta' => 'Informationen zur Unterkunft anfordern'
    ];
  } else {
    $txt = [
      // HERO
      'register_title' => 'Registration',
      'register_text' => 'Starting your journey at A-Viva is easy. Follow these steps to express interest and secure your spot:',
      'register_item1' => 'Write an email to us via "Apply now" below – Introduce yourself and express interest for your desired program.',
      'register_item2' => 'Provide required documents – for German students: ID or passport. For international students: passport, visa (if required), and proof of prior language knowledge if applicable.',
      'register_item3' => 'Placement test – complete a written and oral placement test to ensure you join the right level.',
      'register_item4' => 'Confirmation – once accepted, you will receive a course confirmation and invoice.',

      // ACCOMMODATION
      'register_accommodation_title' => 'Accommodation Options',
      'register_accommodation_text' => 'We help students feel at home, whatever their budget or preference. All options are within easy reach of A-Viva or well-connected by public transport.',
      'register_accommodation_item1_title' => 'Student Apartment',
      'register_accommodation_item1_text' => 'Modern, fully furnished apartments in Frankfurt, perfect for independence.',
      'register_accommodation_item2_title' => 'Host Family',
      'register_accommodation_item2_text' => 'Live with a local family and immerse yourself in German culture and everyday language.',
      'register_accommodation_item3_title' => 'Youth Hostel',
      'register_accommodation_item3_text' => 'Budget-friendly options for short-term stays or students who prefer a social environment.',
      'register_accommodation_cta' => 'Enquire about housing'
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
            <h1 class="w-100"><?= htmlspecialchars($txt['register_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['register_text']) ?></p>
            <ol class="w-100">
                <li><?= htmlspecialchars($txt['register_item1']) ?></li>
                <li><?= htmlspecialchars($txt['register_item2']) ?></li>
                <li><?= htmlspecialchars($txt['register_item3']) ?></li>
                <li><?= htmlspecialchars($txt['register_item4']) ?></li>
            </ol>

          </div>
      </section>



      <!-- accommodation offered -->
      <section class="accommodation-section grey-bg">
        <div class="container">

          <!-- first row -->
          <div class="row mb-5 text-left">
            <h2 class="w-100"><?= htmlspecialchars($txt['register_accommodation_title']) ?></h2>
            <p class="w-100"><?= htmlspecialchars($txt['register_accommodation_text']) ?></p>
          </div>

          <div class="row h-100">

            <div class="col mb-2">
              <div class="card">
                <div class="card-body">
                  <h3><?= htmlspecialchars($txt['register_accommodation_item1_title']) ?></h3>
                  <div class="card-text">
                    <p><?= htmlspecialchars($txt['register_accommodation_item1_text']) ?></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col mb-2">
              <div class="card">
                <div class="card-body">
                  <h3><?= htmlspecialchars($txt['register_accommodation_item2_title']) ?></h3>
                  <div class="card-text">
                    <p><?= htmlspecialchars($txt['register_accommodation_item2_text']) ?></p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col mb-2">
              <div class="card">
                <div class="card-body">
                  <h3><?= htmlspecialchars($txt['register_accommodation_item3_title']) ?></h3>
                  <div class="card-text">
                    <p><?= htmlspecialchars($txt['register_accommodation_item3_text']) ?></p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row d-flex justify-content-center mt-4">
            <button class="btn btn-primary"><?= htmlspecialchars($txt['register_accommodation_cta']) ?></button>
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
                'en' => 'How do I know which program to choose?',
                'de' => 'Woher weiß ich, welches Programm ich wählen soll?'
        ],
            'answer' => [
                'en' => 'Complete our placement test and consultation. Our team will match you to the program that fits your level and goals.',
                'de' => 'Machen Sie unseren Einstufungstest und nutzen Sie unser Beratungsgespräch. Unser Team wird das Programm für Sie finden, das Ihrem Niveau und Ihren Zielen entspricht..'
            ]
        ],
        'q2'    => [
            'ariacontrols' => 'collapseTwo',
            'datatarget' => '#collapseTwo',
            'id' => 'headerTwo',
            'question' => [
                'en' => 'Are the programs year-round?',
                'de' => 'Finden die Programme das ganze Jahr über statt?'
            ],
            'answer' => [
                'en' => 'Yes. Summer, winter, spring break, and holiday courses are all available.',
                'de' => 'Ja. Es werden Sommer-, Winter-, Frühjahrsferien- und Feiertagskurse angeboten..'
                ]
        ],
        'q3'    => [
            'ariacontrols' => 'collapseThree',
            'datatarget' => '#collapseThree',
            'id' => 'headerThree',
            'question' => [
                'en' => 'Can I work while studying?',
                'de' => 'Kann ich neben dem Studium arbeiten?'
            ],
            'answer' => [
                'en' => 'Evening programs are designed for students who work or study during the day. Intensive programs require more focus and time.',
                'de' => 'Die Abendkurse richten sich an Studierende, die tagsüber arbeiten oder studieren. Intensivkurse erfordern mehr Konzentration und Zeit.'
                ]
        ],
        'q4'    => [
            'ariacontrols' => 'collapseFour',
            'datatarget' => '#collapseFour',
            'id' => 'headerFour',
            'question' => [
                'en' => 'How do I apply for a visa to study at A-Viva?',
                'de' => 'Wie beantrage ich ein Visum für ein Studium bei A-Viva?'
            ],
            'answer' => [
                'en' => 'International students applying for visa-qualified intensive programs (A or D) will receive an invoice after payment is made and they are accepted into A-Viva. They can use the invoice as part of their visa application.',
                'de' => 'Internationale Studierende, die sich für visumpflichtige Intensivprogramme (A oder D) bewerben, erhalten nach erfolgter Zahlung und nach ihrer Zulassung zu A-Viva eine Rechnung. Diese Rechnung können sie im Rahmen ihres Visumantrags vorlegen.'
                ]
        ],
        'q5'    => [
            'ariacontrols' => 'collapseFive',
            'datatarget' => '#collapseFive',
            'id' => 'headerFive',
            'question' => [
                'en' => 'What if I need help finding housing?',
                'de' => 'Was ist, wenn ich Hilfe bei der Wohnungssuche brauche?'
            ],
            'answer' => [
                'en' => 'Our admissions team provides guidance and contacts for apartments, host families, and youth hostels.',
                'de' => 'Unser Zulassungsteam bietet Beratung und vermittelt Kontakte zu Wohnungen, Gastfamilien und Jugendherbergen.'
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
                'en' => 'Do you provide health insurance guidance?',
                'de' => 'Bieten Sie Beratung zum Thema Krankenversicherung an?'
            ],
            'answer' => [
                'en' => 'Yes, we advise international students on local insurance options and requirements.',
                'de' => 'Ja, wir beraten internationale Studierende zu den lokalen Versicherungsmöglichkeiten und -anforderungen.'
                ]
        ],
        'q8'    => [
            'ariacontrols' => 'collapseEight',
            'datatarget' => '#collapseEight',
            'id' => 'headerEight',
            'question' => [
                'en' => 'How early should I apply?',
                'de' => 'Wie früh sollte ich mich bewerben?'
            ],
            'answer' => [
                'en' => 'We recommend at least 2 months before your desired start date, especially for visa applications and housing arrangements.',
                'de' => 'Wir empfehlen, dies mindestens zwei Monate vor Ihrem gewünschten Starttermin zu tun, insbesondere im Hinblick auf Visumanträge und die Wohnungssuche.'
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