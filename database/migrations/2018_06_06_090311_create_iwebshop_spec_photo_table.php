<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopSpecPhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spec_photo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('address')->nullable()->comment('图片地址');
			$table->string('name', 100)->nullable()->comment('图片名称');
			$table->dateTime('create_time')->nullable()->comment('创建时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_spec_photo');
	}

}
