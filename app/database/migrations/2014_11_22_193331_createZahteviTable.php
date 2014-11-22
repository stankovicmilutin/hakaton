<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZahteviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zahtevi', function($t) {
                $t->increments('ID');
                $t->integer('studentID')->nullable()->unsigned();
                $t->string('dokument', 80);
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
		Schema::drop("zahtevi");
	}

}
