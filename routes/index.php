<?php
// use Asus\BaiTapGit\Controllers\Admin\DashboardController;

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
require_once __DIR__ . './admin.php';
// $router->get('/admin', DashboardController::class . '@dashboard');


require_once __DIR__ . '/client.php';

// Run it!
$router->run();