<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galeri extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gl' => [
                'type' => 'INT',
                'constraint' => 100,
                'auto_increment' => true
            ],
            'id_ket_gl' => [
                'type' => 'int',
                'constraint' =>100
            ],
            'desc' => [
                'type' => 'varchar',
                'constraint' => 100
            ],
            'file' => [
                'type' => 'TEXT'
            ]
        ]);
        $this->forge->addKey('id_gl', true);
        $this->forge->createTable('mm-galeri');
    }

    public function down()
    {
        $this->forge->dropTable('mm-galeri');
    }
}
