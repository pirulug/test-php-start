<?php

namespace App\Core;

class Router {
  private $routes = [];
  private $middlewares = [];

  public function get($uri, $controllerAction) {
    $this->routes['GET'][$uri] = $controllerAction;
    $this->middlewares[$uri]   = [];
    return $this;
  }

  public function post($uri, $controllerAction) {
    $this->routes['POST'][$uri] = $controllerAction;
    $this->middlewares[$uri]    = [];
    return $this;
  }

  public function middleware($middleware) {
    $currentUri                       = key(array_slice($this->middlewares, -1, 1, true));
    $this->middlewares[$currentUri][] = $middleware;
    return $this;
  }

  public function resolve() {
    $uri    = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "";
    $method = $_SERVER['REQUEST_METHOD'];

    if (array_key_exists($method, $this->routes)) {
      foreach ($this->routes[$method] as $route => $controllerAction) {
        $routePattern = preg_replace('/{(\w+)}/', '(\d+)', $route);
        if (preg_match("#^$routePattern$#", $uri, $matches)) {
          array_shift($matches);
          list($controller, $action) = explode('@', $controllerAction);
          $this->handleMiddleware($this->middlewares[$route]);
          $this->loadController($controller, $action, $matches);
          return;
        }
      }
    }

    echo "Ruta no encontrada.";

  }

  private function handleMiddleware($middlewares) {
    foreach ($middlewares as $middleware) {
        list($class, $method) = explode('::', $middleware);
        // Asegúrate de que estás usando el namespace correcto
        if (class_exists("App\\Middlewares\\$class") && method_exists("App\\Middlewares\\$class", $method)) {
            $middlewareInstance = "App\\Middlewares\\$class";
            $middlewareInstance::$method(); // Llama al método estático
        } else {
            echo "Middleware {$middleware} no encontrado.";
        }
    }
}


  private function loadController($controller, $action, $params = []) {
    // Agregar el namespace correspondiente para los controladores
    $controllerClass = "App\\Controllers\\{$controller}"; // Aquí agregamos el namespace

    // Construir la ruta del archivo del controlador
    $controllerFile = 'app/controllers/' . $controller . '.php';

    if (file_exists($controllerFile)) {
      require_once $controllerFile;

      if (class_exists($controllerClass)) { // Usar $controllerClass aquí
        $controllerInstance = new $controllerClass(); // Instanciar con el namespace

        if (method_exists($controllerInstance, $action)) {
          call_user_func_array([$controllerInstance, $action], $params);
        } else {
          echo "Método {$action} no encontrado en el controlador {$controllerClass}.";
        }
      } else {
        echo "Clase {$controllerClass} no encontrada."; // Mostrar el namespace completo en el error
      }
    } else {
      echo "Controlador {$controller} no encontrado.";
    }
  }
}
