<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$currentPage = 'home';

// Catch the URL query string immediately BEFORE defining the array
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = ($_GET['lang'] === 'de') ? 'de' : 'en';
}

$currentLang = $_SESSION['lang'] ?? 'en';

// FIXED: Changed variable name to $langLabels to prevent overwriting $langLabels
if ($currentLang === 'de') {
    $langLabels = [
        'de' => 'Deutsch',
        'fr' => 'Französisch',
        'it' => 'Italienisch',
        'sp' => 'Spanisch',
        'po' => 'Portuguesisch',
        'gr' => 'Griechisch',
        'ch' => 'Chinesisch',
        'ja' => 'Japanisch',
        'en' => 'Englisch',
        'language_text1' => '... sowie weitere Sprachen auf Anfrage.',
    ];
} else {
    $langLabels = [
        'de' => 'German',
        'fr' => 'French',
        'it' => 'Italian',
        'sp' => 'Spanish',
        'po' => 'Portuguese',
        'gr' => 'Greek',
        'ch' => 'Chinese',
        'ja' => 'Japanese',
        'en' => 'English',
        'language_text1' => '... and other languages on request.',
    ];
}
?>



<!-- language box -->
<div class="row shadow p-3">
<div class="row w-100">
    <div class="col text-center">
    <img src="pics/german-lang.png" alt="German">
    <p><?= htmlspecialchars($langLabels['de']) ?></p>
    </div>
    <div class="col text-center">
    <img src="pics/french-lang.png" alt="French">
    <p><?= htmlspecialchars($langLabels['fr']) ?></p>
    </div>
    <div class="col text-center">
    <img src="pics/italian-lang.png" alt="Italian">
    <p><?= htmlspecialchars($langLabels['it']) ?></p>
    </div>
</div>

<div class="row w-100">
    <div class="col text-center">
    <img src="pics/spanish-lang.png" alt="Spanish">
    <p><?= htmlspecialchars($langLabels['sp']) ?></p>
    </div>
    <div class="col text-center">
    <img src="pics/portuguese-lang.png" alt="Portuguese">
    <p><?= htmlspecialchars($langLabels['po']) ?></p>
    </div>
    <div class="col text-center">
    <img src="pics/greek-lang.png" alt="Greek">
    <p><?= htmlspecialchars($langLabels['gr']) ?></p>
    </div>
</div>

<div class="row w-100">
    <div class="col text-center">
    <img src="pics/chinese-lang.png" alt="Chinese">
    <p><?= htmlspecialchars($langLabels['ch']) ?></p>
    </div>
    <div class="col text-center">
    <img src="pics/japanese-lang.png" alt="Japanese">
    <p><?= htmlspecialchars($langLabels['ch']) ?></p>
    </div>
    <div class="col text-center">
    <img src="pics/english-lang.png" alt="English">
    <p><?= htmlspecialchars($langLabels['en']) ?></p>
    </div>
</div>

</div>

<div class="row mt-5"><p class="w-100 text-center"><?= htmlspecialchars($langLabels['language_text1']) ?></p></div>
