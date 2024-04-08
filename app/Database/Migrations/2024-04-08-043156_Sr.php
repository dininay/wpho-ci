<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sr extends Migration
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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'divisi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'suara' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('sr');
    }

    public function down()
    {
        $this->forge->dropTable('sr');
    }   
}