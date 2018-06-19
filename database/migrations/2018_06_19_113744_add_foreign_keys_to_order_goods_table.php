<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_goods', function(Blueprint $table)
		{
			$table->foreign('order_id', 'iwebshop_order_goods_ibfk_1')->references('id')->on('order')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_goods', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_order_goods_ibfk_1');
		});
	}

}
