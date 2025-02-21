<?php

require __DIR__ .  DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
/* require __DIR__ . '/../vendor/autoload.php'; */
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

$smtpHost = $_ENV['SMTP_HOST'];
$smtpPort = $_ENV['SMTP_PORT'];
$smtpUser = $_ENV['SMTP_USER'];
$smtpPass = $_ENV['SMTP_PASS'];

require_once __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'dbh.inc.php';

$requestUri = $_SERVER['REQUEST_URI'];

$urlPath = parse_url($requestUri, PHP_URL_PATH);

$routes = [
    '/' => ['controller' => 'HomeController', 'action' => 'index'],
    '/aboutUs' => ['controller' => 'AboutUsController', 'action' => 'index'],
    '/contact' => ['controller' => 'ContactController', 'action' => 'index'],
    '/contact/submit' => ['controller' => 'ContactController', 'action' => 'handleForm'],
    '/category' => ['controller' => 'CategoryController', 'action' => 'index'],
    '/course/{course}' => ['controller' => 'CourseController', 'action' => 'show'],
    '/courseSchedule' => ['controller' => 'CourseScheduleController', 'action' => 'index'],
    '/registration' => ['controller' => 'RegistrationController', 'action' => 'index'],
    '/login' => ['controller' => 'AuthController', 'action' => 'login'],
    '/auth' => ['controller' => 'AuthController', 'action' => 'index'],
    '/register' => ['controller' => 'AuthController', 'action' => 'register'],
    '/profile' => ['controller' => 'ProfileController', 'action' => 'index'],
];

function matchRoute($urlPath, $routes)
{
    foreach ($routes as $route => $handler) {
        $pattern = preg_replace('/\{[a-zA-Z]+\}/', '([^/]+)', $route);
        $pattern = '@^' . $pattern . '$@';

        if (preg_match($pattern, $urlPath, $matches)) {
            array_shift($matches);
            return ['handler' => $handler, 'params' => $matches];
        }
    }
    return null;
}

$matchedRoute = matchRoute($urlPath, $routes);

if ($matchedRoute) {
    $handler = $matchedRoute['handler'];
    $params = $matchedRoute['params'];

    dispatch($handler['controller'], $handler['action'], $params);
} else {
    echo $urlPath;
    http_response_code(404);
    echo "404 - Seite nicht gefunden.";
}

function dispatch($controllerName, $actionName, $params = [])
{
    $controllerClass = 'App\\controllers\\' . $controllerName;

    if (class_exists($controllerClass)) {
        global $pdo;
        $controller = new $controllerClass($pdo);
        if (method_exists($controller, $actionName)) {
            call_user_func_array([$controller, $actionName], $params); // Parameter übergeben
        } else {
            http_response_code(404);
            die("Aktion '$actionName' nicht gefunden.");
        }
    } else {
        http_response_code(404);
        die("Controller '$controllerName' nicht gefunden.");
    }
}
