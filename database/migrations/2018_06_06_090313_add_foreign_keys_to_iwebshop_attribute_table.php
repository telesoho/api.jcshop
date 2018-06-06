<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopAttributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attribute', function(Blueprint $table)
		{
			$table->foreign('model_id', 'iwebshop_attribute_ibfk_1')->references('id')->on('iwebshop_model')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('attribute', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_attribute_ibfk_1');
		});
	}

}
