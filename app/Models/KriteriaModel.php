<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'tb_kriteria';
    protected $primaryKey = 'kode_kriteria';
    protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'bobot', 'atribut'];
}
