<?php

namespace App\Models;

use CodeIgniter\Model;

class PeriodeModel extends Model
{
    protected $table = 'tb_periode';
    protected $primaryKey = 'kode_periode';
    protected $returnType = 'array';
    protected $allowedFields = ['kode_periode', 'tanggal', 'created_at', 'updated_at'];

    // Aktifkan fitur auto-timestamps
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Atur Pagination
    protected $perPage = 10;

    // Hapus validasi di model
    // Tidak ada lagi validasi di model
}
