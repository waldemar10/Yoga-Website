<?php

namespace App\controllers;

class CourseController {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function show($course) {
        $courses = [
            'gutenmorgenyoga' => ['title' => 'Guten Morgen Yoga', 'view' => 'goodMorningyoga.php'],
            'hathayoga' => ['title' => 'Hatha Yoga', 'view' => 'hathaYoga.php'],
            'vinyasayoga' => ['title' => 'Vinyasa Yoga', 'view' => 'vinyasaYoga.php'],
            'yoganidra' => ['title' => 'Yoga Nidra', 'view' => 'yoganidra.php'],
            'yinyoga' => ['title' => 'Yin Yoga', 'view' => 'yinyangYoga.php'],
            'jivamuktiyoga' => ['title' => 'Jiva Mukti Yoga', 'view' => 'jivamuktiYoga.php'],
            'kundaliniyoga' => ['title' => 'Kundalini Yoga', 'view' => 'kundaliniYoga.php'],
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
