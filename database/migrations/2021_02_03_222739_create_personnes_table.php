<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->enum('genre',['madame','monsieur']);
            $table->date('dateNaissance');
            $table->integer('telephone');
            $table->integer('codePostal');
            $table->text('adresse');
            $table->string('codeApporteur');
            $table->boolean('exposeePolitiq');
            $table->string('numeroIdentif');
            $table->date('dateDelivrance');
            $table->string('lieuDelivrance');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnes');
    }
}
