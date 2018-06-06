<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopPluginTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plugin', function(Blueprint $table)
		{
			$table->increments('id')->comment('插件ID');
			$table->string('name')->comment('插件名称');
			$table->string('class_name')->unique('class_name')->comment('插件类库名称');
			$table->text('config_param', 65535)->nullable()->comment('配置参数');
			$table->text('description', 65535)->nullable()->comment('描述说明');
			$table->boolean('is_open')->default(1)->comment('安装状态 0禁用 1启用');
			$table->smallInteger('sort')->default(99)->comment('排序');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_plugin');
	}

}
