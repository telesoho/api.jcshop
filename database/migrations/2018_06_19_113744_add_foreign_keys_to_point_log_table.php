<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPointLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('point_log', function(Blueprint $table)
		{
			$table->foreign('user_id', 'iwebshop_point_log_ibfk_1')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('point_log', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_point_log_ibfk_1');
		});
	}

}
