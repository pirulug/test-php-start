<?php

namespace App\Middlewares;

class UserMiddleware {
  public static function isAdmin() {
    if (!isset($_SESSION["user_role"])) {
      header('Location: /');
      exit();
    }
  }

  public static function isLogged() {
    if (!isset($_SESSION["user_id"])) {
      header('Location: /');
      exit();
    }
  }
}
