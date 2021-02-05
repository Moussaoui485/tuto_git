@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <button onclick="window.history.back();">Précédent</button>
            <div class="card">
              <h1>Quelle type de formule souhaitez vous pour votre animal :</h1> 
              
              <form action="/calculformule" method="post">
                @CSRF
                <div class="form-group">
                  <label>niveau couverture</label>
                  <select name="niveauCouverture" class="form-control" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                   
                </select>
                </div>
               
                
                <button type="submit" class="btn btn-primary">Calculer Ma formule</button>
              </form>


             
            </div>
        </div>
    </div>
</div>
@endsection
