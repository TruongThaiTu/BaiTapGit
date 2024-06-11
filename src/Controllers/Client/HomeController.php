<?php 

namespace Asus\BaiTapGit\Controllers\Client;

use Asus\BaiTapGit\Commons\Controller;

use Asus\BaiTapGit\Commons\Helper;
use Asus\BaiTapGit\Models\Product;

class HomeController extends Controller
{
    private Product $product;
    public function __construct(){
        $this->product = new Product();
    }
    public function index() {
        // $name = 'TUTTPH45304';
        $product = $this->product->one();
        // Helper::debug($product);

        $this->renderViewClient('home', [
            'products' => $product
        ]);
    }

}