<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 20)->unique('username')->comment('用户名');
			$table->char('password', 32)->comment('密码');
			$table->string('head_ico')->nullable()->comment('头像');
			$table->string('sfz_num', 18)->nullable()->comment('身份证号码');
			$table->string('sfz_name', 45)->nullable()->comment('身份证姓名');
			$table->text('sfz_image1', 65535)->nullable()->comment('身份证正面照');
			$table->text('sfz_image2', 65535)->nullable()->comment('身份证反面照');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_user');
	}

}
