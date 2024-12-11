<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAbsensiToTbInputnilai extends Migration
{
    public function up()
    {
        // Menambahkan kolom 'absensi' ke dalam tabel 'tb_inputnilai'
        $this->forge->addColumn('tb_inputnilai', [
            'absensi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true, // sesuaikan dengan kebutuhan, bisa diatur null atau tidak
            ],
        ]);
    }

    public function down()
    {
        // Menghapus kolom 'absensi' jika migrasi dibatalkan
        $this->forge->dropColumn('tb_inputnilai', 'absensi');
    }
}
