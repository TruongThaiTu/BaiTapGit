<?php 

namespace Asus\BaiTapGit\Controllers\Client;

use Asus\BaiTapGit\Commons\Controller;
use Asus\BaiTapGit\Commons\Helper;

class ClientController extends Controller
{
    public function master() {
        
        
        $this->renderViewClient('home');
    }

    public function postDetail() {

        $this->renderViewClient('postDetail');
    }
}