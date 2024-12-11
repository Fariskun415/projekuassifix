<?php

namespace App\Controllers;

use App\Models\AlternatifModel;

class AlternatifController extends BaseController
{
    protected $alternatifModel;

    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
    }

    public function index()
    {
        $data['alternatifs'] = $this->alternatifModel->findAll();
        return view('alternatif/view_alternatif', $data);
    }

    public function add()
    {
        return view('alternatif/add_alternatif');
    }

    public function create()
    {
        $this->alternatifModel->insert([
            'kode_alternatif' => $this->request->getPost('kode_alternatif'),
            'nama_alternatif' => $this->request->getPost('nama_alternatif'),
            'no_hp' => $this->request->getPost('no_hp')
        ]);
        
        return redirect()->to('/alternatif');
    }

    public function edit($kode_alternatif)
    {
        $data['alternatif'] = $this->alternatifModel->find($kode_alternatif);
        return view('alternatif/edit_alternatif', $data);
    }

    public function update($kode_alternatif)
    {
        $this->alternatifModel->update($kode_alternatif, [
            'nama_alternatif' => $this->request->getPost('nama_alternatif'),
            'no_hp' => $this->request->getPost('no_hp')
        ]);
        
        return redirect()->to('/alternatif');
    }

    public function delete($kode_alternatif)
    {
        $this->alternatifModel->delete($kode_alternatif);
        return redirect()->to('/alternatif');
    }
}
