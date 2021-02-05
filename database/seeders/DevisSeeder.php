<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Devis;


class DevisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $devis = new Devis();
        $devis->referenceDevis = '20521';
        $devis->dateEffet ='2021-03-01';
        $devis->dateDevis ='2021-02-03';
        $devis->email = 'moussaoui.elmehd7@gmail.com';
        $devis->save();


    }
}
