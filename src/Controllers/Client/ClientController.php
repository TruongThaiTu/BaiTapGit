<?php 

namespace Asus\BaiTapGit\Controllers\Client;

use Asus\BaiTapGit\Commons\Controller;
use Asus\BaiTapGit\Commons\Helper;
use Asus\BaiTapGit\Models\Product;

class ClientController extends Controller
{
    public function master() {
        
        
        $this->renderViewClient('home');
    }

    public function postDetail() {
        $product = $this->product->all();
        // Helper::debug($product);

        $this->renderViewClient('postDetail', [
            'products' => $product
        ]);

    }

    private Product $product;
    public function __construct(){
        $this->product = new Product();
    }
    
}