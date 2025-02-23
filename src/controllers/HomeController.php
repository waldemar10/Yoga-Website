<?php

namespace App\controllers;

class HomeController
{
    public function __construct($pdo) {
        
    }
    public function index()
    {
        $title = "Willkommen bei PureBalance Yoga";

        $teachers = [
            [
                'name' => 'Anna',
                'image' => '/public/images/teachers/Anna.jpg',
            ],
            [
                'name' => 'Laura',
                'image' => '/public/images/teachers/Laura.jpg',
            ],
            [
                'name' => 'Katrin',
                'image' => '/public/images/teachers/Katrin.jpg',
            ],
        ];

        $content = __DIR__ . '/../views/pages/home.php';
        include_once __DIR__ . '/../views/layouts/main.php';
    }
}
