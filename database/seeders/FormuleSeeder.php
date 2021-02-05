<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formule;

class FormuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $formule = new Formule();
        $formule->type = 'confort';
        $formule->niveauCouverture = 2;
        $formule->prixMensuel = 13.75;
        $formule->carenceAccident = 0;
        $formule->carenceMaladie = 30;
        $formule->tauxVeterinaire = 90;
        $formule->tauxHospitalisation= 90;
        $formule->tauxChirigicaux = 90;
        $formule->tauxPharmacie = 90;
        $formule->plafondAnnuel = 3000;
        $formule->forfaitPrevention = 90;
        $formule->forfaitPreventionPlafond = 300;
        $formule->fraisIncineratObseque = 300;
        $formule->assitance = true;
      
        $formule->save();

    }
}
