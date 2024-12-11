<?php

namespace App\Models;

use CodeIgniter\Model;

class MatriksKeputusanModel extends Model
{
    protected $table = 'tb_matriks_keputusan'; // Nama tabel
    protected $primaryKey = 'kode_matriks';   // Primary key tabel

    protected $allowedFields = [
        'kode_alternatif', 'kode_kriteria', 'kode_periode', 
        'nilai'
    ];

    // Mengaktifkan fitur auto-timestamps
    protected $useTimestamps = true;
    protected $createdField = 'created_at';   // Field untuk waktu pembuatan
    protected $updatedField = 'updated_at';   // Field untuk waktu pembaruan

    // Tambahkan validasi default
    protected $validationRules = [
        'kode_alternatif' => 'required|max_length[16]',
        'kode_kriteria' => 'required|max_length[16]',
        'kode_periode' => 'required|max_length[16]',
        'nilai' => 'required|numeric',
    ];

    protected $validationMessages = [
        'kode_alternatif' => [
            'required' => 'Kode alternatif wajib diisi.',
            'max_length' => 'Kode alternatif tidak boleh lebih dari 16 karakter.'
        ],
        'kode_kriteria' => [
            'required' => 'Kode kriteria wajib diisi.',
            'max_length' => 'Kode kriteria tidak boleh lebih dari 16 karakter.'
        ],
        'kode_periode' => [
            'required' => 'Kode periode wajib diisi.',
            'max_length' => 'Kode periode tidak boleh lebih dari 16 karakter.'
        ],
        'nilai' => [
            'required' => 'Nilai wajib diisi.',
            'numeric' => 'Nilai harus berupa angka.'
        ]
    ];
}
