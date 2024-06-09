<?php

namespace Asus\BaiTapGit\Controllers\Client;

use Asus\BaiTapGit\Commons\Controller;
use Asus\BaiTapGit\Commons\Helper;
use Asus\BaiTapGit\Models\User;

class LoginController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }
    public function showFormLogin()
    {

        auth_check();
        avoid_login();

        $this->renderViewClient('login');
    }

    public function login()
    {
        auth_check();
        avoid_login();
        // $user = 12345678;
        // $email = 'tuttph45304@fpt.edu.vn';
        // $flag = password_verify($email, $user);
        // Helper::debug($flag);


        try {
            $user = $this->user->findByEmail($_POST['email']);

            if (empty($user)) {
                throw new \Exception('Không tồn tại email: ' . $_POST['email']);
            }

            $flag = password_verify($_POST['password'], $user['password']);
            if ($flag) {

                $_SESSION['user'] = $user;

                header('Location: ' . url('admin/'));
                exit;
            }

            throw new \Exception('pass không đúng');
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();

            header('Location: ' . url('login/'));
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);

        header('Location: ' . url('/'));
        exit;
    }
}