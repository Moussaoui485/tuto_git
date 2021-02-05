<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // accèder à la page titulaire part 1
        return view('contrat.titulaire1');
    }

    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function titulairepart2(Request $request)
    {
        // Traitement de la page titlaire 1 et accèder à la page titulaire part 2

        return view('contrat.titulaire2');
    }

    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function savetitulaire(Request $request)
    {
        // traitement de la  page titulaire part 2 sauvegarder titulaire et accèder aprçs à la page des Pièces justificatifs
        return view('contrat.justificatifs');
    }
    

    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function savejustificatifs(Request $request)
    {
        // traitement des pieces justificatifs (les enregister) puis aller vers la page de paiement
        return view('contrat.paiement');
    }
    

    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saverib(Request $request)
    {
        // sauveguarder le rib et la modalité de paiement
        return view('contrat.souscriptiondistance');
    }


    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contralia(Request $request)
    {
        // Appel au service Contralia
        return view('contrat.souscriptiondistance');
    }
    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function documentasigner(Request $request)
    {
        // Appel au service WS_PDF
        return view('contrat.souscriptiondistance');
    }
    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signer(Request $request)
    {
        // aller à la page de signature
        return view('contrat.signer');
    }

    public function signercontrat(Request $request)
    {
        // Appel à la table de paramétrage des documents 


        return view('contrat.bienvenue');
    }
    
}
