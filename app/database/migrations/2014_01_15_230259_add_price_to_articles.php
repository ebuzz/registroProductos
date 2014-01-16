<?php

use Illuminate\Database\Migrations\Migration;

class AddPriceToArticles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articles', function($t){
			$t->string('precio');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function($t){
			$t->dropColumn('precio');
		});
	}

}