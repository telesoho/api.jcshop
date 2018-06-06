<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopCategoryExtendTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category_extend', function(Blueprint $table)
		{
			$table->foreign('goods_id', 'iwebshop_category_extend_ibfk_1')->references('id')->on('iwebshop_goods')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('category_id', 'iwebshop_category_extend_ibfk_2')->references('id')->on('iwebshop_category')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('category_extend', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_category_extend_ibfk_1');
			$table->dropForeign('iwebshop_category_extend_ibfk_2');
		});
	}

}
