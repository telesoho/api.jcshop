<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopGoodsPhotoRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods_photo_relation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('商品ID');
			$table->char('photo_id', 32)->default('')->index('photo_id')->comment('图片ID,图片的md5值');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_goods_photo_relation');
	}

}
