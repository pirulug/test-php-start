<?php

namespace App\Core;

class TemplateEngine {
  private $blocks = [];
  private $blockStack = [];
  private $layout;
  private $viewContent;
  private $data = [];

  public function layout($layoutPath, $data = []) {
    $this->layout = $layoutPath;
    $this->data   = array_merge($this->data, $data);
  }

  public function startBlock($blockName) {
    $this->blockStack[] = $blockName;
    ob_start();
  }

  public function endBlock() {
    $blockName                = array_pop($this->blockStack);
    $this->blocks[$blockName] = ob_get_clean();
  }

  public function render($viewPath, $data = []) {
    global $template;
    $template = $this;

    $this->data = array_merge($this->data, $data);
    extract($this->data);

    ob_start();
    require "app/views/" . $viewPath . ".view.php";
    $this->viewContent = ob_get_clean();

    if ($this->layout) {
      extract($this->data);
      require "app/views/" . $this->layout . ".view.php";
    } else {
      echo $this->viewContent;
    }
  }

  public function block($blockName) {
    echo isset($this->blocks[$blockName]) ? $this->blocks[$blockName] : '';
  }
}
