<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prop', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name', 50)->comment('道具名称');
			$table->string('card_name', 32)->nullable()->comment('道具的卡号');
			$table->string('card_pwd', 32)->nullable()->comment('道具的密码');
			$table->dateTime('start_time')->comment('开始时间');
			$table->dateTime('end_time')->comment('结束时间');
			$table->decimal('value', 15)->default(0.00)->comment('面值');
			$table->boolean('type')->default(0)->comment('道具类型 0:代金券');
			$table->string('condition')->nullable()->comment('条件数据 type=0时,表示ticket的表id,模型id');
			$table->boolean('is_close')->default(0)->comment('是否关闭 0:正常,1:关闭,2:下订单未支付时临时锁定');
			$table->string('img')->nullable()->comment('道具图片');
			$table->boolean('is_userd')->default(0)->comment('是否被使用过 0:未使用,1:已使用');
			$table->boolean('is_send')->default(0)->comment('是否被发送过 0:否 1:是');
			$table->integer('seller_id')->unsigned()->nullable()->default(0)->comment('所属商户ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prop');
	}

}
