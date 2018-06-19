<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_log', function(Blueprint $table)
		{
			$table->foreign('order_id', 'iwebshop_order_log_ibfk_1')->references('id')->on('order')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_log', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_order_log_ibfk_1');
		});
	}

}
