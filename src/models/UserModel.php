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

    public function getUserData($id)
{
    if (!is_numeric($id)) {
        return null;
    }

    try {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    } catch (PDOException $e) {
        error_log("Datenbankfehler: " . $e->getMessage());
        return null;
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
    public function updatePaymentMethod($userId, $paymentMethod)
    {
        try {
            $stmt = $this->db->prepare("UPDATE users SET payment_method = :payment_method WHERE id = :id");
            $stmt->execute([':payment_method' => $paymentMethod, ':id' => $userId]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function updateProfileData($userId, $gender = null, $firstName = null, $lastName = null, $email = null, $password = null)
{
    try {

        $fields = [];
        $params = [':user_id' => $userId];

        if (!empty($gender)) {
            $fields[] = 'gender = :gender';
            $params[':gender'] = $gender;
        }
        if (!empty($firstName)) {
            $fields[] = 'first_name = :first_name';
            $params[':first_name'] = $firstName;
        }
        if (!empty($lastName)) {
            $fields[] = 'last_name = :last_name';
            $params[':last_name'] = $lastName;
        }
        if (!empty($email)) {
            $fields[] = 'email = :email';
            $params[':email'] = $email;
        }
        if (!empty($password)) {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $fields[] = 'password = :password';
            $params[':password'] = $hashedPassword;
        }

        if (empty($fields)) {
            return false; 
        }

        $sql = "UPDATE users SET " . implode(', ', $fields) . " WHERE id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);

        return $stmt->rowCount() > 0;

    } catch (PDOException $e) {
        error_log("Fehler beim Aktualisieren des Profils: " . $e->getMessage());
        return false;
    }
}

}