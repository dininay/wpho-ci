<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kegiatan extends Migration
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
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'departemen' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'divisi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'keterangan' => [
                'type' => 'TEXT',
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
        $this->forge->createTable('kegiatan');
    }

    public function down()
    {
        $this->forge->dropTable('kegiatan');
    }
}
