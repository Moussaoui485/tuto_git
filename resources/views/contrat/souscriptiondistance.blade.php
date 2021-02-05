@extends('layouts.app')

@section('content')
<div class="container">
  <button onclick="window.history.back();">Précédent</button>
  <h1>Souscription à distance</h1>

    <div class="container-fluid">
        <div class="row">
         
           
            <a href="/contralia" class="btn btn-info" role="button">Les documents contractuels d'information</a>
            <a href="/documentasigner" class="btn btn-info" role="button">Les documents à signer</a>
          
        </div>

         <br/><br/><br/> <br/>

         <div class="row">
           <label > Code SMS</label>

           <input type="text" />

         </div>
        
         <div class="row">
         
          <a href="/signer" class="btn btn-info" role="button">Signer</a>
         </div>


        
    </div>
</div>
@endsection
