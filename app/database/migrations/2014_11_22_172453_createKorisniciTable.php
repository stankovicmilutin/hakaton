<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKorisniciTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('korisnici', function($t) {
                $t->increments('ID');
                $t->integer('index');
                $t->string('password', 80);
                $t->string('ime', 80);
                $t->string('prezime', 80);
                $t->integer('jmbg');
                $t->string('adresa', 80);
                $t->string('email', 80);
                $t->integer('smerID')->nullable()->unsigned();
                $t->tinyInteger('godina_studija');
                $t->tinyInteger('level'); 
                $t->rememberToken();
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
		Schema::drop("korisnici");
	}

}
