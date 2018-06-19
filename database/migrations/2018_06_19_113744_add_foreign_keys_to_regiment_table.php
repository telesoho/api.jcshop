<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRegimentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('regiment', function(Blueprint $table)
		{
			$table->foreign('goods_id', 'iwebshop_regiment_ibfk_1')->references('id')->on('goods')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('regiment', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_regiment_ibfk_1');
		});
	}

}
