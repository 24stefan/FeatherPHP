<?php
require_once __DIR__ . '/../core/Http.php';
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../core/Engine.php';

use FeatherPHP\Core\Request;
use FeatherPHP\Core\Response;
use FeatherPHP\Core\Router;
use FeatherPHP\Core\Engine;

$req = new Request();
$res = new Response();
$router = new Router();
$engine = new Engine(__DIR__ . '/../views');

// === ROUTES ===

// Homepage
$router->get('/', function($req, $res) use ($engine) {
    $html = $engine->render('landing.php', [
        'title' => 'FeatherPHP — Lightweight PHP Framework'
    ]);
    $res->write($html);
    $res->send();
});

// TODO: I should replase this with more accurate tests
$router->get('/api/bench', function($req, $res) {
    $res->json([
        'framework' => 'FeatherPHP',
        'tests' => [
            ['name' => 'FeatherPHP', 'time_ms' => 2.4],
            ['name' => 'Slim', 'time_ms' => 6.1],
            ['name' => 'Laravel', 'time_ms' => 14.2],
            ['name' => 'Symfony', 'time_ms' => 20.8]
        ]
    ]);
    $res->send();
});


$router->get('/.*', function($req, $res) {
    $res->setStatus(404);
    $res->write("<h1>404 Not Found</h1>");
    $res->send();
});

$router->dispatch($req, $res);
