<?php
if (!isset($faqItems)) {
    $faqItems = [
        'q1'    => ['ariacontrols' => 'collapseOne',     'datatarget' => '#collapseOne',     'id' => 'headerOne',    'question' => 'What is A-Viva Sprachschule?',   'answer' => 'A-Viva is an international language school in Frankfurt offering German and foreign language courses combined with cultural, social, and community activities. We focus on small classes, real communication, and helping students feel at home in Germany.'],
        'q2'    => ['ariacontrols' => 'collapseTwo',     'datatarget' => '#collapseTwo',     'id' => 'headerTwo',    'question' => 'How much does a German course cost?',   'answer' => 'German courses cost 600 € per month. Typical course durations are 2 months for A1 or A2, and 3 months for B1 or B2. Discounts may be available for longer bookings or family and friends.'],
        'q3'    => ['ariacontrols' => 'collapseThree',     'datatarget' => '#collapseThree',     'id' => 'headerThree',    'question' => 'When can I start a course?',   'answer' => 'New courses usually start every month. In many cases, it is also possible to join an ongoing course after a placement check.'],
        'q4'    => ['ariacontrols' => 'collapseFour',     'datatarget' => '#collapseFour',     'id' => 'headerFour',    'question' => 'How do I know which level is right for me?',   'answer' => 'Before enrolling, we offer a placement test or short personal consultation to make sure you join the correct level and progress efficiently.'],
        'q5'    => ['ariacontrols' => 'collapseFive',     'datatarget' => '#collapseFive',     'id' => 'headerFive',    'question' => 'How big are the classes?',   'answer' => 'Classes are small, usually 6–10 students per group, allowing teachers to give individual attention and keep lessons interactive.'],
        'q6'    => ['ariacontrols' => 'collapseSix',     'datatarget' => '#collapseSix',     'id' => 'headerSix',    'question' => 'What makes A-Viva different from other language schools?',   'answer' => 'A-Viva follows the CLASS concept: Culture, Language, Arts, Sports, and Social activities. In addition to lessons, we organize regular events, trips, and community activities so students can practice the language in real-life situations.'],
        'q7'    => ['ariacontrols' => 'collapseSeven',     'datatarget' => '#collapseSeven',     'id' => 'headerSeven',    'question' => 'Are there extra activities or tutoring?',   'answer' => 'Yes. Students can join free tutoring sessions (usually in the afternoons) and participate in community events, many of which are free or low-cost.'],
        'q8'    => ['ariacontrols' => 'collapseEight',     'datatarget' => '#collapseEight',     'id' => 'headerEight',    'question' => 'Where is A-Viva located and how can I contact you?',   'answer' => 'A-Viva is located in Frankfurt am Main, on the ground floor and easy to access. You can contact us by email, WhatsApp, or visit us directly at the school.']
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
                <?php foreach ($faqItems as $key => $item): ?>
                <div class="card shadow faq-item mb-3">
                    <div class="card-header" id=<?= htmlspecialchars($item['id']) ?>>
                    <h5 class="mb-0">
                        <button class="btn btn-link faq-btn text-left d-flex collapsed" data-toggle="collapse" data-target=<?= htmlspecialchars($item['datatarget']) ?> aria-expanded="false" aria-controls=<?= htmlspecialchars($item['ariacontrols']) ?>>
                            <div class="col d-flex align-items-center faq-question"><?= htmlspecialchars($item['question']) ?></div>
                            <div class="col-2 text-right"><img class="faq-chevron" src="pics/chevron-down-solid.svg" alt="Down button"></div>
                        </button>
                    </h5>
                    </div>

                    <div id=<?= htmlspecialchars($item['ariacontrols']) ?> class="collapse" aria-labelledby=<?= htmlspecialchars($item['id']) ?> data-parent="#accordion">
                    <div class="card-body">
                        <?= htmlspecialchars($item['answer']) ?>
                    </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>