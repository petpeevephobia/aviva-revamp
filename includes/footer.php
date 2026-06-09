<?php
$quickLinks = [
    'home'              => ['label' =>  'Home',  'url'   =>  'index.php'],
    'programs'          => ['label' =>  'Programs',  'url'   =>  'programs.php'],
    'activities'        => ['label' =>  'Activities',  'url'   =>  'activities.php'],
    'registration'      => ['label' =>  'Registration',  'url'   =>  'jobs.php'],
    'contact'           => ['label' =>  'About Us',  'url'   =>  'contact.php']
]
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm mb-4">
                <h4 class="footer-header">A-Viva Sprachschule</h4>
                <p class="footer-text">A dynamic fusion of language institute + culture/sports/social club.</p>
                <a href="https://www.facebook.com/groups/12517655820/" target="_blank"><img src="pics/facebook-footer-icon.svg" alt="Facebook icon"></a>
            </div>

            <div class="col-sm">
                <div class="row">
                    <div class="col-6">
                        <h4 class="footer-header">Quick Links</h4>
                        <?php foreach ($quickLinks as $key => $item): ?>
                        <div class="row footer-link mb-2">
                            <a class="footer-text" href=<?= htmlspecialchars($item['url']) ?>>
                                <?= htmlspecialchars($item['label']) ?>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="col-6">
                        <h4 class="footer-header">Contact Us</h4>

                        <div class="row">
                            <div class="row d-flex">
                                <div class="col-1"><img src="pics/map-footer-icon.svg" alt="Map icon"></div>
                                <div class="col">
                                    <p class="footer-text">Rotlintstraße 43, 60316 Frankfurt am Main</p>
                                </div>
                            </div>
                            <div class="row d-flex">
                                <div class="col-1"><img src="pics/phone-footer-icon.svg" alt="Phone icon"></div>
                                <div class="col">
                                    <p class="footer-text">+49 (0) 69 1234567</p>
                                </div>
                            </div>
                            <div class="row d-flex">
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
        <div class="row">
            <p class="footer-text w-100 text-center mt-3">© 2026  A-Viva Language School. All rights reserved.</p>
        </div>

        <div class="row"></div>
    </div>
</footer>