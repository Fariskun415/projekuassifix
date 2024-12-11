<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table = 'tb_alternatif';
    protected $primaryKey = 'kode_alternatif';
    protected $allowedFields = ['kode_alternatif', 'nama_alternatif', 'no_hp'];
}
