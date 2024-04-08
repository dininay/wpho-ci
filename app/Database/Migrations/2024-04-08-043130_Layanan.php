<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Layanan extends Migration
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
            'jenis_layanan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'sekilas_info' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'detail_info' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'departemen' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'nama_pj' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('layanan');
    }

    public function down()
    {
        $this->forge->dropTable('layanan');
    }
}