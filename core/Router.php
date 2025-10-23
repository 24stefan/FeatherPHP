<?php
namespace FeatherPHP\Core;

class Router {
    private array $routes = [];

    public function get(string $path, callable $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function post(string $path, callable $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    public function dispatch($req = null, $res = null) {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim($uri, '/');
        if ($uri === '') $uri = '/';

        if (isset($this->routes[$method][$uri])) {
            $callback = $this->routes[$method][$uri];
            echo call_user_func($callback, $req, $res);
        } else {
            http_response_code(404);
            echo "<h1>404 Not Found</h1><p>No route for <code>$uri</code></p>";
        }
    }
}
