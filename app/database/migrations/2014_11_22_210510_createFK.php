<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFK extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table("korisnici", function($t) {
            // Smer
            $t->foreign('smerID')
                    ->references('ID')->on('smerovi')
                    ->onDelete('set null')
                    ->onUpdate('cascade');
        });

        Schema::table("zahtevi", function($t) {
            // Student
            $t->foreign('studentID')
                    ->references('ID')->on('korisnici')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::table("uplate", function($t) {
            // Student
            $t->foreign('studentID')
                    ->references('ID')->on('korisnici')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::table("prijave", function($t) {
            // Student
            $t->foreign('studentID')
                    ->references('ID')->on('korisnici')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            // Rok
            $t->foreign('rokID')
                    ->references('ID')->on('rokovi')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            // Predmet
            $t->foreign('predmetID')
                    ->references('ID')->on('predmeti')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::table("student_ispit", function($t) {
            // Student
            $t->foreign('studentID')
                    ->references('ID')->on('korisnici')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            // Predmet
            $t->foreign('predmetID')
                    ->references('ID')->on('predmeti')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table("korisnici", function($t) {
            $t->dropForeign('korisnici_smerID_foreign');
        });

        Schema::table("zahtevi", function($t) {
            $t->dropForeign('zahtevi_studentID_foreign');
        });

        Schema::table("uplate", function($t) {
            $t->dropForeign('uplate_studentID_foreign');
        });

        Schema::table("prijave", function($t) {
            $t->dropForeign('prijave_studentID_foreign');
            $t->dropForeign('prijave_rokID_foreign');
            $t->dropForeign('prijave_predmetID_foreign');
        });

        Schema::table("student_ispit", function($t) {
            $t->dropForeign('student_ispit_studentID_foreign');
            $t->dropForeign('student_ispit_predmetID_foreign');
        });
    }

}
