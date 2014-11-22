<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentIspitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_ispit', function($t) {
                $t->increments('ID');
                $t->integer('studentID')->nullable()->unsigned();
                $t->integer('predmetID')->nullable()->unsigned();
                $t->integer('ocena')->nullable();
                
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
		Schema::drop("student_ispit");
	}

}
