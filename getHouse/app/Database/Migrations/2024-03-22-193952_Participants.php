<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Participants extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_participants' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_no' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'test_no'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'date' => [
                'type'           => 'VARCHAR',
                'constraint'     => "255"
            ],
            'name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'address' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'no_phone'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'listening' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'structure'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'reading'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'test_scores' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'total'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'toefl_prediction' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],

            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        // Membuat primary key
        $this->forge->addKey('id_participants', TRUE);

        // Membuat tabel news
        $this->forge->createTable('participants', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('participants');
    }
}
