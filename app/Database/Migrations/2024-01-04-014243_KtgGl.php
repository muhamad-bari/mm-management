<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KtgGl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gl_ket' => [
                'type' => 'INT',
                'constraint' => 100,
                'auto_increment' => true
            ],
            'nama_gl_ket' => [
                'type'=> 'varchar',
                'constraint' =>'200',
            ]
        ]);
        $this->forge->addKey('id_gl_ket');
        $this->forge->createTable('mm_gl_ket');
    }

    public function down()
    {
        $this->forge->dropTable('your_table_name');
    }
}
