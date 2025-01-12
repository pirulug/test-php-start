<?php

namespace App\Models;

use App\Config\Database;
use \PDO;
use \PDOException;

class UserModel {
  private $conn;

  public function __construct() {
    $database   = new Database();
    $this->conn = $database->getConnection();
  }

  public function getUsers() {
    $query = 'SELECT * FROM users';
    $stmt  = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getUserById($id) {
    $query = 'SELECT * FROM users WHERE id = :id';
    $stmt  = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function createUser($name, $email, $password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
    $stmt  = $this->conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword );
    return $stmt->execute();
  }

  public function updateUser($id, $name, $email) {
    $query = 'UPDATE users SET name = :name, email = :email WHERE id = :id';
    $stmt  = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    return $stmt->execute();
  }

  public function deleteUser($id) {
    $query = 'DELETE FROM users WHERE id = :id';
    $stmt  = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
  }

  public function getUserByUser($name) {
    $query = 'SELECT * FROM users WHERE name = :name';
    $stmt  = $this->conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
  }
}
