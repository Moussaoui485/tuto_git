@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <button onclick="window.history.back();">Précédent</button>
            <div class="card">
              <h1>Paiement :</h1> 
              <form action="/paiement" method="post">
                @CSRF
                
                <button type="submit" class="btn btn-primary">Suivant</button>

                
                
                
              </form>

             
            </div>
        </div>
    </div>
</div>
@endsection
