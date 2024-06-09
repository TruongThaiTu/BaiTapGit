<?php

use Asus\BaiTapGit\Controllers\Admin\DashboardController;
use Asus\BaiTapGit\Controllers\Admin\ProductController;
use Asus\BaiTapGit\Controllers\Admin\UserController;
use Asus\BaiTapGit\Controllers\Admin\categoryController;

$router->before('GET|POST', '/admin/*.*', function(){

    if (!is_logged()) {
        header('Location: ' . url('login') );
        exit;
    }

    if (!is_admin()) {
        header('Location: ' . url('') );
        exit;
    }
});


$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD products
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');  // Danh sách
        $router->get('/create',         ProductController::class . '@create'); // Show form thêm mới
        $router->post('/store',         ProductController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      ProductController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      ProductController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   ProductController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    ProductController::class . '@delete'); // Xóa
    });

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');
        $router->get('/create',         UserController::class . '@create');
        $router->post('/store',         UserController::class . '@store');
        $router->get('/{id}/show',      UserController::class . '@show');
        $router->get('/{id}/edit',      UserController::class . '@edit');
        $router->post('/{id}/update',   UserController::class . '@update');
        $router->get('/{id}/delete',    UserController::class . '@delete');
    });

    // CRUD CATEGORY
    $router->mount('/categoryes', function () use ($router) {
        $router->get('/',               categoryController::class . '@index');
        $router->get('/create',         categoryController::class . '@create');
        $router->post('/store',         categoryController::class . '@store');
        $router->get('/{id}/show',      categoryController::class . '@show');
        $router->get('/{id}/edit',      categoryController::class . '@edit');
        $router->post('/{id}/update',   categoryController::class . '@update');
        $router->get('/{id}/delete',    categoryController::class . '@delete');
    });
    
});