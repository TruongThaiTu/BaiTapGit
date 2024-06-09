<?php 

const PATH_ROOT = __DIR__ . '/';

if (!function_exists('assets')) {
    function asset($path) {
        return $_ENV['BASE_URL'] . $path;
    }
}

if (!function_exists('url')) {
    function url($uri = null) {
        return $_ENV['BASE_URL'] . $uri;
    }
}

if (!function_exists('auth_check')) {
    function auth_check() {
        if (isset($_SESSION['user'])) {
            header('Location: '. url('admin/') );
            exit;
        }
    }
}

if (!function_exists('is_logged')) {
    // kt đã đăng nhập
    function is_logged() {
        return isset($_SESSION['user']);
    }
}

if (!function_exists('is_admin')) { //check là admin
    function is_admin() {
        return is_logged() && $_SESSION['user']['type'] == 'admin';
    }
}

if (!function_exists('avoid_login')) { //bỏ qua trang login khi đã login
    function avoid_login() {
        if (is_logged()) {
            if ($_SESSION['user']['type'] == 'admin') {
                header('Location: '. url('admin/') );
                exit;
            }

            header('Location: '. url('') );
            exit;
        }
    }
}