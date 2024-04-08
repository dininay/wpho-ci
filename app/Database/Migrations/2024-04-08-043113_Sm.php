<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sm extends Migration
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
            'detail' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'divisi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'departemen' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('sm');
    }

    public function down()
    {
        $this->forge->dropTable('sm');
    }
}