<?php

namespace App\Middlewares;

class AuthMiddleware {
  public static function isLogged() {
    if (!isset($_SESSION["user_id"])) {
      // header('Location: /n');
      // exit();
    }else{
      header('Location: /');
      exit();
    }
  }
}
