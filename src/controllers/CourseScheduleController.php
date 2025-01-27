<?php 

namespace App\controllers;

Class CourseScheduleController{
    public function index(){
        $title = "Unser Kursplan";
        $content = __DIR__ . "/../views/pages/courseSchedule.php";
        include_once __DIR__ . "/../views/layouts/main.php";
    }
}

