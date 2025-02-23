<?php

namespace App\controllers;

class CategoryController
{
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function index()
    {
        $allCourses = $this->getAllCourses();
        $title = "Unsere Kurse";
        $content = __DIR__ . '/../views/pages/category.php';
        include_once __DIR__ . '/../views/layouts/main.php';

    }
    public function getAllCourses(){
        $stmt = $this->pdo->prepare("SELECT * FROM courses");
        $stmt->execute();
        $allCourses = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $allCourses;
    }
}