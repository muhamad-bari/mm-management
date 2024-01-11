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
            'kategori' => [
                'type' => 'varchar',
                'constraint' =>255
            ],
            'desc' => [
                'type' => 'varchar',
                'constraint' => 100
            ],
            'file' => [
                'type' => 'TEXT'
            ],
            'visibility' => [
                'type' => 'INT',
                'constraint' => 10,
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
