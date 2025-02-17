<?php

namespace App\controllers;

class RegistrationController{
    public function index()
    {
        $title = "Registrierung";
        $content = __DIR__ . '/../views/pages/registration.php';
        include_once __DIR__ . '/../views/layouts/main.php';

    }
}