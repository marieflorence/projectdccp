<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCCLIENTSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('C_CLIENTS', function(Blueprint $table)
		{
			$table->integer('CLIENTS_ID', true);
			$table->string('NOM', 100)->nullable();
			$table->string('PRENOM', 100)->nullable();
			$table->string('NUMERO_CLIENT', 100)->nullable();
			$table->string('NUMERO_COMPTE', 100)->nullable();
			$table->string('ADRESSE_CLIENT', 100)->nullable();
			$table->string('TELEPHONE', 100)->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('C_CLIENTS');
	}

}
