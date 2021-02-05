<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use App\Models\Formule;
use App\Models\Animal;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // accèder à la page découverte animal part 1
        return view('devis.animal1');
    }

     /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function animalpartone(Request $request)
    {
         // Traitement du parcours animal part 1
         // A voir Instancier un animal et le remplir avec les données du formulaire et le sauvegarder en session



        return view('devis.animal2');
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveanimal(Request $request)
    {
         // Traitement du parcours animal part 2
         // save l'animal dans la base  (à voir) et dans la session puis on va vers la page de niveau de couverture



        return view('devis.niveaucouverture');
    }

    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function calcul(Request $request,Animal $animal)
    {  // tarfiication 
        //appel au service tarification
        // calcul qui dépond du niveau de couverture, l'animal

        
        return view('devis.maformule');
    }
     /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function savedevis(Request $request)
    {  // save devis dans la base puis aller à la page d'adequation

        
        return view('contrat.adequation');
    }

     /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function envoyerdevis(Request $request)
    {  // envoyer devis par mail 

        
        return view('devis.maformule');
    }
    
   
    
}
