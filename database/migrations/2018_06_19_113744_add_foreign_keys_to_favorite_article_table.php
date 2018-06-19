<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFavoriteArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('favorite_article', function(Blueprint $table)
		{
			$table->foreign('user_id', 'iwebshop_favorite_article_ibfk_1')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('aid', 'iwebshop_favorite_article_ibfk_2')->references('id')->on('article')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('favorite_article', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_favorite_article_ibfk_1');
			$table->dropForeign('iwebshop_favorite_article_ibfk_2');
		});
	}

}
