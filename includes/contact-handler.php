<?php

require_once __DIR__ . '/contact-mail.php';

// #region agent log
$__agentLogPath = dirname(__DIR__) . '/debug-d2a114.log';
$__agentLog = static function (string $location, string $message, array $data, string $hypothesisId, string $runId = 'smtp-fix') use ($__agentLogPath): void {
    file_put_contents($__agentLogPath, json_encode([
        'sessionId' => 'd2a114',
        'runId' => $runId,
        'hypothesisId' => $hypothesisId,
        'location' => $location,
        'message' => $message,
        'data' => $data,
        'timestamp' => (int) round(microtime(true) * 1000),
    ], JSON_UNESCAPED_SLASHES) . "\n", FILE_APPEND | LOCK_EX);
};
// #endregion

$contactTo = 'info@a-viva.net';
$contactRequiresWebServer = PHP_SAPI === 'cli';
$formSubmitted = false;
$formSuccess = false;
$formError = '';
$contactName = '';
$contactEmail = '';
$contactPhone = '';
$contactMessage = '';

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? '';
if ($requestMethod !== 'POST') {
    return;
}

$formSubmitted = true;
$contactName = trim($_POST['name'] ?? '');
$contactEmail = trim($_POST['email'] ?? '');
$contactPhone = trim($_POST['phone'] ?? '');
$contactMessage = trim($_POST['message'] ?? '');

if ($contactName === '' || $contactEmail === '' || $contactMessage === '') {
    $formError = 'Please fill in name, email, and message.';
    return;
}

if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
    $formError = 'Please enter a valid email address.';
    return;
}

$subject = 'Contact enquiry from ' . $contactName;
$body = "Name: {$contactName}\r\n"
    . "Email: {$contactEmail}\r\n"
    . "Phone: {$contactPhone}\r\n\r\n"
    . "Message:\r\n{$contactMessage}\r\n";

// #region agent log
$__hasSmtpConfig = is_file(__DIR__ . '/contact-config.local.php');
$__agentLog('contact-handler.php:pre-send', 'send attempt', [
    'hasSmtpConfig' => $__hasSmtpConfig,
    'iniSMTP' => ini_get('SMTP'),
    'iniSmtpPort' => ini_get('smtp_port'),
    'osFamily' => PHP_OS_FAMILY,
], 'H1');
// #endregion

$sendResult = contact_send_enquiry($contactTo, $subject, $body, $contactEmail, $contactName);

// #region agent log
$__agentLog('contact-handler.php:post-send', 'send result', [
    'ok' => $sendResult['ok'],
    'method' => $sendResult['method'],
    'errorSnippet' => $sendResult['error'] ? substr($sendResult['error'], 0, 120) : null,
], 'H2');
// #endregion

if ($sendResult['ok']) {
    $formSuccess = true;
    $contactName = '';
    $contactEmail = '';
    $contactPhone = '';
    $contactMessage = '';
} else {
    $storageDir = dirname(__DIR__) . '/storage';
    if (!is_dir($storageDir)) {
        mkdir($storageDir, 0755, true);
    }
    $fallbackLine = json_encode([
        'receivedAt' => date('c'),
        'name' => $contactName,
        'email' => $contactEmail,
        'phone' => $contactPhone,
        'message' => $contactMessage,
        'sendError' => $sendResult['error'],
    ], JSON_UNESCAPED_UNICODE) . "\n";
    $fallbackSaved = (bool) file_put_contents($storageDir . '/contact-enquiries.log', $fallbackLine, FILE_APPEND | LOCK_EX);

    if (!$__hasSmtpConfig) {
        $formError = 'Email is not configured on this server. Copy includes/contact-config.example.php to includes/contact-config.local.php and add your SMTP settings (see file comments), then try again.';
    } elseif ($fallbackSaved) {
        $formError = 'Email could not be sent. Your enquiry was saved in storage/contact-enquiries.log. Please check SMTP settings in includes/contact-config.local.php.';
    } else {
        $formError = 'We could not send your message. Please try again later or email us directly at info@a-viva.net.';
    }
}
