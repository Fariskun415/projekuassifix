<?php

namespace App\Models;

use CodeIgniter\Model;

class SubkriteriaModel extends Model
{
    protected $table = 'tb_subkriteria';
    protected $primaryKey = 'kode_subkriteria';
    protected $allowedFields = ['kode_subkriteria', 'kode_kriteria', 'nama_subkriteria', 'bobot', 'batas_min', 'batas_max'];
    protected $useTimestamps = true;
}
