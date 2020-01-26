<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('team_id')->index('team_id');
			$table->string('photo', 12)->nullable();
			$table->string('dorsal', 2)->nullable()->comment('Dorsal del jugador');
			$table->string('name', 60)->nullable();
			$table->string('name_long', 80)->nullable();
			$table->string('order', 2)->nullable();
			$table->string('status', 2)->nullable();
			$table->string('roles', 12)->nullable();
			$table->unsignedInteger('flag_id')->nullable();
			$table->unsignedInteger('skin_color_id')->nullable();
			$table->unsignedInteger('hair_color_id')->nullable();
			$table->unsignedInteger('position_id')->nullable();
			$table->date('birthday')->nullable();
			$table->string('height', 10)->nullable();
			$table->string('weight', 10)->nullable();
			$table->string('birth_place', 250)->nullable();
			$table->text('last_team')->nullable();
			$table->tinyInteger('speed')->nullable()->comment('VELocidad');
			$table->tinyInteger('resistance')->nullable()->comment('RESistencia');
			$table->tinyInteger('aggressiveness')->nullable()->comment('AGResividad');
			$table->tinyInteger('quality')->nullable()->comment('CALidad');
			$table->tinyInteger('dribbling')->nullable()->comment('REGate');
			$table->tinyInteger('final_shot')->nullable()->comment('REMate');
			$table->tinyInteger('pass')->nullable()->comment('Pase');
			$table->tinyInteger('shot')->nullable()->comment('Tiro');
			$table->tinyInteger('tackle')->nullable()->comment('Entradas');
			$table->tinyInteger('goalkeeper')->nullable()->comment('Portero');
			$table->boolean('playable')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('players');
	}

}
