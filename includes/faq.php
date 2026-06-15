<?php
// Check current language of page
$currentLang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';

if (!isset($faqItems)) {
    $faqItems = [
        'q1'    => [
            'ariacontrols' => 'collapseOne',
            'datatarget' => '#collapseOne',
            'id' => 'headerOne',
            'question' => [
                'en' => 'What is A-Viva Sprachschule?',
                'de' => 'Was ist die A-Viva Sprachschule?'
        ],
            'answer' => [
                'en' => 'A-Viva is an international language school in Frankfurt offering German and foreign language courses combined with cultural, social, and community activities. We focus on small classes, real communication, and helping students feel at home in Germany.',
                'de' => 'A-Viva ist eine internationale Sprachschule in Frankfurt, die Deutsch- und Fremdsprachenkurse in Kombination mit kulturellen, sozialen und gemeinschaftlichen Aktivitäten anbietet. Wir legen Wert auf kleine Klassen, echte Kommunikation und helfen den Schülern, sich in Deutschland wie zu Hause zu fühlen.'
            ]
        ],
        'q2'    => [
            'ariacontrols' => 'collapseTwo',
            'datatarget' => '#collapseTwo',
            'id' => 'headerTwo',
            'question' => [
                'en' => 'How much does a German course cost?',
                'de' => 'Wie viel kostet ein Deutschkurs?'
            ],
            'answer' => [
                'en' => 'German courses cost 600 € per month. Typical course durations are 2 months for A1 or A2, and 3 months for B1 or B2. Discounts may be available for longer bookings or family and friends.',
                'de' => 'Deutschkurse kosten 600 € pro Monat. Die typische Kursdauer beträgt 2 Monate für A1 oder A2 und 3 Monate für B1 or B2. Rabatte für längere Buchungen oder Familie und Freunde sind möglich.'
                ]
        ],
        'q3'    => [
            'ariacontrols' => 'collapseThree',
            'datatarget' => '#collapseThree',
            'id' => 'headerThree',
            'question' => [
                'en' => 'When can I start a course?',
                'de' => 'Wann kann ich mit einem Kurs beginnen?'
            ],
            'answer' => [
                'en' => 'New courses usually start every month. In many cases, it is also possible to join an ongoing course after a placement check.',
                'de' => 'Neue Kurse beginnen in der Regel jeden Monat. In vielen Fällen ist der Einstieg in einen laufenden Kurs nach einer Einstufungsprüfung ebenfalls möglich.'
                ]
        ],
        'q4'    => [
            'ariacontrols' => 'collapseFour',
            'datatarget' => '#collapseFour',
            'id' => 'headerFour',
            'question' => [
                'en' => 'How do I know which level is right for me?',
                'de' => 'Woher weiß ich, welches Niveau das richtige für mich ist?'
            ],
            'answer' => [
                'en' => 'Before enrolling, we offer a placement test or short personal consultation to make sure you join the correct level and progress efficiently.',
                'de' => 'Vor der Anmeldung bieten wir einen Einstufungstest oder ein kurzes persönliches Beratungsgespräch an, um sicherzustellen, dass Sie auf dem richtigen Niveau einsteigen und effiziente Fortschritte machen.'
                ]
        ],
        'q5'    => [
            'ariacontrols' => 'collapseFive',
            'datatarget' => '#collapseFive',
            'id' => 'headerFive',
            'question' => [
                'en' => 'How big are the classes?',
                'de' => 'Wie groß sind die Klassen?'
            ],
            'answer' => [
                'en' => 'Classes are small, usually 6–10 students per group, allowing teachers to give individual attention and keep lessons interactive.',
                'de' => 'Die Klassen sind klein, in der Regel 6–10 Schüler pro Gruppe. Das ermöglicht es den Lehrkräften, individuell auf jeden einzugehen und den Unterricht interaktiv zu gestalten.'
                ]
        ],
        'q6'    => [
            'ariacontrols' => 'collapseSix',
            'datatarget' => '#collapseSix',
            'id' => 'headerSix',
            'question' => [
                'en' => 'What makes A-Viva different from other language schools?',
                'de' => 'Was unterscheidet A-Viva von anderen Sprachschulen?'
            ],
            'answer' => [
                'en' => 'A-Viva follows the CLASS concept: Culture, Language, Arts, Sports, and Social activities. In addition to lessons, we organize regular events, trips, and community activities so students can practice the language in real-life situations.',
                'de' => 'A-Viva folgt dem CLASS-Konzept: Kultur, Sprache, Kunst, Sport und soziale Aktivitäten (Culture, Language, Arts, Sports, Social activities). Zusätzlich zum Unterricht organisieren wir regelmäßige Events, Ausflüge und Freizeitaktivitäten, damit die Schüler die Sprache in realen Situationen anwenden können.'
                ]
        ],
        'q7'    => [
            'ariacontrols' => 'collapseSeven',
            'datatarget' => '#collapseSeven',
            'id' => 'headerSeven',
            'question' => [
                'en' => 'Are there extra activities or tutoring?',
                'de' => 'Gibt es zusätzliche Aktivitäten oder Nachhilfe?'
            ],
            'answer' => [
                'en' => 'Yes. Students can join free tutoring sessions (usually in the afternoons) and participate in community events, many of which are free or low-cost.',
                'de' => 'Ja. Die Schüler können an kostenlosen Nachhilfestunden teilnehmen (meistens nachmittags) und bei Community-Events mitmachen, von denen viele kostenlos oder sehr günstig sind.'
                ]
        ],
        'q8'    => [
            'ariacontrols' => 'collapseEight',
            'datatarget' => '#collapseEight',
            'id' => 'headerEight',
            'question' => [
                'en' => 'Where is A-Viva located and how can I contact you?',
                'de' => 'Wo befindet sich A-Viva und wie kann ich euch kontaktieren?'
            ],
            'answer' => [
                'en' => 'A-Viva is located in Frankfurt am Main, on the ground floor and easy to access. You can contact us by email, WhatsApp, or visit us directly at the school.',
                'de' => 'A-Viva befindet sich barrierefrei im Erdgeschoss mitten in Frankfurt am Main. Sie können uns per E-Mail, WhatsApp kontaktieren oder direkt in der Schule besuchen.'
                ]
        ]
    ];
}
?>

<section class="faq-section">
    <div class="container">
        <div class="row mb-5">
            <h2 class="text-center w-100">FAQ</h2>
        </div>

        <div class="row">
            <div class="w-100" id="accordion">
                <?php foreach ($faqItems as $key => $item):
                    $questionText = isset($item['question'][$currentLang]) ? $item['question'][$currentLang] : $item['question']['en'];
                    $answerText = isset($item['answer'][$currentLang]) ? $item['answer'][$currentLang] : $item['answer']['en'];
                ?>
                <div class="card shadow faq-item mb-3">
                    <div class="card-header" id=<?= htmlspecialchars($item['id']) ?>>
                    <h5 class="mb-0">
                        <button class="btn btn-link faq-btn text-left d-flex collapsed" data-toggle="collapse" data-target=<?= htmlspecialchars($item['datatarget']) ?> aria-expanded="false" aria-controls=<?= htmlspecialchars($item['ariacontrols']) ?>>
                            <div class="col d-flex align-items-center faq-question"><?= htmlspecialchars($questionText) ?></div>
                            <div class="col-2 text-right"><img class="faq-chevron" src="pics/chevron-down-solid.svg" alt="Down button"></div>
                        </button>
                    </h5>
                    </div>

                    <div id=<?= htmlspecialchars($item['ariacontrols']) ?> class="collapse" aria-labelledby=<?= htmlspecialchars($item['id']) ?> data-parent="#accordion">
                    <div class="card-body">
                        <?= htmlspecialchars($answerText) ?>
                    </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>