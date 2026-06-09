<?php

/**
 * Copy this file to contact-config.local.php and fill in your SMTP details.
 * For Gmail: use an App Password (Google Account → Security → App passwords).
 */
return [
    'to' => 'info@a-viva.net',
    'from_email' => 'info@a-viva.net',
    'from_name' => 'A-Viva Website',
    'smtp' => [
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'encryption' => 'tls',
        'username' => 'your-email@gmail.com',
        'password' => 'your-app-password',
    ],
];
