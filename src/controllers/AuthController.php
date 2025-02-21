<?php

namespace App\controllers;

use App\models\UserModel;

require_once __DIR__ . '/../includes/config_session.inc.php';

class AuthController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function index()
    {
        $type = $_GET['type'] ?? 'login';
        $title = $type === 'register' ? 'Registrierung' : 'Login';

        $content = __DIR__ . '/../views/pages/auth.php';
        include_once __DIR__ . '/../views/layouts/main.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $gender = $_POST['gender'] ?? '';
            $firstName = $_POST['first_name'] ?? '';
            $lastName = $_POST['last_name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $passwordRepeat = $_POST['password_repeat'] ?? '';
            $paymentMethod = $_POST['payment_method'] ?? '';
            $termsAccepted = isset($_POST['terms']) ? true : false;
            $role = 'user';

            $errors = [];

            if (!$termsAccepted) {
                $errors['agb'] = 'Bitte akzeptiere die AGBs.';
            }
    
            if (empty($gender)) {
                $errors['gender'] = 'Bitte wähle ein Geschlecht aus.';
            }
            if (empty($firstName)) {
                $errors['firstname'] = 'Bitte gib deinen Vornamen an.';
            }
            if (empty($lastName)) {
                $errors['lastname'] = 'Bitte gib deinen Nachnamen an.';
            }
            if (empty($email)) {
                $errors['email'] = 'Bitte gib eine E-Mail-Adresse an.';
            }
            if (empty($password)) {
                $errors['passworde'] = 'Bitte gib ein Passwort an.';
            }
            if (empty($passwordRepeat)) {
                $errors['password_repeat'] = 'Bitte wiederhole das Passwort.';
            }
            if (empty($paymentMethod)) {
                $errors['payment_method'] = 'Bitte wähle eine Zahlungsmethode aus.';
            }
    
            if ($password !== $passwordRepeat) {
                $errors['password_wrong_repeat'] = 'Passwörter stimmen nicht überein.';
            }
            if (!empty($errors)) {
                require_once __DIR__ . '/../includes/config_session.inc.php';
                $_SESSION['register_errors'] = $errors;
                $gender = $firstName = $lastName = $email = $passwordRepeat = $password = $passwordRepeat= $paymentMethod = '';
                $errors = [];
       
                header("Location: /auth?type=register");
                exit();
            }
    
            $userModel = new UserModel($this->pdo);

            if (
                $userModel->createUser(
                    $gender,
                    $firstName,
                    $lastName,
                    $email,
                    $password,
                    $role,
                    $paymentMethod
                )
            ) {
                header("Location: /auth?type=login&success=true");
                exit();
            } else {
                die("Registrierung fehlgeschlagen.");
            }
        }
    }
}
