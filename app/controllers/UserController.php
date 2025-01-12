<?php

namespace App\Controllers;

use App\Core\TemplateEngine;
use App\Models\UserModel;
use Libs\MessageHandler;

class UserController {
  private $model;
  private $template;
  private $message;

  public function __construct() {
    $this->model    = new UserModel();
    $this->template = new TemplateEngine();
    $this->message  = new MessageHandler();
  }

  public function list() {
    $users = $this->model->getUsers();
    $this->template->render('admin/user/list', ['users' => $users, "message" => $this->message->displayMessages()]);
  }

  public function add() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name     = $_POST['name'];
      $email    = $_POST['email'];
      $password = $_POST['password'];
      $this->model->createUser($name, $email, $password);
      $this->message->addMessage("Nuevo usuario creado.");
      header('Location: ' . BASE_URL . 'users');
    } else {
      $this->template->render('admin/user/add');
    }
  }

  public function edit($id) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name  = $_POST['name'];
      $email = $_POST['email'];
      $this->model->updateUser($id, $name, $email);
      $this->message->addMessage("Usuario editado.");
      header('Location: ' . BASE_URL . 'users');
    } else {
      $user = $this->model->getUserById($id);
      $this->template->render('admin/user/edit', ['user' => $user]);
    }
  }

  public function delete($id) {
    $this->model->deleteUser($id);
    $this->message->addMessage("Usuarios eliminados.", "danger");
    header('Location: ' . BASE_URL . 'users');
  }
}
