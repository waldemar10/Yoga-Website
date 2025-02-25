<?php

namespace App\models;

use PDO;
use PDOException;

class BookingModel
{
    private $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function setBooking($courseId, $userId, $status)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM bookings WHERE course_id = :course_id AND user_id = :user_id");
            $stmt->execute([':course_id' => $courseId, ':user_id' => $userId]);
            $existingBooking = $stmt->fetchColumn();
            if($existingBooking>0){
                return "Bereits gebucht";
            }
            $stmt = $this->db->prepare("INSERT INTO bookings (course_id, user_id, status) VALUES (:course_id, :user_id, :status)");
            $stmt->execute([':course_id' => $courseId, ':user_id' => $userId, ':status' => $status]);
        } catch (PDOException $e) {
            error_log("Datenbankfehler: " . $e->getMessage());
            return null;
        }
    }
    public function deleteBooking($courseId, $userId)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM bookings WHERE course_id = :course_id AND user_id = :user_id");
            $stmt->execute([':course_id' => $courseId, ':user_id' => $userId]);
        } catch (PDOException $e) {
            error_log("Datenbankfehler: " . $e->getMessage());
            return null;
        }
    }
}