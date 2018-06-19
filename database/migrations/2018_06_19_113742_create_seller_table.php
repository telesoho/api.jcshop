<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSellerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seller', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('seller_name', 80)->unique('seller_name')->comment('商家登录用户名');
			$table->char('password', 32)->comment('商家密码');
			$table->dateTime('create_time')->nullable()->comment('加入时间');
			$table->dateTime('login_time')->nullable()->comment('最后登录时间');
			$table->boolean('is_vip')->default(0)->index('is_vip')->comment('是否是特级商家');
			$table->boolean('is_del')->default(0)->index('is_del')->comment('0:未删除,1:已删除');
			$table->boolean('is_lock')->default(0)->index('is_lock')->comment('0:未锁定,1:已锁定');
			$table->string('true_name', 80)->index('true_name')->comment('商家真实名称');
			$table->string('email')->default('')->index('email')->comment('电子邮箱');
			$table->string('mobile', 20)->comment('手机号码');
			$table->string('phone', 20)->comment('座机号码');
			$table->string('paper_img')->nullable()->comment('执照证件照片');
			$table->decimal('cash', 15)->nullable()->comment('保证金');
			$table->integer('country')->unsigned()->nullable()->comment('国ID');
			$table->integer('province')->unsigned()->comment('省ID');
			$table->integer('city')->unsigned()->comment('市ID');
			$table->integer('area')->unsigned()->comment('区ID');
			$table->string('address')->comment('地址');
			$table->text('account', 65535)->nullable()->comment('收款账号信息');
			$table->string('server_num', 20)->nullable()->comment('客服号码');
			$table->string('home_url')->nullable()->comment('企业URL网站');
			$table->smallInteger('sort')->default(99)->index('sort')->comment('排序');
			$table->decimal('tax', 15)->default(0.00)->comment('税率');
			$table->text('seller_message_ids', 65535)->nullable()->comment('商户消息ID');
			$table->integer('grade')->default(0)->comment('评分总数');
			$table->integer('sale')->default(0)->comment('总销量');
			$table->integer('comments')->default(0)->comment('评论次数');
			$table->index(['seller_name','password'], 'seller_name_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('seller');
	}

}
