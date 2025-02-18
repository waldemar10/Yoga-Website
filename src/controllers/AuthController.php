<?php

namespace App\controllers;

class AuthController{
    public function index()
    {
        $type = $_GET['type'] ?? 'login';
        $title = $type === 'register' ? 'Registrierung' : 'Login';
      
        $content =__DIR__ . '/../views/pages/auth.php';
        include_once __DIR__ . '/../views/layouts/main.php';
    }

}