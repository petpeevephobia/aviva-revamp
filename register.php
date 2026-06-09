<?php
$pageTitle   = 'A-Viva Sprachschule - Register';
$currentPage = 'reigster';
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
            <h1 class="w-100">Admissions</h2>
            <p class="w-100">Starting your journey at A-Viva is easy. Follow these steps to express interest and secure your spot:</p>
            <ol class="w-100">
                <li>Write an email to us via "Apply now" below – Introduce yourself and express interest for your desired program.</li>
                <li>Provide required documents – for German students: ID or passport. For international students: passport, visa (if required), and proof of prior language knowledge if applicable.</li>
                <li>Placement test – complete a written and oral placement test to ensure you join the right level.</li>
                <li>Confirmation – once accepted, you will receive a course confirmation and invoice.</li>
            </ol>

          </div>
      </section>



      <!-- accommodation offered -->
      <section class="accommodation-section grey-bg">
        <div class="container">

          <!-- first row -->
          <div class="row mb-5 text-left">
            <h2 class="w-100">Accommodation Options</h2>
            <p class="w-100">We help students feel at home, whatever their budget or preference. All options are within easy reach of A-Viva or well-connected by public transport.</p>
          </div>

          <div class="row h-100">

            <div class="col mb-2">
              <div class="card">
                <div class="card-body">
                  <h3>Student Apartment</h3>
                  <div class="card-text">
                    <p>Modern, fully furnished apartments in Frankfurt, perfect for independence.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h3>Host Family</h3>
                  <div class="card-text">
                    <p>Live with a local family and immerse yourself in German culture and everyday language.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h3>Youth Hostel</h3>
                  <div class="card-text">
                    <p>Budget-friendly options for short-term stays or students who prefer a social environment.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row d-flex justify-content-center mt-4">
            <button class="btn btn-primary">Enquire about housing</button>
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
              'question'       => 'How do I know which program to choose?',
              'answer'         => 'Complete our placement test and consultation. Our team will match you to the program that fits your level and goals.',
          ],
          'q2' => [
              'ariacontrols' => 'collapseTwo',
              'datatarget'     => '#collapseTwo',
              'id'             => 'headerTwo',
              'question'       => 'Are the programs year-round?',
              'answer'         => 'Yes. Summer, winter, spring break, and holiday courses are all available.',
          ],
          'q3' => [
              'ariacontrols' => 'collapsThreee',
              'datatarget'     => '#collapseThree',
              'id'             => 'headerThree',
              'question'       => 'Can I work while studying?',
              'answer'         => 'Evening programs are designed for students who work or study during the day. Intensive programs require more focus and time.',
          ],
          'q4' => [
              'ariacontrols' => 'collapseFour',
              'datatarget'     => '#collapseFour',
              'id'             => 'headerFour',
              'question'       => 'How do I apply for a visa to study at A-Viva?',
              'answer'         => 'International students applying for visa-qualified intensive programs (A or D) will receive an invoice after payment is made and they are accepted into A-Viva. They can use the invoice as part of their visa application.',
          ],
          'q5' => [
              'ariacontrols' => 'collapseFive',
              'datatarget'     => '#collapseFive',
              'id'             => 'headerFive',
              'question'       => 'What if I need help finding housing?',
              'answer'         => 'Our admissions team provides guidance and contacts for apartments, host families, and youth hostels.',
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
              'question'       => 'Do you provide health insurance guidance?',
              'answer'         => 'Yes, we advise international students on local insurance options and requirements.',
          ],
          'q8' => [
              'ariacontrols' => 'collapseEight',
              'datatarget'     => '#collapseEight',
              'id'             => 'headerEight',
              'question'       => 'How early should I apply?',
              'answer'         => 'We recommend at least 2 months before your desired start date, especially for visa applications and housing arrangements.',
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