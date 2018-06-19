<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuickNavigaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quick_naviga', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('admin_id')->unsigned()->index('admin_id')->comment('管理员id');
			$table->string('naviga_name')->comment('导航名称');
			$table->string('url')->comment('导航链接');
			$table->boolean('is_del')->default(0)->comment('是否删除1为删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quick_naviga');
	}

}
