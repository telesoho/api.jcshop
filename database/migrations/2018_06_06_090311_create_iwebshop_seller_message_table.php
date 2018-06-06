<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopSellerMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seller_message', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->comment('标题');
			$table->text('content', 65535)->nullable()->comment('内容');
			$table->dateTime('time')->comment('发送时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_seller_message');
	}

}
