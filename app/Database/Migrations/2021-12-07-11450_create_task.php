<?php 

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTask extends Migration
{
    public function up() {

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' =>5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' =>255,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('task',true);
    }

    public function down() {

        $this->forge->dropTable('task');
    }

}