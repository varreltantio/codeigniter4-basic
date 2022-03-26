<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = model(BlogModel::class);
    }

    public function index()
    {
        $data = [
            'title' => 'View All blog',
            'blogs' => $this->blogModel->findAll(),
        ];

        echo view('templates/header', $data);
        echo view('blogs/index', $data);
        echo view('templates/footer');
    }

    public function view($id)
    {
        $data = [
            'title' => 'View Single blog',
            'blog' => $this->blogModel->find($id),
        ];

        echo view('templates/header', $data);
        echo view('blogs/view', $data);
        echo view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Create a new blog',
        ];

        if ($this->request->getMethod() === 'post' && $this->validate([
            'blog_title' => 'required|min_length[3]|max_length[255]',
            'blog_description'  => 'required',
        ])) {
            $this->blogModel->save([
                'blog_title' => $this->request->getPost('blog_title'),
                'blog_description'  => $this->request->getPost('blog_description'),
            ]);

            return redirect()->to('/blog');
        } else {
            echo view('templates/header', $data);
            echo view('blogs/create', $data);
            echo view('templates/footer');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit a blog',
            'blog' => $this->blogModel->find($id),
        ];

        if ($this->request->getMethod() === 'post' && $this->validate([
            'blog_title' => 'required|min_length[3]|max_length[255]',
            'blog_description'  => 'required',
        ])) {
            $this->blogModel->update($id, [
                'blog_title' => $this->request->getPost('blog_title'),
                'blog_description'  => $this->request->getPost('blog_description'),
            ]);

            return redirect()->to('/blog/view/' . $id);
        } else {
            echo view('templates/header', $data);
            echo view('blogs/edit', $data);
            echo view('templates/footer');
        }
    }

    public function delete($id)
    {
        $data = [
            'title' => 'Delete a blog',
            'blog' => $this->blogModel->find($id),
        ];

        if ($this->request->getMethod() === 'post') {
            $this->blogModel->delete($id);

            return redirect()->to('/blog');
        } else {
            echo view('templates/header', $data);
            echo view('blogs/view', $data);
            echo view('templates/footer');
        }
    }
}
