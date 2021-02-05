@extends('layouts.app')

@section('content')
<div class="container">
             <h1>Accueil</h1>

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h4> Assurer mon chien </h4>
            <a href="/offrechien" class="btn btn-info" role="button">DECOUVRIR</a>
          </div>
          <div class="col-sm-6">
            <h4> Assurer mon chat</h4>
            <a href="/offrechat" class="btn btn-info" role="button">DECOUVRIR</a>
          </div>
        </div>
      </div>
</div>
@endsection
