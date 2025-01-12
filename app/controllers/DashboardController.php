<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Core\TemplateEngine;

class DashboardController {

  private $model;
  private $template;

  public function __construct() {
    $this->model = new UserModel();
    $this->template = new TemplateEngine();
  }

  public function index() {
    $users = $this->model->getUsers();
    $this->template->render('admin/dashboard', ['users' => $users]);
  }
}
