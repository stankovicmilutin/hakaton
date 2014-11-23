<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacunTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('racuni',function($t){
                $t->increments('ID');
                $t->integer('studentID')->nullable()->unsigned();
                $t->string('opis');
                $t->date('rok');
                $t->integer('iznos');
                
                $t->timestamps();
                
                $t->foreign('studentID')
                    ->references('ID')->on('korisnici')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('racun');
	}

}
