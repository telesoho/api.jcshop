<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopGoodsAttributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('goods_attribute', function(Blueprint $table)
		{
			$table->foreign('goods_id', 'iwebshop_goods_attribute_ibfk_1')->references('id')->on('iwebshop_goods')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('attribute_id', 'iwebshop_goods_attribute_ibfk_2')->references('id')->on('iwebshop_attribute')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('goods_attribute', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_goods_attribute_ibfk_1');
			$table->dropForeign('iwebshop_goods_attribute_ibfk_2');
		});
	}

}
