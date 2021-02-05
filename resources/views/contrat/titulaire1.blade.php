@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <button onclick="window.history.back();">Précédent</button>
            <div class="card">
              <h1>Titulaire part 1 :</h1> 
              <form action="/titulairepart2" method="post">
                @CSRF
                
                <button type="submit" class="btn btn-primary">Suivant</button>

                
                
                
              </form>

             
            </div>
        </div>
    </div>
</div>
@endsection
