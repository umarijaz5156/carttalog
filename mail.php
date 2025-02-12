<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'mail.carttalog.com'; // Replace with your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'support@carttalog.com';
    $mail->Password = 'b-h#VlXXk3Q8';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465; // 465 for SSL, 587 for TLS

    // Email content
    $mail->setFrom('support@carttalog.com', 'Your Name');
    $mail->addAddress('rashidrupani@gmail.com');
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email.';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
