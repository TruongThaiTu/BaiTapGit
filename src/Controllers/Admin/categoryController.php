<?php

namespace Asus\BaiTapGit\Controllers\Admin;

use Asus\BaiTapGit\Commons\Controller;
use Asus\BaiTapGit\Commons\Helper;
use Asus\BaiTapGit\Models\category;
use Rakit\Validation\Validator;


class categoryController extends Controller
{
    private category $category;


    public function __construct()
    {
        $this->category = new category();
    }
    public function index()
    {
        $category = $this->category->all();

        $this->renderViewAdmin('category.index', [
            'category' => $category
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('category.create');
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/category/create'));
            exit;
        } else {
            $data = [
                'name'     => $_POST['name'],
            ];

            $this->category->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/categoryes'));
            exit;
        }
    }

    public function show($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('category.show', [
            'category' => $category
        ]);
    }

    public function edit($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('category.edit', [
            'categoryes' => $category
        ]);
    }

    public function update($id)
    {
        $category = $this->category->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/categoryes/{$category['id']}/edit"));
            exit;
        } else {
            $data = [
                'name'     => $_POST['name'],
                
            ];

            

            $this->category->update($id, $data);

            

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url("admin/categoryes/{$category['id']}/edit"));
            exit;
        }
    }

    public function delete($id)
    {
        $category = $this->category->findByID($id);

        $this->category->delete($id);

        header('Location: ' . url('admin/categoryes'));
        exit();
    }

    
}