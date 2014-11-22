<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrijaveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prijave', function($t) {
                $t->increments('ID');
                $t->integer('studentID')->nullable()->unsigned();
                $t->integer('rokID')->nullable()->unsigned();
                $t->integer('predmetID')->nullable()->unsigned();
                
                $t->timestamps();
                 
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("prijave");
	}

}
