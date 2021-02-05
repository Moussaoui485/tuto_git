<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $animal = new Animal();
        $animal->type = 'chien';
        $animal->nom ='boby';
        $animal->sexe ='male';
        $animal->dateNaissance = '2019-01-04';
        $animal->race ="americain";
        $animal->signeIdentif ="puce";
        $animal->numeroIdentif="BHd215340";
        $animal->dejaAssure = false;
        $animal->activitePro = false;
        $animal->activiteChasse = false;
        $animal->save();

        $animal2 = new Animal();
        $animal2->type = 'chat';
        $animal2->nom ='kitty';
        $animal2->sexe ='male';
        $animal2->dateNaissance = '2018-06-22'; // yyyy-mm-dd
        $animal2->race ="marocain";
        $animal2->signeIdentif ="tatouage";
        $animal2->numeroIdentif="Z128598";
        $animal2->dejaAssure = true;
        $animal2->activitePro = false;
        
        $animal2->save();
    }
}
