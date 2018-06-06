<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->comment('支付名称');
			$table->boolean('type')->default(1)->comment('1:线上、2:线下');
			$table->string('class_name', 50)->comment('支付类名称');
			$table->text('description', 65535)->nullable()->comment('描述');
			$table->string('logo')->comment('支付方式logo图片路径');
			$table->boolean('status')->default(1)->comment('安装状态 0启用 1禁用');
			$table->smallInteger('order')->default(99)->comment('排序');
			$table->text('note', 65535)->nullable()->comment('支付说明');
			$table->decimal('poundage', 15)->default(0.00)->comment('手续费');
			$table->boolean('poundage_type')->default(1)->comment('手续费方式 1百分比 2固定值');
			$table->text('config_param', 65535)->nullable()->comment('配置参数,json数据对象');
			$table->boolean('client_type')->default(1)->comment('1:PC端 2:移动端 3:通用');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_payment');
	}

}
