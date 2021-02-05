@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
            <div class="card">
              <h1>Page découverte animal 1 :</h1> 
              <form action="/animalpart1" method="post">
                @CSRF
                <div class="form-group">
                  <label>type</label>
                  <select name="type" class="form-control" >
                    <option value="chat">chat</option>
                    <option value="chien">chien</option>
                   
                </select>
                </div>
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Suivant</button>

                
                
                
              </form>

             
            </div>
        </div>
    </div>
</div>
@endsection
