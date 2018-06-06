<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopPromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('start_time')->comment('开始时间');
			$table->dateTime('end_time')->comment('结束时间');
			$table->smallInteger('sort')->comment('顺序');
			$table->text('condition', 65535)->comment('活动生效条件 当type=0<促销规则消费额度>,当type=1<限时抢购商品ID>,type=2<特价商品分类ID>,type=3<特价商品ID>,type=4<特价商品品牌ID>');
			$table->boolean('type')->default(0)->comment('活动类型 0:购物车促销规则 1:商品限时抢购 2:商品分类特价 3:商品单品特价 4:商品品牌特价');
			$table->string('award_value')->nullable()->comment('奖励值 type=0<奖励值>,type=1<抢购价格>,type=2,3,4<特价折扣>');
			$table->string('name', 20)->comment('活动名称');
			$table->text('intro', 65535)->nullable()->comment('活动介绍');
			$table->boolean('award_type')->default(0)->comment('奖励方式:0商品限时抢购 1减金额 2奖励折扣 3赠送积分 4赠送代金券 5赠送赠品 6免运费 7,商品特价');
			$table->boolean('is_close')->default(0)->comment('是否关闭 0:否 1:是');
			$table->text('user_group', 65535)->nullable()->comment('允许参与活动的用户组,all表示所有用户组');
			$table->integer('seller_id')->unsigned()->default(0)->comment('商家ID');
			$table->index(['type','seller_id'], 'type');
			$table->index(['start_time','end_time'], 'start_time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_promotion');
	}

}
