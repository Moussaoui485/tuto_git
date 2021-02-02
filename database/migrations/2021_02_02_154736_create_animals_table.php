<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['chat','chien']);
            $table->string('nom');
            $table->enum('sexe',['femelle','male']);
            $table->date('dateNaissance');
            $table->string('race');
            $table->enum('signeIdentif',['tatouage','puce','aucun']);
            $table->string('numeroIdentif');
            $table->boolean('isAdopted');
            $table->boolean('isAssured');
            $table->boolean('resilia24mois');
            $table->boolean('activitePro');
            $table->boolean('activiteChasse');
            $table->boolean('meute');


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
        Schema::dropIfExists('animals');
    }
}
