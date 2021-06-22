<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableBills extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'int',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'bank_name'   => ['type' => 'varchar', 'constraint' => 255],
            'bank_number' => ['type' => 'varchar', 'constraint'     => 50],
            'owner'       => ['type' => 'varchar', 'constraint' => 255],
            'created_at'  => ['type' => 'datetime', 'null'      => true],
            'updated_at'  => ['type' => 'datetime', 'null'      => true],
            'deleted_at'  => ['type' => 'datetime', 'null'      => true],
		]);

		$this->forge->addKey('id', true);

        $this->forge->createTable('bills', true);

	}

	public function down()
	{
		$this->forge->dropTable('bills', true);
	}
}
