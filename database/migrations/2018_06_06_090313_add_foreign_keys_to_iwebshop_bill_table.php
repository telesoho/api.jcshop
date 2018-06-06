<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopBillTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bill', function(Blueprint $table)
		{
			$table->foreign('seller_id', 'iwebshop_bill_ibfk_1')->references('id')->on('iwebshop_seller')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bill', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_bill_ibfk_1');
		});
	}

}
