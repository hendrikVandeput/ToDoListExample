<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class tasks extends Migration
{
        public function up()
        {
        		// Define the fileds of the table in the database
                $this->forge->addField([
                        'task_id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'task_progress' => [
                                'type' => 'TINYINT',
                                'null' => false,
                                'default' => '0',
                        ],
                        'task_description' => [
                                'type' => 'TEXT',
                                'null' => false,
                        ],
                ]);
                $this->forge->addKey('task_id', true);
                $this->forge->createTable('tasks');
        }

        public function down()
        {
                $this->forge->dropTable('tasks');
        }
}