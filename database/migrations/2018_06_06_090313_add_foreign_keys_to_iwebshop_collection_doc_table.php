<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopCollectionDocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('collection_doc', function(Blueprint $table)
		{
			$table->foreign('order_id', 'iwebshop_collection_doc_ibfk_1')->references('id')->on('iwebshop_order')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('collection_doc', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_collection_doc_ibfk_1');
		});
	}

}
