<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Outlet extends Migration
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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'outlet' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('outlet');
    }

    public function down()
    {
        $this->forge->dropTable('outlet');
    }
}