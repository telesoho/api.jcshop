<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRefundmentDocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('refundment_doc', function(Blueprint $table)
		{
			$table->foreign('order_id', 'iwebshop_refundment_doc_ibfk_1')->references('id')->on('order')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('refundment_doc', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_refundment_doc_ibfk_1');
		});
	}

}
