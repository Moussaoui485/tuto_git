<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string('referenceDevis');
            $table->bigInteger('animal_id')->unsigned();
            $table->bigInteger('formule_id')->unsigned();
            $table->date('dateEffet');
            $table->date('dateDevis');
            $table->string('email');
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->foreign('formule_id')->references('id')->on('formules');

           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis');
    }
}
