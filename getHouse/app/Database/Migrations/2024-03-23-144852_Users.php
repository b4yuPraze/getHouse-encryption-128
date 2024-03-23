<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_users' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'fullname' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'username'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => "255"
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'no_phone' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'address'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'photos' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],

            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        // Membuat primary key
        $this->forge->addKey('id_users', TRUE);

        // Membuat tabel news
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
