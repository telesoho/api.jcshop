<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsPhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods_photo', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
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
		Schema::drop('goods_photo');
	}

}
