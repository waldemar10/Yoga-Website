<?php

namespace App\controllers;

class CategoryController
{
    public function index()
    {
        $title = "Unsere Kurse";
        $content = __DIR__ . '/../views/pages/category.php';
        include_once __DIR__ . '/../views/layouts/main.php';

    }
}