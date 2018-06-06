<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopGoodsPhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods_photo', function(Blueprint $table)
		{
			$table->char('id', 32)->primary()->comment('图片的md5值');
			$table->string('img')->nullable()->comment('原始图片路径');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_goods_photo');
	}

}
