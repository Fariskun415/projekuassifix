<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['users'] = $this->userModel->findAll();
        return view('user/view_user', $data);
    }

    public function add()
    {
        return view('user/add_user');
    }

    public function create()
    {
        $this->userModel->save($this->request->getPost());
        return redirect()->to('/user');
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('user/edit_user', $data);
    }

    public function update($id)
    {
        $this->userModel->update($id, $this->request->getPost());
        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/user');
    }
}
