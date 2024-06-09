<?php

use Asus\BaiTapGit\Controllers\Admin\DashboardController;
use Asus\BaiTapGit\Controllers\Client\ClientController;
use Asus\BaiTapGit\Controllers\Client\HomeController;
use Asus\BaiTapGit\Controllers\Client\LoginController;



$router->get( '/', HomeController::class . '@index');
$router->get( '/client', ClientController::class . '@master');
$router->get( '/post-detail', ClientController::class . '@postDetail');


$router->get( '/login', LoginController::class . '@showFormLogin');
$router->post( '/handle-login', LoginController::class . '@login');
$router->get( '/logout', LoginController::class . '@logout');

