<?php

namespace App\controllers;

class LoginController{
    public function __construct($pdo) {
        
    }
    public function index(){
        $title = "Login";
        $content = __DIR__ . '/../views/pages/login.php';
        include_once __DIR__ . '/../views/layouts/main.php';
    }
}