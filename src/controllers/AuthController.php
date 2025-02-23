<?php

namespace App\controllers;

use App\models\UserModel;

require_once __DIR__ . '/../includes/config_session.inc.php';

class AuthController
{
    private $pdo;
    private $userModel;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->userModel = new UserModel($pdo);
    }
    public function index()
    {
        $type = $_GET['type'] ?? 'login';
        $title = $type === 'register' ? 'Registrierung' : 'Login';

        $content = __DIR__ . '/../views/pages/auth.php';
        include_once __DIR__ . '/../views/layouts/main.php';
    }
    public function login()
    {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = htmlspecialchars($_POST['email'] ?? null);
            $password = htmlspecialchars($_POST['password'] ?? null);
            $errors = [];

            if (!$email || !$password) {
                require_once __DIR__ . '/../includes/config_session.inc.php';
                $errors["empty"] = 'Bitte fülle alle Felder aus.';
                $_SESSION['login_errors'] = $errors;
                $password = $email = '';
                $errors = [];
                header("Location: /auth?type=login&success=false");
                exit();
            }

            $user = $this->userModel->authenticate($email, $password);

            if ($user) {
                require_once __DIR__ . '/../includes/config_session.inc.php';
                $_SESSION['user_id'] = $user['id'];
                header("Location: /profile");
                exit();
            } else {
                require_once __DIR__ . '/../includes/config_session.inc.php';
                $errors["wrong"] = "E-Mail oder Passwort falsch.";
                $_SESSION['login_errors'] = $errors;
                $errors = [];
                header("Location: /auth?type=login&success=false");
                exit();
            }
        }
    }



    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $gender = htmlspecialchars($_POST['gender'] ?? '');
            $firstName = htmlspecialchars($_POST['first_name'] ?? '');
            $lastName = htmlspecialchars($_POST['last_name'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');
            $passwordRepeat = htmlspecialchars($_POST['password_repeat'] ?? '');
            $paymentMethod = htmlspecialchars($_POST['payment_method'] ?? '');
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
                $gender = $firstName = $lastName = $email = $passwordRepeat = $password = $passwordRepeat = $paymentMethod = '';
                $errors = [];

                header("Location: /auth?type=register");
                exit();
            }

            if (
                $this->userModel->createUser(
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
