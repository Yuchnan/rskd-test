<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRawatInap extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nocm'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'tgl_masuk'       => [
                'type'           => 'DATETIME',
            ],
            'r_akhir'       => [
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
        $this->forge->createTable('rawat_inap');
    }

    public function down()
    {
        $this->forge->dropTable('rawat_inap');
    }
}

?>