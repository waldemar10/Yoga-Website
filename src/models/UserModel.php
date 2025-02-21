<?php

namespace App\models;

use PDO;
use PDOException;

class UserModel
{
    private $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function authenticate($email, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
    }


    public function createUser($gender, $firstName, $lastName, $email, $password, $role, $paymentMethod)
    {
        try {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->db->prepare("INSERT INTO users (gender, first_name, last_name, email, password,role,payment_method) 
            VALUES (:gender, :first_name, :last_name, :email, :password, :role, :payment_method)");

            $stmt->execute([
                ':gender' => $gender,
                ':first_name' => $firstName,
                ':last_name' => $lastName,
                ':email' => $email,
                ':password' => $hashedPassword,
                ':role' => $role,
                ':payment_method' => $paymentMethod
            ]);

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}