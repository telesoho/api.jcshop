<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->smallInteger('id', true)->unsigned();
			$table->string('name', 80)->comment('名称');
			$table->text('config', 65535)->nullable()->comment('配置信息');
			$table->string('file', 80)->comment('接口文件名称');
			$table->string('description', 80)->nullable()->comment('描述');
			$table->boolean('is_close')->default(0)->comment('是否关闭;0开启,1关闭');
			$table->string('logo', 80)->nullable()->comment('logo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth');
	}

}
