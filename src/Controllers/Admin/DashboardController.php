<?php

namespace Asus\BaiTapGit\Controllers\Admin;

use Asus\BaiTapGit\Commons\Controller;
use Asus\BaiTapGit\Commons\Helper;
use Asus\BaiTapGit\Models\Category;
use Asus\BaiTapGit\Models\Product;
use Asus\BaiTapGit\Models\User;

class DashboardController extends Controller
{
    private Category $count;
    private Product $product;
    private User $user;

    public function __construct() {
        $this->count = new Category();
        $this->product = new Product();
        $this->user = new User();
    }
    public function dashboard()
    {
        $countCa = $this->count->count();
        $countsp = $this->product->count();
        $countuser = $this->user->count();

        // Helper::debug($_SESSION['user']);
        $this->renderViewAdmin(__FUNCTION__, [
            'countCa' => $countCa,
            'countsp' => $countsp,
            'countuser' => $countuser
            
        ]);

    }

     
}