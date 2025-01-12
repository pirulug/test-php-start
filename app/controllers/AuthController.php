<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Core\TemplateEngine;

class AuthController {
  private $model;
  private $template;

  public function __construct() {
    $this->model    = new UserModel();
    $this->template = new TemplateEngine();
  }

  public function login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Validar las credenciales del usuario
      $user     = $_POST['user'];
      $password = $_POST['password'];

      $user = $this->model->getUserByUser($user);

      if ($user) {
        // Guardar información del usuario en la sesión
        $_SESSION['user_id']   = $user->id;
        $_SESSION['user_name'] = $user->name;
        $_SESSION['user_role'] = 1;
        header('Location: ' . BASE_URL . 'users');
      } else {
        echo "Credenciales inválidas.";
      }
    } else {
      $this->template->render('auth/login');
    }
  }
}