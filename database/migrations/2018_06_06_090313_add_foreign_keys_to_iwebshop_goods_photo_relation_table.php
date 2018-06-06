<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopGoodsPhotoRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('goods_photo_relation', function(Blueprint $table)
		{
			$table->foreign('goods_id', 'iwebshop_goods_photo_relation_ibfk_1')->references('id')->on('iwebshop_goods')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('goods_photo_relation', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_goods_photo_relation_ibfk_1');
		});
	}

}
