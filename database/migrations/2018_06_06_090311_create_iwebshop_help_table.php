<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopHelpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('help', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cat_id')->unsigned()->nullable()->index('cat_id')->comment('帮助分类，如果为0则代表着是下面的帮助单页');
			$table->smallInteger('sort')->default(99)->index('sort')->comment('顺序');
			$table->string('name', 50)->comment('标题');
			$table->text('content', 65535)->comment('内容');
			$table->integer('dateline')->comment('发布时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_help');
	}

}
