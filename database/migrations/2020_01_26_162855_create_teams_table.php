<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teams', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 200)->nullable();
			$table->integer('league_id');
			$table->integer('tactic_id')->default(1);
			$table->boolean('playable')->default(1);
			$table->text('identifier', 65535)->nullable();
			$table->text('team_offset', 65535)->nullable();
			$table->string('name_short', 60)->nullable();
			$table->string('stadium_name', 80)->nullable();
			$table->unsignedInteger('flag_id')->nullable();
			$table->string('name_long', 60)->nullable();
			$table->string('capacity', 8)->nullable();
			$table->string('standing_capacity', 6)->nullable();
			$table->string('dimensions', 6)->nullable();
			$table->string('fundation_year', 4)->nullable();
			$table->string('members', 6)->nullable();
			$table->string('president_name', 60)->nullable();
			$table->string('budget', 20)->nullable();
			$table->string('sponsor_name', 60)->nullable();
			$table->string('supplier_name', 60)->nullable();
			$table->string('coach_name', 70)->nullable();
			$table->string('coach_name_long', 70)->nullable();
			$table->string('badge', 12)->nullable();
			$table->string('badge_mini', 12)->nullable();
			$table->string('badge_nano', 12)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teams');
	}

}
