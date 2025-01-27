<?php

namespace App\controllers;

class AboutUsController{
    public function index(){
        $title = "Über uns";
        $content = __DIR__ . '/../views/pages/aboutUs.php';
        include_once __DIR__ . '/../views/layouts/main.php';
    }
}