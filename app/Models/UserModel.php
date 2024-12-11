<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $returnType = 'array';
    protected $allowedFields = ['nama_user', 'username', 'password', 'level', 'status_user', 'created_at', 'updated_at'];

    // You may add custom methods for authentication or other user-related functionality
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
