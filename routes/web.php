<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ContratController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route page accueil
Route::get('/', function () {
    return view('accueil');
});

// Route offre chien et formules
Route::get('/offrechien', function () {
    return view('chien.index');
});
Route::get('/offrechien/formule1', function () {
    return view('chien.formule1');
});
Route::get('/offrechien/formule2', function () {
    return view('chien.formule2');
});
Route::get('/offrechien/formule3', function () {
    return view('chien.formule3');
});

// Route offre chat et formules 
Route::get('/offrechat', function () {
    return view('chat.index');
});

Route::get('/offrechat/formule1', function () {
    return view('chat.formule1');
});
Route::get('/offrechat/formule2', function () {
    return view('chat.formule2');
});
Route::get('/offrechat/formule3', function () {
    return view('chat.formule3');
});

//Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/test', [AnimalController::class, 'index']);


// Routes devis
Route::get('/obtenirdevis', [DevisController::class, 'index']);
Route::post('/animalpart1', [DevisController::class, 'animalpartone']);
Route::post('/addanimal', [DevisController::class, 'saveanimal']);
Route::post('/calculformule', [DevisController::class, 'calcul']);
Route::get('/adequation', [DevisController::class, 'savedevis']);
Route::get('/devisparmail', [DevisController::class, 'envoyerdevis']);

// Routes pour contrat 
Route::get('/titulairepartone', [ContratController::class, 'index']);
Route::post('/titulairepart2', [ContratController::class, 'titulairepart2']);
Route::post('/savetitulaire', [ContratController::class, 'savetitulaire']);
Route::post('/savejustificatifs', [ContratController::class, 'savejustificatifs']);
Route::post('/paiement', [ContratController::class, 'saverib']);
Route::get('/contralia', [ContratController::class, 'contralia']);
Route::get('/documentasigner', [ContratController::class, 'documentasigner']);
Route::get('/signer', [ContratController::class, 'signer']);
Route::Post('/signercontrat', [ContratController::class, 'signercontrat']);


