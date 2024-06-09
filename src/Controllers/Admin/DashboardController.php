<?php

namespace Asus\BaiTapGit\Controllers\Admin;

use Asus\BaiTapGit\Commons\Controller;
use Asus\BaiTapGit\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Helper::debug($_SESSION['user']);
        $this->renderViewAdmin(__FUNCTION__);
    }
}