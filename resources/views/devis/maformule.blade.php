@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-fluid">
      <button onclick="window.history.back();">Précédent</button>
      <div class="row">
          <h3>Les tarifs</h3>
      </div>
        <div class="row">
          <div class="col-sm">
            <h4> Tarif 1 </h4>
            <a href="/adequation" class="btn btn-info" role="button">Je choisis cette formule</a>
          </div>
          <div class="col-sm">
            <h4> Tarif 2 </h4>
            <a href="/adequation" class="btn btn-info" role="button">Je choisis cette formule</a>
          </div>
          <div class="col-sm">
            <h4> Tarif 3 </h4>
            <a href="/adequation" class="btn btn-info" role="button">Je choisis cette formule</a>
          </div>
        </div>
        <br/><br/>
        <div class="row">
          <input type="mail">
          <a href="/devisparmail" class="btn btn-info" role="button">Recevoir mon devis par mail</a>
      </div>

      </div>
</div>
@endsection
