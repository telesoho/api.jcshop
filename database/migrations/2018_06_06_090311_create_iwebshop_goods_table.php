<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods', function(Blueprint $table)
		{
			$table->increments('id')->comment('商品ID');
			$table->string('name', 50)->index('name')->comment('商品名称');
			$table->string('name_jp', 50)->comment('商品名称日文');
			$table->string('goods_no', 20)->index('goods_no')->comment('商品的货号');
			$table->integer('model_id')->unsigned()->comment('模型ID');
			$table->decimal('sell_price', 15)->index('sell_price')->comment('销售价格');
			$table->decimal('market_price', 15)->nullable()->comment('市场价格');
			$table->decimal('jp_market_price', 15)->default(0.00)->comment('日本市场价格');
			$table->decimal('cost_price', 15)->nullable()->comment('成本价格');
			$table->decimal('jp_price', 15)->default(0.00)->comment('日本价格');
			$table->dateTime('up_time')->nullable()->comment('上架时间');
			$table->dateTime('down_time')->nullable()->comment('下架时间');
			$table->dateTime('create_time')->comment('创建时间');
			$table->integer('store_nums')->default(0)->comment('库存');
			$table->string('img')->nullable()->comment('原图');
			$table->string('ad_img')->nullable()->comment('宣传图');
			$table->boolean('is_del')->default(0)->index('is_del')->comment('商品状态 0正常 1已删除 2下架 3申请上架');
			$table->text('content', 65535)->nullable()->comment('商品描述');
			$table->text('content_jp', 65535)->nullable()->comment('商品详情日文');
			$table->string('keywords')->nullable()->comment('SEO关键词');
			$table->string('description')->nullable()->comment('SEO描述');
			$table->string('search_words', 50)->nullable()->comment('产品搜索词库,逗号分隔');
			$table->decimal('weight', 15)->default(0.00)->comment('重量');
			$table->integer('point')->default(0)->comment('积分');
			$table->string('unit', 10)->nullable()->comment('计量单位');
			$table->integer('brand_id')->default(0)->comment('品牌ID');
			$table->integer('visit')->default(0)->comment('浏览次数');
			$table->integer('favorite')->default(0)->comment('收藏次数');
			$table->smallInteger('sort')->default(99)->index('sort')->comment('排序');
			$table->text('spec_array', 65535)->nullable()->comment('序列化存储规格,key值为规则ID，value为此商品具有的规格值');
			$table->integer('exp')->default(0)->comment('经验值');
			$table->integer('comments')->default(0)->comment('评论次数');
			$table->integer('sale')->default(0)->index('sale')->comment('销量');
			$table->integer('grade')->default(0)->index('grade')->comment('评分总数');
			$table->integer('seller_id')->unsigned()->nullable()->default(0)->comment('卖家ID');
			$table->boolean('is_share')->default(0)->index('is_share')->comment('共享商品 0不共享 1共享');
			$table->boolean('is_zh_title')->nullable()->default(0)->comment('0不是中文1中文');
			$table->boolean('is_zh_content')->nullable()->default(0)->comment('0不是中文1中文');
			$table->index(['brand_id','is_del'], 'brand_id');
			$table->index(['brand_id','sell_price'], 'brand_id_2');
			$table->index(['brand_id','grade'], 'brand_id_3');
			$table->index(['brand_id','sale'], 'brand_id_4');
			$table->index(['store_nums','is_del'], 'store_nums');
			$table->index(['seller_id','is_del'], 'seller_id');
			$table->index(['seller_id','sell_price'], 'seller_id_2');
			$table->index(['seller_id','grade'], 'seller_id_3');
			$table->index(['seller_id','sale'], 'seller_id_4');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_goods');
	}

}
