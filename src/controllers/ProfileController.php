<?php

namespace App\Controllers;

class ProfileController{
    public function index(){
    $title = "Profil";
    $content = __DIR__ . '/../views/pages/profile.php';
    include_once __DIR__ . '/../views/layouts/main.php';
    }
}