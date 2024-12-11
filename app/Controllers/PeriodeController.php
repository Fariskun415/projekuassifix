<?php

namespace App\Controllers;

use App\Models\PeriodeModel;

class PeriodeController extends BaseController
{
    protected $periodeModel;
    protected $validation;

    public function __construct()
    {
        $this->periodeModel = new PeriodeModel();
        $this->validation = \Config\Services::validation(); // Inisialisasi validasi
    }

    // Fungsi Index
    public function index()
    {
        $data['periodes'] = $this->periodeModel->paginate(10);  // Ambil data dengan pagination
        $data['pager'] = $this->periodeModel->pager;

        return view('periode/view_periode', $data);
    }

    // Tampilkan Form Tambah
    public function add()
    {
        return view('periode/add_periode');
    }

    // Simpan Data Baru
    public function create()
    {
        // Validasi data input
        if (!$this->validate([
            'kode_periode' => [
                'rules' => 'required|is_unique[tb_periode.kode_periode]',
                'errors' => [
                    'required' => 'Kode periode wajib diisi.',
                    'is_unique' => 'Kode periode sudah digunakan.',
                ],
            ],
            'tanggal' => [
                'rules' => 'required|valid_date[Y-m-d]',
                'errors' => [
                    'required' => 'Tanggal wajib diisi.',
                    'valid_date' => 'Format tanggal harus YYYY-MM-DD.',
                ],
            ],
        ])) {
            // Jika validasi gagal, kembali ke form tambah dengan input yang tetap ada
            return redirect()->to('/periode/add')->withInput()->with('error', 'Validasi gagal.');
        }

        // Jika validasi berhasil, simpan data
        $this->periodeModel->save([
            'kode_periode' => $this->request->getPost('kode_periode'),
            'tanggal' => $this->request->getPost('tanggal'),
        ]);

        return redirect()->to('/periode')->with('success', 'Data berhasil ditambahkan.');
    }

    // Tampilkan Form Edit
    public function edit($kode_periode)
    {
        $periode = $this->periodeModel->where('kode_periode', $kode_periode)->first();

        if (!$periode) {
            return redirect()->to('/periode')->with('error', 'Data tidak ditemukan.');
        }

        // Formatkan tanggal ke format 'YYYY/MM/DD'
        $periode['tanggal'] = date('Y/m/d', strtotime($periode['tanggal']));

        $data['periode'] = $periode;
        return view('periode/edit_periode', $data);
    }

    // Update Data Periode
    public function update($kode_periode)
    {
        $existingPeriode = $this->periodeModel->where('kode_periode', $kode_periode)->first();

        if (!$existingPeriode) {
            return redirect()->to('/periode')->with('error', 'Data tidak ditemukan.');
        }

        

        // Update data periode
        $updateStatus = $this->periodeModel->update($kode_periode, [
            'kode_periode' => $this->request->getPost('kode_periode'),
            'tanggal' => $this->request->getPost('tanggal'),
        ]);

        if ($updateStatus) {
            return redirect()->to('/periode')->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->to('/periode')->with('error', 'Gagal memperbarui data.');
        }
    }

    // Hapus Data
    public function delete($kode_periode)
    {
        $this->periodeModel->where('kode_periode', $kode_periode)->delete();
        return redirect()->to('/periode')->with('success', 'Data berhasil dihapus.');
    }
}
