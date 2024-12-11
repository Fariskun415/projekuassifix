<?php

namespace App\Controllers;

use App\Models\SubkriteriaModel;
use App\Models\KriteriaModel;

class SubkriteriaController extends BaseController
{
    protected $subkriteriaModel;
    protected $kriteriaModel;

    public function __construct()
    {
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index()
    {
        $data['subkriterias'] = $this->subkriteriaModel->findAll();
        return view('subkriteria/view_subkriteria', $data);
    }

    public function add()
    {
        $data['kriterias'] = $this->kriteriaModel->findAll(); // Ambil data kriteria untuk dropdown
        return view('subkriteria/add_subkriteria', $data);
    }

    public function create()
    {
        $this->subkriteriaModel->save($this->request->getPost());
        return redirect()->to('/subkriteria');
    }

    public function edit($id)
    {
        $data['subkriteria'] = $this->subkriteriaModel->find($id);
        $data['kriterias'] = $this->kriteriaModel->findAll(); // Ambil data kriteria untuk dropdown
        return view('subkriteria/edit_subkriteria', $data);
    }

    public function update($id)
    {
        $this->subkriteriaModel->update($id, $this->request->getPost());
        return redirect()->to('/subkriteria');
    }

    public function delete($id)
    {
        $this->subkriteriaModel->delete($id);
        return redirect()->to('/subkriteria');
    }
}
