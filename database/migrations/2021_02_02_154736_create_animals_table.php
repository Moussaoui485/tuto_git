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
            $table->enum('signeIdentif',['tatouage','puce']);
            $table->string('numeroIdentif');
            $table->boolean('estAdopte')->nullable();
            $table->boolean('dejaAssure');
            $table->boolean('activitePro');
            $table->boolean('activiteChasse')->nullable();
           
           
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
