<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRawatJalan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nocm'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
                'unsigned'       => true,
            ],
            'nama'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'tgl_kunjung'       => [
                'type'           => 'DATETIME',
            ],
            'r_masuk'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ],
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('nocm', true);
        $this->forge->createTable('rawat_jalan');
    }

    public function down()
    {
        $this->forge->dropTable('rawat_jalan');
    }
}

?>