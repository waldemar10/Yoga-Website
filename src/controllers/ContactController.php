<?php

namespace App\controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../includes/config_session.inc.php';
include_once __DIR__ . "/../views/components/form_errors_view.inc.php";


class ContactController
{
    public function __construct($pdo)
    {

    }
    public function index()
    {
        $title = "Kontakt";
        $content = __DIR__ . '/../views/pages/contact.php';
        include __DIR__ . '/../views/layouts/main.php';
    }
    public function handleForm()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars(trim($_POST['name'] ?? ''));
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            $message = htmlspecialchars(trim($_POST['message'] ?? ''));

            $errors = [];

            if (empty($name))
                $errors['name'] = "Name ist erforderlich.";
            if (empty($email))
                $errors['email'] = "E-Mail ist erforderlich.";
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
                $errors['email'] = "Ungültige E-Mail.";
            if (empty($message))
                $errors['message'] = "Nachricht ist erforderlich.";

            if (empty($errors)) {
                require_once __DIR__ . '/../../vendor/autoload.php';

                $mail = new PHPMailer(true);

                try {
                    // Server-Einstellungen
                    $mail->isSMTP();
                    $mail->Host = $_ENV['SMTP_HOST'];
                    $mail->SMTPAuth = true;
                    $mail->Username = $_ENV['SMTP_USER'];
                    $mail->Password = $_ENV['SMTP_PASS'];
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = $_ENV['SMTP_PORT'];

                    // Absender und Empfänger
                    $mail->setFrom($email, $name);
                    $mail->addAddress('waljuscontact@gmail.com', 'Admin');

                    // Inhalt der E-Mail
                    $mail->isHTML(true);
                    $mail->Subject = 'Neue Kontaktanfrage';
                    $mail->Body = "<p><strong>Name:</strong> $name</p>
                                      <p><strong>E-Mail:</strong> $email</p>
                                      <p><strong>Nachricht:</strong></p>
                                      <p>$message</p>";
                    $mail->AltBody = "Name: $name\nE-Mail: $email\nNachricht:\n$message";

                    $mail->send();

                    header("Location: /contact?success=true");
                    exit();
                } catch (Exception $e) {
                    $errors['general'] = "E-Mail konnte nicht gesendet werden. Fehler: {$mail->ErrorInfo}";
                }
            }

            require_once __DIR__ . '/../includes/config_session.inc.php';
            $_SESSION['form_errors'] = $errors;
            $name = $email = $message = "";
            $errors = [];
            header("Location: /contact");
            exit();
        }
    }
}