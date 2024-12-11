<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class KriteriaController extends BaseController
{
    protected $kriteriaModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index()
    {
        $data['kriterias'] = $this->kriteriaModel->findAll();
        return view('kriteria/view_kriteria', $data);
    }

    public function add()
    {
        return view('kriteria/add_kriteria');
    }

    public function create()
    {
        $this->kriteriaModel->insert([
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'bobot' => $this->request->getPost('bobot'),
            'atribut' => $this->request->getPost('atribut')
        ]);

        return redirect()->to('/kriteria');
    }

    public function edit($kode_kriteria)
    {
        $data['kriteria'] = $this->kriteriaModel->find($kode_kriteria);
        return view('kriteria/edit_kriteria', $data);
    }

    public function update($kode_kriteria)
    {
        $this->kriteriaModel->update($kode_kriteria, [
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'bobot' => $this->request->getPost('bobot'),
            'atribut' => $this->request->getPost('atribut')
        ]);

        return redirect()->to('/kriteria');
    }

    public function delete($kode_kriteria)
    {
        $this->kriteriaModel->delete($kode_kriteria);
        return redirect()->to('/kriteria');
    }
}
