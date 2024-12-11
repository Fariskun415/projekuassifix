<?php

namespace App\Controllers;

use App\Models\MatriksKeputusanModel;
use App\Models\AlternatifModel;
use App\Models\PeriodeModel;
use App\Models\KriteriaModel;

class MatriksKeputusanController extends BaseController
{
    protected $matriksKeputusanModel;
    protected $alternatifModel;
    protected $periodeModel;
    protected $kriteriaModel;

    public function __construct()
    {
        // Inisialisasi model yang digunakan
        $this->matriksKeputusanModel = new MatriksKeputusanModel();
        $this->alternatifModel = new AlternatifModel();
        $this->periodeModel = new PeriodeModel();
        $this->kriteriaModel = new KriteriaModel();
    }

    // Menampilkan daftar matriks keputusan
    public function index()
{
    // Ambil semua data matriks keputusan
    $data['matriksKeputusan'] = $this->matriksKeputusanModel->findAll();

    // Mengarahkan ke view matrikskeputusan/view_matrikskeputusan
    return view('matrikskeputusan/view_matrikskeputusan', $data);
}


    // Menampilkan form tambah matriks keputusan
    public function create()
    {
        $data['alternatif'] = $this->alternatifModel->findAll();
        $data['periode'] = $this->periodeModel->findAll();
        $data['kriteria'] = $this->kriteriaModel->findAll();

        // Mengarahkan ke view matrikskeputusan/add_matrikskeputusan
        return view('matrikskeputusan/add_matrikskeputusan', $data);
    }

    // Menyimpan data matriks keputusan baru
    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_alternatif' => 'required|max_length[16]',
            'kode_kriteria' => 'required|max_length[16]',
            'kode_periode' => 'required|max_length[16]',
            'nilai' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/matrikskeputusan/create')->withInput()->with('validation', $validation);
        }

        // Simpan data
        $this->matriksKeputusanModel->save([
            'kode_alternatif' => $this->request->getPost('kode_alternatif'),
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'kode_periode' => $this->request->getPost('kode_periode'),
            'nilai' => $this->request->getPost('nilai'),
        ]);

        return redirect()->to('/matrikskeputusan')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit matriks keputusan
    public function edit($kode_matriks)
{
    // Ambil data matriks keputusan berdasarkan kode_matriks
    $matrikskeputusan = $this->matriksKeputusanModel->find($kode_matriks);

    if (!$matrikskeputusan) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Matriks Keputusan tidak ditemukan.");
    }

    // Ambil data alternatif, kriteria, dan periode untuk dropdown
    $data['alternatif'] = $this->alternatifModel->findAll();
    $data['kriteria'] = $this->kriteriaModel->findAll();
    $data['periode'] = $this->periodeModel->findAll();

    // Mengirimkan data matrikskeputusan ke view
    $data['matrikskeputusan'] = $matrikskeputusan;

    return view('matrikskeputusan/edit_matrikskeputusan', $data);
}



    // Mengupdate data matriks keputusan
    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_alternatif' => 'required|max_length[16]',
            'kode_kriteria' => 'required|max_length[16]',
            'kode_periode' => 'required|max_length[16]',
            'nilai' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to("/matrikskeputusan/edit/$id")->withInput()->with('validation', $validation);
        }

        // Update data
        $this->matriksKeputusanModel->update($id, [
            'kode_alternatif' => $this->request->getPost('kode_alternatif'),
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'kode_periode' => $this->request->getPost('kode_periode'),
            'nilai' => $this->request->getPost('nilai'),
        ]);

        return redirect()->to('/matrikskeputusan')->with('success', 'Data berhasil diupdate.');
    }

    // Menghapus data matriks keputusan
    public function delete($id)
    {
        // Pastikan data ada sebelum menghapus
        if ($this->matriksKeputusanModel->find($id)) {
            $this->matriksKeputusanModel->delete($id);
            return redirect()->to('/matrikskeputusan')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->to('/matrikskeputusan')->with('error', 'Data tidak ditemukan.');
        }
    }
}
