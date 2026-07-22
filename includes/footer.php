<?php

if ($currentLang === 'de') {
    $footerTxt = [
        'footer_title' => 'A-Viva Sprachschule',
        'footer_text' => 'Eine dynamische Kombination aus Sprachschule und Kultur-, Sport- und Gesellschaftsverein.',
        'quick_links' => 'Schnellzugriff',
        'contact_us' => 'Kontakt',
        'copyright' => 'Alle Rechte vorbehalten.',
    ];
    $quickLinks = [
        'home'              => ['label' =>  'Startseite',  'url'   =>  'index.php'],
        'programs'          => ['label' =>  'Programme',  'url'   =>  'programs.php'],
        // 'activities'        => ['label' =>  'Aktivitäten',  'url'   =>  'activities.php'],
        'registration'      => ['label' =>  'Anmeldung',  'url'   =>  'register.php'],
        'contact'           => ['label' =>  'Kontakt',  'url'   =>  'contact.php'],
        'impressum'           => ['label' =>  'Impressum',  'url'   =>  'impressum.php'],
        'datenschutz'           => ['label' =>  'Datenschutz',  'url'   =>  'datenschutz.php'],
    ]; 
} else {
    $footerTxt = [
        'footer_title' => 'A-Viva Sprachschule',
        'footer_text' => 'A dynamic fusion of language institute + culture/sports/social club.',
        'quick_links' => 'Quick Links',
        'contact_us' => 'Contact Us',
        'copyright' => 'All rights reserved.',
    ];
    $quickLinks = [
        'home'              => ['label' =>  'Home',  'url'   =>  'index.php'],
        'programs'          => ['label' =>  'Programs',  'url'   =>  'programs.php'],
        // 'activities'        => ['label' =>  'Activities',  'url'   =>  'activities.php'],
        'registration'      => ['label' =>  'Registration',  'url'   =>  'register.php'],
        'contact'           => ['label' =>  'Contact',  'url'   =>  'contact.php'],
        'impressum'           => ['label' =>  'Impressum',  'url'   =>  'impressum.php'],
        'datenschutz'           => ['label' =>  'Datenschutz',  'url'   =>  'datenschutz.php'],
    ];
}
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm mb-4">
                <h4 class="footer-header"><?= htmlspecialchars($footerTxt['footer_title']) ?></h4>
                <p class="footer-text"><?= htmlspecialchars($footerTxt['footer_text']) ?></p>
                <a href="https://www.facebook.com/groups/12517655820/" target="_blank"><img src="pics/facebook-footer-icon.svg" alt="Facebook icon"></a>
            </div>

            <div class="col-sm">
                <div class="row">
                    <div class="col-6">
                        <h4 class="footer-header"><?= htmlspecialchars($footerTxt['quick_links']) ?></h4>
                        <?php foreach ($quickLinks as $key => $item): ?>
                        <div class="row footer-link mb-2">
                            <a class="footer-text" href=<?= htmlspecialchars($item['url']) ?>>
                                <?= htmlspecialchars($item['label']) ?>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="col-6">
                        <h4 class="footer-header"><?= htmlspecialchars($footerTxt['contact_us']) ?></h4>

                        <div class="row">
                            <div class="row footer-contact-row d-flex">
                                <div class="col-1"><img src="pics/map-footer-icon.svg" alt="Map icon"></div>
                                <div class="col">
                                    <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x47bd0ec0937516e5:0xaeb13682de003fd7?sa=X&ved=1t:8290&ictx=111" target="_blank">
                                        <p class="footer-text">Rotlintstraße 43, 60316 Frankfurt am Main</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row footer-contact-row d-flex">
                                <div class="col-1"><img src="pics/phone-footer-icon.svg" alt="Phone icon"></div>
                                <div class="col">
                                    <a href="tel:496994340963">
                                        <p class="footer-text">+49 69 943 409 63</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row footer-contact-row d-flex">
                                <div class="col-1"><img src="pics/mail-footer-icon.svg" alt="E-mail icon"></div>
                                <div class="col">
                                    <a href="mailto:info@aviva-language.de">
                                        <p class="footer-text">info@aviva-language.de</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-copyright">
            <p class="footer-text w-100 text-center mt-3">© 2026 A-Viva Sprachschule. <?= htmlspecialchars($footerTxt['copyright']) ?></p>
        </div>

        <div class="row"></div>
    </div>
</footer>