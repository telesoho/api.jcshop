<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comment', function(Blueprint $table)
		{
			$table->foreign('goods_id', 'iwebshop_comment_ibfk_1')->references('id')->on('iwebshop_goods')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comment', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_comment_ibfk_1');
		});
	}

}
