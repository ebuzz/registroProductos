<?php

use Illuminate\Database\Migrations\Migration;

class CreateArticle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function($table){
			$table->increments('id');
			$table->string('nombre');
			$table->string('descripcion');

			$table->string('user_id');
			//$table->foreign('user_id')->references('id')->on('users');


			$table->string('department_id');
			//$table->foreign('department_id')->references('id')->on('department');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}