<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddItem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'item_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'item_title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'item_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('item_id', true);
        $this->forge->createTable('item');
    }

    public function down()
    {
        $this->forge->dropTable('item');
    }
}
