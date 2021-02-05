@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <button onclick="window.history.back();">Précédent</button>
            <div class="card">
              <h1>Bienvenue :</h1> 
              <p>Vous allez recevoir deux mails</p>
              


              <a href="/" class="btn btn-secondary" role="button">REVENIR A L'ACCUEIL</a>
            </div>
        </div>
    </div>
</div>
@endsection
