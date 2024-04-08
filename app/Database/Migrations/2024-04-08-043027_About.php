<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class About extends Migration
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
            'divisi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'departemen' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'detail' => [
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
        $this->forge->createTable('abouts');
    }

    public function down()
    {
        $this->forge->dropTable('abouts');
    }
}
