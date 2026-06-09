<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/**
 * @return array{ok: bool, method: string, error: string|null}
 */
function contact_send_enquiry(string $to, string $subject, string $body, string $replyToEmail, string $replyToName): array
{
    $configPath = __DIR__ . '/contact-config.local.php';
    $config = is_file($configPath) ? require $configPath : [];

    $fromEmail = $config['from_email'] ?? 'info@a-viva.net';
    $fromName = $config['from_name'] ?? 'A-Viva Website';
    $to = $config['to'] ?? $to;

    if (!empty($config['smtp']['host']) && !empty($config['smtp']['username'])) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = $config['smtp']['host'];
            $mail->Port = (int) ($config['smtp']['port'] ?? 587);
            $mail->SMTPAuth = true;
            $mail->Username = $config['smtp']['username'];
            $mail->Password = $config['smtp']['password'] ?? '';
            $encryption = strtolower($config['smtp']['encryption'] ?? 'tls');
            if ($encryption === 'ssl') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } elseif ($encryption === 'tls') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            }
            $mail->CharSet = PHPMailer::CHARSET_UTF8;
            $mail->setFrom($fromEmail, $fromName);
            $mail->addAddress($to);
            $mail->addReplyTo($replyToEmail, $replyToName);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->send();

            return ['ok' => true, 'method' => 'smtp', 'error' => null];
        } catch (Exception $e) {
            return ['ok' => false, 'method' => 'smtp', 'error' => $mail->ErrorInfo ?: $e->getMessage()];
        }
    }

    $headers = implode("\r\n", [
        'From: ' . $fromName . ' <' . $fromEmail . '>',
        'Reply-To: ' . $replyToEmail,
        'Content-Type: text/plain; charset=UTF-8',
    ]);
    $mailParams = (PHP_OS_FAMILY === 'Windows') ? '' : '-f' . $fromEmail;
    $sent = @mail($to, $subject, $body, $headers, $mailParams);

    if ($sent) {
        return ['ok' => true, 'method' => 'mail', 'error' => null];
    }

    $iniError = error_get_last();
    $error = $iniError['message'] ?? 'mail() failed';

    return ['ok' => false, 'method' => 'mail', 'error' => $error];
}
