<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../helpers.php';

use app\controllers\HomeController;
use app\controllers\JsonPlaceholderController;
use app\controllers\LoginController;
use app\controllers\RegisterController;
use app\controllers\RestController;
use app\db\Database;
use app\Router;
use app\Request;

session_start();



$database = new Database();
$router = new Router(new Request(), $database);

$router->get('/', 'home');

$router->get('/about', 'about');

$router->get('/contact', 'contact');

$router->get('/event', 'event');

$router->get('/register', 'register');

$router->get('/login', 'login');

$router->post('/login', [LoginController::class, 'login']);

$router->post('/register', [RegisterController::class, 'register']);

$router->post('/contact', [HomeController::class, 'contact']);

$router->resolve();