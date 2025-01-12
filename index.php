<?php

require_once 'config.php';
require_once 'libs/autoload.php';

session_start();

use App\Core\Router;

// // Incluir libs
// $libs = glob(ROOT_DIR . '/libs/*.php');
// foreach ($libs as $file) {
//   require_once($file);
// }

// Incluir middlewares
// $middlewares = glob(ROOT_DIR . '/app/middlewares/*.php');
// foreach ($middlewares as $file) {
//   require_once($file);
// }

// Incluir routers
$router  = new Router();
$routers = glob(ROOT_DIR . '/app/routers/*.php');
foreach ($routers as $file) {
  require_once($file);
  // echo "$file <br>";
}
$router->resolve();