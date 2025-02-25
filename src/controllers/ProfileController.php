<?php

namespace App\Controllers;

use App\models\UserModel;
use App\models\BookingModel;
class ProfileController
{
    private $pdo;
    private $userModel;
    private $bookingModel;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->userModel = new UserModel($pdo);
        $this->bookingModel = new BookingModel($pdo);
    }
    public function index()
    {
        require_once __DIR__ . '/../includes/config_session.inc.php';

        if (!isset($_SESSION['user_id'])) {
            header("Location: /auth?type=login");
            exit;
        }

        $stmt = $this->pdo->prepare("SELECT * FROM courses WHERE id IN (SELECT course_id FROM bookings WHERE user_id = :user_id)");
        $stmt->execute([':user_id' => $_SESSION['user_id']]);
        $bookedCourses = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $stmt = $this->pdo->prepare("SELECT * FROM courses WHERE id NOT IN (SELECT course_id FROM bookings WHERE user_id = :user_id)");
        $stmt->execute([':user_id' => $_SESSION['user_id']]);
        $notBookedCourses = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $userData = $this->userModel->getUserData($_SESSION['user_id']);

        $title = "Profil";
        $content = __DIR__ . '/../views/pages/profile.php';

        include_once __DIR__ . '/../views/layouts/main.php';
    }
    public function subscription()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../includes/config_session.inc.php';
            $userId = $_SESSION['user_id'] ?? null;
            if (!$userId) {
                die("Benutzer nicht eingeloggt.");
            }
            $errors = [];
            $agb = htmlspecialchars($_POST['agbs'] ?? null);
            $subscription = htmlspecialchars($_POST['booking_confirmation'] ?? null);
            if (!$agb) {
                $errors["agb"] = 'Bitte akzeptiere die AGB.';
            }
            if (!$subscription) {
                $errors["booking_confirmation"] = 'Melde dich verbindlich an.';
            }

            if (!empty($errors)) {
                $_SESSION['booking_errors'] = $errors;
                $errors = [];
                $subscription = $agb = '';
                header("Location: /profile?success=false");
                exit();
            }

            $stmt = $this->pdo->prepare("SELECT * FROM courses");
            $stmt->execute();
            $courses = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($courses as $course) {
                $courseName = strtolower(str_replace(' ', '_', $course['name']));

                if (isset($_POST[$courseName])) {
                    $this->bookingModel->setBooking($course['id'], $userId, 'confirmed');
                } else {
                    $this->bookingModel->deleteBooking($course['id'], $userId);
                }
            }
            header("Location: /profile?type=booking&success=true");
            exit();

        }
    }
    public function changePaymentMethod()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            require_once __DIR__ . '/../includes/config_session.inc.php';
            $userId = $_SESSION['user_id'] ?? null;
            if (!$userId) {
                die("Benutzer nicht eingeloggt.");
            }
            $paymentMethod = $_POST['payment'] ?? null;

            if (!$paymentMethod) {
                die("Zahlungsmethode nicht gesetzt.");
            }
            $this->userModel->updatePaymentMethod($userId, $paymentMethod);
            header("Location: /profile?type=payment&success=true");
            exit();
        }
    }
    public function updateProfileData()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../includes/config_session.inc.php';
            $userId = $_SESSION['user_id'] ?? null;
            if (!$userId) {
                die("Benutzer nicht eingeloggt.");
            }
            $gender = htmlspecialchars($_POST['gender'] ?? '');
            $firstName = htmlspecialchars($_POST['first_name'] ?? '');
            $lastName = htmlspecialchars($_POST['last_name'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');
            $passwordRepeat = htmlspecialchars($_POST['password_repeat'] ?? '');
            
            if($password !== $passwordRepeat) {
                $password = $passwordRepeat = '';
            }

            $this->userModel->updateProfileData($userId, $gender, $firstName, $lastName, $email, $password);
            header("Location: /profile?type=profile&success=true");
            exit();

        }
    }
    public function deleteProfile()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../includes/config_session.inc.php';
            $userId = $_SESSION['user_id'] ?? null;
            if (!$userId) {
                die("Benutzer nicht eingeloggt.");
            }
            $this->userModel->deleteUser($userId);
            session_destroy();
            header("Location: /auth?type=login");
            exit();
        }
    }
}