<?php

namespace App\Controllers;

use App\Core\TemplateEngine;

class HomeController {

  private $template;

  public function __construct() {
    $this->template = new TemplateEngine();
  }

  public function index() {
    $this->template->render('home/home');
  }

  public function contacto() {
    $this->template->render('home/contacto');
  }

  public function pricing() {
    $this->template->render('home/pricing');
  }
}
