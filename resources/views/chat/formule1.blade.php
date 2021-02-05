@extends('layouts.app')

@section('content')
<div class="container">
  <button onclick="window.history.back();">Précédent</button>
    <div class="container-fluid">
      <div class="row">
          <h3>Offre Chat</h3>
      </div>
        <div class="row">
          <div class="col-sm">
            <h4> Chat Formule 1 </h4>
            <a href="/obtenirdevis" class="btn btn-secondary" role="button">OBTENIR UN DEVIS</a>
          </div>
          
        </div>

      </div>
</div>
@endsection
