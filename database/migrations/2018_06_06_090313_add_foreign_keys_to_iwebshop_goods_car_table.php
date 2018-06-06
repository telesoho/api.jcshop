<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopGoodsCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('goods_car', function(Blueprint $table)
		{
			$table->foreign('user_id', 'iwebshop_goods_car_ibfk_1')->references('id')->on('iwebshop_user')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('goods_car', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_goods_car_ibfk_1');
		});
	}

}
