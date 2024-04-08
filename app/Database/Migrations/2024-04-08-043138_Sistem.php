<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sistem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_sistem' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'sifat' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tgl_launch' => [
                'type' => 'DATE',
            ],
            'url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'detail' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('sistem');
    }

    public function down()
    {
        $this->forge->dropTable('sistem');
    }
}

