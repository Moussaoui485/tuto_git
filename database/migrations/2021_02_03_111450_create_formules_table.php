<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formules', function (Blueprint $table) {

            $table->id();
            $table->string('type');
            $table->integer('niveauCouverture');
            $table->float('prixMensuel',8,2);
            $table->integer('carenceAccident');
            $table->integer('carenceMaladie');
            $table->integer('tauxVeterinaire');
            $table->integer('tauxHospitalisation');
            $table->integer('tauxChirigicaux');
            $table->integer('tauxPharmacie');
            $table->integer('plafondAnnuel');
            $table->integer('forfaitPrevention');
            $table->integer('forfaitPreventionPlafond');
            $table->integer('fraisIncineratObseque');
            $table->boolean('assitance');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formules');
    }
}
