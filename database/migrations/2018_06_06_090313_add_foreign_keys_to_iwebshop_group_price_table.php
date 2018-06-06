<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopGroupPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('group_price', function(Blueprint $table)
		{
			$table->foreign('goods_id', 'iwebshop_group_price_ibfk_1')->references('id')->on('iwebshop_goods')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('group_id', 'iwebshop_group_price_ibfk_2')->references('id')->on('iwebshop_user_group')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_price', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_group_price_ibfk_1');
			$table->dropForeign('iwebshop_group_price_ibfk_2');
		});
	}

}
