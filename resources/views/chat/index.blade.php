@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-fluid">
      <div class="row">
          <h3>Offre Chat</h3>
      </div>
        <div class="row">
          <div class="col-sm">
            <h4> Formule 1 </h4>
            <a href="/offrechat/formule1" class="btn btn-info" role="button">DECOUVRIR</a>
          </div>
          <div class="col-sm">
            <h4> Formule 2 </h4>
            <a href="/offrechat/formule2" class="btn btn-info" role="button">DECOUVRIR</a>
          </div>
          <div class="col-sm">
            <h4> Formule 3 </h4>
            <a href="/offrechat/formule3" class="btn btn-info" role="button">DECOUVRIR</a>
          </div>
        </div>

      </div>
</div>
@endsection
