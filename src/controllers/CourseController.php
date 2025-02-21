<?php

namespace App\controllers;

class CourseController {
    public function __construct($pdo) {
        
    }
    public function show($course) {
        $courses = [
            'goodMorningYoga' => ['title' => 'Guten Morgen Yoga', 'view' => 'goodMorningYoga.php'],
            'hathaYoga' => ['title' => 'Hatha Yoga', 'view' => 'hathaYoga.php'],
            'vinyasaYoga' => ['title' => 'Vinyasa Yoga', 'view' => 'vinyasaYoga.php'],
            'yoganidra' => ['title' => 'Yoga Nidra', 'view' => 'yoganidra.php'],
            'yinyangYoga' => ['title' => 'Yin Yoga', 'view' => 'yinyangYoga.php'],
            'jivamuktiYoga' => ['title' => 'Jiva Mukti Yoga', 'view' => 'jivamuktiYoga.php'],
            'kundaliniYoga' => ['title' => 'Kundalini Yoga', 'view' => 'kundaliniYoga.php'],
        ];

        if (array_key_exists($course, $courses)) {
            $title = $courses[$course]['title'];
            $content = __DIR__ . '/../views/pages/' . $courses[$course]['view'];
            include_once __DIR__ . '/../views/layouts/main.php';
        } else {
            echo $course;
            echo "Seite nicht gefunden!";
        }
    }

}
