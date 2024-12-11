<?php

namespace App\Controllers;

use App\Models\PerhitunganModel;

class PerhitunganController extends BaseController
{
    // Metode Matriks Keputusan
    public function matriksKeputusan()
    {
        $model = new PerhitunganModel();
        $data['matrix_keputusan'] = $model->getMatriksKeputusan();
        return view('perhitungan/matriks_keputusan', $data);
    }

    // Metode Normalisasi
    public function normalisasi()
    {
        $model = new PerhitunganModel();
        $data['normalisasi'] = $model->getNormalisasi();
        return view('perhitungan/normalisasi', $data);
    }

    // Metode Nilai Optimasi
    public function nilaiOptimasi()
    {
        $model = new PerhitunganModel();

        // Ambil data periode
        $data['periodeList'] = $model->getPeriode();

        // Cek apakah ada periode yang dipilih
        $selectedPeriode = $this->request->getGet('periode') ?? 'P1'; // Default periode P1
        $data['selectedPeriode'] = $selectedPeriode;

        // Ambil data nilai optimasi untuk periode yang dipilih
        $data['optimasi'] = $model->getOptimasiByPeriode($selectedPeriode);

        // Kirim data ke view
        return view('perhitungan/nilai_optimasi', $data);
    }

    // Metode Nilai Preferensi
    public function nilaiPreferensi()
    {
        $model = new PerhitunganModel();

        // Ambil data periode
        $data['periodeList'] = $model->getPeriode();

        // Cek apakah ada periode yang dipilih
        $selectedPeriode = $this->request->getGet('periode') ?? 'P1'; // Default periode P1
        $data['selectedPeriode'] = $selectedPeriode;

        // Ambil data nilai preferensi untuk periode yang dipilih
        $data['nilaiPreferensi'] = $model->getNilaiPreferensi($selectedPeriode);

        // Kirim data ke view
        return view('perhitungan/nilai_preferensi', $data);
    }

    // Metode Ranking
    public function ranking()
    {
        $model = new PerhitunganModel();
        $data['ranking'] = $model->getRanking();
        return view('perhitungan/ranking', $data);
    }
}
