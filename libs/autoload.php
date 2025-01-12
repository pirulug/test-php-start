<?php

spl_autoload_register(function ($class) {
  $baseDir   = __DIR__ . '/../';
  $classPath = $baseDir . str_replace('\\', '/', $class) . '.php';

  if (file_exists($classPath)) {
    require_once $classPath;
  }
});
