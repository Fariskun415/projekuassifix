<?php

namespace App\Models;

use CodeIgniter\Model;

class PerhitunganModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // Mengambil data dari view_matriks_keputusan
    public function getMatriksKeputusan()
    {
        $builder = $this->db->table('view_matriks_keputusan');
        return $builder->get()->getResult();
    }

    // Mengambil data dari view_normalisasi
    public function getNormalisasi()
    {
        return $this->db->table('tb_view_normalisasi')
                        ->select('kode_alternatif, kode_kriteria, kode_periode, nilai, normalisasi_nilai, bobot')
                        ->get()
                        ->getResultArray();
    }

    // Mengambil data dari view_nilai_optimasi berdasarkan periode
    public function getOptimasiByPeriode($periode)
    {
        return $this->db->query("
            SELECT
                kode_alternatif,
                MAX(CASE WHEN kode_kriteria = 'C1' THEN normalisasi_nilai * bobot ELSE 0 END) AS optimasi_penjualan,
                MAX(CASE WHEN kode_kriteria = 'C2' THEN normalisasi_nilai * bobot ELSE 0 END) AS optimasi_absensi,
                MAX(CASE WHEN kode_kriteria = 'C3' THEN normalisasi_nilai * bobot ELSE 0 END) AS optimasi_kedisiplinan,
                MAX(CASE WHEN kode_kriteria = 'C4' THEN normalisasi_nilai * bobot ELSE 0 END) AS optimasi_skill,
                MAX(CASE WHEN kode_kriteria = 'C5' THEN normalisasi_nilai * bobot ELSE 0 END) AS optimasi_kerjasama_tim
            FROM
                uassi.tb_view_normalisasi
            WHERE
                kode_periode = ?
            GROUP BY
                kode_alternatif
        ", [$periode])->getResultArray();
    }

    // Mengambil data periode dari tabel tb_periode
    public function getPeriode()
    {
        return $this->db->table('tb_periode')
                        ->select('kode_periode, tanggal')
                        ->get()
                        ->getResultArray();
    }
    
    // Ambil data nilai preferensi berdasarkan periode
    public function getNilaiPreferensi($periode)
    {
        return $this->db->query("SELECT 
                                    tb_view_normalisasi.kode_alternatif AS kode_alternatif,
                                    tb_view_normalisasi.kode_periode AS periode,
                                    SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C1' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) +
                                    SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C2' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) +
                                    SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C3' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) +
                                    SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C4' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) +
                                    SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C5' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) AS total_nilai,
                                    RANK() OVER (PARTITION BY tb_view_normalisasi.kode_periode ORDER BY 
                                        SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C1' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) +
                                        SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C2' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) +
                                        SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C3' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) +
                                        SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C4' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) +
                                        SUM(CASE WHEN tb_view_normalisasi.kode_kriteria = 'C5' THEN tb_view_normalisasi.normalisasi_nilai * tb_view_normalisasi.bobot ELSE 0 END) DESC
                                    ) AS rangking
                                  FROM uassi.tb_view_normalisasi
                                  WHERE tb_view_normalisasi.kode_periode = ?
                                  GROUP BY tb_view_normalisasi.kode_alternatif, tb_view_normalisasi.kode_periode", [$periode])->getResultArray();
    }

}
