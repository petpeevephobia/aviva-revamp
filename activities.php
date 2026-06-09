<?php
$pageTitle   = 'A-Viva Sprachschule - Activities';
$currentPage = 'activities';
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
      <section class="activities-section">
        <div class="container">
          <div class="row mb-5 text-left">
            <h1 class="w-100">Activities At A-Viva</h2>
            <p class="w-100">Our activities are carefully designed for students to build a connection with their surroundings and practise their language. They are either free or at minimal cost. We are non-profit oriented, and travel planning is a free service to our students! Our dedicated travel planners are experienced travelers familiar with the cities and the languages and able to find the best local deals.</p>
            <p class="w-100">Day trips take place at the end of the week. i.e.: a popular destination is Heidelberg, a romantic university town whose beauty has inspired many painters and writers over the centuries.</p>
            <p class="w-100">Week-end trips take place at the end of the month and last from 2 to 4 days. For example: Berlin - a cultural and historical mecca of Germany, or Munich - the marvelous host city of Oktoberfest. Other destinations include Hamburg, Dresden, Leipzig, Amsterdam, Paris, Prague, and Vienna.</p>
          </div>
      </section>



      <section class="activities-list">
        <div class="row">
            <div class="col mr-sm-5">
                <h2 class="w-100 mb-4">Current Events</h2>
                <?php require __DIR__ . '/includes/activities-list.php'; ?>
            </div>
            <!-- events newsletter -->
            <div class="col-sm-4">
                <div class="row sticky-top sticky-padding">
                    <h2 class="w-100">Stay Up-to-Date</h2>
                    <p class="w-100">Subscribe to remain updated with latest events at A-Viva.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="name@email.com" aria-label="Recipient's email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">Subscribe</button>
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
            'q1' => [
                'ariacontrols' => 'collapseOne',
                'datatarget'     => '#collapseOne',
                'id'             => 'headerOne',
                'question'       => 'What kind of student activities does A-Viva offer?',
                'answer'         => 'We organize weekly fun activities like city tours, museum visits, cooking nights, movie evenings, and seasonal BBQs. These help students practice German naturally and meet new friends.',
            ],
            'q2' => [
                'ariacontrols' => 'collapseTwo',
                'datatarget'     => '#collapseTwo',
                'id'             => 'headerTwo',
                'question'       => 'Are trips and excursions included in my course?',
                'answer'         => 'Many activities, including day trips to Heidelberg, Strasbourg, or local hikes, are offered regularly. Most are included in your course fee or require a small contribution for transport/entry.',
            ],
            'q3' => [
                'ariacontrols' => 'collapsThreee',
                'datatarget'     => '#collapseThree',
                'id'             => 'headerThree',
                'question'       => 'What kinds of activities and trips are included?',
                'answer'         => 'A-Viva offers weekly cultural and social activities such as city tours, museum visits, conversation meetups, cooking evenings, and day trips around Hessen. These activities help students practice German in real life and build community outside the classroom.',
            ],
            'q4' => [
                'ariacontrols' => 'collapseFour',
                'datatarget'     => '#collapseFour',
                'id'             => 'headerFour',
                'question'       => 'How often are activities held?',
                'answer'         => 'On average, there is one major activity or trip per week, plus smaller events like coffee chats, movie nights, or cooking workshops. Some special events occur monthly or seasonally.',
            ],
            'q5' => [
                'ariacontrols' => 'collapseFive',
                'datatarget'     => '#collapseFive',
                'id'             => 'headerFive',
                'question'       => 'Can I join activities even if I’m not in the intensive course?',
                'answer'         => 'Yes! All students can join activities, regardless of course type, including evening or part-time learners. Activities are designed for all language levels.',
            ],
            'q6' => [
                'ariacontrols' => 'collapseSix',
                'datatarget'     => '#collapseSix',
                'id'             => 'headerSix',
                'question'       => 'Are the activities free?',
                'answer'         => 'Many activities are free, such as conversation cafés, city walks, or campus meetups. Others, like museum trips or special excursions, may have a small cost to cover tickets or transport.',
            ],
            'q7' => [
                'ariacontrols' => 'collapseSeven',
                'datatarget'     => '#collapseSeven',
                'id'             => 'headerSeven',
                'question'       => 'Do I need to sign up in advance for activities?',
                'answer'         => 'Yes, for larger trips and workshops, we ask students to register so we can organize transport, materials, and guides. Smaller events like coffee chats or movie nights are first-come, first-served.',
            ],
            'q8' => [
                'ariacontrols' => 'collapseEight',
                'datatarget'     => '#collapseEight',
                'id'             => 'headerEight',
                'question'       => 'Are the activities suitable for beginners?',
                'answer'         => 'Absolutely. Activities are designed so everyone can participate, even if your German is just starting. Guides and teachers are there to help and explain throughout.',
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